<?php

namespace Database\Seeders;
use App\Models\Petugas;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'nama_petugas' => 'nasya destin',
                'username' => 'nasya',
                'password' => bcrypt('123'),
                'telp' => '90899796',
                'level' => 'admin'

            ],
            [
                'nama_petugas' => 'caca',
                'username' => 'caca',
                'password' => bcrypt('123'),
                'telp' => '077665658',
                'level' => 'petugas'
            ]
        ];
            Petugas::insert($data);
    }
}
