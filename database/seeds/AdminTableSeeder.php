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
                'password' =>  '$2y$10$aM11l.u3PG6q3UcPdbT4Iux8hamnAGFM1EP48MArCHiP.SJT.o0uG',
                'avatar' =>  'admin/images/admin.png',
                'status' =>  '1',
            ],

        ]);
    }
}
