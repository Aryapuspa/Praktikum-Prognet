<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    public function penduduk()
    {
    	return $this->belongTo('App\penduduk');
    }
}
