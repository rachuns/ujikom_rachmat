@extends('landing.konten')
@section('content-landing')


<section id="values" class="values section" style="margin-top:50px">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p>DAFTAR JURUSAN<br></p>
    </div><!-- End Section Title -->
    <div class="container">

        <div class="row gy-4">
            @php
                use App\Models\Jurusan;
                $jurusan = Jurusan::all();
            @endphp
            @foreach($jurusan as $jurus)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        @php
                            $gbr = $jurus->gbr_jurusan;
                            $image_url = asset('template/assets/img/smk/' . $gbr);
                        @endphp
                        <img src="{{ $image_url }}" class="img-fluid" alt="">
                        <h3>{{ $jurus->nm_jurusan }}</h3>
                        <p>{{ $jurus->jelasan }}</p>
                    </div>
                </div>
            @endforeach
            <!-- End Card Item -->

        </div>

    </div>

</section>


@endsection