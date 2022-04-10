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
        <div class="row mt-3" id="ideas">
            @if ($ideas instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <h2 class="text-left text-muted  mb-4" data-aos="fade-right" data-aos-duration="1000">
                {!! $ideas->total()? "<strong>". $ideas->total()."</strong>". "
                Ideas":null !!}</h2>
            @endif
            @forelse ($ideas as $idea)
            <div class="col-md-3 mb-5 d-flex align-items-stretch" data-aos="zoom-in-down"
                data-aos-duration="1000">
                <div class="card"
                    style="width: 18rem;  box-shadow: 0 0 20px 5px rgba(62, 60, 98, 0.08);">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title mb-3">{{ $idea->title }}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $idea->idea_year }}</h6>
                        <div class="d-flex flex-column mb-4">
                            <div class="d-flex mb-2">
                                <span>College: </span>
                                <span class="fw-med text-primary ms-2">{{
                                    $idea->student->college->name ?? '' }}</span>
                            </div>
                            <div class="d-fle">
                                <span>Department: </span>
                                <span class="fw-med text-primary ms-2">{{
                                    $idea->student->dept->name
                                    ?? '' }}</span>
                            </div>
                        </div>
                        <a href="{{ route('ideaShow', $idea->id) }}" class="mt-auto">
                            <button class="btn btn-sm btn-primary">More Detail <i
                                    class="fas fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12 my-4 text-center">
                <h2 class="text-muted">No idea found
                    <svg class="pb-2" width="40" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </h2>
            </div>
            @endforelse

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