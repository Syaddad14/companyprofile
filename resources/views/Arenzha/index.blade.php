<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach($settings as $s)
        <title data-aos="fade-up">{{$s->Arenzha}}</title>
    @endforeach
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,200;1,400&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,400;1,200;1,400&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ url('/dashboard') }}" target="_blank">
                <img src="{{asset('gambar/arnzha logo 2 copy.jpg')}}" alt="Brand Logo" width="50" height="50">
            </a>
        </div>
        <div class="navbar-toggle" id="mobile-menu" onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar-menu" id="navbarMenu">
            <li class="navbar-item"><a href="#produk-layanan" class="navbar-link" style="text-decoration: none;">Produk & Layanan</a></li>
            <li class="navbar-item"><a href="#teknologi" class="navbar-link" style="text-decoration: none;">Teknologi</a></li>
            <li class="navbar-item"><a href="#portofolio" class="navbar-link" style="text-decoration: none;">Portofolio</a></li>
            <li class="navbar-item"><a href="#klien" class="navbar-link" style="text-decoration: none;">Klien</a></li>
            <li class="navbar-item"><a href="#kontak" class="navbar-link" style="text-decoration: none;">Kontak</a></li>
            <li class="navbar-item"><a href="{{ route('client.complain.form') }}" class="navbar-link" style="text-decoration: none;" target="_blank">Pengaduan</a></li>
        </ul>
    </nav>
    <script src="script.js"></script>
    <div id="app" v-cloak>
        <button onclick="topFunction()" id="backToTopBtn" title="Go to top">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708z"/>
                <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708z"/>
            </svg>
        </button>
        <div class="hero-main">
            <div class="container-fluid" style="min-height: 20vh;">
                <div class="row row-custom">
                    <div class="col-lg-6 col-md-12 col-content-otr">
                        <div class="col-content-inr">
                            <h1 class="heading-h1 heading" class="section zero" id="section0" data-aos="fade-up">
                                Arenzha
                                <p class="text-color"> Media Teknologi</p>
                            </h1>
                            <br>
                            <p class="desc heading-L1" data-aos="fade-up">
                                Adalah sebuah Software House yang bergerak di bidang pembuatan perangkat lunak dan konsultan IT, berlokasikan di kota Bandung, Jawa Barat.
                                Komitmen kami memberikan solusi untuk bisnis anda dalam lingkup konsultan, desain, penyedia aplikasi serta pemeliharaan dalam sistem teknologi informasi.
                                Mengutamakan konsistensi dalam kualitas layanan sebagai hubungan jangka panjang bersama setiap klien kami.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="border-radius: 10px; background-size: cover; background: transparent; position: relative; top: -20px;">
                        <dotlottie-player src="https://lottie.host/545af068-8498-41db-8374-51ee8f7392f7/uBiSY4J39G.json" speed="1" style="width: 100%; height: auto;" loop autoplay></dotlottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="feature">
        <div class="title-text">
            <h1 id="produk-layanan">Produk & Layanan</h1>
        </div>
        <div class="feature-desc">
            <div class="features">
                <div class="features-desc">
                    <div class="features-icon"></div>
                    <div class="features-text">
                        @foreach($produkLayanan as $item)
                            <p data-aos="fade-up">
                                {{ $item->description }}
                            </p>
                            <br>
                        @endforeach
                    </div>
                </div>
                <h1 id="teknologi">Teknologi</h1>
                <br>
                <div class="features-desc">
                    <div class="features-icon"></div>
                    <div class="features-text">
                        <p data-aos="fade-up">
                            Kami memilih teknologi yang akan digunakan dengan seksama dengan mempertimbangkan kecepatan, support, serta kemudahan dalam pemeliharaan demi menciptakan aplikasi yang tepat guna dalam suatu permasalahan.
                        </p>
                    </div>
                </div>
                <div class="technology-images">
                    <div style="text-align: center;">
                        <img src="{{asset('gambar/logo/flutter.png')}}" alt="Brand Logo" height="50" style="margin: 0 40px;">
                        <img src="{{asset('gambar/logo/gatsby.png')}}" alt="Brand Logo" height="65" style="margin: 0 40px;">
                        <img src="{{asset('gambar/logo/graphql.png')}}" alt="Brand Logo" height="100" style="margin: 0 40px;">
                        <img src="{{asset('gambar/logo/laravel.png')}}" alt="Brand Logo" height="40" style="margin: 0 40px;">
                        <img src="{{asset('gambar/logo/nextjs.png')}}" alt="Brand Logo" height="65" style="margin: 0 40px;">
                        <img src="{{asset('gambar/logo/react.png')}}" alt="Brand Logo" height="90" style="margin: 0 40px;">
                        <img src="{{asset('gambar/logo/vuejs.png')}}" alt="Brand Logo" height="80" style="margin: 0 40px;">
                    </div>
                </div>
    </section>
    <section id="service">
        <div class="title-text">
            <h1 id="klien">Klien</h1>
        </div>
        <div class="row">
            @foreach($clients as $s)
                <div class="col-md-3 my-2" data-aos="fade">
                    <div class="service-box">
                        <div class="single-service">
                            <img src="{{url('gambar/'.$s->image_clients)}}">
                            <div class="overlay">
                                <div class="client-desc">
                                    <!-- <h3>{{$s->title_clients}}</h3> -->
                                    <hr>
                                    <p>{{$s->desc_clients}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            </div>
        </div>
    </section>
    <section id="service">
        <div class="title-text">
            <h1 id="portofolio">Portofolio</h1>
        </div>
        <div class="row">
            @foreach($services as $s)
                <div class="col-md-6 my-2" data-aos="fade">
                    <div class="service-box">
                        <div class="single-service">
                            <img src="{{url('gambar/'.$s->image_services)}}">
                            <div class="overlay" onclick="openFullscreen(this.previousElementSibling)">
                                <div class="service-desc">
                                    <h3>{{$s->title_services}}</h3>
                                    <hr>
                                    <!-- <p>{{$s->desc_services}}</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <script>
                function openFullscreen(img) {
                    var modal = document.createElement('div');
                    modal.style.position = 'fixed';
                    modal.style.top = '0';
                    modal.style.left = '0';
                    modal.style.width = '100%';
                    modal.style.height = '100%';
                    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
                    modal.style.display = 'flex';
                    modal.style.alignItems = 'center';
                    modal.style.justifyContent = 'center';
                    modal.style.zIndex = '1000';

                    var modalImg = document.createElement('img');
                    modalImg.src = img.src;
                    modalImg.style.maxWidth = '90%';
                    modalImg.style.maxHeight = '90%';

                    var modalText = document.createElement('div');
                    modalText.innerHTML = img.nextElementSibling.innerHTML;
                    modalText.style.position = 'absolute';
                    modalText.style.bottom = '20px';
                    modalText.style.color = '#fff';
                    modalText.style.textAlign = 'center';
                    modalText.style.width = '100%';

                    modal.appendChild(modalImg);
                    modal.appendChild(modalText);

                    modal.onclick = function() {
                        document.body.removeChild(modal);
                    };

                    document.body.appendChild(modal);
                }
            </script>
        </div>
    </section>
    <section id="footer">
    <div class="title-text">
        <h1 id="kontak">Kontak</h1>
    </div>
    <div class="contact-row" style="display: flex; justify-content: space-between;">
        <div class="contact-left" style="flex: 1; padding-right: 40px;">
            <form action="{{route('Arenzha.store')}}" method="POST" class="form-container">
            <h3 style="color: white; text-align: center; margin-bottom: 40px;">Hubungi Kami</h3>
                @csrf
                <input type="text" name="nama" class="form-control" placeholder="*Nama" data-aos="fade-up">
                <input type="text" name="email" class="form-control" placeholder="*Email" data-aos="fade-up">
                <input type="number" name="no_hp" class="form-control" placeholder="*No Hp" data-aos="fade-up">
                <textarea type="text" name="pesan" class="form-control" placeholder="*Pesan" data-aos="fade-up"></textarea>
                <div class="button-box">
                    <button class="btn btn-lg btn-send">Kirim</button>
                </div>
            </form>
        </div>
        <div class="contact-right" style="flex: 1; color: white;">
            <div class="address">
            <h3 style="color: white; text-align: center; margin-left: 100px; margin-bottom: 40px;">Alamat Kami</h3>
            </div>
            <div class="map" data-aos="fade-up">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=arzaya&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="80%" height="335" style="border: 10px; border-radius: 10px; position: center; margin-left: 100px;" allowfullscreen="" loading="lazy"></iframe>
                <p style="text-align: center; margin-top: 20px; margin-left: 80px;">Jl. Saturnus Ujung No.11A, Manjahlega, Kec. Margahayu, Kota Bandung, Jawa Barat 40286</p>
            </div>
        </div>
    </div>
</section>

    </div>
        <div class="social-links">
            <p>Copyright Arenzha © 2024</p>
        </div>
    </section>
    <script>
        const menuBtn = document.getElementById("mobile-menu");
        const navbarMenu = document.getElementById("navbarMenu");

        function toggleMenu() {
            navbarMenu.classList.toggle('active');
        }

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backToTopBtn").style.display = "block";
            } else {
                document.getElementById("backToTopBtn").style.display = "none";
            }
        }

        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

