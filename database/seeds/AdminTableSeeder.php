<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'username' =>  'admin',
                'first_name' =>  'admin',
                'last_name' =>  'admin',
                'gender' =>  'm',
                'email' =>  'admin@happyjourney.com',
                'mobile_no' =>  '7069836598',
                'password' =>  'admin',
                'avatar' =>  'admin/images/admin.png',
                'status' =>  '1',
            ],

        ]);
    }
}
