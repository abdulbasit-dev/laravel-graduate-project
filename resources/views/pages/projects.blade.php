@extends('layouts.app')

@section('content')
<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/image6.jpg') }}');
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
                    <div data-aos="fade-down" data-aos-duration="1000">
                        <h1 class="display-4" style="margin-top: 6rem">Browse All Other Project</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                            voluptas.
                        </p>
                    </div>
                    <a href="#projects" class="btn btn-outline-primary" data-aos="fade-right"
                        data-aos-duration="1000">
                        See Projects <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#statics" class="btn btn-outline-primary ms-4" data-aos="fade-right"
                        data-aos-duration="1000">
                        Project Statics <i class="fas fa-arrow-right"></i>
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
</header>


   <livewire:project.search />

   <section class="container mt-5" id="statics">
    <div class="text-center mb-1" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Statics</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>
   </section>


@endsection