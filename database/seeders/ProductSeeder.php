<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Анальная пробка', 'price' => 999, 'image' => 'anal.png'],
            ['name' => 'Вибратор', 'price' => 1999, 'image' => 'vib.png'],
            ['name' => 'Смазка 18 кг', 'price' => 499, 'image' => 'favikini.png'],
            ['name' => 'Фаллоимитатор', 'price' => 1499, 'image' => 'fala.png'],
        ]);
    }
}
