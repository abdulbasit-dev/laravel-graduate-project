@extends('admin.layouts.app')

@section('content')
  {{-- Header --}}
  <div>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg></a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.forms.index') }}">{{ $title }}</a>
          / Create
        </li>
      </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-lg-0 mb-3">
        <h4 class="h4">{{ $desc }}</h4>
      </div>
      <a href="{{ route('admin.forms.index') }}">
        <button class="btn btn-warning">
          <svg class="icon icon-xs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z">
            </path>
          </svg>
          Back To {{ $title }}</button>
      </a>
    </div>
  </div>
  {{-- End Header --}}

  <div class="main py-4">
    <div class="row">
      <div class="col-12 col-xl-12">
        <div class="card card-body mb-4 border-0 shadow">
          <form action="{{ route('admin.forms.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mt-3">
              <div class="col-md-10 mb-3">
                <label for="">Choose your college</label>
                <select class="form-select" id="college" name="college_id" >
                  <option selected value>Choose College</option>
                  @foreach (\App\Models\College::pluck('name', 'id') as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                  @endforeach
                </select>
                @error('college_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-10 mb-3">
                <label for="dept">Choose your department</label>
                <select class="form-select department" name="dept_id" id="dept" >
                  <option selected value>Choose Department</option>
                </select>
                @error('dept_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-10 mb-3">
                <label for="name">File Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name"  />
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-10 mb-3">
                <label for="name">Attachment</label>
                <input type="file" name="file" class="form-control" />
                @error('file')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="mt-3">
              <button class="btn btn-gray-800 animate-up-2 mt-2" type="submit">Submit</button>
              <button class="btn btn-gray-200 animate-up-2 ms-3 mt-2" type="reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
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
          data: {
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
