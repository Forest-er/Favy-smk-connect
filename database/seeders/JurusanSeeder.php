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
                'deskripsi' => 'Mempelajari cara membuat, mengembangkan, dan menguji perangkat lunak. Cocok untuk menjadi web developer, mobile app developer, atau game developer freelance.',
            ],
            [
                'nama_jurusan' => 'Teknik Komputer dan Jaringan (TKJ)',
                'deskripsi' => 'Fokus pada perakitan komputer, instalasi sistem operasi, serta pengelolaan jaringan. Cocok untuk menjadi teknisi komputer atau network administrator freelance.',
            ],
            [
                'nama_jurusan' => 'Desain Komunikasi Visual (DKV)',
                'deskripsi' => 'Mempelajari seni visual dan desain digital. Cocok untuk menjadi desainer grafis, ilustrator, atau UI/UX freelancer.',
            ],
            [
                'nama_jurusan' => 'Multimedia',
                'deskripsi' => 'Mempelajari pengolahan video, animasi, dan audio digital. Banyak lulusan bekerja sebagai editor video, animator, atau content creator freelance.',
            ],
            [
                'nama_jurusan' => 'Game Development',
                'deskripsi' => 'Mempelajari cara membuat game dari konsep, desain, hingga pemrograman. Cocok untuk menjadi game developer atau game artist freelance.',
            ],
            [
                'nama_jurusan' => 'Digital Marketing',
                'deskripsi' => 'Belajar strategi pemasaran melalui media digital. Cocok untuk menjadi digital marketer, social media manager, atau SEO specialist freelance.',
            ],
            [
                'nama_jurusan' => 'Desain UI/UX',
                'deskripsi' => 'Mempelajari desain antarmuka dan pengalaman pengguna digital. Cocok untuk UI/UX designer freelance di startup atau agensi luar negeri.',
            ],
            [
                'nama_jurusan' => 'Artificial Intelligence',
                'deskripsi' => 'Fokus pada pembelajaran mesin, neural network, dan otomatisasi. Cocok untuk menjadi AI engineer atau data consultant.',
            ],
            [
                'nama_jurusan' => 'Internet of Things (IoT)',
                'deskripsi' => 'Belajar membuat sistem yang menghubungkan perangkat fisik ke internet. Cocok untuk IoT developer atau embedded system engineer freelance.',
            ],
            [
                'nama_jurusan' => 'Teknologi Rekayasa Internet',
                'deskripsi' => 'Fokus pada pengembangan aplikasi berbasis web dan cloud. Cocok untuk menjadi web engineer atau backend developer freelance.',
            ],
            [
                'nama_jurusan' => 'Produksi Film dan Televisi',
                'deskripsi' => 'Belajar sinematografi, penyuntingan, dan efek visual. Cocok untuk menjadi video editor, VFX artist, atau cinematographer freelance.',
            ],
            [
                'nama_jurusan' => 'Creative Media Production',
                'deskripsi' => 'Menggabungkan produksi konten kreatif dan storytelling digital. Cocok untuk creative producer atau motion designer freelance.',
            ],
        ]);
    }
}

