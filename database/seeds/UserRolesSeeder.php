<?php

use Illuminate\Database\Seeder;
use App\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_activeuser =new App\Role;
        $role_academicuser=new App\Role;
        $role_admin=new App\Role;

        $role_activeuser->name="Active User";
        $role_activeuser->save();

        $role_admin->name="Admin";
        $role_admin->save();

        $role_academicuser->name="Academic User";
        $role_academicuser->save();

    }
}
