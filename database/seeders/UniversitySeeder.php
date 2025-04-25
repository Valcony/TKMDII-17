<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\University;
use App\Models\Liaison;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all liaisons and create a name-to-ID mapping
        $liaisons = Liaison::all(['id', 'name'])->keyBy('name'); // Map name to ID dynamically

        University::insert([
            // **Inti**
            ['name' => 'Institut Teknologi Bandung', 'liaison_id' => $liaisons['Vijaysuli Upekkhasanti Wiyono']->id, 'type' => 0],
            ['name' => 'Institut Teknologi Nasional', 'liaison_id' => $liaisons['Vijaysuli Upekkhasanti Wiyono']->id, 'type' => 0],
            ['name' => 'Institut Seni Indonesia Yogyakarta', 'liaison_id' => $liaisons['Sonia Bernita Susetyo']->id, 'type' => 0],
            ['name' => 'Universitas Pradita', 'liaison_id' => $liaisons['Sonia Bernita Susetyo']->id, 'type' => 0],
            ['name' => 'Universitas Tarumanagara', 'liaison_id' => $liaisons['Sonia Bernita Susetyo']->id, 'type' => 0],
            ['name' => 'Institut Sebelas Maret', 'liaison_id' => $liaisons['Velicia Fang Nyoto']->id, 'type' => 0],
            ['name' => 'Telkom University', 'liaison_id' => $liaisons['Velicia Fang Nyoto']->id, 'type' => 0],
            ['name' => 'Universitas Trisakti', 'liaison_id' => $liaisons['Velicia Fang Nyoto']->id, 'type' => 0],
            ['name' => 'Institut Seni Indonesia Surakarta', 'liaison_id' => $liaisons['Ella Morisa']->id, 'type' => 0],
            ['name' => 'Universitas Kristen Maranatha', 'liaison_id' => $liaisons['Ella Morisa']->id, 'type' => 0],
            ['name' => 'Universitas Gunadarma', 'liaison_id' => $liaisons['Ella Morisa']->id, 'type' => 0],
            ['name' => 'Institut Kesenian Jakarta', 'liaison_id' => $liaisons['Valerian Gunawan']->id, 'type' => 0],
            ['name' => 'Universitas Bina Nusantara Jakarta', 'liaison_id' => $liaisons['Valerian Gunawan']->id, 'type' => 0],
            ['name' => 'Universitas Komputer Indonesia', 'liaison_id' => $liaisons['Valerian Gunawan']->id, 'type' => 0],
            ['name' => 'Universitas Indonesia', 'liaison_id' => $liaisons['Eunike Hanna Hortalanus']->id, 'type' => 0],
            ['name' => 'Universitas Mercu Buana', 'liaison_id' => $liaisons['Eunike Hanna Hortalanus']->id, 'type' => 0],
            ['name' => 'Institut Teknologi Sepuluh November (ITS)', 'liaison_id' => $liaisons['Sharon Tiffany']->id, 'type' => 0],
            ['name' => 'Institut Seni Indonesia Denpasar', 'liaison_id' => $liaisons['Freya So']->id, 'type' => 0],
            ['name' => 'Institut Desain dan Bisnis (IDB Bali)', 'liaison_id' => $liaisons['Dillon Ivanandrew Prasetya']->id, 'type' => 0],
            ['name' => 'Universitas Kristen Petra', 'liaison_id' => $liaisons['Sharon Tiffany']->id, 'type' => 0],

            // **Peninjau**
            ['name' => 'Universitas Sahid Surakarta', 'liaison_id' => $liaisons['Sharon Tiffany']->id, 'type' => 1],
            ['name' => 'President University', 'liaison_id' => $liaisons['Vijaysuli Upekkhasanti Wiyono']->id, 'type' => 1],
            ['name' => 'Universitas Pembangunan Nasional Jawa Timur', 'liaison_id' => $liaisons['Freya So']->id, 'type' => 1],
            ['name' => 'International Woman University', 'liaison_id' => $liaisons['Eunike Hanna Hortalanus']->id, 'type' => 1],

            // **Calon**
            ['name' => 'Institut Informatika dan Bisnis Darmajaya', 'liaison_id' => $liaisons['Dillon Ivanandrew Prasetya']->id, 'type' => 2],
        ]);
    }
}