<?php

namespace Database\Seeders;

use App\Models\FoodName;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/categories.json');
        $categories = collect(json_decode($json,true));

        $categories->each(function($category){
            FoodName::create([
                'name'=> $category['name'],
                'description'=> $category['description'],
                'slug'=> $category['slug']
            ]);
        });
    }
}
