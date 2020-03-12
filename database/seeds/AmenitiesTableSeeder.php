<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->insert([
            [
                'image_path'=>'web\images\aminites\air-conditioner.png',
                'description'=>'A/C',
            ],
            [
                'image_path'=>'web\images\aminites\toilet.png',
                'description'=>'toilet',
            ],
            [
                'image_path'=>'web\images\aminites\wifi.png',
                'description'=>'wifi',
            ],
            [
                'image_path'=>'web\images\aminites\television.png',
                'description'=>'lcd',
            ],
            [
                'image_path'=>'web\images\aminites\energy.png',
                'description'=>'charging point',
            ],
            [
                'image_path'=>'web\images\aminites\lightbulb.png',
                'description'=>'reading light',
            ],
            [
                'image_path'=>'web\images\aminites\cctv.png',
                'description'=>'cctv',
            ],
            [
                'image_path'=>'web\images\aminites\emergency-call.png',
                'description'=>'emergency contect',
            ],
            [
                'image_path'=>'web\images\aminites\tracking.png',
                'description'=>'Track My Bus',
            ],
            [
                'image_path'=>'web\images\aminites\water.png',
                'description'=>'Water Bottle',
            ],
            [
                'image_path'=>'web\images\aminites\blanket.png',
                'description'=>'Blankets',
            ],
            [
                'image_path'=>'web\images\aminites\nachos.png',
                'description'=>'Snacks',
            ],
            [
                'image_path'=>'web\images\aminites\fire-extinguisher.png',
                'description'=>'Fire Extinguisher',
            ],
            [
                'image_path'=>'web\images\aminites\hammer.png',
                'description'=>'Hammer (to break glass)',
            ],
            [
                'image_path'=>'web\images\aminites\emergency-sign.png',
                'description'=>'Emergency exit',
            ]
        ]);
    }
}
