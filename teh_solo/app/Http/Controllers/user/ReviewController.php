<?php

// namespace untuk controller user
namespace App\Http\Controllers\user;

// Impor kelas Controller dari namespace global
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  ORM
    public function index()
    {
        // Mengambil semua data dari review dan menyimpan didalam variabel review
        $review = Review::all();

        // Manampilkan halaman
        return view('user.review.index', compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Manampilkan halaman
        return view('user.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Membuat record didalam database (kecuali element token dan submit)
        Review::create($request->except(['_token', 'submit']));

        // Mengalihkan kehalaman
        return redirect('/ulasan');
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
