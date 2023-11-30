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
    // "Name",
    // "description",
    // "image1",
    // "image2",
    // "Stockquantity",
    // "Price",
    // "CategoryID",
    // "MADEFROM",
    // "ItemId",

    $products = [
        [
            'Name' => 'Recycled Ocean Plastic Minimalist Earrings',
            'Price' => 3, // Assuming this is a numeric value, remove quotes
            'description' => 'Really unique, one-of-a-kind, conversation starter! These earrings are modern, light weight, and durable. Made from Eco-resin and marine plastic debris. These earrings are eco-friendly and sustainable. They are helping to fight plastic pollution!',
            'image1' => 'PP1.PNG',
            'image2' => 'PP2.PNG',
            'Stockquantity' => 4, // Assuming this is a numeric value, remove quotes
            'CategoryID' => 1, // Assuming this is a numeric value, remove quotes
            'ItemId' => 1, // Assuming this is a numeric value, replace with the actual item ID
            'MADEFROM' => 'Made from Eco-resin and marine plastic debris',
        ],
        [
            'Name' => 'Handwoven Recycled Plastic Tote',
            'Price' => 25, // Assuming this is a numeric value, remove quotes
            'description' =>'The "Handwoven Recycled Plastic Tote" is a sustainable and eco-friendly accessory designed for both style and environmental consciousness. Crafted with meticulous care, this tote exemplifies the artistry of handweaving while simultaneously addressing the global concern of plastic waste.', 
                       'image1' => 'PP3.PNG',
            'image2' => 'PP4.PNG',
      
            'Stockquantity' => 15, // Assuming this is a numeric value, remove quotes
            'CategoryID' => 1, // Assuming this is a numeric value, remove quotes
            'ItemId' => 2, // Assuming this is a numeric value, replace with the actual item ID
            'MADEFROM' => 'Made from Plastic',
        ],
        [
            'Name' => 'Recycled Plastic Plant Pots',
            'Price' => 2.75, // Assuming this is a numeric value, remove quotes
            'description' => 'This planet protecting pot may just be the cosy little home your plant is looking for. They’re 10cm wide and 10cm tall, so are ideal for house plants, succulents and herbs.',
            'image1' => 'PP5.PNG',
            'image2' => 'PP6.PNG',
            'Stockquantity' => 7, // Assuming this is a numeric value, remove quotes
            'CategoryID' => 1, // Assuming this is a numeric value, remove quotes
            'ItemId' => 3, // Assuming this is a numeric value, replace with the actual item ID
            'MADEFROM' => 'Made from Recycled Plastic, HDPE',
        ],
    ];
    

        // Loop through the testimonials and create records in the database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
