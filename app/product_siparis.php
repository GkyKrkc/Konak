<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_siparis extends Model
{
    protected $table="product_siparis";
    protected $appends=["toplam_kdv","toplam_fiyat"];
    protected $fillable = [
        'siparis_id','product_id','siparis_no','rowId','urun','adet','fiyat','kdv','toplam','toplam_kdv','toplam_fiyat'
    ];


    public function items()
    {
        return $this->hasMany('App\product_siparis','id');
    }

    public function getToplamFiyatAttribute() {
        return $this->adet * $this->fiyat;
    }

    public function getToplamKdvAttribute() {
        return $this->adet * $this->fiyat*8/100;
    }

}
