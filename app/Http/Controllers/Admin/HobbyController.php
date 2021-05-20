<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Hobby;
use App\Image;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\HobbyStoreRequest;
use App\Traits\UploadTrait;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class HobbyController extends Controller
{
    use UploadTrait;

    function __construct()
    {
        $this->middleware('can:create hobby', ['only' => ['create', 'store']]);
        $this->middleware('can:edit hobby', ['only' => ['edit', 'update']]);
        $this->middleware('can:delete hobby', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        return view('admin.hobby.index'); 
    }

    public function create()
    {
        return view('admin.hobby.create');
    }

    public function store(HobbyStoreRequest $request)
    {
        try {
            $id = auth()->user()->id;

            $data = new Hobby();
            $data->hobby_name = $request->hobby_name;
            $data->age_first_started = $request->age_first_started;
            $data->created_by = $id;
            $data->updated_by = $id;
            $data->save();

            Session::flash('success', 'Hobby Creation Successful');

            return redirect()->route('hobby.index');

        } catch (\Exception $exception) {

            DB::rollBack();

            Session::flash('failed', $exception->getMessage() . ' ' . $exception->getLine());

            return redirect()
                ->back()
                ->withInput($request->all());
        }
    }

    public function show(Hobby $hobby)
    {
        // $hobby = Hobby::find($id);
        return view('admin.hobby.show', compact('hobby'));
    }

    public function edit($id)
    {
        $hobby = Hobby::find($id);
        return view('admin.hobby.edit', compact('hobby'));
    }

    public function update(HobbyStoreRequest $request, $id)
    {
        $dataDb = Hobby::find($id);

        if (empty($dataDb)) {
            Session::flash('failed', 'Hobby Update Denied');
            return redirect()->back();
        }

        $user = auth()->user()->id;
        $dataDb->hobby_name = $request->hobby_name;
        $dataDb->age_first_started = $request->age_first_started;
        $dataDb->updated_by = $user;

        $dataDb->save();

        Session::flash('success', 'A hobby updated successfully.');

        return redirect('admin/hobby');
    }

    public function destroy($id)
    {
        $hobby = Hobby::find($id);
        $hobby->delete();
        return redirect('admin/hobby')->with('success', 'A post deleted successfully.');
    }

    /**
     * Datatables Ajax Data
     *
     * @return mixed
     * @throws \Exception
     */
    public function anyData(Request $request)
    {

        if ($request->ajax() == true) {
            $user = auth()->user()->id;
            $dataDb = Hobby::select([
                'id',
                'hobby_name',
                'age_first_started',
                'created_at',
                'updated_at',
            ])->where('created_by','=',$user);

            return Datatables::eloquent($dataDb)
                ->addColumn('action', function ($dataDb) {
                    
                    $html='';
                    
                    $html.= '<a href="' . url('admin/hobby/'.$dataDb->id.'/edit') . '" id="tooltip" title="Edit"><span class="label label-warning label-sm"><i class="fa fa-edit"></i></span></a>';

                    $html.= ' <a href="' . url('admin/hobby/destroy'.$dataDb->id.'/destroy') . '" id="tooltip"><span class="label label-danger label-sm"><i class="fa fa-trash-o"></i></span></a>';
                    

                    return $html; 
                })
                ->make(true);
        }
    }
}
