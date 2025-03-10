<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function cekDiagnosa(Request $request)
    {
        $gejalaArray = json_decode($request->input('all_gejala'), true);

        $gejalaArray = array_filter($gejalaArray, function ($value) {
            return !is_null($value) && $value !== '';
        });

        if (empty($gejalaArray)) {
            return response()->json([
                'gejala' => [],
                'penyakit' => 'Tidak ditemukan (Tidak ada gejala yang dipilih)',
            ]);
        }

        $gejalaList = "[" . implode(",", array_map(fn($g) => "'$g'", array_values($gejalaArray))) . "]";
        $filePath = storage_path('app/facts/sakit.pl');

        $command = "swipl -s {$filePath} -g \"cek_penyakit($gejalaList, Penyakit), write(Penyakit), halt.\"";
        $output = shell_exec($command);

        $penyakit = ($output !== null) ? Disease::where('penyakit', ucwords(str_replace('_', ' ', trim($output))))->first() : null;
        
        session(['diagnosa_done' => true]);

        return redirect()->route('result')->with([
            'gejala' => implode(', ', array_map(fn($g) => str_replace('_', ' ', $g), $gejalaArray)),
            'penyakit' => $penyakit ?? 'Tidak ditemukan', 
        ]);

    }
}
