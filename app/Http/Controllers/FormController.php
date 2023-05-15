<?php

namespace App\Http\Controllers;

use App\Http\Requests\DependentDropdownRequest;
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
        $wilayah = MasterWilayah::all();
        return view('form', [
            'wilayah' => $wilayah,
            'page' => "Form Entri"
        ]);
    }
    
    public function entri()
    {
        $wilayah = MasterWilayah::all();
        $provinsi = MasterWilayah::select('id_kab', 'nama_kab')->distinct()->get();
        return view('rt.entri', [
            'wilayah' => $wilayah,
            'provinsi' => $provinsi,
            'page' => "Form Entri"
        ]);
    }

    public function getKab(DependentDropdownRequest $request) {
        
    }

    public function getKec(DependentDropdownRequest $request, $id_kab) {
        $kecamatan = MasterWilayah::where('id_kab', $id_kab)->pluck('id_kec', 'nama_kec');
        return response()->json($kecamatan);
    }
    
    public function getDesa(DependentDropdownRequest $request, $id_kec) {
        $desa = MasterWilayah::where('id_kec', $id_kec)->pluck('id_desa', 'nama_desa');
        return response()->json($desa);
    }
    
    public function getSls(DependentDropdownRequest $request, $id_desa) {
        $sls = MasterWilayah::where('id_desa', $id_desa)->pluck('id_sls6', 'nama_sls');
        return response()->json($sls);
    }
    
    public function store(StoreRutaRequest $request)
    {
        $this->validate($request,[
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
        $this->validate($request,[
            'nomor_bangunan' => 'required',
            'nurtup' => 'required',
            'nama_krt' => 'required',
            'jumlah_uup' => 'required',
        ]);

        Rt::where('id', $rt->id)->update($request->all());
    }
}
