<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Pizzas Tradicionales',
                'description' => 'Las pizzas tradicionales son las que todos conocemos, las que tienen los ingredientes más comunes y que son las más populares.',
                'slug' => "/tradicionales"
            ],
            [
                'name' => 'Pizzas Especiales',
                'description' => 'Las pizzas especiales son las que tienen ingredientes más exóticos y que no son tan populares.',
                'slug' => '/especiales'
            ],
            [
                'name' => 'Adicionales',
                'description' => 'Los adicionales son los ingredientes que puedes agregar a tu pizza.',
                'slug' => '/adicionales'
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'description' => $category['description'],
                'slug' => $category['slug'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

