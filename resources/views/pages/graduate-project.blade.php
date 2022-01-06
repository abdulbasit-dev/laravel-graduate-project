@extends('layouts.app')

@section('content')
    <style>
        #showcase {
            position: relative;
            background: url('{{ asset('images/image6.jpg') }}');
            min-height: 90vh;
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
                        <h1 class="display-4" style="margin-top: 6rem">Browse All Other Project</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                        </p>
                        <a href="#projects" class="btn btn-outline-primary">
                            See Projects <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container">
        <div class="row" id="projects">
            <form class="row justify-content-center row-cols-lg-auto g-3 align-items-center">
                <div class="col-md-4">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Choose College</option>
                        @foreach ($colleges as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Choose Department</option>
                        @foreach ($depts as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Choose Class Type</option>
                        @foreach ($classTypes as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>

        <div class="row my-5">
            @for ($i = 0; $i < 13; $i++)
            <div class="col-md-3 mb-5">
                    <div class="card" style="width: 18rem;  box-shadow: 0 0 20px 5px rgba(62, 60, 98, 0.08);">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Project Name</h4>
                            <h6 class="card-subtitle mb-2 text-muted">2021 - 2022 </h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <div class="d-flex flex-column">
                                <div class="d-flex">
                                    <span>College: </span>
                                    <span class="fw-med text-primary ms-2">Science</span>
                                </div>
                                <div class="d-flex">
                                    <span>Department: </span>
                                    <span class="fw-med text-primary ms-2">Computer Science</span>
                                </div>
                            </div>
                            <h6 class="my-3">Project Supervisor</h6>
                            <button class="btn btn-primary">More Detail <i class="fas fa-arrow-right"></i></button>

                        </div>
                    </div>
                </div>
                @endfor
        </div>
    </section>
@endsection
