<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agama extends Model
{
    public function penduduk()
    {
    	return $this->belongTo('App\penduduk');
    }

}
