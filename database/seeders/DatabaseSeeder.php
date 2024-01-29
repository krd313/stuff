<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserTableSeeder::class,
            CategorySeeder::class 
        ]);


         User::factory()->count(10)->create();
        Article::factory()
            ->has(Tag::factory()->count(2))
            ->count(50)->create();

        // $this->call([
           
        //     UserTableSeeder::class
        //     // FoodNameSeeder::class,
        //     // FormatSeeder::class
        // ]);


    }
}
