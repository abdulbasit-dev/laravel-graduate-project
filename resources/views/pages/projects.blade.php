@extends('layouts.app')

@section('content')
<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/image6.jpg') }}');
        min-height: 60vh;
        margin-bottom: 2rem;
    }

    #showcase .primary-overlay {
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
    }
</style>

<!-- ShowCase  -->
<header id="showcase">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left">
                    <div data-aos="fade-down" data-aos-duration="1000">
                        <h1 class="display-4" style="margin-top: 6rem">Browse All Other Project</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                            voluptas.
                        </p>
                    </div>
                    <a href="#projects" class="btn btn-outline-primary" data-aos="fade-right"
                        data-aos-duration="1000">
                        See Projects <i class="fas fa-arrow-right"></i>
                    </a>
                    @role('student')
                    <a href="{{ route('admin.projects.create') }}" target="__blank"
                        class="btn btn-outline-primary ms-4" data-aos="fade-left"
                        data-aos-duration="1000">
                        Upload Project <i class="fas fa-upload"></i>
                    </a>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</header>

<section class="container">
    <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <form class="row justify-content-center row-cols-lg-auto g-3 align-items-center"
            id="filter-form">
            <div class="col-md-4">
                <select class="form-select" id="college" required>
                    <option selected>Choose College</option>
                    @foreach ($colleges as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select department" id="dept" required>
                    <option selected>Choose Department</option>
                    @foreach ($depts as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Filter</button>
                {{-- <button type="submit" class="btn btn-outline-secondary" id="reset">Reset</button> --}}
            </div>
        </form>
    </div>

    <div class="row " id="showData">
        <div class="row my-5" id="projects">
            @forelse ($projects as $project)
            <div class="col-md-3 mb-5 d-flex align-items-stretch" data-aos="zoom-in-down"
                data-aos-duration="1500">
                <div class="card"
                    style="width: 18rem;  box-shadow: 0 0 20px 5px rgba(62, 60, 98, 0.08);">
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
                                <span class="fw-med text-primary ms-2">{{
                                    $project->student->dept->name
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

            {{ $projects->links() }}
        </div>
    </div>

</section>
@endsection
@push('scripts')
@push('scripts')
<script>
    $(document).ready(function() {

        $("#college").on('change', function() {
          let collegeId = $(this).val();
          // Ajax
          $.ajax({
            url: `{{ route('getDepartment') }}`,
            dataType: 'json',
            data: {
              collegeId
            },
            beforeSend: function() {
              $(".department").html('<option>--- Loading ---</option>');
            },
            success: function(res) {
              let _html = '';
              $.each(res, function(id, data) {

                _html += `<option  value="${id}">${data}</option>`;
              });
              $(".department").html(_html);

            }
          });
        });

        $("#filter-form").on('submit', function(e) {
          e.preventDefault();
          $.post('{{ route('projects.filter') }}', {
            _token: "{{ csrf_token() }}",
            collegeId: $("#college").val(),
            deptId: $("#dept").val(),
          }, function(res) {
            $('#showData').html(res)
          })
        });

        $("#reset").on('click', function(e) {
        e.preventDefault();
        $.post('{{ route('projects.filter') }}', {
        _token: "{{ csrf_token() }}",
        }, function(res) {
        $('#showData').html(res)
        })
        });

      });
</script>
@endpush
@endpush