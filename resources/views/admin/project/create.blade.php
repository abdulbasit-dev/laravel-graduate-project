@extends('admin.layouts.app')

@section('content')
<div class="col-12 col-xl-12 mt-3">
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">General information</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title">Project Title</label>
                <input class="form-control" id="title" type="text" name="title"
                    placeholder="project title" required>
            </div>

            <div class="mb-3">
                <label for="description">Project Description</label>
                <textarea class="form-control" id="description" rows="4"
                    placeholder="project description" name="description" required> </textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="mb-4">
                        <label class="my-1 me-2" for="college">Select College</label>
                        <select class="form-select" id="colleg" name="c0llege">
                            <option selected="selected">Choose your college</option>
                            @foreach ($colleges as $key=>$value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="mb-4">
                        <label class="my-1 me-2" for="department">Select Department</label>
                        <select class="form-select department" id="department" name="department">
                            <option selected="selected">choose your departments</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')

<script>
    $(document).ready(function() {
            $("#college").on('change', function() {
                let collegeId = $(this).val();
                // Ajax
                $.ajax({
                    url: `{{ route('getDepartment') }}`,
                    dataType: 'json',
                    data:{
                        collegeId
                    },
                    beforeSend: function() {
                        $(".department").html('<option>--- Loading ---</option>');
                    },
                    success: function(res) {
                        console.log(res);
                        let _html = '';
                        $.each(res, function(id, data) {

                            _html += `<option  value="${id}">${data}</option>`;
                        });
                        $(".department").html(_html);

                    }
                });
            });
        });
</script>
@endpush