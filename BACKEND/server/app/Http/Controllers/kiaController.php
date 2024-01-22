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

    // Fungsi untuk menyimpan data anak baru
    public function store(Request $request)
{
    try {
        // Validasi input di sini jika diperlukan

        $data = [
            "nama_ibu" => $request->input('nama_ibu'),
            "nama_anak" => $request->input('nama_anak'),
            "alamat" => $request->input('alamat'),
            "status_anak" => $request->input('status_anak'),
            "tinggi_badan" => $request->input('tinggi_badan'),
            "berat_badan" => $request->input('berat_badan'),
        ];

        // Anda bisa menggunakan generateNomerAntri atau cara lain untuk mendapatkan ID unik
        $nomer_antri = $this->generateNomerAntri();

        // Periksa keberadaan data berdasarkan nomer_antri
        if ($this->model->detailData($nomer_antri)) {
            return response(["status" => 0, "message" => "Data Gagal Disimpan! (ID Sudah Ada)"], 422);
        }

        // Simpan data ke dalam database
        $this->model->saveData(
            $data["nama_ibu"],
            $data["nama_anak"],
            $data["alamat"],
            $data["status_anak"],
            $data["tinggi_badan"],
            $data["berat_badan"]
        );

        return response(["status" => 1, "message" => "Data Berhasil Disimpan"], 200);

    } catch (\Exception $e) {
        // Tangani kesalahan dan kirimkan HTTP response yang sesuai
        return response(["status" => 0, "message" => "Error: " . $e->getMessage()], 500);
    }
}


    
}
