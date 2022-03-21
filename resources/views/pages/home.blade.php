@extends('layouts.app')

@section('content')
  <div>

    <div id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel">
      <div class="carousel-inner">
          @foreach ($banners as $banner)
          <div class="carousel-item <?php echo $loop->iteration == 1 ? "active" : "" ?>">
            <img src="{{ asset($banner->image) }}"
              class="d-block w-100"
              alt="...">
          </div>
          @endforeach  
      </div>
      <button class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"
          aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"
          aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    {{-- Carosel --}}
    {{-- <section id="showcase">
            <div id="carouselExampleCaptions" class="carousel carousel-light slide" data-bs-ride="carousel"
                data-bs-pause="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-image-1 active" data-bs-interval="3000">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="dark-overlay">
                            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 5rem">
                                <h1 class="display-4">Explore Students Projects</h1>
                                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Quos ut
                                    incidunt,
                                    voluptatem dolor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-2" data-bs-interval="3000">
                        <div class="dark-overlay">
                            <div class="carousel-caption d-none d-md-block " style="margin-bottom: 5rem">
                                <h1 class="display-4">Find Out The best Ranked One</h1>
                                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Quos ut
                                    incidunt,
                                    voluptatem dolor</p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-3" data-bs-interval="3000">
                        <div class="dark-overlay">
                            <div class="carousel-caption d-none d-md-block " style="margin-bottom: 5rem">
                                <h1 class="display-4">Get Idea From Others Project</h1>
                                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Quos ut
                                    incidunt,
                                    voluptatem dolor </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section> --}}
    {{-- About the project --}}
    <section style="margin:10rem 0 ;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-primary mb-4">About Project</h2>
            <div class="mb-2">
              <h3>Student Project Gradution</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sed, praesentium? Nam optio omnis, architecto ipsam voluptatem
                recusandae consequatur expedita. Neque?</p>
            </div>
            <div class="mb-4">
              <h3>Project Supervisor:</h3>
              <p class="lead fw-medium">D. Haider Haddad</p>
            </div>
            <a href="#team"
              class="btn btn-outline-danger">Meet Our Team</a>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('images/image5.jpg') }}"
              class="img-fluid rounded-3"
              alt="">
          </div>
        </div>
      </div>
    </section>

    {{-- Project Golds --}}
    {{-- <section id="home-icon" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Project Goals</h3>
                <hr class="mb-4 mt-0 d-inline-block mx-auto w-25 bg-primary" style="height: 2px" />
            </div>
            <div class="row justify-content-around ">
                <div class="col-md-3 mb-4 text-center  py-4  goal">
                    <i class="fas fa-cog fa-3x mb-2 text-primary"></i>
                    <h3 class="">Turning Gear</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, itaque?
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 py-4  goal">
                    <i class="fas fa-cloud fa-3x mb-2 text-primary"></i>
                    <h3>Sending Data</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, itaque?
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 py-4  goal">
                    <i class="fas fa-cart-plus fa-3x mb-2 text-primary"></i>
                    <h3>Making Money</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, itaque?
                    </p>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- MEET OUR TEAM --}}
    {{-- <section id="team" class="p-5" style="margin:10rem 0 ;background: #F7F8F8;color:rgb(36, 40, 51)">
            <div class="container">
                <h2 class="text-center ">Meet Our Team</h2>
                <p class="lead text-center  mb-5">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quidem aut totam
                    dolores molestias tempore,
                    vel architecto.
                </p>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3"
                                    alt="">
                                <h3 class="card-title mb-3">John Doe</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3"
                                    alt="">
                                <h3 class="card-title mb-3">Jane Doe</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3"
                                    alt="">
                                <h3 class="card-title mb-3">Steve Smith</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3"
                                    alt="">
                                <h3 class="card-title mb-3">Sara Smith</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    {{-- FAQ SECTION --}}
    {{-- <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#question-one"
                            aria-expanded="false">
                            Where exactly are you located?
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse"
                        data-bs-parent="#questions" style="">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#question-two">
                            How much does it cost to attend?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse"
                        data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#question-three">
                            What do I need to Know?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse"
                        data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#question-four">
                            How Do I sign up?
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse"
                        data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#question-five">
                            Do you help me find a job?
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse"
                        data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- FOOTER --}}
    {{-- <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
            <section class="pt-2">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Company name</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Bootstrap Angular</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © <span id="year"></span> Copyright: Student Graduate Project Team
            </div>
        </footer> --}}
  </div>
@endsection

@push('scripts')
  <script>
    // Get the current year for the copyright
    const year = document.getElementById('year');
    year.innerText = new Date().getFullYear();
  </script>
@endpush
