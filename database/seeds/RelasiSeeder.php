<?php

use Illuminate\Database\Seeder;
use App\dosen;
use App\mahasiswa;
use App\wali;
use App\hobbi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobbis')->delete();
        DB::table('mahasiswa_hobbis')->delete();

// membuat data dosen
$dosen = dosen::create([
    'nama' => 'abdul',
    'nip' => '12345678'
]);
$this->command->info('Data Dosen Berhasil Dibuat');

// membuat data mahasiswa
$mamat = mahasiswa::create([
    'nama' => 'mamat',
    'nim' => '1010101',
    'id_dosen' => $dosen->id
]);
$upi = mahasiswa::create([
    'nama' => 'upi',
    'nim' => '1010102',
    'id_dosen' => $dosen->id
]);
$pipi = mahasiswa::create([
    'nama' => 'pipi',
    'nim' => '1010103',
    'id_dosen' => $dosen->id
]);
$this->command->info('Data Mahasiswa Berhasil Dibuat');

// membuat data wali
$amat = wali::create([
    'nama' => 'amat',
    'id_mahasiswa' =>$mamat->id
]);
$amit = wali::create([
    'nama' => 'amit',
    'id_mahasiswa' =>$upi->id
]);
$bait = wali::create([
    'nama' => 'amet',
    'id_mahasiswa' =>$pipi->id
]);
$this->command->info('Data wali Berhasil Dibuat');

// membuat data hobi
$mancing = hobbi::create([
    'hobbi' => 'Mancing keributan'
]);
$gaming = hobbi::create([
    'hobbi' => 'game mobile'
]);
$mengaji = hobbi::create([
    'hobbi' => 'Mengaji Al-Quran'
]);

// menampilkan Hobbi ke mahasiswa
$mamat->hobbi()->attach($mancing->id);
$mamat->hobbi()->attach($gaming->id);
$upi->hobbi()->attach($mancing->id);
$pipi->hobbi()->attach($mancing->id);
$this->command->info('Data hobi telah dibaut');
    }
}


