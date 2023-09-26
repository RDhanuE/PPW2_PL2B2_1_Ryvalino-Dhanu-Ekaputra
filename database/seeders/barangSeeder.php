<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            "Nama_Barang" => "Sesuatu1",
            "Harga" => 10000,
            "Stok"  => 10,
            "Id_Supplier" => rand(1, 6)
        ]);

        DB::table('barang')->insert([
            "Nama_Barang" => "Sesuatu2",
            "Harga" => 20000,
            "Stok"  => 8,
            "Id_Supplier" => rand(1, 6)
        ]);

        DB::table('barang')->insert([
            "Nama_Barang" => "Sesuatu3",
            "Harga" => 30000,
            "Stok"  => 9,
            "Id_Supplier" => rand(1, 6)
        ]);
    }
} 
