<?php

namespace App\Http\Controllers;

use App\Mail\Reminder;
use App\Product;

use App\product_siparis;
use App\Siparis;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    //
    public function index(){
        $urunler=Product::all();

        return view('front.cart.index', compact('urunler','sepet'));
    }

    public function box(){
        $cartitems=Cart::content();
        return view('front.cart.box',compact('cartitems'));
    }

    public function ekle($id){
        $urun=Product::find($id);
        //Cart::destroy();
        Cart::add(['id' => $urun->id, 'name' => $urun->name, 'qty' => 1, 'price' => $urun->fiyat, 'options' => ['size' => 'large']]);
        return back();
    }

    public function UrunGuncelle(Request $request,$id){

        Cart::update($id,$request->qty);
        return back();
    }

    public function UrunSil(Request $request,$id){

        Cart::remove($id,$request->qty);
        return back();
    }

    public function TumunuSil(){

        Cart::destroy();
        return back();
    }

    public function SiparisVar(){

        $mail='gkykrkc@gmail.com';
        //Mail::to($mail)->send(new Reminder);


        $message='Bu Bir Deneme Mesajıdır';
        $user='Gökay KARAKOÇ';
         $data=[
            'Ürünadı'=>'Kahvaltı',
            'Fiyatı'=>'13 TL',
        ];

        Mail::send(['html' => 'mail.siparis'],['text'=>'nerde kaldı sipaariş yahu :))']);

        dd('Siparişiniz Var Mailinzi Kontrol Ediniz');

    }

    public function SiparisVer(Request $request){
        //return Cart::content()->groupBy('id');
        //return Cart::content();
        $siparis_no=str_random(20);
        $adi=$request->name;
        $telefon=$request->gsm;
        $adres=$request->adres;

        $siparis=[
            'siparis_no'=>$siparis_no,
            'adi'=>$request->name,
            'telefon'=>$request->gsm,
            'adres'=>$request->adres,
            'durum'=>'Onay Bekliyor'
        ];

        $siparis_kayit=Siparis::create($siparis);

       // Cart::content();
       $toplam_kdv= Cart::tax();
       $toplam_fiyat= Cart::total();
       // Cart::content();
        $sepet=[];
        foreach(Cart::content() as $row){
            $sepet=[
                'siparis_id'=>$siparis_kayit->id,
                'product_id'=>$row->id,
                'siparis_no'=>$siparis_no,
                'rowId'=>$row->rowId,
                'urun'=>$row->name,
                'adet'=>$row->qty,
                'fiyat'=>$row->price,
                'kdv'=>($row->tax*$row->qty),
                'toplam'=>$row->subtotal,
                'toplam_kdv'=>$toplam_kdv,
                'toplam_fiyat'=>$toplam_fiyat,

            ];
            $kayit=product_siparis::create($sepet);
        }

        Cart::destroy();
        $mesaj='Teşekkürler ! Siparişiniz Aldık ! En Kısa Sürede Ulaştırılacaktır.';
        return view('front.siparistamam',compact('mesaj'));
    }
    public function SiparisEkle(Request $request,$id){

        $ekle=$request->id;
        $ekle;


        $urunler=Product::find($ekle);
        $siparis_no=str_random(20);
        return $urunler;
        $sepet=[];
        foreach($urunler as $urun){
            $sepet=[
                'siparis_id'=>$id,
                'product_id'=>$urun->id,
                'siparis_no'=>$siparis_no,
                'rowId'=>$row->rowId,
                'urun'=>$urun->name,
                'adet'=>$urun->qty,
                'fiyat'=>$row->price,
                'kdv'=>($row->tax*$row->qty),
                'toplam'=>$row->subtotal,
                'toplam_kdv'=>$toplam_kdv,
                'toplam_fiyat'=>$toplam_fiyat,

            ];
            $kayit=product_siparis::create($sepet);
        }
    }
}
