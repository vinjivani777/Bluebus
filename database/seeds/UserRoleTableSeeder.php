<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            [
                'name' =>  'Admin',
                'slug' =>  'admin',
            ],
            [
                'name' =>  'Vendor',
                'slug' =>  'vendor',
            ],
            [
                'name' =>  'Customer',
                'slug' =>  'customer',
            ],

        ]);
    }
}
