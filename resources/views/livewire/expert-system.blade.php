<section class="container" id="experts" style="margin-bottom: 10rem">

    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Expert System Info</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    {{--filter --}}
    <div class="row">
        <input type="text" class="form-control w-50 mx-auto mb-3" wire:model.debounce.500ms="search"
            placeholder="search file name ..." data-aos="fade-down" data-aos-duration="1000">

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

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">File Name</th>
                <th scope="col">College</th>
                <th scope="col">Department</th>
                <th scope="col">download</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($experts as $expert)
            <tr data-aos="zoom-in-down" data-aos-duration="1000">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $expert->title }}</td>
                <td>{{ $expert->college->name }}</td>
                <td>{{ $expert->dept->name }}</td>
                <td><a href="{{ asset($expert->file) }}"><i
                            class="bi bi-file-earmark-arrow-down fa-2x"></i></a></td>
            </tr>

            @empty
            <tr class="mt-4">
                <td colspan="3" class="text-center h4">No data found :(
                </td>
            </tr>
            @endforelse

        </tbody>
    </table>

    @if ($experts instanceof \Illuminate\Pagination\LengthAwarePaginator)
    <div class="d-flex justify-content-between align-items-center">

        @if ($experts->total())
        <div>
            <p class="text-sm text-gray-700 leading-5">
                <span>{!! __('Showing') !!}</span>
                <span class="font-medium">{{ $experts->firstItem() }}</span>
                <span>{!! __('to') !!}</span>
                <span class="font-medium">{{ $experts->lastItem() }}</span>
                <span>{!! __('of') !!}</span>
                <span class="font-medium">{{ $experts->total() }}</span>
                <span>{!! __('results') !!}</span>
            </p>
        </div>
        @endif

        {{ $experts->links() }}
    </div>
    @endif

</section>