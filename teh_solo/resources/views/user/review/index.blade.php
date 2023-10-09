@extends('/layouts.template')
@section('base')

{{-- Halaman Review --}}
<div class="container p-5">
    <div class="pb-3">
        <a href="/ulasan/create" class="btn btn-primary"> + Tambah Ulasan</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center">Ulasan</h1>
            <p class="card-text text-center">Berikut merupakan ulasan dari pengguna tentang es teh solo (penikmat es teh solo).</p>

            @foreach ($review as $r)
                <div class="card m-4 "> <!-- Menambahkan kelas mb-3 untuk memberi ruang antar ulasan -->
                    <div class="card-body">
                        <h6 class="card-title">{{$r->nama}}</h6>
                        <p class="card-text">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $r->rating)
                                    <span style="color: #FFD700;">&#9733;</span> <!-- Bintang penuh -->
                                @else
                                    <span style="color: #FFD700;">&#9734;</span> <!-- Bintang kosong -->
                                @endif
                            @endfor
                        </p>
                        <p class="card-text">{{$r->ulasan}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
