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
use App\Models\TernakDomba;
use App\Models\TernakKerbau;
use App\Models\TernakLainnya;
use App\Models\TernakUnggas;
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

    //filter
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
    //



    //Pengelola
    public function getPengelola(Request $request, $id_rt)
    {
        $pengelola = Pengelola::select('id', 'r301', 'r302', 'r303', 'r307', 'r309')->where('id_rt', $id_rt)->paginate(10);
        return response()->json($pengelola);
    }

    public function getPengelolaById(Request $request, $id)
    {
        $uup = Pengelola::where('id', $id)->get();
        return response()->json($uup);
    }

    public function deletePengelola(Request $request)
    {
        $id = $request->input('id');
        $pengelola = Pengelola::findOrFail($id);
        $pengelola->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    public function simpanPengelola(StoreUupRequest $request)
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

    //Lahan
    public function getLahan(Request $request, $id_pengelola)
    {
        $lahan = Lahan::where('id_pengelola', $id_pengelola)->paginate(10);
        return response()->json($lahan);
    }

    public function deleteLahan(Request $request)
    {
        $id = $request->input('id');
        $pengelola = Lahan::findOrFail($id);
        $pengelola->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    public function simpanLahan(StorePengelolaRequest $request)
    {
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

    //RT
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

    public function simpanRuta(StoreRutaRequest $request)
    {
        $this->validate($request, [
            'nomor_bangunan' => 'required',
            'nurtup' => 'required',
            'nama_krt' => 'required',
            'jumlah_uup' => 'required',
        ]);

        $input_db = Rt::updateOrCreate(['id' => $request->input('id')], $request->all());
        return response()->json([
            'message'   => 'success',
            'id_rt' => $input_db->id,
        ]);
    }
    public function deleteRt(Request $request)
    {
        $id = $request->input('id');
        $Rt = Rt::findOrFail($id);
        $Rt->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    //Ternak Domba
    public function getDomba(Request $request, $id_pengelola)
    {
        $domba = TernakDomba::where('id_pengelola', $id_pengelola)->paginate(10);
        return response()->json($domba);
    }

    public function simpanDomba(Request $request)
    {
        $data = $request->input('data');
        $dombas = [];
        foreach ($data as $datas) {
            $domba = TernakDomba::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $domba->id;
            array_push($dombas, $id);
        }
        return response()->json([
            'message'   => 'success',
        ]);
    }

    public function deleteDomba(Request $request)
    {
        $id = $request->input('id');
        $domba = TernakDomba::findOrFail($id);
        $domba->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    //Ternak Kerbau
    public function getKerbau(Request $request, $id_pengelola)
    {
        $kerbau = TernakKerbau::where('id_pengelola', $id_pengelola)->paginate(10);
        return response()->json($kerbau);
    }

    public function simpanKerbau(Request $request)
    {
        $data = $request->input('data');
        $kerbaus = [];
        foreach ($data as $datas) {
            $kerbau = TernakKerbau::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $kerbau->id;
            array_push($kerbaus, $id);
        }
        return response()->json([
            'message'   => 'success',
        ]);
    }

    public function deleteKerbau(Request $request)
    {
        $id = $request->input('id');
        $kerbau = TernakKerbau::findOrFail($id);
        $kerbau->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    //Unggas
    public function getUnggas(Request $request, $id_pengelola)
    {
        $unggas = TernakUnggas::where('id_pengelola', $id_pengelola)->paginate(10);
        return response()->json($unggas);
    }

    public function simpanUnggas(Request $request)
    {
        $data = $request->input('data');
        $unggass = [];
        foreach ($data as $datas) {
            $unggas = TernakUnggas::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $unggas->id;
            array_push($unggass, $id);
        }
        return response()->json([
            'message'   => 'success',
        ]);
    }

    public function deleteUnggas(Request $request)
    {
        $id = $request->input('id');
        $unggas = TernakUnggas::findOrFail($id);
        $unggas->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    //Ternak Lainnya
    public function getTlainnya(Request $request, $id_pengelola)
    {
        $tlainnya = TernakLainnya::where('id_pengelola', $id_pengelola)->paginate(10);
        return response()->json($tlainnya);
    }

    public function simpanTlainnya(Request $request)
    {
        $data = $request->input('data');
        $tlainnyas = [];
        foreach ($data as $datas) {
            $tlainnya = TernakLainnya::updateOrCreate(['id' => $datas['id']], $datas);
            $id = $tlainnya->id;
            array_push($tlainnyas, $id);
        }
        return response()->json([
            'message'   => 'success',
        ]);
    }

    public function deleteTlainnya(Request $request)
    {
        $id = $request->input('id');
        $tlainnya = TernakLainnya::findOrFail($id);
        $tlainnya->delete();
        return response()->json(['message' => 'Data deleted successfully', 'id' => $id]);
    }

    //L1
    public function getLsatu($id_sls)
    {
        $sls = MasterWilayah::select('id', 'id_sls6', 'nama_sls', 'r303', 'r305')->where('id', $id_sls)->get();
        return response()->json($sls);
    }

    public function simpanLsatu(Request $request)
    {
        $sls = MasterWilayah::updateOrCreate(['id' => $request->input('id')], $request->all());
        $id = $sls->id;

        return response()->json([
            'message' => 'success',
            'id' => $id,
        ]);
    }
}
