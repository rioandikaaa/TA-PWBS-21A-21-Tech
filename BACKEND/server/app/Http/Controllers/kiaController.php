<?php
// app/Http/Controllers/KiaController.php
namespace App\Http\Controllers;
use App\Models\Mkia;
use Illuminate\Http\Request;

class KiaController extends Controller
{
    protected $model;   

    function __construct()
    {
        $this->model = new Mkia();
    }

    // Fungsi untuk mendapatkan semua data anak
    public function index()
    {
        $result = $this->model->getData();
        return response(["data_anak" => $result], 200);
    }

    // Fungsi untuk mencari data anak berdasarkan keyword
    public function search($keyword)
    {
        $result = $this->model->searchData($keyword);
        return response(["data_anak" => $result], 200);
    }
    // Fungsi untuk mendapatkan detail data anak berdasarkan nomer antri
    public function show($nomer_antri)
    {
        $result = $this->model->detailData($nomer_antri);
        return response(["data_anak" => $result], 200);
    }

    // Fungsi untuk menghapus data anak berdasarkan nomer antri
    public function destroy($nomer_antri)
{
    try {
        $result = $this->model->deleteData($nomer_antri);
        $status = 1;
        $message = "Data Berhasil Dihapus";
    } catch (\Exception $e) {
        $status = 0;
        $message = "Error: " . $e->getMessage();
    }

    return response(["status" => $status, "message" => $message], 200);
}


    
}
