<?php

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Mkia;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Mkia::create([
            'nama_ibu' => 'Nama Ibu Contoh',
            'nama_anak' => 'Nama Anak Contoh',
            'alamat' => 'Alamat Contoh',
            'status_anak' => 'Status Contoh',
            'tinggi_badan' => 160.5,
            'berat_badan' => 50.2,
        ]);

        // Tambahkan data lain jika diperlukan
    }
}
