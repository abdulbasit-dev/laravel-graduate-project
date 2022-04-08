@extends('layouts.app')

@section('content')
    <style>
        #showcase {
            position: relative;
            background: url('{{ asset('images/contact-page.jpg') }}');
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
                    <div class="col-lg-8 text-left">
                        <div  data-aos="fade-down">

                            <h1 class="display-3" style="margin-top: 6rem">Get In Touch</h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptas.
                            </p>
                        </div>

                        <a href="#contact" class="btn btn-outline-primary" data-aos="fade-right"  data-aos-duration="1000">Contact Us</a>
                        <a href="#team" class="btn btn-outline-primary ms-3" data-aos="fade-left" data-aos-duration="1000">Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container my-5" id="contact">
        <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="mb-3">Contact Us</h3>
            <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
        </div>

        <div class="row my-5">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <!-- Bootstrap 5 starter form -->
                <form id="contactForm">

                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name" />
                    </div>

                    <!-- Email address input -->
                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">Email Address</label>
                        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
                    </div>

                    <!-- Message input -->
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                    </div>

                    <!-- Form submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>

                </form>

            </div>
            <div class="col-md-6" data-aos="fade-left"  data-aos-duration="1000">
                <img src="{{ asset('images/contact.jpg') }}" alt="contact us" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <section class="container my-5" id="team" >
        <div class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="mb-3">Our Team</h3>
            <hr class="mb-4 mt-0 d-inline-block mx-auto w-50 bg-primary" style="height: 2px" />
            <p class="lead text-center  mb-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quidem aut totam
                dolores molestias tempore,
                vel architecto.
            </p>
        </div>

        <div class="d-flex justify-content-between">
            @foreach ($teams as $team)
                <div class="d-flex   align-items-stretch" data-aos="zoom-in-down" data-aos-duration="1500">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="{{ asset($team->image) }}" style="width:127px; height: 128px;" class="rounded-circle mb-3" alt="">
                            <h4 class="card-title mb-3">{{ $team->name }}</h4>
                            <p class="card-text">
                                {{ $team->description }}
                            </p>
                            {{-- <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
