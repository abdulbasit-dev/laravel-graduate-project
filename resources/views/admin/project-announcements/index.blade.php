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
            <li class="breadcrumb-item"><a
                    href="{{ route('admin.project-announcements.index') }}">{{ $title }}</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-lg-0 mb-3">
            <h4 class="h4">{{ $desc }}</h4>
        </div>
        <a href="{{ route('admin.project-announcements.create') }}">
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
                <div class="card mb-4 border-0 shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-centered table-nowrap mb-0 table rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="rounded-start border-0">#</th>
                                        <th class="border-0">Title</th>
                                        <th class="border-0">College</th>
                                        <th class="border-0">Department</th>
                                        <th class="border-0">File</th>
                                        <th class="border-0 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($projectAnnouncements as $projectAnnouncement)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            {{
                                            mb_substr(strip_tags(html_entity_decode($projectAnnouncement->title)),
                                            0, 60 - 3, 'UTF-8') . '..' }}
                                        </td>

                                        <td>{{ $projectAnnouncement->college->name ?? 'null' }}</td>
                                        <td>{{ $projectAnnouncement->dept->name ?? 'null' }}</td>
                                        @if ($projectAnnouncement->file)
                                        <td><a href="{{ asset($projectAnnouncement->file) }}"><i
                                                    class="bi bi-file-earmark-arrow-down fa-2x"></i></a>
                                        </td>
                                        @else
                                        <td>---</td>
                                        @endif
                                        <td>
                                            <div
                                                class="d-flex justify-content-center align-items-center">
                                                <a
                                                    href="{{ route('admin.project-announcements.edit', $projectAnnouncement->id) }}">
                                                    <button class="btn btn-outline-info btn-sm me-3"
                                                        type="button">Edit</button>
                                                </a>

                                                <form
                                                    action="{{ route('admin.project-announcements.destroy', $projectAnnouncement->id) }}"
                                                    method="POST"
                                                    id="myForm_{{ $projectAnnouncement->id }}">
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
                                                                      document.getElementById('myForm_{{ $projectAnnouncement->id }}').submit();
                                                                      }
                                                                  })
                                                          "
                                                    class="btn btn-outline-danger btn-sm">Delete</button>

                                            </div>
                                        </td>
                                    </tr>


                                    @empty
                                    <tr class="mt-4">
                                        <td colspan="5" class="text-center h4">No data found :(
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div
                                class="card-footer d-flex flex-column flex-lg-row align-items-center justify-content-between border-0 px-3">
                                {{ $projectAnnouncements->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection