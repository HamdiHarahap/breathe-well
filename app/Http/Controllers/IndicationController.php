<?php

namespace App\Http\Controllers;

use App\Models\Indication;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gejala' => 'required',
            'pertanyaan' => 'required'
        ]);

        Indication::create([
            'gejala' => $request->input('gejala'),
            'pertanyaan' => $request->input('pertanyaan'),
        ]);

        return redirect()->route('indication');
    }

    public function destroy(string $id)
    {
        $indication = Indication::where('id', $id)->first();
        $indication->delete();

        return redirect()->route('indication');
    }
}
