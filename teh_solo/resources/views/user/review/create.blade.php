@extends('/layouts.template')
@section('base')

{{-- Halaman Form Review --}}
<div class="container">
    <form action="/ulasan/store" method="POST">
        @csrf
        <div class="m-5">
            <h1 class="text-center">Ulasan</h1>
            <p class="text-center pt-2">Silahkan masukan ulasan Anda, kami dengan senang hati akan mendengarkan ulasan Anda. Kami
                sangat menghargai waktu dan pandangan Anda, yang akan membantu kami terus memberikan layanan terbaik. Terima
                kasih atas kontribusi Anda!</p>
                <div class="form-group pb-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan nama anda">
                </div>
            <div class="form-group pb-3">
                <label for="rating">Rating:</label>
                <select class="form-control" id="rating" name="rating" required>
                    <option value="" disabled selected>Pilih rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group pb-3">
                <label for="ulasan">Ulasan:</label>
                <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required placeholder="Masukan ulasan anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
        </div>
    </form>
</div>

@endsection
