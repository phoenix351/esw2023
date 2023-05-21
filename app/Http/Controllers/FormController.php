<?php

namespace App\Http\Controllers;

use App\Http\Requests\DependentDropdownRequest;
use App\Http\Requests\StorePengelolaRequest;
use App\Http\Requests\StoreRutaRequest;
use App\Http\Requests\StoreUupRequest;
use App\Http\Requests\UpdateRutaRequest;
use App\Models\MasterWilayah;
use App\Models\Pengelola;
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
    public function getRt(Request $request, $id_sls)
    {
        $sls = Rt::select('id', 'idsls', 'nomor_bangunan', 'nurtup', 'nama_krt', 'jumlah_uup')->where('idsls', $id_sls)->paginate(10);
        return response()->json($sls);
    }

    //getDisaster
    public function getRt(Request $request, $id_sls)
    {
        $rt = Rt::where('id_sls', $id_sls)->get();
        return response()->json($rt);
    }

    public function getRtById(Request $request, $id)
    {
        $rt = Rt::where('id', $id)->get();
        return response()->json($rt);
    }

    public function getUupByRt(Request $request, $id_rt)
    {
        $uup = Uup::where('id_rt', $id_rt)->get();
        return response()->json($uup);
    }

    public function getUupById(Request $request, $id)
    {
        $uup = Uup::where('id', $id)->get();
        return response()->json($uup);
    }

    public function getPengelola(Request $request, $id_uup)
    {
        $pengelola = Pengelola::where('id_uup', $id_uup)->get();
        return response()->json($pengelola);
    }

    public function simpanRuta(StoreRutaRequest $request)
    {
        $this->validate($request, [
            'nomor_bangunan' => 'required',
            'nurtup' => 'required',
            'nama_krt' => 'required',
            'jumlah_uup' => 'required',
        ]);

        $input_db = Rt::create($request->all());
        return response()->json([
            'message'   => 'success',
            'id_rt' => $input_db->id,
        ]);
    }


    public function simpanUup(StoreUupRequest $request)
    {
        $this->validate($request, [
            'id_rt' => 'required',
            'r301' => 'required',
            'r302' => 'required',
            'r303' => 'required',
            'r307' => 'required',
            'r309' => 'required',
        ]);

        $uup = Uup::updateOrCreate(['id' => $request->get('id')], $request->all());
        return response()->json([
            'message'   => 'success',
            'id_uup' => $uup->id,
        ]);
    }

    public function simpanPengelola(StorePengelolaRequest $request)
    {
        // $this->validate($request, [
        //     '*.id_uup' => 'required',
        //     '*.r310' => 'required',
        //     '*.r311' => 'required',
        //     '*.r312' => 'required',
        //     '*.r313' => 'required',
        //     '*.r314' => 'required',
        //     '*.r315' => 'required',
        //     '*.r316' => 'required',
        //     '*.r317' => 'required',
        //     '*.r318' => 'required',
        //     '*.r319' => 'required',
        //     '*.r320' => 'required',
        //     '*.r321' => 'required',
        //     '*.r322' => 'required',
        //     '*.r323' => 'required',
        //     ['*.r324_kabkot', '*.r324_kec', '*.r324_desa' => 'required'],
        // ]);
        $data = $request->input('data');
        $pengelolas = [];
        foreach ($data as $datas) {
            $pengelola = Pengelola::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $pengelola->id;
            array_push($pengelolas, $id);
        }
        // $pengelola = Pengelola::create($request->all());
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
