@extends('admin.layouts.app')

@section('content')
  {{-- Header --}}

  <div>
    <nav aria-label="breadcrumb"
      class="d-none d-md-inline-block">
      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><svg class="icon icon-xxs"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
              </path>
            </svg></a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.banners.index') }}">{{ $title }}</a>
          / Edit
        </li>
      </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
        <h4 class="h4">{{ $desc }}</h4>
      </div>
      <a href="{{ route('admin.banners.index') }}">
        <button class="btn btn-warning">
          <svg class="icon icon-xs"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
          </svg>
          Back To {{ $title }}</button>
      </a>
    </div>
  </div>
  {{-- End Header --}}

  <div class="main py-4">
    <div class="row">
      <div class="col-12 col-xl-12">
        <div class="card card-body border-0 shadow mb-4">
          <form action="{{ route('admin.banners.update', $banner->id) }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="row mt-3">
              <div class="col-md-6 mb-3">
                <label for="title">Title</label>
                <input class="form-control @error('title') is-invalid @enderror"
                  id="title"
                  type="text"
                  name="title"
                  value="{{ old('title', $banner->title) }}">
                @error('title')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6 mb-3">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror"
                  rows="2"
                  id="description"
                  name="description">{{ old('description', $banner->description) }}</textarea>
                @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6 mb-3">
                <label for="image"
                  class="form-label">Image</label>
                <div class="mb-4">

                  <input type="file"
                    name="file"
                    id="file"
                    class="form-control  @error('file') is-invalid @enderror">
                  @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="mt-3">
              <button class="btn btn-gray-800 mt-2 animate-up-2"
                type="submit">Submit</button>
              <button class="btn btn-gray-200 mt-2 animate-up-2 ms-3"
                type="reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
