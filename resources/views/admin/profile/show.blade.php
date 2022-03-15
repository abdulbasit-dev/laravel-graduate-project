@extends('admin.layouts.app')

@section('content')
<div class="col-12 col-xl-12">
    @if (auth()->user()->is_submited)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> You aleardy submit your project.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Submit Your Project</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="row mt-3">
                <div class="col-md-8 mb-3">
                    <label for="title">Project title</label>
                    <input class="form-control" id="title" type="text" name="title"
                        placeholder="Enter your project title" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-8 mb-3">
                    <label for="supervisor_name">Supervisor name</label>
                    <input class="form-control" id="supervisor_name" type="text"
                        name="supervisor_name" placeholder="Enter your supervisor name" required>
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-md-8 mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <label for="0">Project Team Members</label>
                        <svg class="icon btn_add ms-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="team_members">
                        <div class="d-flex">
                            <input class="form-control" id="0" type="text" name="teams[]"
                                placeholder="Enter team member name" required>
                            <button type="button" class="btn btn-danger ms-3 btn-sm"
                                style="visibility: hidden"><svg class="icon icon-sm" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-8 mb-3">

                    <label for="description required">Project Description</label>
                    <textarea class="form-control" rows="4" id="description" name="description"
                        placeholder="project description"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-8 mb-3">
                    <label for="report" class="form-label">Upload your report</label>
                    <input type="file" class="form-control" id="report" name="report" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-8 mb-3">
                    <label for="project" class="form-label">Upload your project</label>
                    <input class="form-control" type="file" id="project" name="project" required>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-gray-800 mt-2 animate-up-2" disabled type="submit"
                    @if(auth()->user()->is_submited) disabled='disabled' @endif>Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
            $(document).on("click", ".btn_add", function() {
                let inputCount = $(".team_members").find("input").length;
                let numberIncr =
                    inputCount > 0 ?
                    parseInt(
                        $(".team_members")
                        .find("input:last")
                        .attr("id")
                    ) + 1 :
                    0;

                $(".team_members")
                    .append(
                        $(`
                    <div class="d-flex mt-3">
                                <input class="form-control" id="${numberIncr}" type="text" name="teams[]"
                                    placeholder="Enter team member name" required>
                                <button type="button" class="btn btn-outline-danger ms-3  delegated-btn" style="padding: 0.1rem 0.6rem; !important"><svg
                                    class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                         </button>
                    </div>
                    `)
                    );
            });

            $(document).on("click", ".delegated-btn", function(e) {
                e.preventDefault();
                $(this)
                    .parent()
                    .remove();
            });
        });
</script>
@endpush