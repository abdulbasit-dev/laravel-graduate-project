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
                                            placeholder="search by project title ..."
                                            data-aos="fade-down" data-aos-duration="1000">
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
                                        <th class="border-0">Rank</th>
                                        <th class="border-0">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($projects as $project)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->student->college->name }}</td>
                                        <td>{{ $project->student->dept->name }}</td>

                                        <td>
                                            @if ($project->is_poster_ranked)
                                            <span class="badge bg-success">Yes</span>

                                            @else
                                            <span class="badge bg-secondary">No</span>
                                            @endif
                                        </td>

                                        <td class="align-middle d-flex">
                                            @role('committee')
                                            @if ($project->is_poster_ranked)
                                            <a href="javascript:void(0)"
                                                class="btn btn-primary btn-sm"
                                                type="button">Ranked</a>
                                            @else
                                            <a
                                                href="{{ route('admin.projects.rank-poster',$project->id) }}">
                                                <button class="btn btn-warning btn-sm"
                                                    type="button">Rank</button>
                                            </a>
                                            @endif
                                            @endrole
                                            <a href="{{ asset($project->poster) }}" download
                                                class="ms-3">
                                                <i class="bi bi-file-earmark-arrow-down fa-2x"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="mt-4">
                                        <td colspan="6" class="text-center h4">No data found :(
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div
                                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                {{ $projects->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>