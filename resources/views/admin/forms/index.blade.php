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
            <li class="breadcrumb-item"><a href="#">{{ $title
                    }}</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h4 class="h4">{{ $desc }}</h4>
        </div>
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
                                        <th class="border-0">Name</th>
                                        <th class="border-0">Download</th>
                                        <th class="border-0 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($forms as $form)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="fw-bold">{{Str::title($form->name) }}</td>
                                        <td>
                                            <a class="text-info" href="{{ asset($form->file) }}" download="">
                                            
                                                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex justify-content-center align-items-center">
                                                

                                                <form
                                                    action="{{ route('admin.forms.destroy', $form->id) }}"
                                                    method="POST"
                                                    id="myForm_{{ $form->id }}">
                                                    @method("DELETE")
                                                    @csrf
                                                </form>
                                                <button onclick="Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: `You won't be able to revert this!`,
                                                        showClass: {
                                                        popup: 'animate__animated animate__fadeInDown'
                                                        },
                                                        hideClass: {
                                                        popup: 'animate__animated animate__fadeOutUp'
                                                        },
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonText: 'Yes, delete it'
                                                    }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                document.getElementById('myForm_{{ $form->id }}').submit();
                                                                }
                                                            })
                                                    "
                                                    class="btn btn-outline-danger btn-sm ">Delete</button>

                                            </div>
                                        </td>
                                    </tr>


                                    @empty
                                    <div class="col-12 text-center">
                                        <h5>No forms found :(</h5>
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                            <div
                                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                {{ $forms->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection