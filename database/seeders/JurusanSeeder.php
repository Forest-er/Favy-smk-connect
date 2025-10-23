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
                'nama_jurusan' => 'Teknik Informatika',
                'deskripsi' => 'Mempelajari pengembangan perangkat lunak, algoritma, basis data, dan pemrograman komputer.',
            ],
            [
                'nama_jurusan' => 'Rekayasa Perangkat Lunak (RPL)',
                'deskripsi' => 'Fokus pada pembuatan, pengujian, dan pemeliharaan aplikasi serta sistem berbasis komputer.',
            ],
            [
                'nama_jurusan' => 'Teknik Komputer dan Jaringan (TKJ)',
                'deskripsi' => 'Mempelajari instalasi, konfigurasi, dan pengelolaan jaringan komputer serta perangkat keras.',
            ],
            [
                'nama_jurusan' => 'Multimedia',
                'deskripsi' => 'Berfokus pada desain grafis, animasi, editing video, dan produksi konten digital.',
            ],
            [
                'nama_jurusan' => 'Akuntansi dan Keuangan Lembaga',
                'deskripsi' => 'Mempelajari pembukuan, audit, dan manajemen keuangan dalam lembaga atau perusahaan.',
            ],
            [
                'nama_jurusan' => 'Manajemen Bisnis',
                'deskripsi' => 'Mempelajari strategi bisnis, manajemen sumber daya manusia, dan kewirausahaan.',
            ],
            [
                'nama_jurusan' => 'Perbankan dan Keuangan',
                'deskripsi' => 'Mempelajari operasional bank, investasi, dan manajemen keuangan modern.',
            ],
            [
                'nama_jurusan' => 'Desain Komunikasi Visual (DKV)',
                'deskripsi' => 'Fokus pada visual branding, ilustrasi, desain media, dan komunikasi visual kreatif.',
            ],
            [
                'nama_jurusan' => 'Teknik Elektronika Industri',
                'deskripsi' => 'Mempelajari sistem elektronik, otomatisasi, dan perawatan mesin industri.',
            ],
            [
                'nama_jurusan' => 'Teknik Otomotif',
                'deskripsi' => 'Fokus pada perawatan, perbaikan, dan rekayasa kendaraan bermotor.',
            ],
            [
                'nama_jurusan' => 'Teknik Listrik',
                'deskripsi' => 'Mempelajari sistem tenaga listrik, instalasi, dan distribusi energi listrik.',
            ],
            [
                'nama_jurusan' => 'Teknik Sipil',
                'deskripsi' => 'Berfokus pada perancangan, pembangunan, dan perawatan infrastruktur fisik seperti gedung dan jalan.',
            ],
            [
                'nama_jurusan' => 'Farmasi',
                'deskripsi' => 'Mempelajari obat-obatan, kimia farmasi, dan pelayanan kesehatan.',
            ],
            [
                'nama_jurusan' => 'Kesehatan dan Keperawatan',
                'deskripsi' => 'Mempelajari pelayanan medis dasar, perawatan pasien, dan etika keperawatan.',
            ],
            [
                'nama_jurusan' => 'Pariwisata dan Perhotelan',
                'deskripsi' => 'Fokus pada pelayanan tamu, manajemen hotel, dan industri pariwisata.',
            ],
            [
                'nama_jurusan' => 'Tata Boga',
                'deskripsi' => 'Mempelajari seni memasak, penyajian makanan, dan manajemen dapur.',
            ],
            [
                'nama_jurusan' => 'Tata Busana',
                'deskripsi' => 'Mempelajari desain pakaian, pola jahit, dan produksi busana.',
            ],
            [
                'nama_jurusan' => 'Perikanan dan Kelautan',
                'deskripsi' => 'Berfokus pada budidaya ikan, konservasi laut, dan teknologi perikanan.',
            ],
            [
                'nama_jurusan' => 'Agribisnis dan Pertanian',
                'deskripsi' => 'Mempelajari pengelolaan hasil pertanian, pemasaran, dan kewirausahaan agribisnis.',
            ],
            [
                'nama_jurusan' => 'Bahasa dan Sastra Indonesia',
                'deskripsi' => 'Mempelajari bahasa Indonesia, sastra, linguistik, dan penulisan kreatif.',
            ],
            [
                'nama_jurusan' => 'Bahasa Inggris',
                'deskripsi' => 'Fokus pada keterampilan berbahasa Inggris, linguistik, dan komunikasi global.',
            ],
            [
                'nama_jurusan' => 'Hukum',
                'deskripsi' => 'Mempelajari sistem hukum, peraturan, dan keadilan di masyarakat.',
            ],
            [
                'nama_jurusan' => 'Psikologi',
                'deskripsi' => 'Fokus pada studi perilaku manusia, kepribadian, dan kesehatan mental.',
            ],
            [
                'nama_jurusan' => 'Pendidikan Guru Sekolah Dasar (PGSD)',
                'deskripsi' => 'Mempersiapkan tenaga pendidik profesional untuk jenjang sekolah dasar.',
            ],
        ]);
    }
}

