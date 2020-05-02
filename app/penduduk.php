<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
      public function agama()
    {
    	return $this->hasOne('App\agama','id','id_agama');
    }
      public function alamat()
    {
    	return $this->hasOne('App\alamat','id','id_alamat');
    }
      public function pekerjaan()
    {
    	return $this->hasOne('App\pekerjaan','id','id_pekerjaan');
    }
}
