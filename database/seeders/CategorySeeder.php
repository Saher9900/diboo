<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'img' => 'https://via.placeholder.com/200?text=Electronics',
        ]);

        Category::create([
            'name' => 'Clothing',
            'img' => 'https://via.placeholder.com/200?text=Clothing',
        ]);

        Category::create([
            'name' => 'Food',
            'img' => 'https://via.placeholder.com/200?text=Food',
        ]);

        Category::create([
            'name' => 'Books',
            'img' => 'https://via.placeholder.com/200?text=Books',
        ]);
    }
}
