@extends('/layouts.admin')
@section('base')

{{-- Halaman Form Bahan Baku --}}
<div class="container">
    <form action="/bahan_baku/store" method="POST">
        @csrf
        <div class="m-5">
            <h1 class="text-center">Bahan Baku</h1>
            <p class="text-center p-3">Silahkan input data bahan baku, pastikan data yang diinputkan benar dan sesuai
                dengan spesifikasinya untuk memastikan kelancaran proses produksi. Pastikan juga harga dan jumlah
                diinput sesuai (tanpa menggunakan koma atau titik) agar dapat meminimalkan risiko kesalahan dalam
                perhitungan.
            </p>
            <div class="pb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required
                    placeholder="Masukkan nama bahan baku">
            </div>

            <div class="row mb-3 pb-3">
                <div class="col-md-6">
                    <label for="jumlah" class="form-label">Jumlah:</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required
                        placeholder="Masukkan jumlah" min="1">
                </div>

                <div class="col-md-6 pb-3">
                    <label for="satuan" class="form-label">Satuan:</label>
                    <select class="form-select" id="satuan" name="satuan" required>
                        <option value="" disabled selected>Pilih satuan</option>
                        <option value="Kilogram (kg)">Kilogram (kg)</option>
                        <option value="Gram (g)">Gram (g)</option>
                        <option value="Ounce (ons)">Ounce (ons)</option>
                        <option value="Mililiter (ml)">Mililiter (ml)</option>
                        <option value="liter (l)">Liter (l)</option>
                        <option value="Bungkus">Bungkus</option>
                        <option value="Kotak">Kotak</option>
                        <option value="Buah">Buah</option>
                    </select>
                </div>

                <div class="col-md-6 pb-3">
                    <label for="harga" class="form-label">Harga:</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" id="harga" name="harga" required
                            placeholder="Masukkan harga tanpa koma atau titik (contoh 50000)" min="1">
                    </div>
                </div>


                <div class="col-md-6 pb-4">
                    <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian:</label>
                    <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>

@endsection
