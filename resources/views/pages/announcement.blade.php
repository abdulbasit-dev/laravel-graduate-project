@extends('layouts.app')

@section('content')
<style>
    #showcase {
        position: relative;
        background: url('{{ asset('images/announcement-page-cover.jpg') }}');
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

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .created {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #b51622;
        width: 55px;
        height: 63px;
        margin-right: 15px;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
    }

    .ann-show {
        color: black;
        text-decoration: none;
    }

    .ann-show:hover {
        color: #b51622;
    }

    .swiper-wrapper {
        /* now pagination is below slides */
        margin-bottom: 3em;
        /* just enough width so slides handing off screen are partially visible */
        width: 73.8%;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        content: '';
    }

    .swiper-button-prev {
        left: -0.5rem;
    }

    .swiper-button-next {
        right: -0.5rem;
    }
</style>

<!-- ShowCase  -->
<header id="showcase">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-left " data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="display-3" style="margin-top: 6rem">Announcements</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container ">

    <div class="text-center mb-4" data-aos="fade-down" data-aos-duration="1000">
        <h3 class="mb-3">Announcement</h3>
        <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
    </div>

    <div class="my-5">
        <!-- Swiper -->
        <div class="swiper mySwiper" data-aos="zoom-in" data-aos-duration="1000">
            <div class="swiper-wrapper">
                @foreach ($announcements as $item)
                <div class="swiper-slide" x>
                    <div class="d-flex align-items-center">
                        <div class="created">
                            <span>{{ $item->created_at->day }}</span>
                            <span>{{ Str::upper($item->created_at->shortMonthName) }}</span>
                        </div>
                        <a href="{{ route('announcementShow',$item->id) }}" class="ann-show">
                            <p class="" style="text-align: left">{{ substr($item->title,0,50) }}...
                            </p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 50,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: false,
        autoplay: {
        delay: 4000,
        },
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>
@endpush