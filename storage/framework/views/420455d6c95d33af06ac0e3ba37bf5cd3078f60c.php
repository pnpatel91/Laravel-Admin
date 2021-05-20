

<?php $__env->startSection('title', 'Hobby'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create hobby')): ?>
                <a href="<?php echo e(url('admin/hobby/create')); ?>" class="btn btn-flat btn-success btn-sm">
                    <i class="fas fa-plus-circle"></i> Create
                </a>
            <?php endif; ?>
            <hr>
        </div>
        
        <table class="table table-striped table-bordered table-hover table-condensed" id="hobby-table" width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name of hobby</th>
                <th>Age first started</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th class="noExport">Action</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
        
    </div>
</div>


<script>
        $(function () {

            var table = $('#hobby-table').DataTable({

                dom: 'Bfrtip',
                buttons: [
                        {
                            extend: 'copy',
                            exportOptions: {
                                columns: [0,1,2]
                            }  
                          
                        },
                        {
                            extend: 'csv',
                            exportOptions: {
                                columns: [0,1,2]
                            } 
                          
                        },
                        {
                            extend: 'excel',
                            exportOptions: {
                                columns: [0,1,2]
                            } 
                          
                        },
                        {
                            extend: 'pdf',
                            footer: false,
                            exportOptions: {
                                columns: [0,1,2]
                            }
                        },
                        {
                            extend: 'print',
                            footer: false,
                            exportOptions: {
                                columns: [0,1,2]
                            }
                        }  
                ],
                select: true,
                
                aaSorting     : [[0, 'asc']],
                iDisplayLength: 25,
                stateSave     : true,
                responsive    : true,
                fixedHeader   : true,
                processing    : true,
                serverSide    : true,
                pagingType    : "full_numbers",
                ajax          : {
                    url     : '<?php echo e(url('admin/hobby/ajax/data')); ?>',
                    dataType: 'json'
                },
                columns       : [
                    {data: 'id', name: 'id', visible: true},
                    {data: 'hobby_name', name: 'hobby_name'},
                    {data: 'age_first_started', name: 'age_first_started'},
                    {data: 'created_at', name: 'created_at', visible: false},
                    {data: 'updated_at', name: 'updated_at', visible: false},
                    {data: 'action', name: 'action', orderable: false, searchable: false,
                        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                            //  console.log( nTd );
                            $("a", nTd).tooltip({container: 'body'});
                        }
                    }
                ],
            });
        });
    </script>


    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/hobby/index.blade.php ENDPATH**/ ?>