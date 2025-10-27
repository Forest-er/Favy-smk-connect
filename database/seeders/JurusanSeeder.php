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
                'deskripsi_1' => 'web developer',
                'deskripsi_2' => 'mobile developer',
                'deskripsi_3' => 'software engineer',
            ],
            [
                'nama_jurusan' => 'Teknik Komputer dan Jaringan (TKJ)',
                'deskripsi_1' => 'teknisi komputer',
                'deskripsi_2' => 'network administrator',
                'deskripsi_3' => 'freelance IT support',
            ],
            [
                'nama_jurusan' => 'Desain Komunikasi Visual (DKV)',
                'deskripsi_1' => 'desainer grafis',
                'deskripsi_2' => 'ilustrator',
                'deskripsi_3' => 'UI/UX freelancer',
            ],
            [
                'nama_jurusan' => 'Multimedia',
                'deskripsi_1' => 'editor video',
                'deskripsi_2' => 'animator',
                'deskripsi_3' => 'content creator freelance',
            ],
            [
                'nama_jurusan' => 'Game Development',
                'deskripsi_1' => 'game developer',
                'deskripsi_2' => 'game artist freelance',
                'deskripsi_3' => 'game designer',
            ],
            [
                'nama_jurusan' => 'Digital Marketing',
                'deskripsi_1' => 'digital marketer',
                'deskripsi_2' => 'social media manager',
                'deskripsi_3' => 'SEO specialist freelance',
            ],
            [
                'nama_jurusan' => 'Desain UI/UX',
                'deskripsi_1' => 'UI/UX designer freelance',
                'deskripsi_2' => 'startup',
                'deskripsi_3' => 'agensi luar negeri',
            ],
            [
                'nama_jurusan' => 'Artificial Intelligence',
                'deskripsi_1' => 'AI engineer',
                'deskripsi_2' => 'data consultant',
                'deskripsi_3' => 'machine learning specialist',
            ],
            [
                'nama_jurusan' => 'Internet of Things (IoT)',
                'deskripsi_1' => 'IoT developer',
                'deskripsi_2' => 'embedded system engineer freelance',
                'deskripsi_3' => 'Technical Consultant',
            ],
            [
                'nama_jurusan' => 'Teknologi Rekayasa Internet',
                'deskripsi_1' => 'web engineer',
                'deskripsi_2' => 'backend developer freelance',
                'deskripsi_3' => 'cloud architect',
            ],
            [
                'nama_jurusan' => 'Produksi Film dan Televisi',
                'deskripsi_1' => 'video editor',
                'deskripsi_2' => 'VFX artist',
                'deskripsi_3' => 'cinematographer freelance',
            ],
            [
                'nama_jurusan' => 'Creative Media Production',
                'deskripsi_1' => 'content creator',
                'deskripsi_2' => 'digital storyteller freelance',
                'deskripsi_3' => 'media producer',
            ],
        ]);
    }
}

