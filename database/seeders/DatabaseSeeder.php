<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'nickname' => 'Admin',
            'email' => 'admin@example.com',
            'nim' => '00000',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Seller',
            'nickname' => 'Seller',
            'email' => 'seller@example.com',
            'nim' => '12345',
            'password' => Hash::make('password'),
            'role' => 'seller',
        ]);

        User::create([
            'name' => 'Buyer',
            'nickname' => 'Buyer',
            'email' => 'buyer@example.com',
            'nim' => '54321',
            'password' => Hash::make('password'),
            'role' => 'buyer',
        ]);

        Product::create([
            'cover' => 'NULL',
            'name' => 'EXTRA JOSS',
            'category' => 'Minuman',
            'price' => '100000',
            'stock' => '99',
            'description' => 'Description',
            'status' => 'Available',
        ]);

        Product::create([
            'cover' => 'NULL',
            'name' => 'BENGBENG',
            'category' => 'Makanan',
            'price' => '100000',
            'stock' => '99',
            'description' => 'Description',
            'status' => 'Available',
        ]);
    }
}
