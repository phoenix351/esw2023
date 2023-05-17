<?php

namespace App\Http\Controllers;

use App\Http\Requests\DependentDropdownRequest;
use App\Http\Requests\StoreRutaRequest;
use App\Http\Requests\UpdateRutaRequest;
use App\Models\MasterWilayah;
use App\Models\Rt;
use App\Models\Uup;
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
        $kabkot = MasterWilayah::select('id_kab', 'nama_kab')->distinct()->get();
        return view('form', [
            'wilayah' => $kabkot,
            'page' => "Form Entri"
        ]);
    }

    public function entri()
    {
        $wilayah = MasterWilayah::all();
        $kabkot = MasterWilayah::select('id_kab', 'nama_kab')->distinct()->get();
        return view('rt.entri', [
            'wilayah' => $wilayah,
            'provinsi' => $kabkot,
            'page' => "Form Entri"
        ]);
    }


    public function getKab(DependentDropdownRequest $request)
    {
    }

    public function getKec(DependentDropdownRequest $request, $id_kab)
    {
        $kecamatan = MasterWilayah::where('id_kab', $id_kab)->pluck('id_kec', 'nama_kec');
        return response()->json($kecamatan);
    }

    public function getDesa(DependentDropdownRequest $request, $id_kec)
    {
        $desa = MasterWilayah::where('id_kec', $id_kec)->pluck('id_desa', 'nama_desa');
        return response()->json($desa);
    }

    public function getSls(DependentDropdownRequest $request, $id_desa)
    {
        $sls = MasterWilayah::select('id', 'id_sls6', 'nama_sls')->where('id_desa', $id_desa)->get();
        return response()->json($sls);
    }

    public function simpanRuta(StoreRutaRequest $request)
    {
        $this->validate($request, [
            'nomor_bangunan' => 'required',
            'nurtup' => 'required',
            'nama_krt' => 'required',
            'jumlah_uup' => 'required',
        ]);

        $id_rt = $request->id;
        Rt::create($request->all());
        return response()->json([
            'message'   => 'success',
            'id_rt' => $id_rt,
        ]);
    }
    
    public function simpanUup(StoreRutaRequest $request)
    {
        $this->validate($request, [
            'id_rt' => 'required',
            'r301' => 'required',
            'r302' => 'required',
            'r303' => 'required',
            'r307' => 'required',
            'r309' => 'required',
        ]);

        Uup::create($request->all());
        return response()->json([
            'message'   => 'success',
        ]);
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
