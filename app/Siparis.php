<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    protected $table="siparis";

    protected $fillable = [
        'siparis_no','adi','telefon','adres','durum'
    ];

    public function urunler(){
        return $this->belongsToMany('App\Product','product_siparis','siparis_id','product_id');
    }



    public function detay(){
        return $this->hasMany('App\product_siparis','siparis_id','id');
    }


}
