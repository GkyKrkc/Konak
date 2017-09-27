<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $appends=["kucuk_resim"];
    protected $fillable = [
        'kat_id','name','fiyat','detay','aciklama'
    ];


    public function categories(){

        return $this->hasOne('App\Categories','id');
    }

    public function getKategoriAdiAttribute(){

        return  $this->morphOne("App\Categories","kat_id");
    }

    public function resim(){
        return  $this->morphOne("App\Resim","imageable");
    }

    public function getKucukResimAttribute(){
        $resim= asset("uploads/urunler/thumb_".$this->resim()->first()->name);
        return '<img src="'.$resim.'" alt="" class="img img-responsive">';
    }

    public function siparisler(){
        return $this->belongsTo('App\product_siparis','id','id');
    }

}
