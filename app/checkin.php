<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkin extends Model
{
     protected $fillable = [
    	'id_barang','qty'
    ];
    

    public function get_item()
    {
    	return $this->belongsTo('App\item','id_barang','id');
    }
}
