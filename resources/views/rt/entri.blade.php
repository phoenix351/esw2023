@extends('layouts.app')

@section('content')
{{-- {{ var_dump($provinsi) }} --}}
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow mb-2">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('About us') }}</h2>
                        </div>
                    </div>
                    
                    <div class="card border-0 shadow mb-2">
                        <div class="card-body" id = "card-wilayah">
                            <form action="/store" method="post">
                                @csrf
                                <div class="form-group row mb-2">
                                    <label for="id_kab" class="col">Pilih Kabupaten</label>
                                    {{-- <input type="text" class="form-control col" id="idsls" name="idsls" placeholder="Masukkan SLS">  --}}
                                    <select name="id_kab" id="id_kab" class="form-control col">
                                        <option value="">-- Pilih Kabupaten --</option>
                                        @foreach ($provinsi as $prov)
                                            <option value="{{ $prov->id_kab }}">{{ $prov->nama_kab }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="id_kec" class="col">Pilih Kecamatan</label>
                                    {{-- <input type="text" class="form-control col" id="nomor_bangunan" name="nomor_bangunan" placeholder="Masukkan Nomor Bangunan">  --}}
                                    <select class="form-control col" id="id_kec" name="id_kec">
                                        <option value="">-- Pilih Kecamatan --</option>
                                    </select>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="id_desa" class="col">Pilih Desa</label>
                                    {{-- <input type="text" class="form-control col" id="nomor_bangunan" name="nomor_bangunan" placeholder="Masukkan Nomor Bangunan">  --}}
                                    <select class="form-control col" id="id_desa" name="id_desa">
                                        <option value="">-- Pilih Desa --</option>
                                    </select>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="id_sls" class="col">Pilih SLS</label>
                                    {{-- <input type="text" class="form-control col" id="nomor_bangunan" name="nomor_bangunan" placeholder="Masukkan Nomor Bangunan">  --}}
                                    <select class="form-control col" id="id_sls" name="id_sls">
                                        <option value="">-- Pilih SLS --</option>
                                    </select>
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="nurtup" class="col">Nomor Urut Ruta Pertanian</label>
                                    <input type="text" class="form-control col" id="nurtup" name="nurtup" placeholder="Masukkan Nomor Urut Ruta Pertanian"> 
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="nama_krt" class="col">Nama Kepala Ruta</label>
                                    <input type="text" class="form-control col" id="nama_krt" name="nama_krt" placeholder="Masukkan Nama Kepala Ruta"> 
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="jumlah_uup" class="col">Jumlah Unit Usaha Pertanian</label>
                                    <input type="text" class="form-control col" id="jumlah_uup" name="jumlah_uup" placeholder="Masukkan Jumlah Unit Usaha Pertanian"> 
                                </div>
                                <div class="form-group d-flex">
                                    <button type="submit" class="btn btn-primary mr-auto">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card border-0 shadow">
                        <div class="card-body" id = "card-ruta">
                            <form action="/store" method="post">
                                @csrf
                                <div class="form-group row mb-2">
                                    <label for="idsls" class="col">ID SLS</label>
                                    <input type="text" class="form-control col" id="idsls" name="idsls" placeholder="Masukkan SLS"> 
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="nomor_bangunan" class="col">Nomor Bangunan</label>
                                    <input type="text" class="form-control col" id="nomor_bangunan" name="nomor_bangunan" placeholder="Masukkan Nomor Bangunan"> 
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="nurtup" class="col">Nomor Urut Ruta Pertanian</label>
                                    <input type="text" class="form-control col" id="nurtup" name="nurtup" placeholder="Masukkan Nomor Urut Ruta Pertanian"> 
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="nama_krt" class="col">Nama Kepala Ruta</label>
                                    <input type="text" class="form-control col" id="nama_krt" name="nama_krt" placeholder="Masukkan Nama Kepala Ruta"> 
                                </div>
                                <div class="form-group row mb-2">
                                    <label for="jumlah_uup" class="col">Jumlah Unit Usaha Pertanian</label>
                                    <input type="text" class="form-control col" id="jumlah_uup" name="jumlah_uup" placeholder="Masukkan Jumlah Unit Usaha Pertanian"> 
                                </div>
                                <div class="form-group d-flex">
                                    <button type="submit" class="btn btn-primary mr-auto">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#id_kab').change(function() {
                var id_kab = $(this).val()
                if (id_kab){
                    $.ajax({
                        url: '/getKec/' + id_kab,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#id_kec').empty()
                            $('#id_kec').append('<option value="">-- Pilih Kecamatan --</option>')
                            $.each(data, function(key, value){
                                $('#id_kec').append('<option value="' + value + '">' + key + '</option>')
                            })
                        }
                    })
                } else {
                    $('#id_kec').empty()
                    $('#id_kec').append('<option value="">-- Pilih Kecamatan --</option>')
                    $('#id_desa').empty()
                    $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            
            $('#id_kec').change(function() {
                var id_kec = $(this).val()
                if (id_kec){
                    $.ajax({
                        url: '/getDesa/' + id_kec,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#id_desa').empty()
                            $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                            $.each(data, function(key, value){
                                $('#id_desa').append('<option value="' + value + '">' + key + '</option>')
                            })
                        }
                    })
                } else {
                    $('#id_desa').empty()
                    $('#id_desa').append('<option value="">-- Pilih Desa --</option>')
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            
            $('#id_desa').change(function() {
                var id_desa = $(this).val()
                if (id_desa){
                    $.ajax({
                        url: '/getSls/' + id_desa,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#id_sls').empty()
                            $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                            $.each(data, function(key, value){
                                $('#id_sls').append('<option value="' + value + '">' + key +' - ['+ value + ']</option>')
                            })
                        }
                    })
                } else {
                    $('#id_sls').empty()
                    $('#id_sls').append('<option value="">-- Pilih SLS --</option>')
                }
            })
            
        })
    </script>
@endsection