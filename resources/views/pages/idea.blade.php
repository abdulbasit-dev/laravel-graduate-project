@extends('layouts.app')

@section('content')
<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/image11.jpg') }}');
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
                        <h1 class="display-4" style="margin-top: 6rem">Browse All Idea</h1>
                        <p class="lead">
                            See all submited student ideas
                        </p>
                    </div>
                    <a href="#ideas" class="btn btn-outline-primary" data-aos="fade-right"
                        data-aos-duration="1000">
                        See Ideas <i class="fas fa-arrow-right"></i>
                    </a>
                    @role('student')
                    <a href="{{ route('admin.ideas.create') }}" target="__blank"
                        class="btn btn-outline-primary ms-4" data-aos="fade-left"
                        data-aos-duration="1000">
                        Upload Idea <i class="fas fa-upload"></i>
                    </a>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</header>

<livewire:idea />

@endsection