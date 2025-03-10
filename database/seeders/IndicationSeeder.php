<?php

namespace Database\Seeders;

use App\Models\Indication;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indications = [
            ['gejala' => 'Batuk Kering', 'pertanyaan' => 'Apakah Anda mengalami batuk kering?'],
            ['gejala' => 'Batuk Berdahak', 'pertanyaan' => 'Apakah Anda mengalami batuk berdahak?'],
            ['gejala' => 'Sesak Napas', 'pertanyaan' => 'Apakah Anda merasa sesak napas?'],
            ['gejala' => 'Dada Terasa Tertekan', 'pertanyaan' => 'Apakah dada Anda terasa tertekan?'],
            ['gejala' => 'Nyeri Dada', 'pertanyaan' => 'Apakah Anda mengalami nyeri dada?'],
            ['gejala' => 'Demam Ringan', 'pertanyaan' => 'Apakah Anda mengalami demam ringan?'],
            ['gejala' => 'Demam Tinggi', 'pertanyaan' => 'Apakah Anda mengalami demam tinggi?'],
            ['gejala' => 'Lelah', 'pertanyaan' => 'Apakah Anda sering merasa lelah?'],
            ['gejala' => 'Mengi', 'pertanyaan' => 'Apakah Anda mengalami mengi (suara siulan saat bernapas)?'],
            ['gejala' => 'Berat Badan Turun', 'pertanyaan' => 'Apakah berat badan Anda turun tanpa sebab yang jelas?'],
            ['gejala' => 'Suara Serak', 'pertanyaan' => 'Apakah suara Anda menjadi serak?'],
            ['gejala' => 'Dahak Berdarah', 'pertanyaan' => 'Apakah Anda mengeluarkan dahak berdarah?'],
            ['gejala' => 'Kelelahan', 'pertanyaan' => 'Apakah Anda sering merasa kelelahan berlebihan?'],
        ];          

        foreach ($indications as $indication) {
            Indication::create($indication);
        }
    }
}
