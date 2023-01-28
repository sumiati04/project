<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['nis' => 1001, 'nama_siswa' => 'Siti Salimah', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-05-19'],
            ['nis' => 1002, 'nama_siswa' => 'Yohana Fitria', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-05-19'],
            ['nis' => 1003, 'nama_siswa' => 'Sumiati', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-05-19'],
        ];

        DB::table('siswa')->insert($sampel);
    }
}
