<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Indication;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function healtCheckPage()
    {
        return view('pages.test', []);
    }

    public function formHealtCheckPage()
    {
        $indications = Indication::paginate(6);

        $jawabanSebelumnya = session('jawaban', []);

        return view('pages.form_test', [
            'data' => $indications,
            'jawabanSebelumnya' => $jawabanSebelumnya
        ]);
    }

    public function dashboardPage()
    {
        $totalGejala = Indication::count();
        $totalPenyakit = Disease::count();

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'totalGejala' => $totalGejala,
            'totalPenyakit' => $totalPenyakit
        ]);
    }

    public function indicationPage()
    {
        $data = Indication::paginate(10);

        return view('admin.indication', [
            'title' => 'Indikasi',
            'data' => $data 
        ]);
    }

    public function indicationAddPage()
    {
        return view('admin.indication_add', [
            'title' => 'Tambah Indikasi',
        ]);
    }

    public function indicationEditPage(string $id)
    {
        $data = Indication::where('id', $id)->first();

        return view('admin.indication-edit', [
            'title' => 'Edit Indikasi',
            'data' => $data
        ]);
    }

    public function diseasePage()
    {
        $data = Disease::paginate(10);

        return view('admin.disease', [
            'title' => 'Penyakit',
            'data' => $data 
        ]);
    }

    public function diseaseAddPage()
    {
        $data = Indication::all();  

        return view('admin.disease_add', [
            'title' => 'Tambah Penyakit',
            'data' => $data,
        ]);
    }

    public function diseaseEditPage(string $id)
    {
        $disease = Disease::where('id', $id)->first();
        $data = Indication::all();

        return view('admin.disease-edit', [
            'title' => 'Edit Penyakit',
            'data' => $data,
            'disease' => $disease
        ]);
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function resultPage()
    {
        if(!session('diagnosa_done')) {
            return redirect()->route('home');
        }

        session()->forget('diagnosa_done');

        return view('pages.result');
    }
}
