<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jurusans')->insert([
            [
                'nama_jurusan' => 'Rekayasa Perangkat Lunak (RPL)',
                'deskripsi' => 'Jurusan yang berfokus pada pembuatan, pengembangan, dan pemeliharaan perangkat lunak, baik berbasis web, desktop, maupun mobile.',
                'deskripsi_1' => 'web developer',
                'deskripsi_2' => 'mobile developer',
                'deskripsi_3' => 'software engineer',
            ],
            [
                'nama_jurusan' => 'Teknik Komputer dan Jaringan (TKJ)',
                'deskripsi' => 'Jurusan yang mempelajari cara merakit, mengonfigurasi, serta mengelola jaringan komputer dan sistem keamanan data.',
                'deskripsi_1' => 'teknisi komputer',
                'deskripsi_2' => 'network administrator',
                'deskripsi_3' => 'freelance IT support',
            ],
            [
                'nama_jurusan' => 'Desain Komunikasi Visual (DKV)',
                'deskripsi' => 'Jurusan yang menggabungkan seni dan teknologi untuk menyampaikan pesan visual secara efektif melalui media digital maupun cetak.',
                'deskripsi_1' => 'desainer grafis',
                'deskripsi_2' => 'ilustrator',
                'deskripsi_3' => 'UI/UX freelancer',
            ],
            [
                'nama_jurusan' => 'Multimedia',
                'deskripsi' => 'Jurusan yang mempelajari pembuatan media interaktif seperti video, animasi, desain grafis, dan konten digital.',
                'deskripsi_1' => 'editor video',
                'deskripsi_2' => 'animator',
                'deskripsi_3' => 'content creator freelance',
            ],
            [
                'nama_jurusan' => 'Game Development',
                'deskripsi' => 'Jurusan yang berfokus pada pembuatan game dari sisi pemrograman, desain karakter, hingga gameplay dan interaksi pengguna.',
                'deskripsi_1' => 'game developer',
                'deskripsi_2' => 'game artist freelance',
                'deskripsi_3' => 'game designer',
            ],
            [
                'nama_jurusan' => 'Digital Marketing',
                'deskripsi' => 'Jurusan yang mempelajari strategi pemasaran menggunakan media digital, termasuk SEO, iklan online, dan manajemen media sosial.',
                'deskripsi_1' => 'digital marketer',
                'deskripsi_2' => 'social media manager',
                'deskripsi_3' => 'SEO specialist freelance',
            ],
            [
                'nama_jurusan' => 'Desain UI/UX',
                'deskripsi' => 'Jurusan yang fokus pada pengalaman dan antarmuka pengguna dalam sebuah aplikasi atau website agar mudah digunakan dan menarik.',
                'deskripsi_1' => 'UI/UX designer freelance',
                'deskripsi_2' => 'startup',
                'deskripsi_3' => 'agensi luar negeri',
            ],
            [
                'nama_jurusan' => 'Artificial Intelligence',
                'deskripsi' => 'Jurusan yang mempelajari cara membuat sistem cerdas yang dapat belajar dan berpikir layaknya manusia menggunakan algoritma dan data.',
                'deskripsi_1' => 'AI engineer',
                'deskripsi_2' => 'data consultant',
                'deskripsi_3' => 'machine learning specialist',
            ],
            [
                'nama_jurusan' => 'Internet of Things (IoT)',
                'deskripsi' => 'Jurusan yang berfokus pada pengembangan perangkat pintar yang dapat saling terhubung dan berkomunikasi melalui internet.',
                'deskripsi_1' => 'IoT developer',
                'deskripsi_2' => 'embedded system engineer freelance',
                'deskripsi_3' => 'Technical Consultant',
            ],
            [
                'nama_jurusan' => 'Teknologi Rekayasa Internet',
                'deskripsi' => 'Jurusan yang menggabungkan aspek pemrograman, jaringan, dan cloud computing untuk menciptakan solusi teknologi berbasis internet.',
                'deskripsi_1' => 'web engineer',
                'deskripsi_2' => 'backend developer freelance',
                'deskripsi_3' => 'cloud architect',
            ],
            [
                'nama_jurusan' => 'Produksi Film dan Televisi',
                'deskripsi' => 'Jurusan yang mempelajari proses pembuatan film dan program televisi, mulai dari penulisan naskah hingga penyuntingan akhir.',
                'deskripsi_1' => 'video editor',
                'deskripsi_2' => 'VFX artist',
                'deskripsi_3' => 'cinematographer freelance',
            ],
            [
                'nama_jurusan' => 'Creative Media Production',
                'deskripsi' => 'Jurusan yang berfokus pada pembuatan konten kreatif seperti video digital, podcast, dan media sosial dengan pendekatan storytelling modern.',
                'deskripsi_1' => 'content creator',
                'deskripsi_2' => 'digital storyteller freelance',
                'deskripsi_3' => 'media producer',
            ],
        ]);
    }
}
