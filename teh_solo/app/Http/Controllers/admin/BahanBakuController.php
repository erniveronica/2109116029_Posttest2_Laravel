<?php

// namespace untuk controller admin
namespace App\Http\Controllers\admin;

// Impor kelas Controller dari namespace global
use App\Http\Controllers\Controller;
use App\Models\Bahan_Baku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dari bahan baku dan menyimpan didalam variabel bahan
        $bahan = DB::table('bahan_baku')->get();

        // Manampilkan halaman
        return view ('admin.bahan_baku.index',['bahan' => $bahan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Manampilkan halaman
        return view('admin.bahan_baku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Menyimpanan data
        DB::table('bahan_baku')->insert([
            'nama' => $request -> nama,
            'satuan' => $request -> satuan,
            'jumlah' => $request -> jumlah,
            'harga' => $request -> harga,
            'tanggal_pembelian' => $request -> tanggal_pembelian
        ]);

        return redirect('/bahan_baku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
