<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Productos para "Pizzas Tradicionales" (category_id = 1)
            [
                'name' => 'Pizza Margarita',
                'description' => 'Una clásica pizza con salsa de tomate y mozzarella fresca.',
                'price' => 8.99,
                'available' => true,
                'image' => 'products_assets/margarita.webp',
                'slug' => 'margarita', // Este ya tiene slug
                'category_id' => 1
            ],
            [
                'name' => 'Pizza Pepperoni',
                'description' => 'Pizza con pepperoni picante y queso mozzarella derretido.',
                'price' => 9.99,
                'available' => true,
                'image' => 'products_assets/pepperoni.webp',
                'slug' => 'pizza-pepperoni',
                'category_id' => 1
            ],
            [
                'name' => 'Pizza Hawaiana',
                'description' => 'La combinación perfecta de jamón y piña con mozzarella.',
                'price' => 10.99,
                'available' => true,
                'image' => 'products_assets/hawaiana.webp',
                'slug' => 'pizza-hawaiana',
                'category_id' => 1
            ],

            // Productos para "Pizzas Especiales" (category_id = 2)
            [
                'name' => 'Pizza Cuatro Quesos',
                'description' => 'Una mezcla gourmet de cuatro quesos diferentes.',
                'price' => 11.99,
                'available' => true,
                'image' => 'products_assets/cuatro-quesos.webp',
                'slug' => 'pizza-cuatro-quesos',
                'category_id' => 2
            ],
            [
                'name' => 'Pizza Trufa Negra',
                'description' => 'Pizza con salsa de trufa negra y mozzarella de búfala.',
                'price' => 13.99,
                'available' => true,
                'image' => 'products_assets/trufa-negra.webp',
                'slug' => 'pizza-trufa-negra',
                'category_id' => 2
            ],
            [
                'name' => 'Pizza Caprese',
                'description' => 'Tomate cherry, mozzarella fresca y albahaca sobre una base crujiente.',
                'price' => 12.99,
                'available' => true,
                'image' => 'products_assets/caprese.webp',
                'slug' => 'pizza-caprese',
                'category_id' => 2
            ],

            // Productos para "Otros Platillos" (category_id = 3)
            [
                'name' => 'Lasagna',
                'description' => 'Lasagna casera rellena de carne, queso y nuestra especial salsa boloñesa.',
                'price' => 7.99,
                'available' => true,
                'image' => 'products_assets/lasagna.webp',
                'slug' => 'lasagna',
                'category_id' => 3
            ],
            [
                'name' => 'Stromboli',
                'description' => 'Stromboli relleno con queso mozzarella, pepperoni y salsa marinara.',
                'price' => 8.99,
                'available' => true,
                'image' => 'products_assets/stromboli.webp',
                'slug' => 'stromboli',
                'category_id' => 3
            ],
            [
                'name' => 'Panseroti',
                'description' => 'Empanada italiana frita rellena de mozzarella y salsa de tomate.',
                'price' => 6.99,
                'available' => true,
                'image' => 'products_assets/panseroti.webp',
                'slug' => 'panseroti',
                'category_id' => 3
            ],
        ];


        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
