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
                                        <th class="border-0">Name</th>
                                        <th class="border-0">Collge</th>
                                        <th class="border-0">Department</th>
                                        <th class="border-0">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->college->name }}</td>
                                        <td>{{ $teacher->dept->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                    </tr>
                                    @empty
                                    <tr class="mt-4">
                                        <td colspan="5" class="text-center h4">No data found :(
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div
                                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                {{ $teachers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>