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
                'Price' => 3, 
                'description' => 'Really unique, one-of-a-kind, conversation starter! These earrings are modern, light weight, and durable. Made from Eco-resin and marine plastic debris. These earrings are eco-friendly and sustainable. They are helping to fight plastic pollution!',
                'image1' => 'PP1.PNG',
                'image2' => 'PP2.PNG',
                'Stockquantity' => 4, 
                'CategoryID' => 1, 
                'ItemId' => 1, 
                'MADEFROM' => 'Made from Eco-resin and marine plastic debris',
            ],
            [
                'Name' => 'Handwoven Recycled Plastic Tote',
                'Price' => 25, 
                'description' => 'The "Handwoven Recycled Plastic Tote" is a sustainable and eco-friendly accessory designed for both style and environmental consciousness. Crafted with meticulous care, this tote exemplifies the artistry of handweaving while simultaneously addressing the global concern of plastic waste.',
                'image1' => 'PP3.PNG',
                'image2' => 'PP4.PNG',

                'Stockquantity' => 15, 
                'CategoryID' => 1, 
                'ItemId' => 2, 
                'MADEFROM' => 'Made from Plastic',
            ],
            [
                'Name' => 'Recycled Plastic Plant Pots',
                'Price' => 2.75, 
                'description' => 'This planet protecting pot may just be the cosy little home your plant is looking for. They’re 10cm wide and 10cm tall, so are ideal for house plants, succulents and herbs.',
                'image1' => 'PP5.PNG',
                'image2' => 'PP6.PNG',
                'Stockquantity' => 7, 
                'CategoryID' => 1, 
                'ItemId' => 3, 
                'MADEFROM' => 'Made from Recycled Plastic, HDPE',
            ],


            [
                'Name' => 'Hair Combs',
                'Price' => 4, 
                'description' => 'Each of the combs is made using our manual injection machine with help of our own force, one by one with manually selected plastic waste.',
                'image1' => 'PP7.PNG',
                'image2' => 'PP8.PNG',
                'Stockquantity' => 25, 
                'CategoryID' => 1, 
                'ItemId' => 4, 
                'MADEFROM' => 'Made from Recycled Plastic, Waste',
            ],

            [
                'Name' => 'Recycled Plastic Coasters',
                'Price' => 13, 
                'description' => 'Grab a set of 4 coasters to treat yourself and your space or as a gift for a friend! These coasters are created from #5 plastics saved from the landfill and will protect your furniture from whatever reusable beverage holder you choose to drink from.',
                'image1' => 'PP9.PNG',
                'image2' => 'PP10.PNG',

                'Stockquantity' => 20, 
                'CategoryID' => 1, 
                'ItemId' => 5, 
                'MADEFROM' => 'Made from Plastic',
            ],

            [
                'Name' => 'Handcrafted Recycled Plastic MacBook Laptop Stand',
                'Price' => 2.35, 
                'description' => 'The 11mm tall extending edge securely holds your laptop while providing an uninterrupted typing and editing experience. Dimensions: 260mm deep, 96mm tall, 260mm wide. Join us in our mission to preserve the environment and reduce plastic waste from the Mediterranean.',
                'image1' => 'PP11.PNG',
                'image2' => 'PP12.PNG',
                'Stockquantity' => 6,
                'CategoryID' => 1, 
                'ItemId' => 6, 
                'MADEFROM' => 'Made from Recycled Plastic, HDPE',
            ],



            
            [
                'Name' => 'Candle Holder',
                'Price' => 6.50, 
                'description' => 'Works perfect as cute, minimal candleholder for your home or as a housewarming gift. A win-win present for any eco-conscious friend or relative! Especially is you pair it with some vegan soy wax candles.',
                'image1' => 'PP13.PNG',
                'image2' => 'PP14.PNG',
                'Stockquantity' => 17, 
                'CategoryID' => 1, 
                'ItemId' => 7, 
                'MADEFROM' => 'Made from  recycled bottles, recycled bottle caps, recycled material, plastic',
            ],


            [
                'Name' => 'Recycled Plastic Coasters',
                'Price' => 13, 
                'description' => 'Recycled tires provide a versatile and eco-friendly solution for a variety of creative and sustainable projects. Embracing the principles of repurposing and environmental responsibility, recycled tires can be transformed into innovative designs, enhancing both functionality and aesthetics.',
                'image1' => 'PP15.jpg',
                'image2' => 'PP16.jpg',
                'Stockquantity' => 2, 
                'CategoryID' => 1, 
                'ItemId' => 8, 
                'MADEFROM' => 'Made from Recycled tires',
            ],

            [
                'Name' => 'Recycled plastic bracelets',
                'Price' => 1, 
                'description' => 'Sold in a pack of 10 bracelets. Mix of colors.',
                'image1' => 'PP17.PNG',
                'image2' => 'PP18.PNG',
                'Stockquantity' => 10,
                'CategoryID' => 1, 
                'ItemId' => 9, 
                'MADEFROM' => 'Made from Recycled plastic',
            ],
            
            [
                'Name' => 'Handmade iPhone covers',
                'Price' => 8, 
                'description' => 'Handmade iPhone covers offer a perfect blend of style, craftsmanship, and individuality for tech enthusiasts looking to personalize and protect their devices. Created with meticulous attention to detail, these covers showcase the skill and creativity of artisans while providing a unique touch to your iPhone.',
                'image1' => 'PP19.PNG',
                'image2' => 'PP20.PNG',
                'Stockquantity' => 17,
                'CategoryID' => 1, 
                'ItemId' => 10, 
                'MADEFROM' => 'Made from Recycled Plastic',
            ],
            [
                'Name' => 'Plastic Keyring',
                'Price' => 4.55, 
                'description' => 'Please be aware that every single product is hand made and uniquely coloured meaning that no two will ever be the same. The beautiful marble effect that is created by the process is totally unique and part of the beauty of recycling.',
                'image1' => 'PP21.PNG',
                'image2' => 'PP22.PNG',
                'Stockquantity' => 14,
                'CategoryID' => 1, 
                'ItemId' => 11, 
                'MADEFROM' => 'Made from Recycled Plastic',
            ],
            [
                'Name' => '10 Recycled Plastic Beads',
                'Price' => 1.25, 
                'description' => 'The older sibling to our popular small beads, these guys are 14mm in diameter and come in handy packs of 10. They’re of course made from 100% recycled plastic, so are perfect for any crafty folk who are also wanting to become a pollution solution.',
                'image1' => 'PP23.PNG',
                'image2' => 'PP24.PNG',
                'Stockquantity' => 30,
                'CategoryID' => 1, 
                'ItemId' => 12, 
                'MADEFROM' => 'Made from Recycled Plastic',
            ],


        ];


        // Loop through the testimonials and create records in the database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
