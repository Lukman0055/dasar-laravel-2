<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobbi extends Model
{
    protected $fillable = ['hobbi'];
    public $timetamp= true;
    public function Mahasiswa()
    {
        return $this->belongsToMany('App\mahasiswa','mahasiswa_hobbis','id_hobbi','id_mahasiswa');
    }
}
