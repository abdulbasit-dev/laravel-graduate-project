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
        z-index: 2;
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
        z-index: 10000;
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
</style>

<div class="home" id="home">
    <div class="video-overlay"></div>
    <div class="video">
        <video src="{{ asset('images/video.mp4') }}" loop muted autoplay></video>
    </div>

    <div class="content">
        <h1>
            explore new places, <br />
            adventure awaits.
        </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod necessitatibus sunt atque
            consequuntur quam veniam magnam
            consectetur, odio velit alias!
        </p>
    </div>
</div>

<section class="mt-5" style="margin-bottom: 20rem">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-primary mx-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#grant_idea" aria-expanded="false">
                    Grant Idea From
                </button>

                <button class="btn btn-primary mx-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#grant_project" aria-expanded="false">
                    Grant Graduate Project From
                </button>
            </div>
            <div class="collapse multi-collapse" id="grant_project">
                {{-- Grant Graduate Project From --}}
                <div class="card card-body" dir="rtl">
                    <div class="d-flex align-items-center justify-content-around mb-5 mt-3">
                        <div></div>
                        <h4 class="">فۆرمی داواکاری بۆ وەرگرتنی گڕانتی زانکۆمان بۆ (پڕۆژەی دەرچوون)
                        </h4>
                        <img src="{{ asset('images/brand.png') }}" alt="univertsy logo"
                            class="img-fluid" style="width: 80px">
                    </div>
                    <form class="px-5">

                        <div class="border-bottom mb-5">

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="name" class="col-form-label"> ناوی قوتابی:</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="college" class="col-form-label">کۆلێژ:</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select px-5" name="college" id="college"
                                        aria-label="Default select example">
                                        <option selected>کۆلێژ هەلبژێرە</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="dept" class="col-form-label">بەش:</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select px-5" name="dept" id="dept"
                                        aria-label="Default select example">
                                        <option selected>بەش هەلبژێرە</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="stage" class="col-form-label">قۆناغ:</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select px-5" name="stage" id="stage"
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
                                    <input type="email" name="email" id="email"
                                        class="form-control">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="row g-3 align-items-start mb-5">
                                <div class="col-3">
                                    <div class="d-flex flex-column">
                                        <label for="field" class="col-form-label">پڕۆژەی دەرچوون لە
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
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-5">
                                <div class="col-3">
                                    <div class="d-flex flex-column">
                                        <label for="friend" class="col-form-label">پرۆژەکە بە تەنها
                                            جیبەجێ
                                            دەکرێ
                                            یان بەکاری پێکەوەیی؟ ئەگەر بە تەنها نییە چەند قوتابی تر
                                            پێویستە؟</label>
                                        <span class="text-primary"
                                            style="font-size: .9rem !important;">
                                            (ناوی قوتابییە هاوکارەکان و ئیمەل و قۆناغ بەشەکانیان
                                            دیاری
                                            بکرێت. هەروەها ئەرکیان لە پڕۆژەكە دیاری بکرێ)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <textarea name="friend" id="friend" rows="4"
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
                                            (لێرەدا قوتابی پێویستە ئەو ماوەیە دەستنیشان بکا کە بۆ
                                            جێبەجێ
                                            کردنی پڕۆژەکە پێویستە)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="time" name="time" class="form-control">
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
                                            (پێویستە بڕی پارەی خەمڵێندراو لە سنووری گرانتەکە تێپەر
                                            نەکا)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="money" name="money" class="form-control">
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
                                            (ئەگەر ئایدیاکە سپۆنسەری لە دەرەوەی زانکۆ هەبێت چانسی لە
                                            پێدانی
                                            گرانتی زانکۆمان زیاترە)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="sponsor" name="sponsor"
                                        class="form-control">
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
                                        بە چەند خالێک سوودەکانی جێبەجێکردنی ئەم ئایدیا بۆ زانکۆ
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

            <div class="collapse multi-collapse" id="grant_idea">
                {{-- Grant Idea From --}}
                <div class="card card-body" dir="rtl">
                    <div class="d-flex align-items-center justify-content-around mb-5 mt-3">
                        <div></div>
                        <h4 class="">فۆرمی داواکاری بۆ وەرگرتنی گڕانتی زانکۆ بۆ بیرۆکەی بە سوود
                            (Idea)
                        </h4>
                        <img src="{{ asset('images/brand.png') }}" alt="univertsy logo"
                            class="img-fluid" style="width: 80px">
                    </div>
                    <form class="px-5">

                        <div class="border-bottom mb-5">

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="name" class="col-form-label"> ناوی قوتابی:</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="college" class="col-form-label">کۆلێژ:</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select px-5" name="college" id="college"
                                        aria-label="Default select example">
                                        <option selected>کۆلێژ هەلبژێرە</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="dept" class="col-form-label">بەش:</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select px-5" name="dept" id="dept"
                                        aria-label="Default select example">
                                        <option selected>بەش هەلبژێرە</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 align-items-start mb-3">
                                <div class="col-2">
                                    <label for="stage" class="col-form-label">قۆناغ:</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-select px-5" name="stage" id="stage"
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
                                    <input type="email" name="email" id="email"
                                        class="form-control">
                                </div>
                            </div>

                        </div>

                        <div>
                            <div class="row g-3 align-items-start mb-5">
                                <div class="col-3">
                                    <div class="d-flex flex-column">
                                        <label for="field" class="col-form-label">پڕۆژەی دەرچوون لە
                                            کام
                                            بوارە؟</label>
                                        <span class="text-primary"
                                            style="font-size: .9rem !important;">(پێویستە
                                            قوتابی
                                            پوختەیەک لە
                                            بارەی ئادیاکەی بخاتە ڕوو کە لە 300 وشە کەمتر نەبێ)
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
                                        <label for="friend" class="col-form-label">ئایدیاکە بە تەنها
                                            جیبەجێ
                                            دەکرێ
                                            یان بەکاری پێکەوەیی؟ ئەگەر بە تەنها نییە چەند قوتابی تر
                                            پێویستە؟</label>
                                        <span class="text-primary"
                                            style="font-size: .9rem !important;">
                                            (ناوی قوتابییە هاوکارەکان و ئیمەل و قۆناغ بەشەکانیان
                                            دیاری
                                            بکرێت. ئەرکەکانیان دیاری بکرێ)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <textarea name="friend" id="friend" rows="4"
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
                                            (لێرەدا قوتابی پێویستە ئەو ماوەیە دەستنیشان بکا کە بۆ
                                            جێبەجێ
                                            کردنی ئایدیاکە پێویستە)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="time" name="time" class="form-control">
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
                                            (پێویستە بڕی پارەی خەمڵێندراو لە سنووری گرانتەکە تێپەر
                                            نەکا)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="money" name="money" class="form-control">
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
                                            (ئەگەر ئایدیاکە سپۆنسەری لە دەرەوەی زانکۆ هەبێت چانسی لە
                                            پێدانی
                                            گرانتی زانکۆمان زیاترە)
                                        </span>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="sponsor" name="sponsor"
                                        class="form-control">
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
                                        بە چەند خالێک سوودەکانی جێبەجێکردنی ئەم ئایدیا بۆ زانکۆ
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
</section>

@endsection