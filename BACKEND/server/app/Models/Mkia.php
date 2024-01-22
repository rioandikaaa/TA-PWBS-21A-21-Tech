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

    
}