<?php

use Illuminate\Database\Seeder;
use App\Tbl_role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tbl_role::create([
            'role_type' => 'Super Admin',
            'role_description' 	=> '',
        ]);

        Tbl_role::create([
            'role_type' => 'Admin',
            'role_description' 	=> '',
        ]);

        Tbl_role::create([
            'role_type' => 'User',
            'role_description' 	=> '',
        ]);
    }
}
