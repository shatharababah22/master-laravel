<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        // Define your category data
        public function run()
    {
        // Define your category data
        $categories = [
            [
                'Name' => 'Plastic',
                'decription' => 'Plastic decription',
                'Image' => 'image (30).png',
            ],
            [
                'Name' => 'Glass',
                'decription' => 'Glass decription',
                'Image' => 'image (31).png',
            ],
            [
                'Name' => 'Organic',
                'decription' => 'Organic decription',
                'Image' => 'image (43).png',
            ],
            [
                'Name' => 'Clothes',
                'decription' => 'Clothes decription',
                'Image' => 'image (33).png',
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
