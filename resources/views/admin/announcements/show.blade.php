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
    </div>
</div>
{{-- End Header --}}

<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="col-lg-8">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4" >
                                    <!-- Post title-->
                                    <h3 class=" mb-1">{{ $announcement->title }}</h3>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">{{ $announcement->created_at }}
                                    </div>
                                </header>
                        
                                <!-- Post content-->
                                <section class="mb-5" >
                                    <h4>Announcement Description:</h4>
                                    <p>{{ $announcement->description }}</p>
                        
                                    <div class="d-flex mt-5">
                                        {{-- if project file is not null --}}
                                        @if ($announcement->attachment)
                                        <div class="text-center">
                                            <h5>Announcement Attachment</h5>
                                            <a href="{{ asset($announcement->attachment) }}" download="">
                        
                                                <svg class="text-primary" style="width: 3rem" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                            </a>
                        
                                        </div>
                                        @endif
                                    </div>
                        
                                </section>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
