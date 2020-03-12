<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_types')->insert([
            [
                'type_name' =>  'A/C Seater',
            ],
            [
                'type_name' =>  'NON A/C Seater',
            ],
            [
                'type_name' =>  'A/C Sleeper',
            ],
            [
                'type_name' =>  'NON A/C Sleeper',
            ],
        ]);
    }
}
