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
    // {id	image1	image2	Name	Price	image3	image4	image5	description	Stockquantity	MADEFROM	Brand	ItemId	NOTES	status	CategoryID	created_at	updated_at	
{
        $products = [
            [
                'Name' => 'Shatha Rababah',
                'Price' => 'Telecommunication Engineer',
                'description'=>'shatha.jpg',
                'image1'=>'',
                'image2'=>'',
                'image3'=>'',
                'image4'=>'',
                'image5'=>'',
                'MADEFROM'=>'',
                'Brand'=>'',
                'NOTES'=>'',
                'status'=>'1',
                'CategoryID'=>'1',
                'Stockquantity' => "I'm so glad I stumbled upon this website. It's not just a marketplace; it's a movement towards a greener future. Every purchase I make from here is a step towards sustainability. The products are top-notch, and the ethos behind them is even more inspiring."
            ],
            [
                'Name' => 'Sohieb Rababa',
                'Major' => 'Dentist',
                'Image'=>'sohieb.jpg',
                'comments' => "As an environmentally conscious consumer, I've been searching for a platform that aligns with my values. This e-commerce website offers a curated selection of recycled items that are both stylish and eco-friendly. It's my go-to destination for guilt-free shopping!"
            ],
            [
                'Name' => 'Sereen Kamhieh',
                'Major' => 'Full Stack Developer',
                'Image'=>'sereen.jpg',
                'comments' => "As an environmentally conscious consumer, I've been searching for a platform that aligns with my values. This e-commerce website offers a curated selection of recycled items that are both stylish and eco-friendly. It's my go-to destination for guilt-free shopping!"
            ]
        ];

        // Loop through the testimonials and create records in the database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
