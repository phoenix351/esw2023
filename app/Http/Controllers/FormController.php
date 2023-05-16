<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRutaRequest;
use App\Http\Requests\UpdateRutaRequest;
use App\Models\MasterWilayah;
use App\Models\Rt;
use Illuminate\Http\Request;

class FormController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wilayah = MasterWilayah::select('nama_kab', 'kode_kab')->groupBy('nama_kab', 'kode_kab')->orderBy('kode_kab')->get();
        return view('form', [
            'wilayah' => $wilayah,
            'page' => "Form Entri"
        ]);
    }

    public function entri()
    {
        $wilayah = MasterWilayah::all();
        return view('rt.entri', [
            'wilayah' => $wilayah,
            'page' => "Form Entri"
        ]);
    }

    public function store(StoreRutaRequest $request)
    {
        $this->validate($request, [
            'nomor_bangunan' => 'required',
            'nurtup' => 'required',
            'nama_krt' => 'required',
            'jumlah_uup' => 'required',
        ]);

        Rt::create($request->all());
        return redirect('/entri-trial');
    }

    public function update(UpdateRutaRequest $request, Rt $rt)
    {
        $this->validate($request, [
            'nomor_bangunan' => 'required',
            'nurtup' => 'required',
            'nama_krt' => 'required',
            'jumlah_uup' => 'required',
        ]);

        Rt::where('id', $rt->id)->update($request->all());
    }
}