@extends('admin.layouts.app')

@section('content')
{{-- Header --}}
<div>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><svg
                        class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.announcements.index') }}">{{ $title
                    }}</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h4 class="h4">{{ $desc }}</h4>
        </div>
        <a href="{{ route('admin.announcements.create') }}">
            <button class="btn btn-primary">Add New
                {{ $title }}</button>
        </a>
    </div>
</div>
{{-- End Header --}}

<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">#</th>
                                        <th class="border-0">Title</th>
                                        <th class="border-0">Description</th>
                                        <th class="border-0 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($announcements as $announcement)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $announcement->title }}</td>
                                        <td>{{ substr($announcement->description,1,100)}}...</td>
                                        <td>
                                            <div
                                                class="d-flex justify-content-center align-items-center">
                                                <a
                                                    href="{{ route('admin.announcements.show', $announcement->id) }}">
                                                    <button class="btn btn-outline-warning btn-sm me-3"
                                                        type="button">View</button>
                                                </a>
                                                <a
                                                    href="{{ route('admin.announcements.edit', $announcement->id) }}">
                                                    <button class="btn btn-outline-info btn-sm me-3"
                                                        type="button">Edit</button>
                                                </a>

                                                <form
                                                    action="{{ route('admin.announcements.destroy', $announcement->id) }}"
                                                    method="POST" id="myForm">
                                                    @method("DELETE")
                                                    @csrf
                                                </form>
                                                <button id="delete_btn"
                                                    class="btn btn-outline-danger btn-sm">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="col-12 text-center">
                                        <h5>No announcements found :(</h5>
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
