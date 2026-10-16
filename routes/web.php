<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/profil');

Route::get('/profil', function () {
    $data = [
        'nama' => 'Maulidin Munir',
        'peran' => 'Fullstack Laravel Developer',
        'statistik' => [
            ['angka' => '100%', 'label' => 'Laravel Artisan Code'],
            ['angka' => '10+', 'label' => 'Modul Selesai'],
            ['angka' => '0.05s', 'label' => 'Waktu Muat Rata-rata'],
            ['angka' => '24/7', 'label' => 'Server Active'],
        ],
        'keahlian' => [
            'Laravel 11 & Blade Architecture' => 92,
            'PHP 8.5 & Object-Oriented Programming' => 88,
            'Tailwind CSS & Responsive UI/UX' => 95,
            'SQLite / MySQL Database Optimization' => 85,
        ],
        'proyek' => [
            [
                'judul' => 'Sistem Informasi Akademik Kampus',
                'tech' => 'Laravel 11 & SQLite',
                'kategori' => 'system',
                'deskripsi' => 'Aplikasi manajemen data mahasiswa, kurikulum, dan nilai terpadu dengan arsitektur database modern.'
            ],
            [
                'judul' => 'Portofolio Interactive Dashboard',
                'tech' => 'Laravel Blade & Tailwind',
                'kategori' => 'laravel',
                'deskripsi' => 'Dashboard web personal modern dengan arsitektur MVC dinamis berbasis Tailwind CSS Glassmorphism.'
            ]
        ]
    ];

    return view('profil', $data);
});
