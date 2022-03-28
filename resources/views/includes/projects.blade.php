<div class="row my-5" id="projects">
    @forelse ($projects as $project)
    <div class="col-md-3 mb-5 d-flex align-items-stretch" >
        <div class="card" style="width: 18rem;  box-shadow: 0 0 20px 5px rgba(62, 60, 98, 0.08);">
            <div class="card-body">
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
                        <span class="fw-med text-primary ms-2">{{ $project->student->dept->name
                            ?? '' }}</span>
                    </div>
                </div>
                <a href="{{ route('projectShow', $project->id) }}">
                    <button class="btn btn-primary">More Detail <i
                            class="fas fa-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </div>

    @empty
    <div class="col-12 text-center">
        <h2>No project found :(</h2>
    </div>
    @endforelse

    {{-- {{ $projects->links() }} --}}
</div>