<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diseases = [
            [
                "penyakit" => "TBC",
                "gejala" => "Batuk Kering, Demam Ringan, Lelah",
                "deskripsi" => "Tuberkulosis (TBC) adalah infeksi bakteri yang menyerang paru-paru dan dapat menyebar ke organ lain jika tidak diobati.",
                "penanganan" => "Pemberian obat antituberkulosis (OAT) selama 6 bulan atau lebih."
            ],
            [
                "penyakit" => "Bronkitis",
                "gejala" => "Batuk Berdahak, Sesak Napas, Demam",
                "deskripsi" => "Bronkitis adalah peradangan pada saluran bronkus yang menyebabkan batuk berdahak, sesak napas, dan demam.",
                "penanganan" => "Istirahat yang cukup, konsumsi banyak cairan, dan obat ekspektoran untuk membantu mengeluarkan dahak."
            ],
            [
                "penyakit" => "Asma",
                "gejala" => "Batuk, Sesak Napas, Mengi, Nyeri Dada",
                "deskripsi" => "Asma adalah penyakit kronis yang menyebabkan penyempitan saluran pernapasan, sehingga penderitanya mengalami sesak napas, mengi, dan nyeri dada.",
                "penanganan" => "Menggunakan inhaler, menghindari pemicu asma, dan melakukan terapi pernapasan."
            ],
            [
                "penyakit" => "Pneumonia",
                "gejala" => "Demam, Batuk, Sesak Napas, Nyeri Dada",
                "deskripsi" => "Pneumonia adalah infeksi paru-paru yang menyebabkan peradangan pada kantung udara dan dapat menyebabkan sesak napas serta nyeri dada.",
                "penanganan" => "Antibiotik (jika disebabkan bakteri), terapi oksigen, dan rawat inap jika gejala berat."
            ],
            [
                "penyakit" => "Penyakit Paru Obstruktif Kronis",
                "gejala" => "Batuk Kronis, Sesak Napas, Berat Badan Turun",
                "deskripsi" => "Penyakit Paru Obstruktif Kronis (PPOK) adalah penyakit pernapasan jangka panjang yang menghalangi aliran udara dan membuat pernapasan sulit.",
                "penanganan" => "Menghindari asap rokok, terapi oksigen, dan penggunaan bronkodilator."
            ],
            [
                "penyakit" => "Kanker Paru",
                "gejala" => "Batuk Berkepanjangan, Dahak Berdarah, Berat Badan Turun",
                "deskripsi" => "Kanker paru adalah pertumbuhan sel abnormal di paru-paru yang dapat menyebar ke bagian tubuh lainnya.",
                "penanganan" => "Kemoterapi, radioterapi, dan operasi pengangkatan tumor."
            ],
            [
                "penyakit" => "Fibrosis Paru",
                "gejala" => "Sesak Napas, Dada Nyeri, Kelelahan",
                "deskripsi" => "Fibrosis paru adalah kondisi kronis yang menyebabkan jaringan paru-paru menjadi kaku dan sulit mengembang.",
                "penanganan" => "Terapi oksigen, rehabilitasi paru, dan dalam beberapa kasus transplantasi paru."
            ],
            [
                "penyakit" => "Emfisema",
                "gejala" => "Batuk Berdahak, Sesak Napas, Nyeri Dada, Mengi",
                "deskripsi" => "Emfisema adalah penyakit paru obstruktif kronis yang merusak kantung udara di paru-paru dan menyebabkan kesulitan bernapas.",
                "penanganan" => "Berhenti merokok, terapi oksigen, dan obat bronkodilator."
            ],
            [
                "penyakit" => "Laringitis",
                "gejala" => "Batuk Kering, Sakit Tenggorokan, Suara Serak",
                "deskripsi" => "Laringitis adalah peradangan pada pita suara yang menyebabkan suara serak, batuk kering, dan sakit tenggorokan.",
                "penanganan" => "Istirahat suara, banyak minum air hangat, dan menghindari iritan seperti asap rokok."
            ],
            [
                "penyakit" => "Gagal Pernapasan",
                "gejala" => "Sesak Napas, Batuk Berdahak, Dada Terasa Tertekan",
                "deskripsi" => "Gagal pernapasan adalah kondisi serius di mana tubuh tidak mendapatkan cukup oksigen atau mengeluarkan cukup karbon dioksida.",
                "penanganan" => "Terapi oksigen, ventilasi mekanik, dan perawatan intensif di rumah sakit."
            ]
        ];
        
        foreach ($diseases as $disease) {
            Disease::create($disease);
        }
    }
}
