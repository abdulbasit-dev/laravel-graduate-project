<section class="container">
    <div class="text-center mb-1" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Ideas</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    {{--filter --}}
    <div class="row">
        <input type="text" class="form-control w-50 mx-auto mb-3" wire:model.debounce.500ms="search"
            placeholder="search by idea title ..." data-aos="fade-down" data-aos-duration="1000">

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
                <select class="form-select department" id="dept" required wire:model="year">
                    <option selected value>Year</option>
                    <option value="2021 - 2022">2021 - 2022</option>
                    <option value="2020 - 2021">2020 - 2021</option>
                    <option value="2019 - 2020">2019 - 2020</option>
                    <option value="2018 - 2019">2018 - 2019</option>
                    <option value="2017 - 2018">2017 - 2018</option>
                    <option value="2016 - 2017">2016 - 2017</option>
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
                @if ($ideas instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <h2 class="text-left text-muted  mb-4" data-aos="fade-right"
                    data-aos-duration="1000">
                    {!! $ideas->total()? "<strong>". $ideas->total()."</strong>". "
                    Ideas":null !!}</h2>
                @endif
                <div class="card border-0 shado mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">#</th>
                                        <th class="border-0">Title</th>
                                        <th class="border-0">Stage</th>
                                        <th class="border-0">Supervisor Name</th>
                                        <th class="border-0">Team Members</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ideas as $idea)
                                    <tr data-aos="zoom-in-down" data-aos-duration="1000">
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $idea->title }}</td>
                                        <td class="align-middle">{{ Str::title($idea->stage) }}</td>
                                        <td class="align-middle">{{ $idea->supervisor_name }}
                                        </td>
                                        <td class="align-middle">
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

                                        <td class="align-middle">
                                            <a href="{{ route('admin.ideas.show', $idea->id) }}">
                                                <button class="btn btn-outline-info btn-sm"
                                                    type="button">View</button>
                                            </a>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="mt-4">
                                        <td colspan="5" class="text-center h4">No project found :(
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if ($ideas instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="d-flex justify-content-between align-items-center">

                    @if ($ideas->total())
                    <div>
                        <p class="text-sm text-gray-700 leading-5">
                            <span>{!! __('Showing') !!}</span>
                            <span class="font-medium">{{ $ideas->firstItem() }}</span>
                            <span>{!! __('to') !!}</span>
                            <span class="font-medium">{{ $ideas->lastItem() }}</span>
                            <span>{!! __('of') !!}</span>
                            <span class="font-medium">{{ $ideas->total() }}</span>
                            <span>{!! __('results') !!}</span>
                        </p>
                    </div>
                    @endif

                    {{ $ideas->links() }}
                </div>

                @endif
        </div>
    </div>
</section>