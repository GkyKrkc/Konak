<?php

namespace App\Http\Controllers;

use App\Product;
use App\product_siparis;
use App\Siparis;
use Illuminate\Http\Request;

class SiparisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siparisler=Siparis::all();
        return view('front.admin.siparis.index',compact('siparisler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $siparisler=Siparis::find($id)->urunler;
        //return $siparisler=Siparis::find($id)->detay;
         $siparisler=Siparis::find($id);
         $kdv=product_siparis::where('siparis_id',$id)->sum('kdv');
         $toplam=product_siparis::where('siparis_id',$id)->sum('toplam');
         $toplam_fiyat=$kdv+$toplam;
         $urunler=Product::all();

        //return $siparisler=product_siparis::find($id)->siparis;

        //$kisi=Siparis::where('siparis_id',$id)->get();
        return view('front.admin.siparis.detay',compact('siparisler','kdv','toplam_fiyat','urunler'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siparis=product_siparis::destroy($id);
        return back();
    }

    public function YeniUrunEkle(Request $request, $id)
    {
        //
        return $request->all();
    }
}
