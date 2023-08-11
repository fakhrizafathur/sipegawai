<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>XCODE - PT. Teknologi Server Indonesia</title>

    <!-- ==== STYLE.CSS ==== -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- ====  REMIXICON CDN ==== -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <!-- ==== HEADER ==== -->
    <header class="container header">
      <!-- ==== NAVBAR ==== -->
      <nav class="nav">
        <div class="logo">
          <h2>XCODE</h2>
        </div>

        <div class="nav_menu" id="nav_menu">
          <button class="close_btn" id="close_btn">
            <i class="ri-close-fill"></i>
          </button>

          <ul class="nav_menu_list">
            <li class="nav_menu_item">
              <a href="/" class="nav_menu_link">home</a>
            </li>
            <li class="nav_menu_item">
              <a href="https://xcode.or.id/blog/" class="nav_menu_link">blog</a>
            </li>
            <li class="nav_menu_item">
              <a href="https://xcode.co.id/" class="nav_menu_link">Training</a>
            </li>
            <li class="nav_menu_item">
              <a href="#footer" class="nav_menu_link">contact</a>
            </li>
          </ul>
        </div>

        <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>
      </nav>
    </header>

    <section class="wrapper">
      <div class="container">
        <div class="grid-cols-2">
          <div class="grid-item-1">
            <h1 class="main-heading">
              Selamat Datang di
              <br />
              Sistem Informasi Pegawai <span>XCODE</span>
            </h1>
            <p class="info-text">
            cari informasi tentang pegawai ataupun tentang kita 
            di X-Code Secara Realtime.
            </p>

            <div class="btn_wrapper">
            <a href="{{ route('register') }}" class="btn view_more_btn">Daftar</a>
            <a href="{{ route('login') }}" class="btn documentation_btn"><center>Login</center></a>
            </div>
          </div>
          <div class="grid-item-2">
            <div class="team_img_wrapper">
            <img src="{{ asset('images/landing-page.png') }}" alt="XCODE" /> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper">
      <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="grid-cols-3">
          <div class="grid-col-item">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>Sejarah PT. Teknologi Server Indonesia</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                ratione facilis animi voluptas exercitationem molestiae.
              </p>
            </div>
          </div>
          <div class="grid-col-item">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>Designed to be modern</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                ipsum esse corrupti. Quo, labore debitis!
              </p>
            </div>
          </div>

          <div class="grid-col-item">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                />
              </svg>
            </div>
            <div class="featured_info">
              <span>Documentation for everything</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                nostrum voluptate totam ipsa corrupti vero!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

<footer id="footer"> 
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="wa.me/6288233529592">Whatsapp</a></li>
              <li><a href="mailto:admin@xcodetraining.com">E-Mail</a></li>
              <li><p><a>X-code Office Jl. Kebun Raya Gg. Terate No. 29 Timur Gembira Loka Zoo (Lantai 2) Yogyakarta, Indonesia</a></p></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">watch</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">dress</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <a href="/"><img src="/images/XCODE.png" alt="X-Code" height="24" onclick="home()"></a>
            <h4 font-weight:><p><a>X-code (PT. Teknologi Server Indonesia) adalah perusahaan cyber security yang berbadan hukum dengan kantor di kota Jogja yaitu di minggiran (Kantor 1) dan kotagede (Kantor 2 / kantor pusat).</a></p></h4>
            <div class="social-links">
              <a href="https://www.facebook.com/groups/yogyafreexcode"><i class="fab fa-facebook-f"></i></a>
              <a href="https://xcode.or.id/"><i class="fa fa-globe"></i></a>
              <a href="https://www.instagram.com/teknologiserverindonesia/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/xcodetraining/"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- ==== ANIMATE ON SCROLL JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ==== GSAP CDN ==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- ==== SCRIPT.JS ==== -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>