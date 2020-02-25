<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function(){
    return view('welcome');
});
use App\mahasiswa;
use App\hobbi;
use App\dosen;

Route::get('relasi-1', function(){

// memilih data mahasiswa yng memiliki nim
$mhs = mahasiswa::where('nim','=','1010101')->first();

// menampilkan data wali dari mahasiswa yang dipilih
return $mhs->wali->nama;
});

Route::get('relasi-2', function(){

$mhs = mahasiswa::where('nim','=','1010101')->first();
return $mhs->wali->nama;
});

Route::get('relasi-3', function(){
$dosen = dosen::where('nama', '=', 'abdul')->first();
foreach ($dosen->mahasiswa as $temp)
echo '<li>Nama : '.$temp->nama.
'<strong> '.$temp->nim. '</strong>
</li>';
});

Route::get('relasi-4', function(){
$dadang = mahasiswa::where('nama', '=', 'pipi')->first();
foreach($dadang->hobbi as $temp)
echo '<li>' .$temp->hobbi.'</li>';
});

Route::get('relasi-5', function(){
$gm = hobbi::where('hobbi', '=', 'game mobile')->first();
foreach($gm->mahasiswa as $temp){
echo '<li>Nama : ' .$temp->nama.
'<strong> '.$temp->nim.'</strong>
</li>';}
});

Route::get('relasi-join', function(){
//join laravel
//Sql = mahasiswaa;;with('wali')->get();
$sql = DB::table('mahasiswas')
->select('mahasiswas.nama','mahasiswas.nim',
        'walis.nama as nama_wali')
->join('walis','walis.id_mahasiswa','=','mahasiswas.id')
->get();
dd($sql);
});

Route::get('eloquent', function(){
$mahasiswa = mahasiswa::with('dosen','hobbi','wali')->get();
return view('eloquent',compact('mahasiswa'));
});

Route::get('eloquent1', function(){
$mahasiswa = mahasiswa::with('dosen','hobbi','wali')->get()->take(1);
return view('eloquent1',compact('mahasiswa'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// blade template
Route::get('beranda', function(){
    return view('beranda');
});
Route::get('tentang', function(){
    return view('tentang');
});
Route::get('kontak', function(){
    return view('kontak');
});



// crud
Route::resource('dosen','DosenController');
