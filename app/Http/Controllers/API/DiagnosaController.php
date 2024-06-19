<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return response()->json(['gejalas' => $gejalas], 200);
    }

    public function analisa(Request $request)
{
    $validatedData = $request->validate([
        'nik' => 'required|string',
        'nama_pemilik' => 'required|string',
        'no_hp' => 'required|string',
        'alamat' => 'required|string',
        'nama_peliharaan' => 'required|string',
        'jekel' => 'required|string',
        'umur' => 'nullable|integer',
        'berat' => 'nullable|numeric',
        'suhu' => 'nullable|numeric',
        'kondisi' => 'required|array|min:2',
    ]);

    $arbobot = [0, 1, 0.75, 0.5, 0.25];
    $argejala = [];
    $arrCfKombine = [];
    $kepastian = [];

    foreach ($validatedData['kondisi'] as $kondisi) {
        $arkondisi = explode("_", $kondisi);
        $kepastian[$arkondisi[0]] = $arkondisi[1];
        if (strlen($kondisi) > 1) {
            $argejala[$arkondisi[0]] = $arkondisi[1];
        }
    }

    $penyakits = Penyakit::with(['basis_pengetahuans' => function ($query) use ($kepastian) {
        $query->whereIn('gejala_id', array_keys($kepastian));
    }])->get();

    foreach ($penyakits as $penyakit) {
        foreach ($penyakit->basis_pengetahuans as $bp) {
            $arrCfKombine[$penyakit->id][] = $bp->cf * $arbobot[$kepastian[$bp->gejala_id]];
        }
    }

    $cfHasil = [];
    foreach ($arrCfKombine as $penyakitId => $cfKombine) {
        $cfTotal = 0;
        $cfBaru = 0;
        foreach ($cfKombine as $key => $cf) {
            if ($key == 0) {
                $cfBaru = $cf;
            } else {
                $cfBaru = $cfBaru + $cf * (1 - $cfBaru);
            }
        }
        $cfHasil[$penyakitId] = $cfBaru;
    }

    arsort($cfHasil);

    $diagnosa = Diagnosa::create([
        'nik' => $validatedData['nik'],
        'nama_pemilik' => $validatedData['nama_pemilik'],
        'no_hp' => $validatedData['no_hp'],
        'alamat' => $validatedData['alamat'],
        'nama_peliharaan' => $validatedData['nama_peliharaan'],
        'jekel' => $validatedData['jekel'],
        'umur' => $validatedData['umur'] > 0 ? $validatedData['umur'] : null,
        'berat' => $validatedData['berat'] > 0 ? $validatedData['berat'] : null,
        'suhu' => $validatedData['suhu'] > 0 ? $validatedData['suhu'] : null,
        'penyakit_id' => array_key_first($cfHasil),
        'presentase' => $cfHasil[array_key_first($cfHasil)],
    ]);

    return response()->json([
        'diagnosa' => $diagnosa,
        'cfHasil' => $cfHasil,
        'penyakits' => $penyakits,
        'kepastian' => $kepastian
    ], 200);
}


    public function reset(Request $request)
    {
        $request->session()->forget('biodata');
        return response()->json(['message' => 'Session reset successfully'], 200);
    }
}
