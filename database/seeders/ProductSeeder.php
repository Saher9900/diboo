<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = Category::where('name', 'Electronics')->first();
        $clothing = Category::where('name', 'Clothing')->first();
        $food = Category::where('name', 'Food')->first();
        $books = Category::where('name', 'Books')->first();

        Product::create([
            'name' => 'Laptop Pro',
            'price' => 1299.99,
            'category_id' => $electronics->id,
            'quantity' => 50,
            'sale' => 1099.99,
            'available_sizes' => null,
            'available_colors' => ['Black', 'Silver', 'Space Gray'],
            'description' => 'High-performance laptop with latest processor and retina display.',
        ]);

        Product::create([
            'name' => 'Wireless Headphones',
            'price' => 199.99,
            'category_id' => $electronics->id,
            'quantity' => 100,
            'sale' => null,
            'available_sizes' => null,
            'available_colors' => ['Black', 'White', 'Blue'],
            'description' => 'Premium noise-cancelling wireless headphones with 30-hour battery life.',
        ]);

        Product::create([
            'name' => 'Cotton T-Shirt',
            'price' => 29.99,
            'category_id' => $clothing->id,
            'quantity' => 200,
            'sale' => 19.99,
            'available_sizes' => ['S', 'M', 'L', 'XL'],
            'available_colors' => ['White', 'Black', 'Red', 'Blue'],
            'description' => 'Comfortable 100% cotton t-shirt, perfect for everyday wear.',
        ]);

        Product::create([
            'name' => 'Organic Coffee Beans',
            'price' => 15.99,
            'category_id' => $food->id,
            'quantity' => 150,
            'sale' => null,
            'available_sizes' => ['250g', '500g', '1kg'],
            'available_colors' => null,
            'description' => 'Premium organic coffee beans sourced from sustainable farms.',
        ]);

        Product::create([
            'name' => 'Programming Guide',
            'price' => 49.99,
            'category_id' => $books->id,
            'quantity' => 75,
            'sale' => 39.99,
            'available_sizes' => null,
            'available_colors' => null,
            'description' => 'Comprehensive guide to modern programming practices and techniques.',
        ]);
    }
}
