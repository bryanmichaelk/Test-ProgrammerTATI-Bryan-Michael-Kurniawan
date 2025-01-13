<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Wilayah;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Wilayah::truncate();
        $json = File::get(database_path('data\provinces.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            Wilayah::create([
                'kode' => $item['code'],
                'name' => $item['name'],
            ]);
        }
    }
}
