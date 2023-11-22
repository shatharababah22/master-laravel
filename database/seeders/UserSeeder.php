<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
        public function run()
        {
           User::create([
                'name' => 'Shatha',
                'email' => 'rababahshatha18@gmail.com',
                'Phone' => '0790751376',
                'Birthday' => '2000-12-14',
                'Firstname' => 'Shatha', // Corrected column name
                'Lastname' => 'Rababah',
                'Image' => 'shatha.jpg',
                'password' => bcrypt('Shatha@123'),
            ]);
        }
    
}
