<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample testimonial data
        $testimonials = [
            [
                'Name' => 'Shatha Rababah',
                'Major' => 'Telecommunication Engineer',
                'Image'=>'shatha.jpg',
                'comments' => "I'm so glad I stumbled upon this website. It's not just a marketplace; it's a movement towards a greener future. Every purchase I make from here is a step towards sustainability. The products are top-notch, and the ethos behind them is even more inspiring."
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
        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
