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
            // Glass
            [
                'Name' => 'SOUL bottle earrings',
                'Price' => 5.75, 
                'description' => 'Crafted with love and care, each pair of SOUL Bottle Earrings is a testament to our commitment to the environment. We believe in turning ordinary into extraordinary, and that precisely what these earrings represent.',
                'image1' => 'GG1.PNG',
                'image2' => 'GG2.PNG',
                'Stockquantity' => 10, 
                'CategoryID' => 2, 
                'ItemId' => 13, 
                'MADEFROM' => 'Made from upcycled glass bottles',
            ],
            [
                'Name' => 'Upcycled Bombay Sapphire Gin Glass,',
                'Price' => 25, 
                'description' =>'With every pair of Upcycled Bombay Sapphire Gin Glass Earrings, you contribute to a collective impact. Picture a group of 5 glasses, once enjoyed in moments of camaraderie and celebration, now transformed into a set of exquisite earrings. This group sale adds a layer of communal storytelling to your individual style, as each earring resonates with the shared memories of those who enjoyed the gin together',
                'image1' => 'GG3.PNG',
                'image2' => 'GG4.PNG',

                'Stockquantity' => 15, 
                'CategoryID' => 2, 
                'ItemId' => 14, 
                'MADEFROM' => 'Made from upcycled glass',
            ],
            [
                'Name' => 'The Fiesta Juice Glasse-set of 4',
                'Price' => 2.75, 
                'description' => 'Crafted with a modern and ergonomic design, these stemless glasses offer a comfortable and secure grip. The absence of stems not only adds a contemporary flair but also enhances stability, making these glasses perfect for both casual gatherings and formal occasions.',
                'image1' => 'GG5.PNG',
                'image2' => 'GG6.PNG',
                'Stockquantity' => 20, 
                'CategoryID' => 2, 
                'ItemId' => 15, 
                'MADEFROM' => 'from recycled glass, this stemless set of four is ready to party.',
            ],
            [
                'Name' => 'Heart of Memories Glass Window Charm',
                'Price' => 21.598, 
                'description' => 'Crafted with meticulous attention to detail, the Heart of Memories Glass Window Charm features a timeless heart-shaped design, encasing a mesmerizing glimpse into the past.',
                'image1' => 'GG8.PNG',
                'image2' => 'GG9.PNG',
                'Stockquantity' => 12, 
                'CategoryID' => 2, 
                'ItemId' => 16, 
                'MADEFROM' => 'Made from upcycled glass, Waste',
            ],


            [
                'Name' => 'Recycled Natural Handmade Stone Vase',
                'Price' => 30, 
                'description' => 'Crafted with care from recycled materials, each Natural Handmade Stone Vase tells a story of renewal and eco-conscious design. The recycled stones, once weathered and worn, are now reborn as elegant vessels that bring a touch of nature serenity into your living space. ',
                'image1' => 'GG9.PNG',
                'image2' => 'GG10.PNG',
                'Stockquantity' => 20, 
                'CategoryID' =>2, 
                'ItemId' => 17, 
                'MADEFROM' => 'Made from recycled glass, stones',
            ],
            [
                'Name' => 'Handcrafted Recycled Plastic MacBook Laptop Stand',
                'Price' => 2.35, 
                'description' => 'This handmade bottle colour glass vase will bring a touch of class to any home.
                Decorate a console table, mantelpiece or side table, or home office with the quintessence of artisan elegance.',
                'image1' => 'GG11.PNG',
                'image2' => 'GG12.PNG',
                'Stockquantity' => 3,
                'CategoryID' => 2, 
                'ItemId' => 18, 
                'MADEFROM' => 'Made from recycled Glass',
            ],

            
            [
                'Name' => '45 Blue Recycled Glass Beads',
                'Price' => 23, 
                'description' => 'Introducing our 45 Blue Recycled Glass Bracelet, a striking fusion of eco-friendly design and vibrant elegance. This bracelet is more than just an accessory; it a wearable work of art that embodies the beauty of recycled materials and sustainable fashion.',
                'image1' => 'GG13.PNG',
                'image2' => 'GG14.PNG',
                'Stockquantity' => 3,
                'CategoryID' => 2, 
                'ItemId' => 19, 
                'MADEFROM' => 'Made from recycled Glass',
            ],
            [
                'Name' => 'Recycled Blown Glass Pendant with Chain',
                'Price' => 27, 
                'description' => 'Recycled blown glass has been discarded by glass blowers- makes jewelry as a result! Very unique piece- and 1 of a kind!',
                'image1' => 'GG15.PNG',
                'image2' => 'GG16.PNG',
                'Stockquantity' => 11,
                'CategoryID' => 2, 
                'ItemId' => 20, 
                'MADEFROM' => 'Made from recycled Glass',
            ],
            [
                'Name' => 'Set of 4 Suquare Colorful Clear Glass Plate',
                'Price' => 27, 
                'description' => 'Crafted from recycled glass, each plate carries a unique story of transformation and renewal. The stunning array of colors is a testament to the beauty found in repurposed materials,
                 creating a visual tapestry that adds an eco-chic flair to your dining experience.',
                'image1' => 'GG17.PNG',
                'image2' => 'GG18.PNG',
                'Stockquantity' => 14,
                'CategoryID' => 2, 
                'ItemId' => 21, 
                'MADEFROM' => 'Made from recycled Glass',
            ],
            
            [
                'Name' => 'Fused Glass Set of 4 Clear Bowls',
                'Price' => 27, 
                'description' => 'Crafted from recycled glass, each plate carries a unique story of transformation and renewal. The stunning array of colors is a testament to the beauty found in repurposed materials,
                creating a visual tapestry that adds an eco-chic flair to your dining experience.',
                'image1' => 'GG19.PNG',
                'image2' => 'GG20.PNG',
                'Stockquantity' => 11,
                'CategoryID' => 2, 
                'ItemId' => 22, 
                'MADEFROM' => 'Made from recycled Glass',
            ],

            // Clothes







             
        ];


      
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
