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
                <h4 class="h4">Salahaddin University Colleges</h4>
            </div>
            {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add New College</button> --}}
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
                                            <th class="border-0">Department Name</th>
                                            <th class="border-0">College Name</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($types as $type)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $type->name }}</td>
                                                <td>{{ $type->dept->name }}</td>
                                                <td>{{ $type->dept->college->name }}</td>
                                                <td class="d-flex">
                                                    <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#editModal_{{ $type->id }}">Edit</button>



                                                    {{-- <a href="javascript:void(0)" class="btn btn-outline-danger btn-sm ms-2"
                                                        onclick="if (confirm('{{ __('Are you sure you went to delete this?') }}')){document.getElementById('delete-{{ $type->id }}').submit();} else{return false}">
                                                        Delete
                                                    </a> --}}

                                                    <form action="{{ route('admin.classtypes.destroy', $type) }}"
                                                        method="POST" id="delete-{{ $type->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                    <!-- Edit Modal -->
                                                    <div class="modal fade" id="editModal_{{ $type->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body px-md-5">
                                                                    <h2 class="h4 text-center">Edit Class Type
                                                                        {{ $type->name }}</h2>
                                                                    <form
                                                                        action="{{ route('admin.classtypes.update', $type) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method("PATCH")
                                                                        <!-- Form -->
                                                                        <div class="form-group mb-4">
                                                                            <label for="name">Class Type Name</label>

                                                                            <input type="text"
                                                                                class="form-control border-gray-300"
                                                                                name="name" value="{{ $type->name }}"
                                                                                id="name" autofocus required>
                                                                        </div>

                                                                        <div class="d-grid">
                                                                            <button type="submit"
                                                                                class="btn btn-info">Update</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- create modal --}}
                                {{-- <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-md-5 mb-4">
                                                <h2 class="h4 text-center mb-3">Add New College
                                                    </h2>
                                                <form action="{{ route('admin.colleges.store') }}"
                                                    method="POST">
                                                    @csrf

                                                    <!-- Form -->
                                                    <div class="form-group mb-4">
                                                        <label for="name">College Name</label>

                                                        <input type="text" class="form-control border-gray-300" name="name"
                                                             id="name" autofocus required>
                                                    </div>

                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-outline-primary">Add</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
