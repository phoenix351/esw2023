<?php

namespace App\Http\Controllers;

use App\Http\Requests\DependentDropdownRequest;
use App\Http\Requests\StorePengelolaRequest;
use App\Http\Requests\StoreRutaRequest;
use App\Http\Requests\StoreUupRequest;
use App\Http\Requests\UpdateRutaRequest;
use App\Models\MasterWilayah;
use App\Models\Lahan;
use App\Models\Rt;
use App\Models\Pengelola;
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

    public function getRtById(Request $request, $id)
    {
        $rt = Rt::where('id', $id)->get();
        return response()->json($rt);
    }

    public function getUupByRt(Request $request, $id_rt)
    {
        $uup = Pengelola::where('id_rt', $id_rt)->get();
        return response()->json($uup);
    }

    public function getUupById(Request $request, $id)
    {
        $uup = Pengelola::where('id', $id)->get();
        return response()->json($uup);
    }

    public function getPengelolaById(Request $request, $id_pengelola)
    {
        $pengelola = Lahan::where('id_pengelola', $id_pengelola)->get();
        return response()->json($pengelola);
    }

    public function getPengelola(Request $request, $id_rt)
    {
        $pengelola = Pengelola::select('id', 'r301', 'r302', 'r303', 'r307', 'r309')->where('id_rt', $id_rt)->paginate(10);
        return response()->json($pengelola);
    }

    public function deletePengelola(Request $request)
    {
        $id = $request->input('id');
        $pengelola = Pengelola::findOrFail($id);
        $pengelola->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }
    public function deleteLahan(Request $request)
    {
        $id = $request->input('id');
        $pengelola = Lahan::findOrFail($id);
        $pengelola->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }
    public function getLahan(Request $request, $id_pengelola)
    {
        $lahan = Lahan::where('id_pengelola', $id_pengelola)->paginate(10);
        return response()->json($lahan);
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

        $uup = Pengelola::updateOrCreate(['id' => $request->get('id')], $request->all());
        return response()->json([
            'message'   => 'success',
            'id_pengelola' => $uup->id,
        ]);
    }

    public function simpanPengelola(StorePengelolaRequest $request)
    {
        // $this->validate($request, [
        //     '*.id_pengelola' => 'required',
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
            $pengelola = Lahan::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $pengelola->id;
            array_push($pengelolas, $id);
        }
        // $pengelola = Lahan::create($request->all());
        return response()->json([
            'message'   => 'success',
        ]);
    }
    public function simpanLahan(StorePengelolaRequest $request)
    {
        // $this->validate($request, [
        //     '*.id_pengelola' => 'required',
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
            $pengelola = Lahan::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $pengelola->id;
            array_push($pengelolas, $id);
        }
        // $pengelola = Lahan::create($request->all());
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
