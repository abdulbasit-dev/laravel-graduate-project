@extends('layouts.app')

@section('content')
<style>
    /* #showcase {
        position: relative;
        background: url('{{ asset('images/image8.jpg') }}');
        background-position: center;
        min-height: 60vh;
        margin-bottom: 2rem;
    }

    #showcase .primary-overlay {
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
    } */


    #show {
        margin-bottom: 5rem;
    }

    .carousel .carousel-item {
        height: 80vh;
    }

    .carousel-item img {
        position: absolute;
        object-fit: contain;
        top: 0;
        left: 0;
        min-height: 70vh;
    }
</style>

<!-- ShowCase  -->
{{-- <header id="showcase">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left" data-aos="fade-down" data-aos-duration="1000">
                    <h1 class="display-3" style="margin-top: 6rem">Expert Systems</h1>
                    <p class="lead" data-aos="fade-up" data-aos-duration="1300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header> --}}

{{-- Carosel --}}
<section id="show">
    <div id="carouselExampleCaptions" class="carousel carousel-light slide" data-bs-ride="carousel"
        data-bs-pause="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($banners as $banner)
            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}"
                data-bs-interval="3000">
                <img src="{{ asset($banner->image) }}" class="d-block w-100" alt="...">
                <div class="dark-overlay">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom:15rem">
                        <h1 class="display-4" data-aos="fade-down" data-aos-duration="1000">{{
                            $banner->title }}</h1>
                        <p class="lead" data-aos="fade-up" data-aos-duration="1500">{{
                            $banner->description }}
                        </p>
                        <div class="mt-4">
                            <a href="#experts" class="btn btn-outline-primary" data-aos="fade-right"
                                data-aos-duration="1000">
                                Expert Info Files <i class="fas fa-arrow-right"></i>
                            </a>
    
                            <a href="#video"
                                class="btn btn-outline-primary ms-4" data-aos="fade-left"
                                data-aos-duration="1000">
                                Video Tutorial <i class="fas fa-video"></i>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="container" id="experts" style="margin-bottom: 10rem">

    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Expert System Info</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">File Name</th>
                <th scope="col">download</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($experts as $expert)
            <tr data-aos="zoom-in-down" data-aos-duration="1000">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $expert->title }}</td>
                <td><a href="{{ asset($expert->file) }}"><i
                            class="bi bi-file-earmark-arrow-down fa-2x"></i></a></td>
            </tr>

            @empty
            <tr class="mt-4">
                <td colspan="3" class="text-center h4">No file found :(</td>
            </tr>
            @endforelse

        </tbody>
    </table>

</section>

{{-- tutorial --}}
<section class="container" id="video" style="margin-bottom: 10rem">
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3>Video Tutorial</h3>
        <hr class="mb-2 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-muted  mb-4 text-center " data-aos="zoom-in" data-aos-duration="1000">How To Upload Your Project</h3>
            <video class="w-100" src="{{ asset("images/how to upload project.mp4") }}" data-aos="fade-left" data-aos-duration="1000" controls loop></video>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-muted  mb-4 text-center " data-aos="zoom-in" data-aos-duration="1000">How To Upload Your Idea</h3>
            <video class="w-100" src="{{ asset("images/how to upload idea.mp4") }}" data-aos="zoom-out" data-aos-duration="1000" controls loop></video>
        </div>
    </div>


</section>

<section class="container" style="margin-bottom: 10rem">
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3>Writing Scientific Project</h3>
        <hr class="mb-2 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    <div class="row justify-content-center">
        <div class="col-3 me-5" data-aos="fade-right" data-aos-duration="1500">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <h4 class="card-title">4th Class Project Sample</h4>
                    <p class="card-text">This the template that help writning your project report
                        effectively, find the download link below</p>
                    <a href="{{ asset('docs/4th class Project  Sample - writing Desigen.docx') }}"
                        download="" class="card-link"><i class="bi bi-file-earmark-arrow-down"></i>
                        downlaod</a>
                </div>
            </div>
        </div>
        <div class="col-3" data-aos="fade-left" data-aos-duration="1500">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <h4 class="card-title">Norms and Regulations</h4>
                    <p class="card-tex">for Writing scientific Project for students in the fourth
                        stage</p>
                    <p class="card-text">Prepared by <a
                            href="https://academics.su.edu.krd/haider.haddad"
                            class=" text-decoration-none" target="__blank">D. Haider Haddad</a>
                        <br> <span class="text-primary">computer Dept. College of Science Salahadin
                            University</span>
                    </p>

                    <a href="{{ asset('docs/4th student project .pptx') }}" download=""
                        class="card-link"><i class="bi bi-file-earmark-arrow-down"></i> downlaod</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-bottom: 10rem" id="grantForms">
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3>Grant Forms</h3>
        <hr class="mb-2 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
        <p class="lead">Click the image to see in full veiw</p>
    </div>

    <div class="row justify-content-center ">
        <div class="col-4 " data-aos="zoom-in-right" data-aos-duration="1200"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
            <div class="w-75">
                <a href="#img1">
                    <img src="{{ asset('uploads/experts/grant-project.jpg') }}"
                        class="img-fluid rounded-3 border" alt="">
                </a>
            </div>
        </div>
        <div class="col-4 " data-aos="zoom-in-left" data-aos-duration="1200">
            <div class="w-75">
                <a href="#img2" class="img__wrap">
                    <img src="{{ asset('uploads/experts/grant-idea.jpg') }}"
                        class="img-fluid rounded-3 border" alt="">
                </a>
            </div>
        </div>
    </div>

    {{-- light box containers --}}
    <a href="#grantForms" class="lightbox" id="img1">
        <span
            style="background-image: url('{{ asset('uploads/experts/grant-project.jpg') }}')"></span>
    </a>

    <a href="#grantForms" class="lightbox" id="img2">
        <span style="background-image: url('{{ asset('uploads/experts/grant-idea.jpg') }}')"></span>
    </a>
</section>
@endsection