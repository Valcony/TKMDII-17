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
            ['name' => 'Vijjasuli Upekkhasanti Wiyono', 'phone' => '081217538668'],
            ['name' => 'Sonia Bernita Susetyo', 'phone' => '081328347973'],
            ['name' => 'Velicia Fang Nyoto', 'phone' => '082142598568'],
            ['name' => 'Ella Morisa', 'phone' => '081266378171'],
            ['name' => 'Valerian Gunawan', 'phone' => '081226229057'],
            ['name' => 'Eunike Hanna Hortalanus', 'phone' => '082154352161'],
            ['name' => 'Sharon Tiffany', 'phone' => '082183109966'],
            ['name' => 'Freya So', 'phone' => '081803754600'],
            ['name' => 'Dillon Ivanandrew Prasetya', 'phone' => '081907896066'],
        ]);
    }
}