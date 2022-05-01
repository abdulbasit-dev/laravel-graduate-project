<section class="container" id="posters">
    <div class="text-center mb-4" data-aos="fade-down" data-aos-duration="1000">
        <h3 class="mb-3">Poster</h3>
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
        <div class="row mt-3" id="posters">
            {{-- <h2 class="text-left text-muted  mb-4" data-aos="fade-right" data-aos-duration="1000">
                {!! $projects->total()? "<strong>". $projects->total()."</strong>". "
                Posters":null !!}</h2> --}}

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
                                    <th class="border-0">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $project)
                                <tr data-aos="zoom-in-down" data-aos-duration="1000">
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $project->title }}</td>
                                    <td>{{ $project->student->college->name }}</td>
                                    <td>{{ $project->student->dept->name }}</td>
                                    <td class="align-middle">
                                        <a href="{{ asset($project->poster) }}" download>
                                            <i class="bi bi-file-earmark-arrow-down fa-2x"></i>
                                        </a>

                                    </td>
                                </tr>
                                @empty
                                <tr class="mt-4">
                                    <td colspan="5" class="text-center h4">No grant poster found :(</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @if ($projects instanceof \Illuminate\Pagination\LengthAwarePaginator)
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
            @endif
        </div>
    </div>

</section>