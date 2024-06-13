<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(2)->create();

        User::create([
            'name' => 'Ridwan Hanif',
            'email' => 'ridwan@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin1'),
            'role' => 'admin',
        ]);

        Layanan::create([
            'name' => 'Pelaporan'
        ]);

        Layanan::create([
            'name' => 'Konsultasi'
        ]);

        Laporan::create([
            'user_id' => 3,
            'nama_pelapor' => 'Ridwan Hanif',
            'gender_pelapor' => 'laki-laki',
            'no_iden_pelapor' => '2151508762522123',
            'prodi_pelapor' => 'TI',
            'no_hp_pelapor' => '085252678534',
            'email_pelapor' => 'ridwan@gmail.com',
            'nama_korban' => 'Bunga Cinta',
            'gender_korban' => 'perempuan',
            'no_iden_korban' => '205057592282322',
            'prodi_korban' => 'SI',
            'no_hp_korban' => '081567834529',
            'email_korban' => 'bunga@yahoo.co.id',
            'perihal' => 'Kekerasan Seksual secara verbal',
            'lokasi_kejadian' => 'Gedung GKM Lantai 3',
            'deskripsi_kejadian' => 'Pelaku secara sengaja melakukan tindakan yang tidak menyenangkan kepada korban, dengan cara menyampaikan kata-kata bersifat buruk dan sedikit menyinggung ke arah seksual',
            'tgl_waktu_kejadian' => '22 Oktober 2022',
            'image' => 'https.image.com'
        ]);

        Laporan::create([
            'user_id' => 3,
            'nama_pelapor' => 'Ridwan Hanif',
            'gender_pelapor' => 'laki-laki',
            'no_iden_pelapor' => '2151508762522123',
            'prodi_pelapor' => 'TI',
            'no_hp_pelapor' => '085252678534',
            'email_pelapor' => 'ridwan@gmail.com',
            'nama_korban' => 'Siska Reyna',
            'gender_korban' => 'perempuan',
            'no_iden_korban' => '205057553258902',
            'prodi_korban' => 'PTI',
            'no_hp_korban' => '0825648376429',
            'email_korban' => 'siska@yahoo.co.id',
            'perihal' => 'Kekerasan Seksual secara fisik',
            'lokasi_kejadian' => 'Gedung F Lantai 4',
            'deskripsi_kejadian' => 'Pelaku secara sengaja menyentuh bagian sensitif dari korban',
            'tgl_waktu_kejadian' => '21 November 2022',
            'image' => 'https.image.com'
        ]);

        Laporan::create([
            'user_id' => 3,
            'nama_pelapor' => 'Agus Setiawan',
            'gender_pelapor' => 'laki-laki',
            'no_iden_pelapor' => '2151508762522123',
            'prodi_pelapor' => 'TI',
            'no_hp_pelapor' => '085252678534',
            'email_pelapor' => 'ridwan@gmail.com',
            'nama_korban' => 'Bunga Cinta',
            'gender_korban' => 'perempuan',
            'no_iden_korban' => '205057592282322',
            'prodi_korban' => 'SI',
            'no_hp_korban' => '081567834529',
            'email_korban' => 'bunga@yahoo.co.id',
            'perihal' => 'Kekerasan Seksual secara verbal',
            'lokasi_kejadian' => 'Gedung GKM Lantai 3',
            'deskripsi_kejadian' => 'Pelaku secara sengaja melakukan tindakan yang tidak menyenangkan kepada korban, dengan cara menyampaikan kata-kata bersifat buruk dan sedikit menyinggung ke arah seksual',
            'tgl_waktu_kejadian' => '22 Oktober 2022',
            'image' => 'https.image.com'
        ]);
    }
}
