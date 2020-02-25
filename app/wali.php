<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $fillable = ['nama','id_mahasiswa'];
    public $timetamp= true;
    public function Mahasiswa()
    {
        return $this->belongsTo('App\mahasiswa','id_mahasiswa');
    }
}
