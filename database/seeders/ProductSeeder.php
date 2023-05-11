<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Chicken N Dish',
                'image' => 'http://127.0.0.1:8000/assets/img/mieAyam.png',
                'price' => 120,
                'description' => 'PHP Language'
            ],
            [
                'name' => 'Orange Juice',
                'image' => 'http://127.0.0.1:8000/assets/img/mieAyam.png',
                'price' => 220,
                'description' => 'Laravel freamwork'
            ],
            [
                'name' => 'Risoles',
                'image' => 'http://127.0.0.1:8000/assets/img/mieAyam.png',
                'price' => 300,
                'description' => 'Python Language'
            ],
            [
                'name' => 'Codeigniter',
                'image' => 'http://127.0.0.1:8000/assets/img/mieAyam.png',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}