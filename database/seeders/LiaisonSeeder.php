<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Liaison;

class LiaisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Liaison::insert([
            ['name' => 'Vijaysuli Upekkhasanti Wiyono', 'phone' => '081234567890'],
            ['name' => 'Sonia Bernita Susetyo', 'phone' => '082345678901'],
            ['name' => 'Velicia Fang Nyoto', 'phone' => '083456789012'],
            ['name' => 'Ella Morisa', 'phone' => '084567890123'],
            ['name' => 'Valerian Gunawan', 'phone' => '085678901234'],
            ['name' => 'Eunike Hanna Hortalanus', 'phone' => '086789012345'],
            ['name' => 'Sharon Tiffany', 'phone' => '087890123456'],
            ['name' => 'Freya So', 'phone' => '088901234567'],
            ['name' => 'Dillon Ivanandrew Prasetya', 'phone' => '089012345678'],
        ]);
    }
}