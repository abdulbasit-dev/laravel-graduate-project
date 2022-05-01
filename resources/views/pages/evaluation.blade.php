@extends('layouts.app')

@section('content')

<style>
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .4);
        z-index: 1;
    }

    .home {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: space-around;
        position: relative;
        padding: 2rem 10rem;
    }

    .home .video video {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .home .content {
        margin-top: 6rem;
        z-index: 4;
    }

    .home .content h1 {
        font-size: 4.1vw;
        color: #fff;
        text-transform: capitalize;
    }

    .home .content p {
        font-size: 1.5vw;
        color: #eee;
        padding-left: 2rem;
        border-left: .3rem solid #ddd;
    }

    .table_header>th {
        font-weight: 500 !important;
        text-align: center
    }

    .light-border {
        border-color: #eee !important;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .form_btn:hover{
        border: none
    }
</style>

<div class="home" id="home">
    <div class="video-overlay"></div>
    <div class="video">
        <video src="{{ asset('images/video.mp4') }}" loop muted autoplay></video>
    </div>

    <div class="content">
        <h1 data-aos="fade-up" data-aos-duration="2000">
            explore new places, <br />
            adventure awaits.
        </h1>
        <p data-aos="fade-right" data-aos-duration="2000">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod necessitatibus sunt atque
            consequuntur quam veniam magnam
            consectetur, odio velit alias!
        </p>

        @role('council')
        <div class="mt-5">
            <a href="{{ asset('forms/evaluation-form.xlsx') }}" download="" class="btn btn-primary"
                data-aos="flip-up" data-aos-duration="1500">

                Download Evaluation Form <i class="fas fa-download ms-2"></i>
            </a>

            <button type="button" class="btn btn-block btn-outline-primary mx-4 border-white text-white form_btn"  data-bs-toggle="modal"
                data-bs-target="#evaluation_form" data-aos="zoom-in" data-aos-duration="1500">Upload Evaluation Form <i class="fas fa-upload ms-2"></i></button>
        </div>
        @endrole
    </div>
</div>



{{-- evaluation-form upload  --}}
@role("council")
<div class="modal fade" id="evaluation_form" tabindex="-1" role="dialog"
    aria-labelledby="evaluation_form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Upload Form</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.forms.store') }}" method="POST"
                    enctype='multipart/form-data'>
                    @csrf
                
                    <div class="border-bottom mb-2">
                
                        <label for="file" class="col-form-label">Form File</label>
                        <input required type="file" name="file" id="file" class="form-control">
                    </div>
                
                    <button class="btn btn-outline-primary px-2 mt-3" type="submit">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" hidden>Accept</button>
                <button type="button" class="btn btn-secondary ms-auto"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endrole

{{-- change 🚩 --}}
{{-- <section dir="rtl">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-around mt-5">
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h6>هەلسەنگاندنی یەکەم</h6>
                    <a href="{{ asset('forms/initial-seminar.xlsx') }}" download="">
                        <svg class="text-primary" style="width: 2.5rem" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h6>هەلسەنگاندنی کۆتایی</h6>
                    <a href="{{ asset('forms/final-seminar.xlsx') }}" download="">
                        <svg class="text-primary" style="width: 2.5rem" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h6>هەلسەنگاندنی کۆتایی سەرپەرشتیار</h6>
                    <a href="{{ asset('forms/final-seminar-supervisor.xlsx') }}" download="">
                        <svg class="text-primary" style="width: 2.5rem" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h6>تاقیکردنەوەی تیۆری</h6>
                    <a href="{{ asset('forms/theory-exam.xlsx') }}" download="">
                        <svg class="text-primary" style="width: 2.5rem" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h6>نمرەی کۆتایی</h6>
                    <a href="{{ asset('forms/final-degree.xlsx') }}" download="">
                        <svg class="text-primary" style="width: 2.5rem" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section> --}}

<section class="container" style="margin-bottom: 5rem;margin-top:5rem" id="grantForms">
    <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
        <h3>Evaluation</h3>
        <hr class="mb-2 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
        <p class="lead">Click the image to see in full veiw</p>
    </div>

    <div class="row justify-content-center ">
        <div class="col-4 " data-aos="zoom-in-right" data-aos-duration="1200"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
            <div class="w-75">
                <a href="#img1">
                    <img src="{{ asset('images/Student-Project-Evaluation-A-1.jpg') }}"
                        class="img-fluid rounded-3 border" alt="">
                </a>
            </div>
        </div>
        <div class="col-4 " data-aos="zoom-in-left" data-aos-duration="1200">
            <div class="w-75">
                <a href="#img2" class="img__wrap">
                    <img src="{{ asset('images/Student-Project-Evaluation-A-2.jpg') }}"
                        class="img-fluid rounded-3 border" alt="">
                </a>
            </div>
        </div>
    </div>

    {{-- light box containers --}}
    <a href="#grantForms" class="lightbox" id="img1">
        <span
            style="background-image: url('{{ asset('images/Student-Project-Evaluation-A-1.jpg') }}')"></span>
    </a>

    <a href="#grantForms" class="lightbox" id="img2">
        <span style="background-image: url('{{ asset('images/Student-Project-Evaluation-A-2.jpg') }}')"></span>
    </a>
</section>

<section class="mt-5" style="margin-bottom: 5rem">
    <div class="container">

        <div class="row">
            <div class="accordion accordion-flush" id="accordionExample">

                {{-- change 🚩 --}}
                @role("council")
                {{-- <div class="accordion-item" data-aos="fade-left" data-aos-duration="1300">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#uploadForm"
                            aria-expanded="false" aria-controls="collapseOne">
                            Submit Evaluation Froms
                        </button>
                    </h2>
                    <div id="uploadForm" class="accordion-collapse collapse"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           
                            <div class="card card-body" dir="rtl">
                                <form class="px-5" action="{{ route('admin.forms.store') }}"
                                    method="POST" enctype='multipart/form-data'>
                                    @csrf

                                    <div class="border-bottom mb-2">
                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="name" class="col-form-label">جۆری فۆرم
                                                    هەلبژێرە</label>
                                            </div>
                                            <div class="col-4">
                                                <select required class="form-select px-5"
                                                    name="name" id="name"
                                                    aria-label="Default select example">
                                                    <option value="first seminar">هەلسەنگاندنی یەکەم
                                                    </option>
                                                    <option value="final seminar">هەلسەنگاندنی
                                                        کۆتایی</option>
                                                    <option value="final seminar supervisor">
                                                        هەلسەنگاندنی کۆتایی
                                                        سەرپەرشتیار</option>
                                                    <option value="theory exam">تاقیکردنەوەی تیۆری
                                                    </option>
                                                    <option value="final degree">نمرەی کۆتایی
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-4">
                                            <div class="col-2">
                                                <label for="file"
                                                    class="col-form-label">فۆرم:</label>
                                            </div>
                                            <div class="col-4">
                                                <input required type="file" name="file" id="file"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <button class="btn btn-outline-primary px-2 mt-3"
                                        type="submit">ناردن</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div> --}}
                @endrole

                <div class="accordion-item" data-aos="fade-right" data-aos-duration="1300">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                            Grant Graduate Project From
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{-- Grant Graduate Project From --}}
                            <div class="card card-body" dir="rtl">
                                <div
                                    class="d-flex align-items-center justify-content-around mb-5 mt-3">
                                    <div></div>
                                    <h4 class="">فۆرمی داواکاری بۆ وەرگرتنی گڕانتی زانکۆمان بۆ
                                        (پڕۆژەی
                                        دەرچوون)
                                    </h4>
                                    <img src="{{ asset('images/brand.png') }}" alt="univertsy logo"
                                        class="img-fluid" style="width: 80px">
                                </div>
                                <form class="px-5" action="{{ route('admin.grants.store') }}"
                                    method="POST">
                                    @csrf


                                    <input required type="number" min="0" max="0" name="grant_type"
                                        value="0" hidden>

                                    <div class="border-bottom mb-5">
                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="name" class="col-form-label"> ناوی
                                                    قوتابی:</label>
                                            </div>
                                            <div class="col-4">
                                                <input required type="text" name="name" id="name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="college"
                                                    class="col-form-label">کۆلێژ:</label>
                                            </div>
                                            <div class="col-4">
                                                <select required class="form-select px-5"
                                                    id="college" name="college_id" required>
                                                    <option selected>کۆلێژ هەلبژێرە</option>
                                                    @foreach (\App\Models\College::pluck('name',
                                                    'id'); as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="dept"
                                                    class="col-form-label">بەش:</label>
                                            </div>
                                            <div class="col-4">
                                                <select required class="form-select px-5 department"
                                                    name="dept_id" id="dept"
                                                    aria-label="Default select example">
                                                    <option selected>بەش هەلبژێرە</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="stage"
                                                    class="col-form-label">قۆناغ:</label>
                                            </div>
                                            <div class="col-4">
                                                <select required class="form-select px-5"
                                                    name="stage" id="stage"
                                                    aria-label="Default select example">
                                                    <option selected>قۆناغ هەلبژێرە</option>
                                                    <option value="first">یەکەم</option>
                                                    <option value="second">دووەم</option>
                                                    <option value="third">سێیەم</option>
                                                    <option value="fourth">چوارەم</option>
                                                    <option value="fifth">پێنجەم</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-2">
                                                <label for="email" class="col-form-label">ئیمەیڵی
                                                    زانکۆیی:</label>
                                            </div>
                                            <div class="col-4">
                                                <input required type="email" name="email" id="email"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="field" class="col-form-label">پڕۆژەی
                                                        دەرچوون لە
                                                        کام
                                                        بوارە؟</label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (لێرەدا پێویستە قوتابی
                                                        بواری پڕۆژەکە و پوختەیەک لەسەری بنووسێت.
                                                        کە لە 300 وشە کەمتر نەبێ) </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <textarea name="field" id="field" rows="4"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="title" class="col-form-label">
                                                        ناونیشانی پڕۆژەی دەرچوون:
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="title" name="title"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="teams"
                                                        class="col-form-label">پرۆژەکە بە تەنها
                                                        جیبەجێ
                                                        دەکرێ
                                                        یان بەکاری پێکەوەیی؟ ئەگەر بە تەنها نییە
                                                        چەند قوتابی تر
                                                        پێویستە؟</label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (ناوی قوتابییە هاوکارەکان و ئیمەل و قۆناغ
                                                        بەشەکانیان
                                                        دیاری
                                                        بکرێت. هەروەها ئەرکیان لە پڕۆژەكە دیاری
                                                        بکرێ)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <textarea name="teams" id="teams" rows="4"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="time" class="col-form-label">
                                                        چەند ماوە پێویستە بۆ جێبەجێکردنی پڕۆژەکە؟
                                                    </label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (لێرەدا قوتابی پێویستە ئەو ماوەیە دەستنیشان
                                                        بکا کە بۆ
                                                        جێبەجێ
                                                        کردنی پڕۆژەکە پێویستە)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="time" name="time"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="money" class="col-form-label">
                                                        پڕی پارەی خەمڵێندراو بۆ جێبەجێکردنی پڕۆژەکە
                                                    </label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (پێویستە بڕی پارەی خەمڵێندراو لە سنووری
                                                        گرانتەکە تێپەر
                                                        نەکا)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="money" name="money"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="sponsor" class="col-form-label">
                                                        بڕی وەرگرتنی سپۆنسەر لە دەرەوەی زانکۆ چەندە؟
                                                    </label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (ئەگەر ئایدیاکە سپۆنسەری لە دەرەوەی زانکۆ
                                                        هەبێت چانسی لە
                                                        پێدانی
                                                        گرانتی زانکۆمان زیاترە)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="sponsor"
                                                    name="sponsor" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top mt-5 ">
                                        <div class="row flex-column mt-4">
                                            <div class="col">
                                                <label for="plan" class="col-form-label mb-2 ">
                                                    پلانی جێبەجێکردنی ئایدیاکە بە هەنگاو بخەرەروو:
                                                </label>
                                            </div>
                                            <div class="col">
                                                <textarea name="plan" id="plan" rows="5"
                                                    class="form-control border-0"
                                                    style=" resize: none;"></textarea>
                                            </div>
                                        </div>

                                        <div class="row flex-column mt-3">
                                            <div class="col">
                                                <label for="advantage" class="col-form-label mb-2 ">
                                                    بە چەند خالێک سوودەکانی جێبەجێکردنی ئەم ئایدیا
                                                    بۆ زانکۆ
                                                    یاخود بۆ
                                                    سێکتەرەکانی کۆمڵگە بخەرەڕوو:
                                                </label>
                                            </div>
                                            <div class="col">
                                                <textarea name="advantage" id="advantage" rows="5"
                                                    class="form-control border-0"
                                                    style=" resize: none;"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-outline-primary px-5 mt-3"
                                        type="submit">ناردن</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="accordion-item" data-aos="fade-left" data-aos-duration="1500">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Grant Idea From
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{-- Grant Idea From --}}
                            <div class="card card-body" dir="rtl">
                                <div
                                    class="d-flex align-items-center justify-content-around mb-5 mt-3">
                                    <div></div>
                                    <h4 class="">فۆرمی داواکاری بۆ وەرگرتنی گڕانتی زانکۆ بۆ بیرۆکەی
                                        بە
                                        سوود
                                        (Idea)
                                    </h4>
                                    <img src="{{ asset('images/brand.png') }}" alt="univertsy logo"
                                        class="img-fluid" style="width: 80px">
                                </div>
                                <form class="px-5" method="POST"
                                    action="{{ route('admin.grants.store') }}">
                                    @csrf

                                    <input required type="number" min="1" max="1" name="grant_type"
                                        value="1" hidden>

                                    <div class="border-bottom mb-5">

                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="name" class="col-form-label"> ناوی
                                                    قوتابی:</label>
                                            </div>
                                            <div class="col-4">
                                                <input required type="text" name="name" id="name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="college"
                                                    class="col-form-label">کۆلێژ:</label>
                                            </div>
                                            <div class="col-4">
                                                <select required class="form-select px-5"
                                                    id="collegeIdea" name="college_id" required>
                                                    <option selected>کۆلێژ هەلبژێرە</option>
                                                    @foreach (\App\Models\College::pluck('name',
                                                    'id'); as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="dept"
                                                    class="col-form-label">بەش:</label>
                                            </div>
                                            <div class="col-4">
                                                <select required
                                                    class="form-select px-5 departmentIdea"
                                                    name="dept_id" id="dept"
                                                    aria-label="Default select example">
                                                    <option selected>بەش هەلبژێرە</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row g-3 align-items-start mb-3">
                                            <div class="col-2">
                                                <label for="stage"
                                                    class="col-form-label">قۆناغ:</label>
                                            </div>
                                            <div class="col-4">
                                                <select required class="form-select px-5"
                                                    name="stage" id="stage"
                                                    aria-label="Default select example">
                                                    <option selected>قۆناغ هەلبژێرە</option>
                                                    <option value="first">یەکەم</option>
                                                    <option value="second">دووەم</option>
                                                    <option value="third">سێیەم</option>
                                                    <option value="fourth">چوارەم</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-2">
                                                <label for="email" class="col-form-label">ئیمەیڵی
                                                    زانکۆیی:</label>
                                            </div>
                                            <div class="col-4">
                                                <input required type="email" name="email" id="email"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="field" class="col-form-label">پڕۆژەی
                                                        دەرچوون لە
                                                        کام
                                                        بوارە؟</label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">(پێویستە
                                                        قوتابی
                                                        پوختەیەک لە
                                                        بارەی ئادیاکەی بخاتە ڕوو کە لە 300 وشە کەمتر
                                                        نەبێ)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <textarea name="field" id="field" rows="4"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="title" class="col-form-label">
                                                        ناونیشانی ئایدیا:
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="title" name="title"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="teams"
                                                        class="col-form-label">ئایدیاکە بە تەنها
                                                        جیبەجێ
                                                        دەکرێ
                                                        یان بەکاری پێکەوەیی؟ ئەگەر بە تەنها نییە
                                                        چەند قوتابی تر
                                                        پێویستە؟</label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (ناوی قوتابییە هاوکارەکان و ئیمەل و قۆناغ
                                                        بەشەکانیان
                                                        دیاری
                                                        بکرێت. ئەرکەکانیان دیاری بکرێ)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <textarea name="teams" id="teams" rows="4"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="time" class="col-form-label">
                                                        چەند ماوە پێویستە بۆ جێبەجێکردنی ئایدیاکە؟
                                                    </label>
                                                    <span class="text-muted"
                                                        style="font-size: .9rem !important;">
                                                        (لێرەدا قوتابی پێویستە ئەو ماوەیە دەستنیشان
                                                        بکا کە بۆ
                                                        جێبەجێ
                                                        کردنی ئایدیاکە پێویستە)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="time" name="time"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="money" class="col-form-label">
                                                        پڕی پارەی خەمڵێندراو بۆ جێبەجێکردنی ئادیاکە
                                                    </label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (پێویستە بڕی پارەی خەمڵێندراو لە سنووری
                                                        گرانتەکە تێپەر
                                                        نەکا)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="money" name="money"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-start mb-5">
                                            <div class="col-3">
                                                <div class="d-flex flex-column">
                                                    <label for="sponsor" class="col-form-label">
                                                        بڕی وەرگرتنی سپۆنسەر لە دەرەوەی زانکۆ چەندە؟
                                                    </label>
                                                    <span class="text-primary"
                                                        style="font-size: .9rem !important;">
                                                        (ئەگەر ئایدیاکە سپۆنسەری لە دەرەوەی زانکۆ
                                                        هەبێت چانسی لە
                                                        پێدانی
                                                        گرانتی زانکۆمان زیاترە)
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <input required type="text" id="sponsor"
                                                    name="sponsor" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top mt-5 ">
                                        <div class="row flex-column mt-4">
                                            <div class="col">
                                                <label for="plan" class="col-form-label mb-2 ">
                                                    پلانی جێبەجێکردنی ئایدیاکە بە هەنگاو بخەرەروو:
                                                </label>
                                            </div>
                                            <div class="col">
                                                <textarea name="plan" id="plan" rows="5"
                                                    class="form-control border-0"
                                                    style=" resize: none;"></textarea>
                                            </div>
                                        </div>

                                        <div class="row flex-column mt-3">
                                            <div class="col">
                                                <label for="advantage" class="col-form-label mb-2 ">
                                                    بە چەند خالێک سوودەکانی جێبەجێکردنی ئەم ئایدیا
                                                    بۆ زانکۆ
                                                    یاخود بۆ
                                                    سێکتەرەکانی کۆمڵگە بخەرەڕوو:
                                                </label>
                                            </div>
                                            <div class="col">
                                                <textarea name="advantage" id="advantage" rows="5"
                                                    class="form-control border-0"
                                                    style=" resize: none;"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-outline-primary px-5 mt-3">ناردن</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="accordion-item" data-aos="fade-up-right" data-aos-duration="1700">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#firstPresentation"
                            aria-expanded="false" aria-controls="firstPresentation">
                            First Presentaion Evaluation Form
                        </button>
                    </h2>
                    <div id="firstPresentation" class="accordion-collapse collapse"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row justify-content-center my-5">
                                <div class="col-8" dir="rtl">
                                    <img src="{{ asset('images/header-logo.png') }}" class="mb-4"
                                        alt="" style="width: 100%;">

                                    <form action="">
                                        <div class="text-center" style="margin-bottom: 2.5rem">
                                            <h4 class="lh-base">
                                                هەلسەنگاندنی (سەرەتایی) بۆ پڕۆژەی توێژینەی قوتابیانی
                                                قوناغی کۆتایی <br>
                                                فۆرمی هەلسەنگێنەران و سەرپەشتیار بۆ ساڵی خوێندنی
                                                2021 -
                                                2022
                                            </h4>
                                        </div>
                                        <div class="mb-4">
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-2">
                                                    <label for="name" class="col-form-label"> ناوی
                                                        قوتابی:</label>
                                                </div>
                                                <div class="col-4">
                                                    <input required type="text" name="name"
                                                        id="name" class="form-control light-border">
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-2">
                                                    <label for="name" class="col-form-label">
                                                        ناونیشانی پڕۆژە:
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <input required type="text" name="name"
                                                        id="name" class="form-control light-border">
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-bordered">

                                            <tr class="table_header">
                                                <th class="pt-4">بابەتەکان</th>
                                                <th>نمرەی هەلسەنگێنەری-1 <br> بۆ هەر بڕگەیەک (1-3)
                                                    نمرە
                                                </th>
                                                <th>نمرەی هەلسەنگێنەری-2 <br> بۆ هەر بڕگەیەک (1-3)
                                                    نمرە
                                                </th>
                                                <th class="w-25 " rowspan="3">
                                                    نمرەی سەرپەرشتیار لە 8 نمرە <br>بۆ پابەندبوونی
                                                    قوتابی بۆ پابەندبوونی
                                                    قوتابی بە
                                                    ئەنجامدانی کارەکانی و
                                                    سەردانە هەفتانەکانی بۆ لای سەرپەرشتیار
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <label for="" class="fw-normal">
                                                        1. تێگەیشتنی قوتابی لە پلانی پڕۆژەکەی و
                                                        ڕیژەی
                                                        ئەنجامدانی
                                                        پڕۆژەکەی (بە
                                                        بەڵگە)
                                                    </label>
                                                </th>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0" min="1"
                                                        max="3">
                                                </td>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0" min="1"
                                                        max="3">
                                                </td>


                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="" class="fw-normal">
                                                        2. ڕادەی بە دەستهێنانی سەرچاوە زانستیەکان و
                                                        زانیاری نوێ (بە
                                                        بەڵگە)
                                                    </label>
                                                </th>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0" min="1"
                                                        max="3">
                                                </td>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0" min="1"
                                                        max="3">
                                                </td>

                                            </tr>
                                            <tr style="background-color: #f2f2f2">
                                                <td>
                                                    کۆی نمرەکان
                                                </td>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0"
                                                        style="background-color: #f2f2f2" disabled
                                                        readonly>
                                                </td>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0"
                                                        style="background-color: #f2f2f2" disabled
                                                        readonly>
                                                </td>
                                                <td>
                                                    <input required type="number"
                                                        class="form-control border-0"
                                                        style="background-color: #f2f2f2" disabled
                                                        readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="">
                                                        نمرەی تاقیکردنەوە تیۆری لە (10)
                                                    </label>
                                                </td>
                                                <td colspan="3">
                                                    <input required type="number"
                                                        class="form-control border-0" min="1"
                                                        max="10">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="">
                                                        نمرەی پۆستەری ئەکادیمی لە (10)
                                                    </label>
                                                </td>
                                                <td colspan="3">
                                                    <input required type="number"
                                                        class="form-control border-0" min="1"
                                                        max="10">
                                                </td>
                                            </tr>
                                            <tr style="background-color: #f2f2f2">
                                                <td>
                                                    <label for="">
                                                        کۆی گشتی نمرەکان (کۆشش لە 40)
                                                    </label>
                                                </td>
                                                <td colspan="3">
                                                    <input required type="number"
                                                        class="form-control border-0"
                                                        style="background-color: #f2f2f2" disabled
                                                        readonly>
                                                </td>
                                            </tr>


                                        </table>

                                        <div class="my-4">
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-4">
                                                    <label for="name" class="col-form-label">
                                                        ناو و واژۆی سەرپەرشتیاری پڕۆژکە:
                                                    </label>
                                                </div>
                                                <div class="col-5 ">
                                                    <input required type="text" name="name"
                                                        id="name" class="form-control light-border">
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-4">
                                                    <label for="" class="col-form-label">
                                                        ناوی هەلسەنگێنەری-1 و واژووەکەی:
                                                    </label>
                                                </div>
                                                <div class="col-5 ">
                                                    <input required type="text" name="" id=""
                                                        class="form-control light-border">
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-4">
                                                    <label for="" class="col-form-label">
                                                        ناوی هەلسەنگێنەری-1 و واژووەکەی:
                                                    </label>
                                                </div>
                                                <div class="col-5">
                                                    <input required type="text" name="" id=""
                                                        class="form-control light-border">
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                    <div>
                                        <span class="fw-bold">تێبینی: </span>
                                        هەلسەنگاندنی پۆستەری ئەکادیمی پرۆژەی دەرچوونی قوتابیان لە
                                        لایەن
                                        هەردوو مامۆستای هەڵسەنگێنەر
                                        ئەنجام دەدەرێت لەسەر (10)نمرە.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up-left" data-aos-duration="1800">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#lastPresentation"
                            aria-expanded="false" aria-controls="lastPresentation">
                            Last Presentaion Evaluation Form
                        </button>
                    </h2>
                    <div id="lastPresentation" class="accordion-collapse collapse"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row justify-content-center my-5">
                                <div class="col-8" dir="rtl">
                                    <img src="{{ asset('images/header-logo.png') }}" class="mb-4"
                                        alt="" style="width: 100%;">

                                    <form action="">
                                        <div class="text-center" style="margin-bottom: 3rem">
                                            <h4 class="lh-base">
                                                هەلسەنگاندنی (کۆتایی) بۆ پڕۆژەی توێژینەی قوتابیانی
                                                قوناغی کۆتایی <br>
                                                فۆرمی هەلسەنگێنەران و سەرپەشتیار بۆ ساڵی خوێندنی
                                                2021 -
                                                2022
                                            </h4>
                                        </div>
                                        <div class="mb-4">
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-2">
                                                    <label for="name" class="col-form-label"> ناوی
                                                        قوتابی:</label>
                                                </div>
                                                <div class="col-4">
                                                    <input required type="text" name="name"
                                                        id="name" class="form-control light-border">
                                                </div>
                                            </div>
                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-2">
                                                    <label for="name" class="col-form-label">
                                                        ناونیشانی پڕۆژە:
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <input required type="text" name="name"
                                                        id="name" class="form-control light-border">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-5">
                                            <table class="table table-bordered">

                                                <tr class="table_header">
                                                    <th style="width: 20px"></th>
                                                    <th class="pt-3 h5">بابەتەکان</th>
                                                    <th class="w-25">
                                                        نمرەی سەرپەڕشتیار <br>بۆ هەر بڕگەیەک
                                                        (1-4)نمرە
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            ڕادەی پابەندی قوتابی بە ڕینمایەکانی
                                                            زانکۆ بۆ نووسینی
                                                            پڕۆژەی دەرچوونەکەی
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            توانای قوتابی لە بەدەستهێنانی سەرچاوە
                                                            زانستیەکان و
                                                            زانیاری نوێ
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            توانای قوتابی لە بەکارهێنانی زانیاریەکان
                                                            لە کاتی
                                                            نووسینەوەی پڕۆژەکەی
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            توانای قوتابی لە دەرخستنی ئەنجامەکان بە
                                                            شێوەی هونەری
                                                            شیاو و بەرنامەی گونجاو
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            ڕادەی پابەندی قوتابی بە ڕینمایی و
                                                            سەرنجەکانی مامۆستای
                                                            سەرپەرشتیاری توێژینەوەکەی
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="3">
                                                    </td>
                                                </tr>

                                                <tr style="background-color: #f2f2f2">
                                                    <td></td>
                                                    <td class="text-center">
                                                        <label for="">
                                                            کۆنمرە لە (20)
                                                        </label>
                                                    </td>
                                                    <td colspan="3">
                                                        <input required type="number"
                                                            class="form-control border-0"
                                                            style="background-color: #f2f2f2"
                                                            disabled readonly>
                                                    </td>
                                                </tr>

                                            </table>

                                            <div class="row g-3 align-items-start mb-3">
                                                <div class="col-4">
                                                    <label for="name" class="col-form-label">
                                                        ناو و واژۆی سەرپەرشتیاری توێژینەوەکە:
                                                    </label>
                                                </div>
                                                <div class="col-5 ">
                                                    <input required type="text" name="name"
                                                        id="name" class="form-control light-border">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <table class="table table-bordered">

                                                <tr class="table_header">
                                                    <th style="width: 20px"></th>
                                                    <th class="pt-5 h5">بابەتەکان</th>
                                                    <th style="width: 15%">
                                                        نمرەی هەڵسەنگێنەری-1 <br>
                                                        بۆ هەر بڕگەیەک (1-4)نمرە
                                                    </th>
                                                    <th style="width: 15%">
                                                        نمرەی هەڵسەنگێنەری-2 <br>
                                                        بۆ هەر بڕگەیەک (1-4)نمرە
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            تێگەیشتنی قوتابی کە ناوەڕۆکی پڕۆژەکەی
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            چونیەتی پێشکەشکردنی پڕۆژەکەی و
                                                            بەکار‌هێنانی هۆیەکانی
                                                            ڕوونکردنەوە
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            چۆنیەتی نووسینی پڕۆژەکەی
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            توانای قوتابی بۆ وەڵامدانەوەی پسیارەکانی
                                                            لێژنە
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <label for="" class="fw-normal">
                                                            تا چەند بایەخی بە بیرکردنەوەی زانستی
                                                            داوە و سوودی کە
                                                            پرۆژەکە وەرگرتووە
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                    <td>
                                                        <input required type="number"
                                                            class="form-control border-0" min="1"
                                                            max="4">
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td></td>
                                                    <td class="text-center">
                                                        <label for="">
                                                            کۆی نمرە لە (20)
                                                        </label>
                                                    </td>
                                                    <td colspan="">
                                                        <input required type="number"
                                                            class="form-control border-0"
                                                            style="background-color: #fff" disabled
                                                            readonly>
                                                    </td>
                                                    <td colspan="">
                                                        <input required type="number"
                                                            class="form-control border-0"
                                                            style="background-color: #fff" disabled
                                                            readonly>
                                                    </td>

                                                </tr>

                                                <tr style="background-color: #f2f2f2">
                                                    <td></td>
                                                    <td class="text-center">
                                                        <label for="">
                                                            نمرەی کۆتایی لە (40) بە ژمارە و نووسین
                                                        </label>
                                                    </td>
                                                    <td colspan="2">
                                                        <input required type="number"
                                                            class="form-control border-0"
                                                            style="background-color: #f2f2f2"
                                                            disabled readonly>
                                                    </td>
                                                </tr>

                                            </table>

                                            <div>
                                                <div class="row g-3 align-items-start mb-3">
                                                    <div class="col-3">
                                                        <label for="name" class="col-form-label">
                                                            ناو و واژۆی هەڵسەنگێنەری-1:
                                                        </label>
                                                    </div>
                                                    <div class="col-5 ">
                                                        <input required type="text" name="name"
                                                            id="name"
                                                            class="form-control light-border">
                                                    </div>
                                                </div>

                                                <div class="row g-3 align-items-start mb-3">
                                                    <div class="col-3">
                                                        <label for="name" class="col-form-label">
                                                            ناو و واژۆی هەڵسەنگێنەری-2:
                                                        </label>
                                                    </div>
                                                    <div class="col-5 ">
                                                        <input required type="text" name="name"
                                                            id="name"
                                                            class="form-control light-border">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>

    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
            $("#college").on('change', function() {
                let collegeId = $(this).val();
                // Ajax
                $.ajax({
                    url: `{{ route('getDepartment') }}`,
                    dataType: 'json',
                    data:{
                        collegeId
                    },
                    beforeSend: function() {
                        $(".department").html('<option>--- Loading ---</option>');
                    },
                    success: function(res) {
                        console.log(res);
                        let _html = '';
                        $.each(res, function(id, data) {

                            _html += `<option  value="${id}">${data}</option>`;
                        });
                        $(".department").html(_html);

                    }
                });
            });
        });
    $(document).ready(function() {
            $("#collegeIdea").on('change', function() {
                let collegeId = $(this).val();
                // Ajax
                $.ajax({
                    url: `{{ route('getDepartment') }}`,
                    dataType: 'json',
                    data:{
                        collegeId
                    },
                    beforeSend: function() {
                        $(".departmentIdea").html('<option>--- Loading ---</option>');
                    },
                    success: function(res) {
                        console.log(res);
                        let _html = '';
                        $.each(res, function(id, data) {

                            _html += `<option  value="${id}">${data}</option>`;
                        });
                        $(".departmentIdea").html(_html);

                    }
                });
            });
        });
</script>
@endpush