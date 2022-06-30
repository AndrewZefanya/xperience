<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;
class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips= [
            [
                'title'=> 'Komodo Island',
                'slug'=> 'komodo-island',
                'price'=> '8000',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],

            [
                'title'=> 'Jomblang Cave',
                'slug'=> 'jomblang-cave',
                'price'=> '4500',
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time())
            ],
            ];

            foreach ($trips as $key => $trip) {
                Trip::create($trip);
            }
    }
}
