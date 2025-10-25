<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->insert([
             [
                'users_id' => 1,
                'judul' => 'Desain UI Dashboard Aplikasi Freelance',
                'foto' => 'ui_dashboard.png',
                'deskripsi' => 'Membuat desain dashboard aplikasi freelance dengan tampilan modern dan user friendly.',
                'jurusan_id' => 2,
                'deadline' => '2025-11-15',
                'waktu_estimasi' => '5 hari',
                'status' => 'open',
                'budget' => 1500000.00,
            ],
            [
                'users_id' => 2,
                'judul' => 'Pembuatan Website Portfolio Pribadi',
                'foto' => 'portfolio_web.png',
                'deskripsi' => 'Membangun website portfolio responsif menggunakan HTML, CSS, dan JavaScript.',
                'jurusan_id' => 4,
                'deadline' => '2025-12-01',
                'waktu_estimasi' => '7 hari',
                'status' => 'open',
                'budget' => 2500000.00,
            ],
            [
                'users_id' => 1,
                'judul' => 'Edit Video Promosi Produk',
                'foto' => 'video_edit.png',
                'deskripsi' => 'Mengedit video promosi berdurasi 1 menit dengan efek transisi yang halus.',
                'jurusan_id' => 3,
                'deadline' => '2025-11-05',
                'waktu_estimasi' => '3 hari',
                'status' => 'in_progress',
                'budget' => 800000.00,
            ],
            [
                'users_id' => 2,
                'judul' => 'Desain Logo Brand Kuliner',
                'foto' => 'logo_kuliner.png',
                'deskripsi' => 'Membuat logo minimalis untuk brand kuliner dengan konsep warm dan modern.',
                'jurusan_id' => 6,
                'deadline' => '2025-11-10',
                'waktu_estimasi' => '2 hari',
                'status' => 'done',
                'budget' => 500000.00,
            ],
            [
                'users_id' => 1,
                'judul' => 'Develop Landing Page Startup',
                'foto' => 'landing_startup.png',
                'deskripsi' => 'Membuat landing page untuk startup dengan animasi interaktif.',
                'jurusan_id' => 7,
                'deadline' => '2025-11-20',
                'waktu_estimasi' => '6 hari',
                'status' => 'open',
                'budget' => 2000000.00,
            ],
            [
                'users_id' => 2,
                'judul' => 'Ilustrasi Karakter Game 2D',
                'foto' => 'char_illustration.png',
                'deskripsi' => 'Membuat ilustrasi karakter chibi untuk game mobile dengan gaya lucu dan imut.',
                'jurusan_id' => 4,
                'deadline' => '2025-11-18',
                'waktu_estimasi' => '4 hari',
                'status' => 'open',
                'budget' => 1200000.00,
            ],
            [
                'users_id' => 1,
                'judul' => 'Optimasi SEO Website UMKM',
                'foto' => 'seo_umkm.png',
                'deskripsi' => 'Melakukan optimasi SEO untuk website UMKM agar muncul di halaman pertama Google.',
                'jurusan_id' => 1,
                'deadline' => '2025-12-02',
                'waktu_estimasi' => '10 hari',
                'status' => 'in_progress',
                'budget' => 1800000.00,
            ],
            [
                'users_id' => 2,
                'judul' => 'Desain Poster Event Kampus',
                'foto' => 'poster_event.png',
                'deskripsi' => 'Desain poster untuk acara seminar teknologi kampus dengan tema futuristik.',
                'jurusan_id' => 1,
                'deadline' => '2025-11-03',
                'waktu_estimasi' => '1 hari',
                'status' => 'done',
                'budget' => 300000.00,
            ],
            [
                'users_id' => 1,
                'judul' => 'Pembuatan Bot Telegram Reminder',
                'foto' => 'telegram_bot.png',
                'deskripsi' => 'Membuat bot Telegram untuk mengingatkan jadwal meeting secara otomatis.',
                'jurusan_id' => 1,
                'deadline' => '2025-11-25',
                'waktu_estimasi' => '3 hari',
                'status' => 'open',
                'budget' => 1000000.00,
            ],
            [
                'users_id' => 2,
                'judul' => 'Animasi Logo Intro YouTube Channel',
                'foto' => 'logo_intro.gif',
                'deskripsi' => 'Membuat animasi logo 3 detik untuk intro channel YouTube dengan efek cinematic.',
                'jurusan_id' => 1,
                'deadline' => '2025-11-30',
                'waktu_estimasi' => '2 hari',
                'status' => 'open',
                'budget' => 700000.00,
            ],
        ]);
    }
}
