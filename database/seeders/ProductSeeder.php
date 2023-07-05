<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16GB, 512 GB SSD',
                'desc' => 'descdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescv',
                'brand' => 'Apple',
                'price' => 2400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Apple Macbook Air',
                'details' => 'Apple M1 Air, 16 GPU, 16GB, 512 GB SSD',
                'desc' => 'descdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescdescv',
                'brand' => 'Apple',
                'price' => 2400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
        ];
        foreach($products as $key => $value) {
            Product::create($value);
        }
    }
}
