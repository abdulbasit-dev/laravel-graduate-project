@extends('layouts.app')

@section('content')
<style>
    /* #showcase {
        position: relative;
        background: url('{{ asset('images/image10.jpg') }}');
        background-position: center;
        min-height: 70vh;
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

{{--
<!-- ShowCase  -->
<header id="showcase">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left">
                    <div data-aos="fade-down" data-aos-duration="1000">
                        <h1 class="display-4" style="margin-top: 6rem">Gallery</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                            voluptas.
                        </p>
                    </div>
                    <a href="#projects" class="btn btn-outline-primary" data-aos="fade-right"
                        data-aos-duration="1000">
                        See Projects <i class="fas fa-arrow-right"></i>
                    </a>
                    @role('student')
                    <a href="{{ route('admin.projects.create') }}" target="__blank"
                        class="btn btn-outline-primary ms-4" data-aos="fade-left"
                        data-aos-duration="1000">
                        Upload Project <i class="fas fa-upload"></i>
                    </a>
                    @endrole
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
                            <a href="#projects" class="btn btn-outline-primary"
                                data-aos="fade-right" data-aos-duration="1000">
                                See Projects <i class="fas fa-arrow-right"></i>
                            </a>
                            @role('student')
                            <a href="{{ route('admin.projects.create') }}" target="__blank"
                                class="btn btn-outline-primary ms-4" data-aos="fade-left"
                                data-aos-duration="1000">
                                Upload Project <i class="fas fa-upload"></i>
                            </a>
                            @endrole
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


<livewire:gallery />

@endsection