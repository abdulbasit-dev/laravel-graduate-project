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
                        <h1 class="display-3" style="margin-top: 6rem">Ranked Project</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container">

        <div class="text-center mb-4">
            <h3 class="mb-3">Granted Project</h3>
            <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
        </div>
        <div class="row my-5 justify-content-center" id="projects">
            @for ($i = 0; $i < 3; $i++)
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

    <section class="container">

        <div class="text-center mb-4">
            <h3 class="mb-3">Granted Idea</h3>
            <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
        </div>
        <div class="row my-5 justify-content-center" id="projects">
            @for ($i = 0; $i < 3; $i++)
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
