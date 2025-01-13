<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kepalaDinas = User::create([
            'name' => 'Kepala Dinas',
            'email' => 'kepala.dinas@example.com',
            'password' => Hash::make('kepaladinas'),
            'role' => 'Kepala Dinas', 
        ]);

        // Kepala Bidang 1
        $kepalaBidang1 = User::create([
            'name' => 'Kepala Bidang 1',
            'email' => 'kepala.bidang1@example.com',
            'password' => Hash::make('kepalabidang1'),
            'role' => 'Kepala Bidang',
            'atasan_id' => $kepalaDinas->id, 
        ]);

        // Kepala Bidang 2
        $kepalaBidang2 = User::create([
            'name' => 'Kepala Bidang 2',
            'email' => 'kepala.bidang2@example.com',
            'password' => Hash::make('kepalabidang2'),
            'role' => 'Kepala Bidang',
            'atasan_id' => $kepalaDinas->id, 
        ]);

        // Staff di bawah Kepala Bidang 1
        User::create([
            'name' => 'Staff 1',
            'email' => 'staff1@example.com',
            'password' => Hash::make('staff1'),
            'role' => 'Staff',
            'atasan_id' => $kepalaBidang1->id, 
        ]);

        // Staff di bawah Kepala Bidang 2
        User::create([
            'name' => 'Staff 2',
            'email' => 'staff2@example.com',
            'password' => Hash::make('staff2'),
            'role' => 'Staff',
            'atasan_id' => $kepalaBidang2->id,
        ]);
    }
}
