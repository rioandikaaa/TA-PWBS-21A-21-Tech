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
    // Fungsi untuk mengupdate data anak berdasarkan nomer antri
    public function update(Request $req, $nomer_antri)
    {
        // Validasi data
        $req->validate([
            'nama_ibu' => 'required',
            'nama_anak' => 'required',
            'alamat' => 'required',
            'status_anak' => 'required',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
        ]);
    
        // Ambil data input dari request
        $data = [
            "nama_ibu" => $req->nama_ibu,
            "nama_anak" => $req->nama_anak,
            "alamat" => $req->alamat,
            "status_anak" => $req->status_anak,
            "tinggi_badan" => $req->tinggi_badan,
            "berat_badan" => $req->berat_badan,
        ];
    
        // Panggil metode updateData dari model
        $result = $this->model->updateData($data, $nomer_antri);
    
        if ($result) {
            $status = 1;
            $message = "Data Berhasil Diubah";
        } else {
            $status = 0;
            $message = "Data Gagal Diubah";
        }
    
        return response(["status" => $status, "message" => $message], 200);
    }


    // Fungsi untuk menghasilkan nomer_antri unik
    private function generateNomerAntri()
    {
        // Logika untuk menghasilkan nomer_antri unik, misalnya menggunakan timestamp atau logika lainnya.
        return time();
    }

    
}
