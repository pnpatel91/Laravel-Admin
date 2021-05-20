<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->biography = '<p>Admin&nbsp;Biography</p>';
        $user->dateOfBirth = '2003-04-30';
        $user->password = bcrypt('password'); // password
        $user->save();
        $user->assignRole('admin');

        $user = new User();
        $user->name = 'Author';
        $user->email = 'author@author.com';
        $user->biography = '<p>Author&nbsp;Biography</p>';
        $user->dateOfBirth = '2003-04-30';
        $user->password = bcrypt('password'); // password
        $user->save();
        $user->assignRole('author');

        $user = new User();
        $user->name = 'Normal User';
        $user->email = 'user@user.com';
        $user->biography = '<p>User&nbsp;Biography</p>';
        $user->dateOfBirth = '2003-04-30';
        $user->password = bcrypt('password'); // password
        $user->save();
        $user->assignRole('user');

    }
}
