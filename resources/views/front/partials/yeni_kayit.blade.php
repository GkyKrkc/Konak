@extends('front.partials.master')

@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
            <form>

                <div class="col-md-6 col-sm-12 panel">
                    <h3><i class="fa fa-male" aria-hidden="true"></i> Hasta Bilgileri</h3>
                    <hr class="panel-primary">
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="DOB">Sevk Başlama Tarihi</label>
                        <input type="text" class="form-control input-sm datepicker"  placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="DOD">Sevk Sonlanma Tarihi</label>
                        <input type="text" class="form-control input-sm datepicker"  placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">Mernis No:</label>
                        <input type="text" class="form-control input-sm" id="name" placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">Adı Soyadı:</label>
                        <input type="email" class="form-control input-sm" id="email" placeholder="">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label for="years">Uyruğu</label>
                        <select class="form-control input-sm" id="years">
                            <option>T.C</option>
                            <option>SRY</option>
                            <option>IRAK</option>
                            <option>DİĞER</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label for="years">Kategori</label>
                        <select class="form-control input-sm" id="years">
                            <option value="1">Yenidoğan</option>
                            <option value="2">Pediatrik</option>
                            <option value="3">Erişkin</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label for="years">Basamak</label>
                        <select class="form-control input-sm" id="years">
                            <option value="1">1.Basamak</option>
                            <option value="2">2.Basamak</option>
                            <option value="3">3.Basamak</option>
                            <option value="4">4.Basamak</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">Yaş:</label>
                        <input type="email" class="form-control input-sm" id="email" placeholder="">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">Gün:</label>
                        <input type="email" class="form-control input-sm" id="email" placeholder="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="years">İl Durumu</label>
                        <select class="form-control input-sm" id="years">
                            <option value="1">İl İçi Sevk</option>
                            <option value="2">İl Dışı Sevk</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3 col-sm-3">
                        <label for="photo">Fax</label>
                        <input type="file" id="photo">
                        <p class="help-block">Lütfen Hasta Fax Evrakını PDF Olarak Sisteme Yükleyiniz</p>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-3 col-sm-3 left" >
                            <input type="submit" class="btn btn-danger" value="Kaydet"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 panel">
                    <h3><i class="fa fa-h-square" aria-hidden="true"></i> Hastane Bilgileri</h3>
                    <hr class="panel-primary">
                    @foreach($hastaneler as $hastane)
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="years">{{$hastane}}</label>
                        <select class="form-control input-sm" id="years">
                            <option value="1">Aranmadı</option>
                            <option value="2">Sevk Eden Hastane</option>
                            <option value="3">Kabul Etti</option>
                            <option value="4">Kabul Etmedi</option>
                            <option value="5">Yer Yok</option>
                            <option value="6">Uzman Yok</option>
                            <option value="7">Cihaz Ve Ekipman Yok</option>
                            <option value="8">Kendileri Görüşmüş</option>
                            <option value="9">Kendileri Görüşmüş (+)</option>
                            <option value="10">Arandı Açmadı</option>
                            <option value="11">Ulaşılamadı</option>
                        </select>
                    </div>
                    @endforeach



                    <div class="form-group col-md-12 col-sm-12">
                        <label for="address">Açıklama</label>
                        <textarea class="form-control input-sm" id="address" rows="3"></textarea>
                    </div>

                </div>

            </form>
        </div>
@endsection