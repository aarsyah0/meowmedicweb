<?php

require_once "vendor/autoload.php";

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;

class DiagnosaController
{
    public function index()
    {
        header("Content-Type: application/json");

        $gejalas = Gejala::all();

        echo json_encode($gejalas);
    }

    public function analisa($requestBody)
    {
        header("Content-Type: application/json");

        $request = json_decode($requestBody, true);

        if (empty($request['kondisi']) || count($request['kondisi']) < 2) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Sehat',
                'data' => []
            ]);
            return;
        }

        $arbobot = [0, 1, 0.75, 0.5, 0.25];
        $kepastian = [];
        $arrCfKombine = [];

        foreach ($request['kondisi'] as $item) {
            $arkondisi = explode("_", $item);
            $kondisi[] = ['gejala_id' => $arkondisi[0]];
            $kepastian[$arkondisi[0]] = $arkondisi[1];
            if (strlen($item) > 1) {
                $penyakits = Penyakit::with(['basis_pengetahuans' => function ($result) use ($kepastian) {
                    $result->with('gejala')->whereIn('gejala_id', array_keys($kepastian));
                }])->groupBy('id')->orderBy('id')->get();
            }
        }

        foreach ($penyakits as $penyakit) {
            foreach ($penyakit->basis_pengetahuans as $bp) {
                $arrCfKombine[$penyakit->id][] = $bp->cf * $arbobot[$kepastian[$bp->gejala_id]];
            }
            foreach ($arrCfKombine as $key => $cfKombine) {
                $cfBaru = 0;
                $jumlahCf = count($cfKombine);
                foreach ($cfKombine as $key2 => $cf) {
                    if (++$key2 == $jumlahCf) {
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                        $cfTotal = $cfBaru;
                    } elseif ($key2 >= 1) {
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                    } else {
                        $cfBaru = $cf[0];
                    }
                }
                $cfHasil[$key] = $cfTotal;
            }
        }
        arsort(($cfHasil));

        Diagnosa::create([
            'nik' => $_SESSION['biodata']['nik'],
            'nama_pemilik' => $_SESSION['biodata']['nama_pemilik'],
            'no_hp' => $_SESSION['biodata']['no_hp'],
            'alamat' => $_SESSION['biodata']['alamat'],
            'nama_peliharaan' => $_SESSION['biodata']['nama_peliharaan'],
            'jekel' => $_SESSION['biodata']['jekel'],
            'umur' => ($_SESSION['biodata']['umur']) > 0 ? ($_SESSION['biodata']['umur']) : null,
            'berat' => ($_SESSION['biodata']['berat']) > 0 ? ($_SESSION['biodata']['berat']) : null,
            'suhu' => ($_SESSION['biodata']['suhu']) > 0 ? ($_SESSION['biodata']['suhu']) : null,
            'penyakit_id' => array_key_first($cfHasil),
            'presentase' => $cfHasil[array_key_first($cfHasil)]
        ]);

        echo json_encode([
            'status' => 'success',
            'data' => [
                'cfHasil' => $cfHasil,
                'penyakits' => $penyakits,
                'kepastian' => $kepastian
            ]
        ]);
    }

    public function reset()
    {
        header("Content-Type: application/json");

        session_start();
        session_destroy();

        echo json_encode([
            'status' => 'success',
            'message' => 'Session reset successfully'
        ]);
    }
}

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == 'GET') {
    $controller = new DiagnosaController();
    $controller->index();
} elseif ($requestMethod == 'POST') {
    $requestBody = file_get_contents('php://input');
    $controller = new DiagnosaController();
    $controller->analisa($requestBody);
} elseif ($requestMethod == 'DELETE') {
    $controller = new DiagnosaController();
    $controller->reset();
} else {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method not allowed'
    ]);
}
