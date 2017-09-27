<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Product;

Route::get('/', function () {
    return view('front.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/siparis', 'CartController@index');
Route::get('ekle/{id}','CartController@ekle');
Route::post('UrunGuncelle/{id}','CartController@UrunGuncelle');
Route::post('UrunSil/{id}','CartController@UrunSil');
Route::get('TumunuSil','CartController@TumunuSil');

Route::get('SiparisVar','CartController@SiparisVar');
Route::post('SiparisVer','CartController@SiparisVer');
Route::post('SiparisEkle/{id}','CartController@SiparisEkle');


Route::get('Siparisler','SiparisController@index');
Route::get('siparis_detay/{id}','SiparisController@show');
Route::get('SiparisSil/{id}','SiparisController@destroy');
Route::get('SiparisEkle/{id}','SiparisController@SiparisEkle');
Route::post('YeniUrunEkle/{id}','SiparisController@YeniUrunEkle');


Route::get('/box', 'CartController@box');
Route::get('/anasayfa', 'HomeController@index');


Route::resource('/urunler', 'ProductController');
Route::get('/ekle', 'ProductController@create');
Route::post('/urun_kayit', 'ProductController@store');
Route::get('kat/{id}', 'ProductController@listele');
Route::get('urunsil/{id}', 'ProductController@destroy');
Route::get('detay/{id}', 'ProductController@show');
Route::post('resim_ekle/{id}', 'ProductController@resimekle');

Route::get('/kategoriler', 'CategoriesController@index');
Route::get('/kategori_ekle', 'CategoriesController@create');
Route::post('/kategori_kayit', 'CategoriesController@store');