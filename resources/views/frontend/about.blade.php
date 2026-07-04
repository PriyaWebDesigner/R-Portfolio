@extends('frontend.master')

@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Intro + Photo -->
        <div class="row align-items-center justify-content-between gy-5 mb-5">
          <div class="col-lg-7" data-aos="fade-right" data-aos-delay="150">
            <div class="intro-content">
              <span class="eyebrow">Hello there</span>
              <h2 class="headline">Hi, I'm Brandon - a calm-minded creative developer crafting serene digital journeys</h2>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus. Sed interdum, nunc non feugiat tempor, orci lorem luctus ligula, vitae rutrum nisl lorem non nulla.
              </p>
              <p>
                Integer posuere lacus in mi fringilla, eget luctus risus pulvinar. Curabitur a arcu a nisl tempus sagittis. Aenean varius, tortor sed porttitor dictum, augue eros viverra lectus, at efficitur magna lacus in risus.
              </p>

              <div class="cta-group">
                <a href="#portfolio" class="btn-ghost">
                  View My Work <i class="bi bi-arrow-up-right"></i>
                </a>
                <a href="#" class="link-underline">
                  Download Resume <i class="bi bi-download"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="250">
            <figure class="profile-figure text-center text-lg-end">
              <img src="{{asset('frontend/assets/img/profile/profile-square-1.png')}}" alt="Portrait of Alex" class="img-fluid profile-photo">
            </figure>
          </div>
        </div>
        <!-- End Intro + Photo -->

        <!-- Skills Grid -->
        {{-- <div class="mb-5">
          <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="120">
              <div class="skill-item">
                <i class="bi bi-layout-text-window"></i>
                <h3>UI/UX</h3>
                <p>Vivamus sagittis lacus molestie placerat.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="180">
              <div class="skill-item">
                <i class="bi bi-code-slash"></i>
                <h3>React.js</h3>
                <p>Maecenas pharetra magna sit amet risus.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="240">
              <div class="skill-item">
                <i class="bi bi-phone"></i>
                <h3>Mobile-first</h3>
                <p>Donec id elit non mi porta gravida.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="skill-item">
                <i class="bi bi-camera"></i>
                <h3>Photography</h3>
                <p>Aliquam euismod nunc at augue cursus.</p>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- End Skills Grid -->

        <!-- Journey Timeline -->
        {{-- <div class="mb-5">
          <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="120">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2018</time>
                <h4>B.A. in Design</h4>
                <p>Quisque euismod turpis ut sapien luctus bibendum.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="180">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2020</time>
                <h4>Freelance Start</h4>
                <p>Mauris non arcu non urna convallis vulputate.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2022</time>
                <h4>Joined Creative Studio</h4>
                <p>Nunc sed nibh et libero fermentum posuere.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2024</time>
                <h4>Lead Frontend</h4>
                <p>Proin commodo massa sit amet urna pretium.</p>
              </article>
            </div>
          </div>
        </div> --}}
        <!-- End Journey Timeline -->

        <!-- Quote -->
        {{-- <blockquote class="personal-quote text-center mb-5" data-aos="fade-down" data-aos-delay="200">
          <p>"Building clean and meaningful experiences through thoughtful code and quiet design."</p>
        </blockquote> --}}
        <!-- End Quote -->

        <!-- Fun Facts -->
        {{-- <div class="row g-3 justify-content-center">
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="120">
            <div class="fact-pill">
              <i class="bi bi-magic"></i>
              <span>Minimalism</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="160">
            <div class="fact-pill">
              <i class="bi bi-headphones"></i>
              <span>Lo-fi Beats</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
            <div class="fact-pill">
              <i class="bi bi-geo-alt"></i>
              <span>City Walks</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="240">
            <div class="fact-pill">
              <i class="bi bi-brush"></i>
              <span>Sketching</span>
            </div>
          </div>
        </div> --}}
        <!-- End Fun Facts -->

      </div>

    </section><!-- /About Section -->

        {{-- <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>HTML</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>CSS</h3>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>JavaScript</h3>
              <p>Neque porro quisquam est qui dolorem ipsum quia dolor.</p>
              <span class="text-end d-block">80%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Photoshop</h3>
              <p>Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
              <span class="text-end d-block">55%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section --> --}}


@endsection