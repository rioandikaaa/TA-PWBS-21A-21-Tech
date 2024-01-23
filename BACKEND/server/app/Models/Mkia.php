<?php
// app/Models/Mkia.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mkia extends Model
{
    protected $table = 'data_anak';
    protected $primaryKey = 'nomer_antri';
    public $timestamps = false;

    protected $fillable = [
        'nama_ibu', 'nama_anak', 'alamat', 'status_anak', 'tinggi_badan', 'berat_badan'
    ];
    protected $casts = [
        'tinggi_badan' => 'decimal:2', // Menentukan bahwa tipe data tinggi_badan adalah decimal dengan 2 digit di belakang koma
        'berat_badan' => 'decimal:2', // Menentukan bahwa tipe data berat_badan adalah decimal dengan 2 digit di belakang koma
    ];

    // Fungsi untuk mendapatkan semua data anak
    public function getData()
    {
        return self::all();
    }

<<<<<<< HEAD
    // Fungsi untuk mencari data anak berdasarkan keyword
    public function searchData($keyword)
    {
        return self::where('nama_anak', 'LIKE', "%$keyword%")
            ->orWhere('nama_ibu', 'LIKE', "%$keyword%")
            ->get();
    }

    // Fungsi untuk mendapatkan detail data anak berdasarkan nomer antri
    public function detailData($nomer_antri)
    {
        return self::find($nomer_antri);
    }

    // Fungsi untuk menghapus data anak berdasarkan nomer antri
    public function deleteData($nomer_antri)
    {
        return self::destroy($nomer_antri);
    }

        // Fungsi untuk menyimpan data anak baru
        public function saveData($nama_ibu, $nama_anak, $alamat, $status_anak, $tinggi_badan, $berat_badan)
        {
            return self::create([
                'nama_ibu' => $nama_ibu,
                'nama_anak' => $nama_anak,
                'alamat' => $alamat,
                'status_anak' => $status_anak,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
            ]);
        }
    
        // Fungsi untuk memeriksa apakah data anak dapat diupdate
        public function checkUpdateData($nama_anak, $nomer_antri)
        {
            return self::where('nama_anak', $nama_anak)
                ->where('nomer_antri', '!=', $nomer_antri)
                ->count();
        }

            // Fungsi untuk mengupdate data anak berdasarkan nomer antri
    public function updateData($nama_ibu, $nama_anak, $alamat, $status_anak, $tinggi_badan, $berat_badan, $nomer_antri)
    {
        return self::where('nomer_antri', $nomer_antri)
            ->update([
                'nama_ibu' => $nama_ibu,
                'nama_anak' => $nama_anak,
                'alamat' => $alamat,
                'status_anak' => $status_anak,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
            ]);
    }
    
    
}
=======
   
}
>>>>>>> origin/master-rio
