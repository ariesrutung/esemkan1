<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    public function run(): void
    {
        $jurusanKetua = [
            'Akuntansi' => 'ALMAYOKE WADAMOMI RAMANDEI',
            'Layanan Perbankan' => 'ALMENDITA FLORA WENDELMOOD ARSAI',
            'Manajemen Perkantoran' => 'ANDRE PABISA',
            'Manajemen Logistik' => 'CHRISYANTI SULINGALLO',
            'Bisnis Ritel' => '	DEBORA MELINDA UNGSILIA',
            'Usaha Layanan Pariwisata' => 'DEVI WULANDARI',
        ];

        $materi = [
            'Akuntansi' => [
                'X' => [
                    '1' => ['Pengantar Akuntansi', 'Dasar-dasar pencatatan transaksi keuangan.'],
                    '2' => ['Siklus Akuntansi Perusahaan Jasa', 'Prosedur dan tahapan akuntansi untuk perusahaan jasa.'],
                ],
                'XI' => [
                    '1' => ['Akuntansi Perusahaan Dagang', 'Pencatatan transaksi perusahaan dagang.'],
                    '2' => ['Penyesuaian dan Laporan Keuangan', 'Penyusunan jurnal penyesuaian dan laporan akhir.'],
                ],
                'XII' => [
                    '1' => ['Akuntansi Perusahaan Manufaktur', 'Pencatatan akuntansi pada perusahaan produksi.'],
                    '2' => ['Analisis Laporan Keuangan', 'Menilai kesehatan keuangan berdasarkan laporan.'],
                ],
            ],
            'Layanan Perbankan' => [
                'X' => [
                    '1' => ['Pengenalan Perbankan', 'Dasar-dasar industri perbankan.'],
                    '2' => ['Produk dan Layanan Bank', 'Jenis-jenis produk tabungan dan pinjaman.'],
                ],
                'XI' => [
                    '1' => ['Operasional Teller dan Customer Service', 'Tugas frontliner di bank.'],
                    '2' => ['Administrasi Kredit', 'Pengelolaan dan prosedur pemberian kredit.'],
                ],
                'XII' => [
                    '1' => ['Layanan Elektronik Perbankan', 'Teknologi digital dalam layanan bank.'],
                    '2' => ['Etika dan Profesionalisme Perbankan', 'Standar etika dalam layanan keuangan.'],
                ],
            ],
            'Manajemen Perkantoran' => [
                'X' => [
                    '1' => ['Dasar Administrasi Perkantoran', 'Pengenalan pekerjaan kantor.'],
                    '2' => ['Pengelolaan Dokumen', 'Prosedur pengarsipan dan penyimpanan.'],
                ],
                'XI' => [
                    '1' => ['Korespondensi Bisnis', 'Penulisan surat resmi kantor.'],
                    '2' => ['Pengelolaan Jadwal dan Agenda', 'Manajemen waktu dan agenda pimpinan.'],
                ],
                'XII' => [
                    '1' => ['Administrasi Kepegawaian', 'Pengelolaan data dan dokumen pegawai.'],
                    '2' => ['Teknologi Perkantoran Modern', 'Penggunaan perangkat digital di kantor.'],
                ],
            ],
            'Manajemen Logistik' => [
                'X' => [
                    '1' => ['Pengenalan Logistik', 'Dasar manajemen rantai pasok.'],
                    '2' => ['Penyimpanan dan Distribusi', 'Pengelolaan gudang dan distribusi.'],
                ],
                'XI' => [
                    '1' => ['Manajemen Inventaris', 'Pendataan dan kontrol barang.'],
                    '2' => ['Prosedur Pengadaan Barang', 'Tahapan pembelian barang logistik.'],
                ],
                'XII' => [
                    '1' => ['Analisis Kebutuhan Logistik', 'Menghitung kebutuhan berdasarkan data.'],
                    '2' => ['Sistem Informasi Logistik', 'Penggunaan software dalam logistik.'],
                ],
            ],
            'Bisnis Ritel' => [
                'X' => [
                    '1' => ['Dasar Bisnis Ritel', 'Pengenalan ritel dan jenis usaha kecil.'],
                    '2' => ['Pelayanan Konsumen', 'Teknik melayani pelanggan secara profesional.'],
                ],
                'XI' => [
                    '1' => ['Pengelolaan Persediaan Ritel', 'Kontrol stok dan barang dagangan.'],
                    '2' => ['Tata Letak dan Penataan Produk', 'Strategi display dan promosi produk.'],
                ],
                'XII' => [
                    '1' => ['Manajemen Usaha Ritel', 'Strategi manajemen toko.'],
                    '2' => ['Analisis Penjualan dan Laba', 'Evaluasi performa usaha ritel.'],
                ],
            ],
            'Usaha Layanan Pariwisata' => [
                'X' => [
                    '1' => ['Dasar Kepariwisataan', 'Konsep dasar industri wisata.'],
                    '2' => ['Pelayanan Prima', 'Standar layanan wisatawan.'],
                ],
                'XI' => [
                    '1' => ['Pemanduan Wisata', 'Teknik menjadi tour guide profesional.'],
                    '2' => ['Manajemen Perjalanan Wisata', 'Membuat paket dan itinerary wisata.'],
                ],
                'XII' => [
                    '1' => ['Promosi Destinasi Pariwisata', 'Strategi pemasaran objek wisata.'],
                    '2' => ['Bisnis Pariwisata Digital', 'Memanfaatkan media digital dalam pariwisata.'],
                ],
            ],
        ];

        $data = [];

        foreach ($materi as $jurusan => $kelasData) {
            foreach ($kelasData as $kelas => $semesterData) {
                foreach ($semesterData as $semester => [$judul, $uraian]) {
                    $data[] = [
                        'kelas' => $kelas,
                        'semester' => $semester,
                        'judul_materi' => $judul,
                        'uraian_singkat' => $uraian,
                        'nama_ketua_jurusan' => $jurusanKetua[$jurusan],
                        'gambar' => 'default.png',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        }

        DB::table('courses')->insert($data);
    }
}
