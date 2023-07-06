<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $restaurants = Restaurant::where('id', '<', 14)->get();
        foreach ($restaurants as $restaurant) {
            $restaurant->types()->attach([1,2]);
        };
         
        $restaurants = Restaurant::whereBetween('id', [10, 14])->get();
        foreach ($restaurants as $restaurant) {
            $restaurant->types()->attach([3,4]);
        };
        $restaurants = Restaurant::whereBetween('id', [15, 17])->get();
        foreach ($restaurants as $restaurant) {
            $restaurant->types()->attach([5]);
        }
    }
}
