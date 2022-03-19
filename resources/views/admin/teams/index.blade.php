@extends('admin.layouts.app')

@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><svg class="icon icon-xxs" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg></a></li>
                <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h4 class="h4">{{ $desc }}</h4>
            </div>
            <a href="{{ route('admin.teams.create') }}">
                <button class="btn btn-primary">Add New
                    {{ $title }}</button>
            </a>
        </div>
    </div>
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
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Description</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($teams as $team)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->description }}</td>
                                                <td>{{ $team->image }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('admin.teams.show', $team->id) }}">
                                                        <button class="btn btn-info btn-sm" type="button">View</button>
                                                    </a>

                                                </td>
                                            </tr>
                                        @empty
                                            <div class="col-12 text-center">
                                                <h5>No team member found :(</h5>
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
