<?php

use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = Permission::defaultPermissions();

        // create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAuthor = Role::create(['name' => 'author']);
        $roleUser = Role::create(['name' => 'user']);

        $roleAdmin->syncPermissions(Permission::all());
        $roleAuthor->syncPermissions(Permission::where('name', 'like', '%hobby%')->get());
        $roleUser->syncPermissions(Permission::where('name', 'like', '%hobby%')->get());

    }
}
