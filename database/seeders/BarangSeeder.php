<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Mic', 'stok' => 5],
            ['nama' => 'HT', 'stok' => 3],
            ['nama' => 'Proyektor', 'stok' => 2],
            ['nama' => 'Screen', 'stok' => 2],
            ['nama' => 'Meja Himpunan', 'stok' => 10],
            ['nama' => 'Bel Cerdas Cermat', 'stok' => 1],
            ['nama' => 'Kabel Jack', 'stok' => 6],
            ['nama' => 'Kabel HDMI', 'stok' => 4],
            ['nama' => 'Splitter', 'stok' => 2],
            ['nama' => 'Kain Hitam', 'stok' => 8],
        ];

        foreach ($data as $item) {
            Barang::create($item);
        }
    }
}
