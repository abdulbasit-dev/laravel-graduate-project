@extends('layouts.app')

@section('content')

<section class="container">
    <div class="row my-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $project->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Project Year 2021- 2022</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light"
                                href="#!">Web
                                Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light"
                                href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid" style="width: 100%;height:45vh"
                                src="{{ asset('images/project-show.jpg') }}" alt="project image">
                        </figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ $project->description }}</p>
                        </section>

                        {{-- student names --}}
                        {{-- download link for report --}}
                        {{-- download link for project --}}
                        {{-- super visor name --}}
                        {{-- depratment --}}
                        {{-- college --}}
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection