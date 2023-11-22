<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
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
