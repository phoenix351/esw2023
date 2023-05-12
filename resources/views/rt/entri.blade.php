@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow mb-2">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('About us') }}</h2>
                        </div>
                    </div>
                    
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-3">{{ __('About us') }}</h2>
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
@endsection