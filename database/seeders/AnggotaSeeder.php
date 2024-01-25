<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggota')->insert([
            'nama' => 'Syarif',
            'email' => 'syarif@mail.com',
            'nohp' => '089878685712',
            'alamat' => 'Mlati, Sleman, DI Yogyakarta',
        ]);
    }
}
