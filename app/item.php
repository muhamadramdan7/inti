<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [
    	'kode_barang','nama','stock','lokasi',
    ];

    public function get_checkout()
    {
    	return $this->hasMany('App\checkout','nama','id');
    }
}
