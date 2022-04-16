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
            <div class="col-md-2">
                <button class="btn btn-outline-secondary" onclick="location.reload()">Reset</button>
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
                {!! $projects->total()? "</strong>". "
                #Submited Projects "."<strong>". $projects->total():null !!}</h2>

            <div class="card border-0 shado mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">#</th>
                                    <th class="border-0">Title</th>
                                    <th class="border-0">Collge</th>
                                    <th class="border-0">Department</th>
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
                                    <td class="align-middle">{{ $project->student->college->name }}</td>
                                    <td class="align-middle">{{ $project->student->dept->name }}</td>
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


</section>