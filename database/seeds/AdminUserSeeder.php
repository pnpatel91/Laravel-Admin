<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $allPermission = Permission::pluck('id', 'id')->all();
        $adminRole->syncPermissions($allPermission);
        $user->assignRole($adminRole);

        $userRole = Role::firstOrCreate(['name' => 'user']);
        $users = User::where('email', '!=', 'admin@admin')->get();
        foreach($users as $user) {
            $user->assignRole($userRole);
        }

    }
}
