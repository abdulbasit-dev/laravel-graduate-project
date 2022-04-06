@extends('layouts.app')

@section('content')
<style>
    #showcase {
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
    }
</style>

<!-- ShowCase  -->
<header id="showcase">
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
</header>

<section class="container" style="margin-bottom: 10rem">

    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Expert System Info (comming soon)</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
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
                    <p class="card-text">This the template that help writning your project report effectively, find the download link below</p>
                    <a href="{{ asset('docs/4th class Project  Sample - writing Desigen.docx') }}" download="" class="card-link"><i class="bi bi-file-earmark-arrow-down"></i> downlaod</a>
                </div>
            </div>
        </div>
        <div class="col-3" data-aos="fade-left" data-aos-duration="1500">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <h4 class="card-title">Norms and Regulations</h4>
                    <p class="card-tex">for Writing scientific Project for students in the fourth stage</p>
                    <p class="card-text">Prepared by <a href="https://academics.su.edu.krd/haider.haddad" class=" text-decoration-none"
                        target="__blank">D. Haider Haddad</a>
                        <br> <span class="text-primary">computer Dept. College of Science Salahadin University</span></p>

                    <a href="{{ asset('docs/4th student project .pptx') }}" download="" class="card-link"><i class="bi bi-file-earmark-arrow-down"></i> downlaod</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-bottom: 10rem">
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3>Grant Forms</h3>
        <hr class="mb-2 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    <div class="row">
        <div class="col-6" data-aos="zoom-in-right" data-aos-duration="1200">
            <div class="w-75">
                <img src="{{ asset('images/forms/grant-project.jpg') }}" class="img-fluid rounded-3 border" alt="">
            </div>
        </div>
        <div class="col-6" data-aos="zoom-in-left" data-aos-duration="1200">
            <div class="w-75">
                <img src="{{ asset('images/forms/grant-project.jpg') }}" class="img-fluid rounded-3 border" alt="">
            </div>
        </div>
    </div>
</section>
@endsection