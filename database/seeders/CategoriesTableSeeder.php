<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['primi','secondi','pizze','bibite'];
      foreach($categories as $category){
        $new_category=new Category();
        $new_category->name=$category;
        $new_category->save();
      }
    }
}
