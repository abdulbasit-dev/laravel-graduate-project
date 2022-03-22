<footer class="text-center text-lg-start text-white"
  style="background-color: #1c2331">
  <section class="pt-2">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">{{ config('app.name') }}</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Recusandae asperiores deleniti consectetur ad, cum adipisci illum,
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Sitemap</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #7c4dff; height: 2px" />

          <p><a class="text-white text-decoration-none"
              href="{{ route('home') }}">About</a></p>
          <p><a class="text-white text-decoration-none"
              href="{{ route('project') }}">Projects</a></p>
          <p><a class="text-white text-decoration-none"
              href="{{ route('conference') }}">Conference</a></p>
          <p><a class="text-white text-decoration-none"
              href="{{ route('evaluationCommittee') }}">Evaluation Committee</a></p>
          <p><a class="text-white text-decoration-none"
              href="{{ route('expertSystemInfo') }}">Expert System Info</a></p>
          <p><a class="text-white text-decoration-none"
              href="{{ route('announcements') }}">Announcement</a></p>
          <p><a class="text-white text-decoration-none"
              href="{{ route('contactUs') }}">Contact Us</a></p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #7c4dff; height: 2px" />
          <p>
            @auth
              <a href="{{ route('admin.home') }}"
                class="text-white text-decoration-none">Your Account</a>
            @else
              <a href="{{ route('login') }}"
                class="text-white text-decoration-none">Login</a>
            @endauth
          </p>
          <p>
            <a href="{{ route('contactUs') }}/#team"
              class="text-white text-decoration-none">Our Team</a>
          </p>
          <p>
            <a href="#!"
              class="text-white text-decoration-none">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #7c4dff; height: 2px" />
          <div class="d-flex mb-2">
            <i class="fas fa-home me-1"></i>
            <div style="margin-top: -6px">
              Salahaddin University <br>
              Kirkuk road, Erbil <br>
              Kurdistan Region , Iraq <br>
              Zipcode: 44002
            </div>
          </div>
          <p><i class="fas fa-envelope mr-3"></i> info@su.edu.krd</p>
          <p><i class="fas fa-phone mr-3"></i> +964 2346 688</p>
          <p><i class="fas fa-print mr-3"></i> +964 2346 689</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>

  <div class="text-center p-3"
    style="background-color: rgba(0, 0, 0, 0.2)">
    © <span id="year"></span> Copyright: Student Graduate Project Team
  </div>
</footer>
