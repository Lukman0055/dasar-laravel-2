<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $fillable = ['nama','nip'];
    public $timetamp= true;
    public function mahasiswa()
    {
        return $this->hasMany('App\mahasiswa','id_dosen');
    }
}
