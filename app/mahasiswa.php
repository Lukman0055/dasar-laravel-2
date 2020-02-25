<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = ['nama','nim','id_dosen'];
    public $timetamp= true;

    public function Dosen()
    {
        return $this->belongsTo('App\dosen','id_dosen');
    }
    public function Wali()
    {
        return $this->hasOne('App\wali','id_mahasiswa');
    }
    public function hobbi()
    {
        return $this->belongsToMany('App\hobbi','mahasiswa_hobbis','id_mahasiswa','id_hobbi');
    }
}
