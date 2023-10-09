@extends('/layouts.admin')
@section('base')

{{-- Halaman Menus --}}
<div class="container">
    <h1 class="p-3 text-center ctm row justify-content-center pt-3">Menu Es Teh Solo</h1>
    <div class="row justify-content-center">
        <p class="text-center col-lg-9 p-3">
            Selamat datang di dunia rasa yang memikat dari Es Teh Solo! Kami menghadirkan beragam pilihan teh premium
            dengan sentuhan unik khas Solo. Nikmati kelezatan dan kesegaran dalam setiap sajian kami.
        </p>
    </div>

    <div class="row">
        <!-- ES TEH MANIS-->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_manis.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Manis</h5>
                            <p class=" rapi card-text">
                                Adalah bentuk penyajian teh dalam kondisi dingin. Biasanya disajikan dalam gelas yang
                                diberi es batu didalamnya, ini dapat merujuk ke teh apa saja yang telah diinginkan.
                            </p>
                            <p class="card-text"><small class="text-muted custom">Best Seller</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH KAMPOEL -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_manis.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Kampoel</h5>
                            <p class="rapi ard-text">
                                Adalah bentuk penyajian teh dalam kondisi dingin yang diberi sentuhan jeruk peras.
                                Disebut kampoel karena kondisi jeruk yang kampoel (mengembang dalam bahasa jawa)
                                didalamnya.
                            </p>
                            <p class="card-text"><small class="text-muted custom">Best Seller</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH TARIK -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_tarik.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Tarik</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh yang dicampurkan dengan susu dan krimer dalam kondisi
                                dingin. Sesuai dengan namanya, teh ini disajikan dengan menuang sambil ditarik tinggi ke
                                atas supaya lebih menarik pembeli.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH SUSU -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_susu.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Susu</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh yang di campur dengan susu dalam kondisi dingin. Penambahan
                                susu dimaksudkan untuk menambah unsur kenikmatan. Ini dapat merujuk kepada teh yang
                                dicampur dengan susu jenis apa saja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH MILO -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_milo.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Milo</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh yang di campur dengan bubuk minuman kekinian dan disajikan
                                secara dingin. Merupakan minuman yang sengaja dibuat untuk menarik pelanggan usia belia
                                yang tinggi gengsinya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH BLACKCURRANT -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_blackcurrant.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Blackcurrant</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh dengan paduan rasa buah yang disajikan secara dingin. Dibuat
                                dari dari buah blackcurrant, yang manis dan segar, terpadu apik dengan rasa teh asli,
                                menghadirkan rasa teh buah yang bisa dinikmati siapa saja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH LEMON -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_lemon.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Lemon</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh dengan paduan rasa buah yang disajikan secara dingin. Dibuat
                                dari sari buah lemon yang segar dan rasa teh asli, menghadirkan rasa teh buah dengan
                                rasa yang seimbang namun tetap menyegarkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ES TEH MATCHA -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_matcha.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Matcha</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh dengan paduan matcha dari daun teh pilihan dan gula tebu
                                alami yang menyegarkan yang dapat membawa penikmat menjadi lebih ceria.
                            </p>
                            <p class="card-text"><small class="text-muted custom">New</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ES TEH COKLAT -->
        <div class="col-md-6">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/teh_coklat.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Es Teh Coklat</h5>
                            <p class="rapi card-text">
                                Adalah bentuk penyajian teh yang dicampurkan dengan bubuk coklat yang disajikan secara
                                dingin. Perpaduan teh dan coklat membawa penikmat masuk kedalam sensasi rileks serta
                                membantu memperbaiki suasana hati yang lelah.
                            </p>
                            <p class="card-text"><small class="text-muted custom">New</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
