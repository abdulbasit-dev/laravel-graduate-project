<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        {{--filter --}}
                        <div class="mb-3">
                            <div class="row">
                                <div class="row justify-content-center row-cols-lg-auto  align-items-center"
                                    data-aos="fade-up" data-aos-duration="1000">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm"
                                            wire:model.debounce.500ms="search"
                                            placeholder="search by project title ...">
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm"
                                            wire:model='stage'>
                                            <option selected value>Select Stage</option>
                                            <option value="first">First</option>
                                            <option value="second">Second</option>
                                            <option value="third">Third</option>
                                            <option value="fourth">Fourth</option>
                                            <option value="fifth">Fifth</option>
                                            <option value="sixth">Sixth</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm" id="college"
                                            required wire:model='collegeId'>
                                            <option selected value>All Colleges</option>
                                            @foreach ($colleges as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm department"
                                            id="dept" required wire:model="deptId">
                                            <option selected value>All Departments</option>
                                            @foreach ($depts as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm btn-outline-secondary"
                                            onclick="location.reload()">Reset</button>
                                    </div>
                                </div>
                            </div>

                            {{-- loader --}}
                            <div class="d-flex justify-content-center">
                                <div wire:loading.delay>
                                    <img src="{{ asset('images/loader.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">#</th>
                                        <th class="border-0">Title</th>
                                        <th class="border-0">Collge</th>
                                        <th class="border-0">Department</th>
                                        <th class="border-0">Stage</th>
                                        <th class="border-0">Supervisor Name</th>
                                        <th class="border-0">Team Members</th>
                                        <th class="border-0">Rank</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ideas as $idea)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $idea->title }}</td>
                                        <td>{{ $idea->student->college->name }}</td>
                                        <td>{{ $idea->student->dept->name }}</td>
                                        <td> <span class="badge bg-success"
                                                style="font-size: .8rem">{{ Str::title($idea->stage)
                                                }}</span></td>
                                        <td>{{ $idea->supervisor_name }}</td>
                                        <td>
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
                                                @foreach ($newTeamArr as $team)
                                                <p class="mb-0">{{ $loop->iteration
                                                    }}. {{ $team }}
                                                </p>
                                                @endforeach
                                            </div>
                                        </td>

                                        <td>
                                            @if ($idea->is_ranked)
                                            <span class="badge bg-success">Yes</span>

                                            @else
                                            <span class="badge bg-secondary">No</span>
                                            @endif
                                        </td>

                                        <td >
                                            <div class="d-flex">

                                                @role('council')
                                                @if ($idea->is_ranked)
                                                <button class="btn btn-primary btn-sm"
                                                    type="button">Ranked</button>
    
                                                @else
                                                <a href="{{ route('admin.ideas.rank',$idea->id) }}">
                                                    <button class="btn btn-warning btn-sm"
                                                        type="button">Rank</button>
                                                </a>
                                                @endif
    
                                                @endrole
                                                <a href="{{ route('admin.ideas.show',$idea->id) }}" class="ms-3">
                                                    <button class="btn btn-outline-info btn-sm"
                                                        type="button">View</button>
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr class=" text-center">
                                        <td class="h3" colspan="9">No data found :(</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div
                                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                {{ $ideas->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>