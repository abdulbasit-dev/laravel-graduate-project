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
                            <div class="text-muted fst-italic mb-2">Project Year {{
                                $project->project_year }}</div>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid" style="width: 100%;height:45vh"
                                src="{{ asset('images/project-show.jpg') }}" alt="project image">
                        </figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <h4>College: <span class="h4 text-muted">{{
                                    $project->student->college->name
                                    }}</span></h4>
                            <h4>Department: <span class="h4 text-muted">{{
                                    $project->student->dept->name
                                    }}</span>
                            </h4>
                            <hr class="my-4 w-100 bg-primary" style="height: 2px">

                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    @php
                                    $serialized = serialize($project->team_members);
                                    $myNewArray = unserialize($serialized);
                                    $newTeamArr = json_decode($myNewArray, true);
                                    @endphp
                                    <h4>Team Members</h4>
                                    @foreach ($newTeamArr as $team)
                                    <h5 class="text-secondary">{{ $loop->iteration
                                        }}. {{ $team }}
                                    </h5>
                                    @endforeach
                                </div>

                                <h4>Supervisor Name: <span class="h5 text-secondary">
                                        {{ $project->supervisor_name }}</span></h4>

                            </div>

                            <hr class="my-4 w-100 bg-primary" style="height: 2px">

                            <h4>Project Description:</h4>
                            <p>{{ $project->description }}</p>


                            <div class="d-flex mt-5">
                                {{-- if project file is not null --}}
                                @if ($project->report)
                                <div class="text-center">
                                    <h5>Project Report</h5>
                                    <a href="{{ asset($project->report) }}" download="">
                                        <svg class="text-primary" style="width: 3rem" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                                @endif

                                <div class="text-center ms-5">
                                    {{-- if project report is not null --}}
                                    @if ($project->report)
                                    <h5>Project File</h5>
                                    <a href="{{ asset($project->project) }}" download="">
                                        <svg class="text-primary" style="width: 3rem" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                            </path>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                                <div class="text-center ms-5">
                                    {{-- if poster is not null --}}
                                    @if ($project->poster)

                                    <h5>Project Poster</h5>
                                    <a href="{{ asset($project->poster) }}" download="">
                                        <svg class="text-primary" style="width: 3rem" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                            </path>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                            </div>


                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection