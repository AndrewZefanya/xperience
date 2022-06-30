<?php

namespace Database\Seeders;

use App\Models\TripPackage;
use Illuminate\Database\Seeder;

class TripPackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $TripPackages= [
            [
                'trip_id' => '1',
                'name' => '5D 4N'
            ],

            [
                'trip_id' => '1',
                'name' => '4 Diving Spots'
            ],

            [
                'trip_id' => '1',
                'name' => '7 Snorkling Sites'
            ],

            [
                'trip_id' => '1',
                'name' => 'Komodo National Park'
            ],

            [
                'trip_id' => '1',
                'name' => 'Pink Beach'
            ],

            [
                'trip_id' => '1',
                'name' => '3x Meal + 2x BBQ'
            ],

            [
                'trip_id' => '1',
                'name' => 'Fireworks & Campfire'
            ],


            [
                'trip_id' => '2',
                'name' => '3D 2N'
            ],

            [
                'trip_id' => '2',
                'name' => 'Rafting + Cave Exploration'
            ],

            [
                'trip_id' => '2',
                'name' => 'Include Camping tools'
            ]

        
        ];
        
        TripPackage::insert($TripPackages);
    }
}
