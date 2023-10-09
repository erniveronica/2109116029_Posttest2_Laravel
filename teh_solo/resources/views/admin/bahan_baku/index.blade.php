@extends('layouts.admin')
@section('base')

{{-- Halaman Bahan Baku --}}
<div class="container my-5">
    <div class="pb-3">
        <a href="/bahan_baku/create" class="btn btn-primary"> + Tambahkan Bahan Baku</a>
    </div>
    <div class="card p-5">
        <h1 class="card-header text-center">Daftar Bahan Baku</h1>

        <div class="card-body table-responsive">
            <table class="table table table-bordered">
                <thead class="thead-light text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Pembelian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bahan as $item)
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td class="text-center">{{ $item->jumlah }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->tanggal_pembelian)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
