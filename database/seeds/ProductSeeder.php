<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $urunler= new \App\Product([
            'kat_id'=>'1',
            'name'=>'Adana Kebap',
            'fiyat'=>'25',
            'detay'=>'Asıl metrelik kebaplarda maharetlerini sergiliyor Kemal Usta. 1 metreden 4 metreye kadar kebap yapıyor. Sunumu bir görsel şölene dönüştürüyor. Alkışlar kopuyor kebap masaya gelince. “Bu iş biraz kabiliyet meselesi',
            'aciklama'=>'Asıl metrelik kebaplarda maharetlerini sergiliyor Kemal Usta. 1 metreden 4 metreye kadar kebap yapıyor. Sunumu bir görsel şölene dönüştürüyor. Alkışlar kopuyor kebap masaya gelince. “Bu iş biraz kabiliyet meselesi',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $urunler->save();

        $urunler= new \App\Product([
            'kat_id'=>'1',
            'name'=>'Kuşbaşı',
            'fiyat'=>'35',
            'detay'=>'Asıl metrelik kebaplarda maharetlerini sergiliyor Kemal Usta. 1 metreden 4 metreye kadar kebap yapıyor. Sunumu bir görsel şölene dönüştürüyor. Alkışlar kopuyor kebap masaya gelince. “Bu iş biraz kabiliyet meselesi',
            'aciklama'=>'Asıl metrelik kebaplarda maharetlerini sergiliyor Kemal Usta. 1 metreden 4 metreye kadar kebap yapıyor. Sunumu bir görsel şölene dönüştürüyor. Alkışlar kopuyor kebap masaya gelince. “Bu iş biraz kabiliyet meselesi',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $urunler->save();

        $urunler= new \App\Product([
            'kat_id'=>'1',
            'name'=>'Tavuk Şiş',
            'fiyat'=>'15',
            'detay'=>'Asıl metrelik kebaplarda maharetlerini sergiliyor Kemal Usta. 1 metreden 4 metreye kadar kebap yapıyor. Sunumu bir görsel şölene dönüştürüyor. Alkışlar kopuyor kebap masaya gelince. “Bu iş biraz kabiliyet meselesi',
            'aciklama'=>'Asıl metrelik kebaplarda maharetlerini sergiliyor Kemal Usta. 1 metreden 4 metreye kadar kebap yapıyor. Sunumu bir görsel şölene dönüştürüyor. Alkışlar kopuyor kebap masaya gelince. “Bu iş biraz kabiliyet meselesi',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        $urunler->save();


    }
}
