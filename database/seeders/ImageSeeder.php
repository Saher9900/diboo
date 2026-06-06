<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laptop = Product::where('name', 'Laptop Pro')->first();
        $headphones = Product::where('name', 'Wireless Headphones')->first();
        $tshirt = Product::where('name', 'Cotton T-Shirt')->first();
        $coffee = Product::where('name', 'Organic Coffee Beans')->first();
        $book = Product::where('name', 'Programming Guide')->first();

        // Laptop images
        Image::create([
            'name' => 'laptop-front.jpg',
            'product_id' => $laptop->id,
        ]);
        Image::create([
            'name' => 'laptop-side.jpg',
            'product_id' => $laptop->id,
        ]);
        Image::create([
            'name' => 'laptop-keyboard.jpg',
            'product_id' => $laptop->id,
        ]);

        // Headphones images
        Image::create([
            'name' => 'headphones-front.jpg',
            'product_id' => $headphones->id,
        ]);
        Image::create([
            'name' => 'headphones-side.jpg',
            'product_id' => $headphones->id,
        ]);

        // T-Shirt images
        Image::create([
            'name' => 'tshirt-front.jpg',
            'product_id' => $tshirt->id,
        ]);
        Image::create([
            'name' => 'tshirt-back.jpg',
            'product_id' => $tshirt->id,
        ]);
        Image::create([
            'name' => 'tshirt-detail.jpg',
            'product_id' => $tshirt->id,
        ]);

        // Coffee images
        Image::create([
            'name' => 'coffee-package.jpg',
            'product_id' => $coffee->id,
        ]);
        Image::create([
            'name' => 'coffee-beans.jpg',
            'product_id' => $coffee->id,
        ]);

        // Book images
        Image::create([
            'name' => 'book-cover.jpg',
            'product_id' => $book->id,
        ]);
        Image::create([
            'name' => 'book-back.jpg',
            'product_id' => $book->id,
        ]);
    }
}
