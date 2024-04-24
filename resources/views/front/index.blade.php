<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('frontend/global.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles.css')}}" />
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,700&display=swap"
    />

    <style>
          .card-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }

        .card {
          width: calc(33.33% - 20px);
          margin-bottom: 20px; /* Menambahkan margin bawah untuk memisahkan card */
          background-color: #f9f9f9;
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-image {
          width: 100%;
          height: auto; /* Tinggi menyesuaikan dengan lebar */
          object-fit: cover; /* Mengisi ruang dengan gambar tanpa merubah aspek rasio */
          border-top-left-radius: 8px; /* Mengembalikan border-radius */
          border-top-right-radius: 8px; /* Mengembalikan border-radius */
        }

        .card-title {
          margin-top: 0;
        }

        .card-date {
          font-style: italic;
          color: #888;
        }

        .card-description {
          color: #555;
        }

    </style>
  </head>
  <body>
    <div class="wireframe-landing-page">
      <img
        class="content-block-icon"
        alt=""
        src="{{ asset('frontend/public/image 55.png') }}"
      />

      <header class="header-background-parent">
        <div class="header-background"></div>
        <div class="navigation">
          <img
            class="nav-background-icon"
            loading="lazy"
            alt=""
            src="{{ asset('frontend/public/Rectangle 4.png')}}"
          />
        </div>
        <a href="home.html" class="nav-link home">Home</a>
        <a href="frontend/src/lastevent.html" class="nav-link event">Event</a>
        <a href="/" class="nav-link about-us">About Us</a>
        <a href="/" class="nav-link impact-trips">Impact Trips</a>
        <a href="{{ (route('register')) }}" class="nav-link register">register</a>
      </header>

      <main class="wireframe-landing-page-inner">
        <div class="frame-parent">
          <div class="frame-group">
            <div class="frame-container">
              <div class="tranformational-business-netwo-wrapper">
                <h1 class="tranformational-business-netwo-container">
                  <p class="tranformational-business-netwo">
                    Tranformational Business Network (TBN)
                  </p>
                  <p class="indonesia">Indonesia</p>
                </h1>
              </div>
              <div class="frame-div">
                <div class="arrow-circle-left-wrapper">
                </div>
                <div class="lorem-ipsum-dolor-sit-amet-co-wrapper">
                  <div class="lorem-ipsum-dolor">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </div>
                </div>
                <div class="frame-parent1">
                  <div class="arrow-circle-right-wrapper">
                  </div>
                  <img class="arrow-circle-right-icon1" loading="lazy" alt="" />
                </div>
              </div>
            </div>
            <div class="frame-wrapper1">
              <div class="button-parent">
                <div class="button">
                    <a href="frontend/src/about-us.html">
                        <b class="read-more">Read More</b>
                    </a>
                </div>
                <button class="button1">
                  <b class="read-more1">Read More</b>
                </button>
              </div>
            </div>
          </div>
          <div class="call-to-action-button">
            <div class="frame-parent2">
              <div class="frame-parent3">
                <div class="about-us-parent">
                  <h1 class="about-us1">About Us</h1>
                  <div class="lorem-ipsum-dolor-container">
                    <p class="lorem-ipsum-dolor1">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur. Excepteur
                      sint occaecat cupidatat non proident, sunt in culpa qui
                      officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="blank-line">&nbsp;</p>
                    <p class="lorem-ipsum-dolor2">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur. Excepteur
                      sint occaecat cupidatat non proident, sunt in culpa qui
                      officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
                <button class="button2">
                    <a href="frontend/src/about-us.html">
                     <b class="read-more2">Read More</b>
                    </a>
                </button>
              </div>
              <img
                class="about-image-icon"
                loading="lazy"
                alt=""
                src="{{ asset('frontend/public/image 53.png')}}"
              />
            </div>
          </div>
          <div class="frame-wrapper2">
            <div class="frame-parent4">
              <div class="our-values-wrapper">
                <b class="our-values">Our Values</b>
              </div>
              <div class="frame-parent5">
                <div class="frame-wrapper3">
                  <div class="frame-parent6">
                    <div class="groups-wrapper">
                      <img
                        class="groups-icon"
                        alt=""
                        src="{{ asset('frontend/public/groups.png')}}"
                      />
                    </div>
                    <div class="collaboration-parent">
                      <b class="collaboration">Collaboration</b>
                      <div class="we-believe-in">
                        We believe in the collaborative power of the collective,
                        where all faiths, all sectors, across national borders,
                        align and work together to amplify restoration and
                        empowerment efforts.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper4">
                  <div class="frame-parent7">
                    <div class="bolt-wrapper">
                      <img class="bolt-icon" alt="" src="{{ asset('frontend/public/bolt.png')}}" />
                    </div>
                    <div class="empowerment-parent">
                      <b class="empowerment">Empowerment</b>
                      <div class="we-believe-in1">
                        We believe in the collaborative power of the collective,
                        where all faiths, all sectors, across national borders,
                        align and work together to amplify restoration and
                        empowerment efforts.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper5">
                  <div class="frame-parent8">
                    <div class="settings-heart-wrapper">
                      <img
                        class="settings-heart-icon"
                        alt=""
                        src="{{ asset('frontend/public/settings_heart.png')}}"
                      />
                    </div>
                    <div class="restoration-parent">
                      <b class="restoration">Restoration</b>
                      <div class="we-believe-in2">
                        We believe in the collaborative power of the collective,
                        where all faiths, all sectors, across national borders,
                        align and work together to amplify restoration and
                        empowerment efforts.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-wrapper8">
            <div class="frame-parent10">
              <div class="frame-parent11">
<div class="events-wrapper">
    <h1 class="events">Events</h1>
</div>
<div class="card-container">
    @foreach($events as $event)
    <div class="card">
       <a href="{{ route('event.detail', $event->id) }}"> 
        <img class="card-image" src="{{ asset('images/' . $event->photo) }}" alt="{{ $event->title }}">
        </a>
        <div class="card-body">
        </div>
    </div>
    @endforeach
<!-- Pagination -->
<div class="container mt-3">
  <nav aria-label="Page navigation" class="d-flex justify-content-center" style="font-size: 0.6rem;">
    <ul class="pagination">
      <!-- Previous Page Link -->
      @if ($events->onFirstPage())
        <li class="page-item disabled">
          <span class="page-link">&laquo;</span>
        </li>
      @else
        <li class="page-item">
          <a class="page-link" href="{{ $events->previousPageUrl() }}" rel="prev">&laquo;</a>
        </li>
      @endif
      
      <!-- Pagination Elements -->
      @for ($i = 1; $i <= $events->lastPage(); $i++)
        <li class="page-item{{ $events->currentPage() == $i ? ' active' : '' }}">
          <a class="page-link" href="{{ $events->url($i) }}">{{ $i }}</a>
        </li>
      @endfor
      
      <!-- Next Page Link -->
      @if ($events->hasMorePages())
        <li class="page-item">
          <a class="page-link" href="{{ $events->nextPageUrl() }}" rel="next">&raquo;</a>
        </li>
      @else
        <li class="page-item disabled">
          <span class="page-link">&raquo;</span>
        </li>
      @endif
    </ul>
  </nav>
</div>

          </div>
              <div class="frame-wrapper9">
                <div class="frame-parent12">
                  <div class="our-partners-wrapper">
                    <h1 class="our-partners">Our Partners</h1>
                  </div>
                  <div class="logos-parent">
                    <img
                      class="logos-icon"
                      loading="lazy"
                      alt=""
                      src="{{ asset('frontend/public/image 47.png')}}"
                    />

                    <img
                      class="logos-icon1"
                      loading="lazy"
                      alt=""
                      src="{{ asset('frontend/public/image 48.png')}}')}}"
                    />

                    <img
                      class="logos-icon2"
                      loading="lazy"
                      alt=""
                      src="{{ asset('frontend/public/image 49.png')}}"
                    />

                    <img
                      class="logos-icon3"
                      loading="lazy"
                      alt=""
                      src="{{ asset('frontend/public/image 50.png')}}"
                    />

                    <img
                      class="logos-icon4"
                      loading="lazy"
                      alt=""
                      src="{{ asset('frontend/public/image 51.png')}}"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="social-icon-wrapper">
            <iframe width="100%" height="315" src="{{ asset('frontend/public/TBN Indonesia Profile.mp4')}}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="false"></iframe>
            <button id="playButton">Play Video</button>
          </div> --}}
        </div>
      </main>
      <footer class="wireframe-landing-page-child">
        <div class="rectangle-parent">
          <img
            class="frame-item"
            loading="lazy"
            alt=""
            src="{{ asset('frontend/public/Rectangle 4.png')}}"
          />

          <div class="frame-parent13">
            <div class="lippo-thamrin-lt-5-wrapper">
              <div class="lippo-thamrin-lt">Lippo Thamrin Lt. 5</div>
            </div>
            <div class="jl-m-h-thamrin-no-20-mente-wrapper">
              <div class="jl-m-h">
                Jl. M. H. Thamrin No. 20 Menteng - Jakarta Pusat 10350 Indonesia
              </div>
            </div>
          </div>
          <div class="biinstagram-parent">
            <img
              class="biinstagram-icon"
              loading="lazy"
              alt=""
              src="{{ asset('frontend/public/bi_instagram.png')}}"
            />

            <img
              class="mingcuteyoutube-fill-icon"
              loading="lazy"
              alt=""
              src="{{ asset('frontend/public/Group.png')}}"
            />

            <img
              class="mingcutemail-fill-icon"
              loading="lazy"
              alt=""
              src="{{ asset('frontend/public/mingcute_mail-fill.png')}}"
            />

            <img
              class="rilinkedin-fill-icon"
              loading="lazy"
              alt=""
              src="{{ asset('frontend/public/ri_linkedin-fill.png')}}"
            />
          </div>
          <div class="frame-parent14">
            <div class="about-us-wrapper">
              <div class="about-us2">ABOUT US</div>
            </div>
            <div class="events-container">
              <div class="events1">EVENTS</div>
            </div>
            <div class="impact-trips-wrapper">
              <div class="impact-trips1">IMPACT TRIPS</div>
            </div>
            <div class="reserve-now-wrapper">
              <div class="reserve-now">RESERVE NOW</div>
            </div>
          </div>
          <div class="copyright-2023-transformatio-wrapper">
            <div class="copyright-2023-">
              Copyright 2023 - Transformational Sales Conference. All Rights
              Reserved. Powered by TBN Indonesia
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Bootstrap JS and other scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  

  </body>
</html>