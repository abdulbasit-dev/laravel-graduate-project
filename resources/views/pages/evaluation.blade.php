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
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample">
                    Submit Your Idea
                </button>

                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample1" aria-expanded="false"
                    aria-controls="collapseExample">
                    Choose a project
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Some placeholder content for the collapse component. This panel is hidden by
                    default
                    but
                    revealed when the user activates the relevant trigger.
                </div>
            </div>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body" dir="rtl">
                    <form>
                        <div class="row g-3 align-items-center mb-4">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">ناونیشانی پرۆژەی دەرچوون:</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-4">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">ناونیشانی پرۆژەی دەرچوون:</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="inputPassword6" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                </div>
                            </div>
                                 <div class="row g-3 align-items-center mb-4">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">ناونیشانی پرۆژەی دەرچوون:</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputPassword6" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection