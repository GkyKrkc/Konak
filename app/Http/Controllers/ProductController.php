<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use App\Resim;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urunler=Product::all();
        return view('front.admin.product.index',compact('urunler'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.admin.product.add');
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
        $urun=$request->all();
        $kayit=Product::create($urun);

        //Resim Yüklemek İçin aşağıdaki Kod
        if($resim = $request->file("resim"))
        {
            $time = time();
            $resim_isim = $time.".".$resim->getClientOriginalExtension();
            $thumb = "thumb_".$time.".".$resim->getClientOriginalExtension();
            Image::make($resim->getRealPath())->fit(1900,872)->fill(array(0,0,0,0.5))->save(public_path("uploads/urunler/".$resim_isim));
            Image::make($resim->getRealPath())->fit(600,400)->save(public_path("uploads/urunler/".$thumb));
            $input = [];
            $input["name"] = $resim_isim;
            $input["imageable_id"] = $kayit->id;
            $input["imageable_type"] = "App\Product";
            Resim::create($input);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $urun=Product::where('id',$id)->get();
        $kategori=Product::find($id)->categories;

        $resimler=Resim::where('imageable_id',$id)->where('imageable_type','App\Product')->get();

        return view('front.detay',compact('urun','resimler','kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Product::find($id);
        return view('front.admin.product.edit',compact('item'));

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
        $urun=Product::find($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sil=Product::destroy($id);
        return back();
    }

    public function listele($rid){

        $urunler= Product::where('kat_id',$rid)->get();
        $kategori=Categories::find($rid);
        return view('front.listele', compact('urunler','kategori'));

    }

    public function resimekle(Request $request, $id)
    {

        //Resim Yüklemek İçin aşağıdaki Kod
        if($resim = $request->file("resim"))
        {
            $time = time();
            $resim_isim = $time.".".$resim->getClientOriginalExtension();
            $thumb = "thumb_".$time.".".$resim->getClientOriginalExtension();
            Image::make($resim->getRealPath())->fit(1900,872)->fill(array(0,0,0,0.5))->save(public_path("uploads/urunler/".$resim_isim));
            Image::make($resim->getRealPath())->fit(600,400)->save(public_path("uploads/urunler/".$thumb));
            $input = [];
            $input["name"] = $resim_isim;
            $input["imageable_id"] = $id;
            $input["imageable_type"] = "App\Product";
            Resim::create($input);
        }

    }


}
