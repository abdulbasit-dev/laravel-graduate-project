@extends('layouts.app')

@section('content')
<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/image9.jpg') }}');
        background-position: center;
        min-height: 60vh;
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

<!-- ShowCase  -->
<header id="showcase">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left" data-aos="fade-down" data-aos-duration="1000">
                    <h1 class="display-3" style="margin-top: 6rem">Project Announcement</h1>
                    <p class="lead" data-aos="fade-up" data-aos-duration="1300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="container">

    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="mb-3">Project Announcement</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    <div class="d-flex flex-column align-items-center">
        @forelse ($projectAnnouncements as $item)
        <div class="card my-5" style="width: 30rem;" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('images/announcement.jfif') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-text">{{ $item->title }}</h5>
            </div>
        </div>

        <hr>
        @empty
        <h3>no data found</h3>
        @endforelse
    </div>

    <div class="d-flex justify-content-between align-items-center">

        @if ($projectAnnouncements->total())
        <div>
            <p class="text-sm text-gray-700 leading-5">
                <span>{!! __('Showing') !!}</span>
                <span class="font-medium">{{ $projectAnnouncements->firstItem() }}</span>
                <span>{!! __('to') !!}</span>
                <span class="font-medium">{{ $projectAnnouncements->lastItem() }}</span>
                <span>{!! __('of') !!}</span>
                <span class="font-medium">{{ $projectAnnouncements->total() }}</span>
                <span>{!! __('results') !!}</span>
            </p>
        </div>
        @endif

        {{ $projectAnnouncements->links() }}
    </div>

</section>
@endsection