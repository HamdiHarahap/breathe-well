<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    private function addFactToProlog($gejala, $penyakit)
    {
        $filePath = storage_path('app/facts/sakit.pl');

        $gejalaProlog = implode(", ", array_map(fn($g) => str_replace(" ", "_", strtolower($g)), $gejala));
        $penyakitProlog = str_replace(" ", "_", strtolower($penyakit));
        $fakta = "penyakit([$gejalaProlog], $penyakitProlog).\n";

        $isiFile = file_exists($filePath) ? file_get_contents($filePath) : '';

        $isiBaru = $fakta . $isiFile;

        file_put_contents($filePath, $isiBaru);
    }

    private function removeFactFromProlog($gejala, $penyakit)
    {
        $filePath = storage_path('app/facts/sakit.pl');
        $gejalaProlog = implode(", ", array_map(fn($g) => str_replace(" ", "_", strtolower($g)), explode(', ', $gejala)));
        $penyakitProlog = str_replace(" ", "_", strtolower($penyakit));
        $fakta = "penyakit([$gejalaProlog], $penyakitProlog).";

        if (file_exists($filePath)) {
            $isiFile = file_get_contents($filePath);
            $isiBaru = str_replace($fakta . "\n", '', $isiFile);
            $isiBaru = str_replace($fakta, '', $isiBaru);

            file_put_contents($filePath, $isiBaru);
        }
    }      

    public function store(Request $request)
    {
        $request->validate([
            'penyakit' => 'required',
            'gejala' => 'required|array', 
            'deskripsi' => 'required',
            'penanganan' => 'required',
        ]);

        Disease::create([
            'penyakit' => $request->input('penyakit'),
            'gejala' => implode(', ', $request->input('gejala')), 
            'deskripsi' => $request->input('deskripsi'),
            'penanganan' => $request->input('penanganan'),
        ]);

        $this->addFactToProlog($request->gejala, $request->penyakit);

        return redirect()->route('disease');
    }

    public function destroy(string $id)
    {
        $disease = Disease::where('id', $id)->first();
        $disease->delete();
        $this->removeFactFromProlog($disease->gejala, $disease->penyakit);

        return redirect()->route('disease');
    }
}
