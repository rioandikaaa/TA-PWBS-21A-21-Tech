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
    

    
}
