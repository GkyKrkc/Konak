<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use App\Resim;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriler=Categories::all();

        return view('front.admin.kategori.index',compact('kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('front.admin.kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kayit=Categories::create($request->all());

        //Resim Yüklemek İçin aşağıdaki Kod
        if($resim = $request->file("resim"))
        {
            $time = time();
            $resim_isim = $time.".".$resim->getClientOriginalExtension();
            $thumb = "thumb_".$time.".".$resim->getClientOriginalExtension();
            Image::make($resim->getRealPath())->fit(1900,872)->fill(array(0,0,0,0.5))->save(public_path("uploads/kategori/".$resim_isim));
            Image::make($resim->getRealPath())->fit(600,400)->save(public_path("uploads/kategori/".$thumb));
            $input = [];
            $input["name"] = $resim_isim;
            $input["imageable_id"] = $kayit->id;
            $input["imageable_type"] = "App\Categories";
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
        //
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
        //
    }

}
