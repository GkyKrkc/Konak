<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSiparisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_siparis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('siparis_id');
            $table->integer('product_id');
            $table->string('siparis_no');
            $table->string('rowId');
            $table->string('urun');
            $table->integer('adet');
            $table->decimal('fiyat',5,2);
            $table->decimal('kdv',5,2);
            $table->decimal('toplam',5,2);
            $table->decimal('toplam_kdv',5,2);
            $table->decimal('toplam_fiyat',5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_siparis');
    }
}
