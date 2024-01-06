<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Mmahasiswa extends Model
{
   //use HasFactory;
   function getData()
   {
        
        $query = DB::table('tb_kia')
        ->select("id as nomer antri","nama ibu as nama_ibu","nama anak as nama_anak","alamat as alamat",
        "status as status_anak" ,"tinggi as tinggi_badan","berat as berat_badan")
        ->orderBy("id")
         ->get();

        
        return $query;
   }

}