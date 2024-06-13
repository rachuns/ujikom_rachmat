@extends('landing.konten')
@section('content-landing')

<section id="values" class="values section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p>DAFTAR EXTRAKURIKULER<br></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            @php
                use App\Models\Eskul;
                $eskuls = Eskul::all();
            @endphp
            @foreach($eskuls as $eskul)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        @php
                            $gbr = $eskul->gbr_eskul;
                            $image_url = asset('template/assets/img/eskul/' . $gbr);
                        @endphp
                        <img src="{{ $image_url }}" class="img-fluid" alt="">
                        <h3>{{ $eskul->nm_eskul }}</h3>
                        <p>{{ $eskul->jelakul }}</p>
                    </div>
                </div>
            @endforeach
            <!-- End Card Item -->

        </div>

    </div>

</section>


@endsection