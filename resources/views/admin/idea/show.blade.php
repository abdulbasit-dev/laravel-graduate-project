@extends('admin.layouts.app')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><svg
                        class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg></a></li>
            <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h4 class="h4">{{ $desc }}</h4>
        </div>
    </div>
</div>
<div class="main ">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow mb-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Post content-->
                            <article class="p-4">
                                <!-- Post header-->
                                <header class="d-fle justify-content-between">
                                    <div>
                                        <!-- Post title-->
                                        <h1 class="fw-bolder mb-1">{{ $idea->title }}</h1>
                                        <!-- Post meta content-->
                                        <div class="text-muted fst-italic mb-2">{{
                                            $idea->project_year }}</div>
                                    </div>
                                    @if (auth()->id() ==$idea->created_by)
                                        
                                  
                                    <div class="d-flex justify-content-end">
                                        <form
                                            action="{{ route('admin.ideas.destroy', $idea->id) }}"
                                            method="POST" id="myForm_{{ $idea->id }}">
                                            @method("DELETE")
                                            @csrf
                                        </form>
                                        <button
                                            onclick="Swal.fire({
                                                                                                                                                    title: 'Are you sure?',
                                                                                                                                                    text: `You won't be able to revert this!`,
                                                                                                                                                    showClass: {
                                                                                                                                                    popup: 'animate__animated animate__fadeInDown'
                                                                                                                                                    },
                                                                                                                                                    hideClass: {
                                                                                                                                                    popup: 'animate__animated animate__fadeOutUp'
                                                                                                                                                    },
                                                                                                                                                    icon: 'warning',
                                                                                                                                                    showCancelButton: true,
                                                                                                                                                    confirmButtonText: 'Yes, delete it'
                                                                                                                                                }).then((result) => {
                                                                                                                                                            if (result.isConfirmed) {
                                                                                                                                                            document.getElementById('myForm_{{ $idea->id }}').submit();
                                                                                                                                                            }
                                                                                                                                                        })
                                                                                                                                                "
                                            class="btn btn-outline-danger btn-sm ">Delete</button>
                                    </div>
                                    @endif

                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid"
                                        style="width: 100%;height:45vh"
                                        src="{{ asset('images/image11.jpg') }}" alt="project image">
                                </figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                    <h4>College: <span class="h4 text-muted">{{
                                            $idea->student->college->name
                                            }}</span></h4>
                                    <h4>Department: <span class="h4 text-muted">{{
                                            $idea->student->dept->name
                                            }}</span>
                                    </h4>
                                    <h4>Stage: <span class="h4 text-muted">{{Str::title(
                                            $idea->stage)
                                            }}</span>
                                    </h4>
                                    <hr class="my-4 w-100 bg-primary" style="height: 2px">

                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            @php
                                            if(getType($idea->team_members)!="array"){
                                            $serialized = serialize($idea->team_members);
                                            $myNewArray = unserialize($serialized);
                                            $newTeamArr = json_decode($myNewArray, true);
                                            }else{
                                            $newTeamArr = $idea->team_members;
                                            }
                                            @endphp
                                            <h4>Team Members</h4>
                                            @foreach ($newTeamArr as $team)
                                            <h5 class="text-secondary">{{ $loop->iteration
                                                }}. {{ $team }}
                                            </h5>
                                            @endforeach
                                        </div>

                                        <h4>Supervisor Name: <span class="h5 text-secondary">
                                                {{ $idea->supervisor_name }}</span></h4>

                                    </div>

                                    <hr class="my-4 w-100 bg-primary" style="height: 2px">

                                    <h4>Project Description:</h4>
                                    <p>{{ $idea->description }}</p>


                                    <div class="d-flex mt-5">
                                        {{-- if project file is not null --}}
                                        @if ($idea->report)
                                        <div class="text-center">
                                            <h5>Project Report</h5>
                                            <a href="{{ asset($idea->report) }}" download="">
                                                <svg class="text-primary" style="width: 3rem"
                                                    fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                                    </path>
                                                </svg>
                                            </a>

                                        </div>
                                        @endif

                                        <div class="text-center ms-5">
                                            {{-- if project report is not null --}}
                                            @if ($idea->report)
                                            <h5>Project File</h5>
                                            <a href="{{ asset($idea->project) }}" download="">
                                                <svg class="text-primary" style="width: 3rem"
                                                    fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                                    </path>
                                                </svg>
                                            </a>
                                            @endif
                                        </div>
                                        <div class="text-center ms-5">
                                            {{-- if poster is not null --}}
                                            @if ($idea->poster)

                                            <h5>Project Poster</h5>
                                            <a href="{{ asset($idea->poster) }}" download="">
                                                <svg class="text-primary" style="width: 3rem"
                                                    fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
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
        </div>
    </div>
</div>
@endsection