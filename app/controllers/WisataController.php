<?php

class WisataController extends Controller 
{
    private $daftarWisata = [
        1 => [
            'nama' => 'Gunung Tangkuban Parahu',
            'lokasi' => 'Perbatasan KBB & Subang',
            'harga' => 'Rp 30.000 - Rp 40.000',
            'rating' => '4.5',
            'gambar' => 'public/images/tangkuban.jpeg',
            'deskripsi' => 'Gunung berapi aktif yang bentuknya menyerupai perahu terbalik ini sangat ikonik berkat legenda Sangkuriang. Daya tarik utamanya meliputi Kawah Ratu, Kawah Domas, dan Kawah Upas.'
        ],
        2 => [
            'nama' => 'Gunung Papandayan',
            'lokasi' => 'Cisurupan, Garut',
            'harga' => 'Rp 20.000 - Rp 30.000',
            'rating' => '4.7',
            'gambar' => 'public/images/safari.jpeg',
            'deskripsi' => 'Gunung berapi yang ramah bagi pendaki pemula. Spot populer di sini adalah Kawah Mas, Hutan Mati, serta Padang Edelweis Tegal Alun yang indah.'
        ],
        3 => [
            'nama' => 'Taman Nasional Gunung Ciremai',
            'lokasi' => 'Kuningan & Majalengka',
            'harga' => 'Rp 20.000',
            'rating' => '4.7',
            'gambar' => 'public/images/kawah.jpeg',
            'deskripsi' => 'Gunung tertinggi di Jawa Barat (3.078 mdpl) dengan keanekaragaman flora-fauna, jalur pendakian menantang, serta air terjun indah.'
        ],
        4 => [
            'nama' => 'Kawah Putih',
            'lokasi' => 'Pasirjambu, Kab. Bandung',
            'harga' => 'Rp 31.000',
            'rating' => '4.5',
            'gambar' => 'public/images/kawah.jpeg',
            'deskripsi' => 'Danau vulkanik di Gunung Patuha dengan air gradasi putih kebiruan atau kehijauan. Dikelilingi hutan mati dan tebing putih.'
        ],
        5 => [
            'nama' => 'Pantai Pangandaran',
            'lokasi' => 'Kabupaten Pangandaran',
            'harga' => 'Rp 10.000 - Rp 20.000',
            'rating' => '4.6',
            'gambar' => 'public/images/safari.jpeg',
            'deskripsi' => 'Pantai primadona pasir hitam dan putih dengan pemandangan sunset dan sunrise dari satu kawasan yang sama.'
        ],
        6 => [
            'nama' => 'Gedung Sate',
            'lokasi' => 'Kota Bandung',
            'harga' => 'Rp 5.000 (Museum)',
            'rating' => '4.7',
            'gambar' => 'public/images/tangkuban.jpeg',
            'deskripsi' => 'Ikon arsitektur kolonial Belanda 1920-an. Terdapat museum interaktif berbasis digital (AR/VR) dengan ornamen tusuk sate.'
        ],
        7 => [
            'nama' => 'Pantai Pelabuhan Ratu',
            'lokasi' => 'Kabupaten Sukabumi',
            'harga' => 'Rp 5.000 - Rp 20.000',
            'rating' => '4.6',
            'gambar' => 'public/images/kawah.jpeg',
            'deskripsi' => 'Kawasan pantai legendaris ombak Samudra Hindia. Surga peselancar dan kuliner seafood segar sarat legenda Nyi Roro Kidul.'
        ],
        8 => [
            'nama' => 'Kawah Talaga Bodas Garut',
            'lokasi' => 'Wanaraja, Garut',
            'harga' => 'Rp 10.000',
            'rating' => '4.4',
            'gambar' => 'public/images/safari.jpeg',
            'deskripsi' => 'Danau kawah vulkanik air putih susu kehijauan dengan fasilitas kolam rendam air panas alami.'
        ],
        9 => [
            'nama' => 'Sungai Citumang',
            'lokasi' => 'Parigi, Pangandaran',
            'harga' => 'Rp 15.000 - Rp 25.000',
            'rating' => '4.7',
            'gambar' => 'public/images/tangkuban.jpeg',
            'deskripsi' => 'Sungai jernih hijau kebiruan membelah hutan jati. Sangat populer untuk body rafting dan melompat tebing.'
        ],
        10 => [
            'nama' => 'Kampung Naga',
            'lokasi' => 'Salawu, Tasikmalaya',
            'harga' => 'Gratis (Donasi)',
            'rating' => '4.7',
            'gambar' => 'public/images/kawah.jpeg',
            'deskripsi' => 'Perkampungan adat Sunda tradisional tanpa listrik modern demi menjaga keaslian lingkungan dan tradisi leluhur.'
        ]
    ];

public function detail($id = 1) 
    {
        // Mengambil data berdasarkan ID, jika tidak ada default ke ID 1
        $data = $this->daftarWisata[$id] ?? $this->daftarWisata[1];
        
        // Memanggil view header, detail, dan footer
        $this->view('templates/header', $data);
        $this->view('wisata/detail', $data);
        $this->view('templates/footer', $data);
    }
}