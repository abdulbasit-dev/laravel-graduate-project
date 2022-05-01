@extends('layouts.app')

@section('content')
<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/image7.jpg') }}');
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
                <div class="col-lg-8 text-left">
                    <h1 class="display-3" style="margin-top: 6rem" data-aos="fade-down"
                        data-aos-duration="1000">Ranked Projects and Ideas</h1>
                    <p class="lead" data-aos="fade-right" data-aos-duration="1200">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                    </p>

                    <div>
                        <a href="#projects" class="btn btn-outline-primary" data-aos="fade-up" data-aos-duration="1000">
                             Projects <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#ideas" class="btn btn-outline-primary mx-4" data-aos="fade-down" data-aos-duration="1000">
                             Ideas <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#posters" class="btn btn-outline-primary" data-aos="fade-left" data-aos-duration="1000">
                             Posters <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</header>

<livewire:grant-project />

<livewire:grant-idea />

<livewire:grant-poster />

@endsection