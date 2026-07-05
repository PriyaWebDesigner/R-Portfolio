@extends('frontend.master')
@section('content')
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                {{-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-strategy">Strategy</li>
            <li data-filter=".filter-finance">Finance</li>
            <li data-filter=".filter-operations">Operations</li>
            <li data-filter=".filter-technology">Technology</li>
          </ul><!-- End Portfolio Filters --> --}}

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.webp') }}"
                                    alt="Portfolio Item" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.webp') }}"
                                        class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Business Growth Strategy</h4>
                                <p>Strategic Planning</p>
                                <div class="portfolio-tags">
                                    {{-- <span>Strategy</span>
                    <span>Consulting</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-finance">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.webp') }}"
                                    alt="Portfolio Item" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.webp') }}"
                                        class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Financial Restructuring</h4>
                                <p>Financial Advisory</p>
                                <div class="portfolio-tags">
                                    {{-- <span>Finance</span>
                    <span>Investment</span>   --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-operations">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.webp') }}"
                                    alt="Portfolio Item" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-3.webp') }}"
                                        class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Supply Chain Optimization</h4>
                                <p>Operations Management</p>
                                <div class="portfolio-tags">
                                    {{-- <span>Operations</span>
                    <span>Logistics</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-technology">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.webp') }}"
                                    alt="Portfolio Item" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.webp') }}"
                                        class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Digital Transformation</h4>
                                <p>Technology Consulting</p>
                                <div class="portfolio-tags">
                                    {{-- <span>Technology</span>
                    <span>Innovation</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-5.webp') }}"
                                    alt="Portfolio Item" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-5.webp') }}"
                                        class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Market Expansion</h4>
                                <p>Strategic Planning</p>
                                <div class="portfolio-tags">
                                    {{-- <span>Strategy</span>
                    <span>Growth</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-finance">
                        <div class="portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-6.webp') }}"
                                    alt="Portfolio Item" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('frontend/assets/img/portfolio/portfolio-6.webp') }}"
                                        class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                                    <a href="#" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Investment Strategy</h4>
                                <p>Financial Advisory</p>
                                <div class="portfolio-tags">
                                    {{-- <span>Finance</span>
                    <span>Investment</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Items Container -->

            </div>

            {{-- <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
          <a href="{{url('/portfolio-details')}}" class="btn btn-primary">View All Case Studies</a>
        </div> --}}

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Stats Section -->
    <section id="portfolio" class="portfolio section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div>
    </section>
    <section id="stats" class="stats section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="avatars d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/img/person/person-m-2.webp') }}" alt="Avatar 1"
                            class="rounded-circle" loading="lazy">
                        <img src="{{ asset('frontend/assets/img/person/person-m-3.webp') }}" alt="Avatar 2"
                            class="rounded-circle" loading="lazy">
                        <img src="{{ asset('frontend/assets/img/person/person-m-5.webp') }}" alt="Avatar 3"
                            class="rounded-circle" loading="lazy">
                        {{-- <img src="{{ asset('frontend/assets/img/person/person-m-5.webp') }}" alt="Avatar 4"
                            class="rounded-circle" loading="lazy"> --}}
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row counters">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><span data-purecounter-start="0" data-purecounter-end="185" data-purecounter-duration="1"
                                    class="purecounter"></span>+</h2>
                            <p>Nemo enim ipsam</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                            <h2><span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>K</h2>
                            <p>Voluptatem sequi</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                            <h2><span data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="1"
                                    class="purecounter"></span>+</h2>
                            <p>Dolor sit consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Stats Section -->

    <section id="stats" class="stats section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">


                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="avatars d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/img/person/person-m-2.webp') }}" alt="Avatar 1"
                            class="rounded-circle" loading="lazy">
                        <img src="{{ asset('frontend/assets/img/person/person-m-3.webp') }}" alt="Avatar 2"
                            class="rounded-circle" loading="lazy">
                        <img src="{{ asset('frontend/assets/img/person/person-m-5.webp') }}" alt="Avatar 3"
                            class="rounded-circle" loading="lazy">
                        {{-- <img src="{{ asset('frontend/assets/img/person/person-m-5.webp') }}" alt="Avatar 4"
                            class="rounded-circle" loading="lazy"> --}}
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row counters">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><span data-purecounter-start="0" data-purecounter-end="185" data-purecounter-duration="1"
                                    class="purecounter"></span>+</h2>
                            <p>Nemo enim ipsam</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                            <h2><span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>K</h2>
                            <p>Voluptatem sequi</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                            <h2><span data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="1"
                                    class="purecounter"></span>+</h2>
                            <p>Dolor sit consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Stats Section -->

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/person/person-m-9.webp')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/person/person-f-5.webp')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/person/person-f-12.webp')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/person/person-m-12.webp')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}
@endsection
