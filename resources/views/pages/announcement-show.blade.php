@extends('layouts.app')

@section('content')

<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/announcement-show-cover.jpg') }}');
        background-position: center;
        min-height: 50vh;
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

<header id="showcase">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="display-3" style="margin-top: 6rem">Announcements</h1>
                    <p class="h3">
                        Salahaddin University Announcements
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container">
    <div class="row mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4" data-aos="fade-down" data-aos-duration="1400">
                            <!-- Post title-->
                            <h2 class=" mb-1">{{ $announcement->title }}</h2>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ $announcement->created_at }}
                            </div>
                        </header>
                      
                        <!-- Post content-->
                        <section class="mb-5" data-aos="zoom-out" data-aos-duration="1400">

                            {{-- if project image cover is not null --}}
                            @if ($announcement->image)
                                <div class="mb-4">
                                    <img src="{{ asset($announcement->image) }}" class="img-fluid" alt="cover">
                                </div>
                            @endif

                            {{-- <h4>Announcement Description:</h4> --}}
                            <p>{!! $announcement->description !!}</p>

                            <div class="d-flex mt-5" data-aos="fade-right" data-aos-duration="1400">
                                {{-- if project file is not null --}}
                                @if ($announcement->attachment)
                                <div class="text-center">
                                    <p>attachment</p>
                                    <a href="{{ asset($announcement->attachment) }}" download="">

                                        <svg class="text-primary" style="width: 3rem" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
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
</section>
@endsection