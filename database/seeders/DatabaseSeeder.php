<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Products;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Products::create([
            'nama' => 'Pensil Mekanik',
            'deskripsi' => '-',
            'harga' => 10000
        ]);

        Products::create([
            'nama' => 'Penghapus',
            'deskripsi' => '-',
            'harga' => 11000,
        ]);

        Products::create([
            'nama' => 'Dompet',
            'deskripsi' => '-',
            'harga' => 65000,
        ]);

        // create product with faker 30 data
        Products::factory(30)->create();
    }
}
