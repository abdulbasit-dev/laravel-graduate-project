<section class="container">





    <div class="text-center mb-1" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Projects</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    {{--filter --}}
    <div class="row">
        <input type="text" class="form-control w-50 mx-auto mb-3" wire:model.debounce.500ms="search"
            placeholder="search by project title ..." data-aos="fade-down" data-aos-duration="1000">

        <div class="row justify-content-center row-cols-lg-auto  align-items-center"
            data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-4">
                <select class="form-select" id="college" required wire:model='collegeId'>
                    <option selected value>All Colleges</option>
                    @foreach ($colleges as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select department" id="dept" required wire:model="deptId">
                    <option selected value>All Departments</option>
                    @foreach ($depts as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    {{-- loader --}}
    <div class="d-flex justify-content-center">
        <div wire:loading.delay>
            <img src="{{ asset('images/loader.svg') }}" alt="">
        </div>
    </div>




    <div class="row">
        <div class="row mt-3" id="projects">
            <h2 class="text-left text-muted  mb-4" data-aos="fade-right" data-aos-duration="1000">
                {!! $projects->total()? "<strong>". $projects->total()."</strong>". "
                Projects":null !!}</h2>

            <div class="card border-0 shado mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">#</th>
                                    <th class="border-0">Title</th>
                                    <th class="border-0">Supervisor Name</th>
                                    <th class="border-0">Team Members</th>
                                    <th class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $project)
                                <tr data-aos="zoom-in-down" data-aos-duration="1000">
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $project->title }}</td>
                                    <td class="align-middle">{{ $project->supervisor_name }}</td>
                                    <td class="align-middle">
                                        <div class="mb-3">
                                            @php
                                            if(getType($project->team_members)!="array"){
                                            $serialized = serialize($project->team_members);
                                            $myNewArray = unserialize($serialized);
                                            $newTeamArr = json_decode($myNewArray, true);
                                            }else{
                                            $newTeamArr = $project->team_members;
                                            }
                                            @endphp
                                            @foreach ($newTeamArr as $team)
                                            <p class="mb-0">{{ $loop->iteration
                                                }}. {{ $team }}
                                            </p>
                                            @endforeach
                                        </div>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{ route('projectShow', $project->id) }}">
                                            <button class="btn btn-outline-info btn-sm"
                                                type="button">View</button>
                                        </a>

                                    </td>
                                </tr>
                                @empty
                                <tr class="mt-4">
                                    <td colspan="5" class="text-center h4">No project found :(</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">

                @if ($projects->total())
                <div>
                    <p class="text-sm text-gray-700 leading-5">
                        <span>{!! __('Showing') !!}</span>
                        <span class="font-medium">{{ $projects->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-medium">{{ $projects->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-medium">{{ $projects->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>
                @endif

                {{ $projects->links() }}
            </div>
        </div>
    </div>


    {{-- <div class="row">
        <div class="row mt-3" id="projects">
            <h2 class="text-left text-muted  mb-4" data-aos="fade-right" data-aos-duration="1000">
                {!! $projects->total()? "<strong>". $projects->total()."</strong>". "
                Projects":null !!}</h2>
            @forelse ($projects as $project)
            <div class="col-md-3 mb-5 d-flex align-items-stretch" data-aos="zoom-in-down"
                data-aos-duration="1000">
                <div class="card"
                    style="width: 18rem;  box-shadow: 0 0 20px 5px rgba(62, 60, 98, 0.08);">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title mb-3">{{ $project->title }}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $project->project_year }}</h6>
                        <div class="d-flex flex-column mb-4">
                            <div class="d-flex mb-2">
                                <span>College: </span>
                                <span class="fw-med text-primary ms-2">{{
                                    $project->student->college->name ?? '' }}</span>
                            </div>
                            <div class="d-fle">
                                <span>Department: </span>
                                <span class="fw-med text-primary ms-2">{{
                                    $project->student->dept->name
                                    ?? '' }}</span>
                            </div>
                        </div>
                        <a href="{{ route('projectShow', $project->id) }}" class="mt-auto">
                            <button class="btn btn-sm btn-primary">More Detail <i
                                    class="fas fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12 my-4 text-center">
                <h2 class="text-muted">No project found
                    <svg class="pb-2" width="40" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </h2>
            </div>
            @endforelse

            <div class="d-flex justify-content-between align-items-center">

                @if ($projects->total())
                <div>
                    <p class="text-sm text-gray-700 leading-5">
                        <span>{!! __('Showing') !!}</span>
                        <span class="font-medium">{{ $projects->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-medium">{{ $projects->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-medium">{{ $projects->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>
                @endif

                {{ $projects->links() }}
            </div>
        </div>
    </div> --}}

</section>