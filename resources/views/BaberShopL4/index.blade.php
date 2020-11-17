<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Untuk versi Android -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach($settings as $s)
    <title>{{$s->name_web}}</title>
    @endforeach
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,200;1,400&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,400;1,200;1,400&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
    <style>
        #banner{
        background-image: linear-gradient(rgba(0,0,0,0.5), #009688), url("assets/css/banner.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
    </style>
<body>
        
    <section id="banner">
        @foreach($settings as $s)
        <img src="{{url('gambar/'.$s->logo)}}" class="logo" alt="">
        @endforeach
        <div class="banner-text">
            @foreach($home as $h)
            <h1>{{$h->title}}</h1>
            @endforeach
            <p>Style Your Hair Is Style Your Life</p>
            <div class="banner-btn">
                <a href="#"><span></span>Find Out</a>
                <a href="#"><span></span>Read More</a>
            </div>
        </div>
    </section>

    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="#banner">Home</a></li>
                <li><a href="#feature">Feature</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#testimonial">Testimonials</a></li>
                <li><a href="#footer">Meet Us</a></li>
            </ul>
        </nav>
        <div id="menuBtn">
            <img src="{{url('assets/css/menu.png')}}" id="menu">
        </div>
    </div>

    <!-- Features -->

        <section id="feature">
            <div class="title-text">
                <p>FEATURES</p>
                <h1>Why Choose Us</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Experiecend</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="features-text">
                            <p>Donec eget ultirecies sapi. Sed porttitor, mauris ater lob facilicis</p>
                        </div>
                    </div>
                    <h1>Pre Booking Online</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="features-text">
                            <p>Donec eget ultirecies sapi. Sed porttitor, mauris ater lob facilicis</p>
                        </div>
                    </div>
                    <h1>Affordable Cost</h1>
                    <div class="features-desc">
                        <div class="features-icon">
                            <i class="fa fa-inr"></i>
                        </div>
                        <div class="features-text">
                            <p>Donec eget ultirecies sapi. Sed porttitor, mauris ater lob facilicis</p>
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    @foreach($features as $row)
                    <img src="{{url('gambar/'.$row->image)}}">
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="service">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>We Provide Better</h1>
            </div>
            <div class="row">
            @foreach($services as $s)
            
            <div class="col-md-6 my-2">
            <div class="service-box">
                <div class="single-service">
                    <img src="{{url('gambar/'.$s->image_services)}}" alt="">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>{{$s->title_services}}</h3>
                        <hr>
                        <p>
                            {{$s->desc_services}}
                        </p>
                    </div>
                </div>
            </div>
           
            </div>
       
            @endforeach
            
            </div>
        </section>
        
        <!-- Testimonial -->
        <section id="testimonial">
            <div class="title-text">
                <p>TESTIMONIAL</p>
                <h1>What Client Says</h1>
            </div>
            <div class="testimonial-row">
                @foreach($testi as $t)
                <div class="testimonial-col">
                   <img src="{{url('gambar/'.$t->image_testi)}}" alt="">
                    </div>
                    @endforeach
                    
                </div>
                <!-- <div class="testimonial-col">
                    <div class="user">
                        <img src="images/img-2.jpg" alt="">
                        <div class="user-info">
                            <h4>KEN NORMAN <i class="fa fa-twitter"></i></h4>
                            <small>@kennoran</small>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda atque magni quaerat et deleniti.
                    </p>
                </div>
                <div class="testimonial-col">
                    <div class="user">
                        <img src="images/img-3.jpg" alt="">
                        <div class="user-info">
                            <h4>KEN NORMAN <i class="fa fa-twitter"></i></h4>
                            <small>@kennoran</small>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. qui perferendis!
                    </p>
                </div>
            </div> -->
        </section>

        <!-- Footer -->

        <section id="footer">
            <img src="images/footer-img.png" class="footer-img">
            <div class="title-text">
                <p>CONTACT</p>
                <h1>Visit Shop Today</h1>
            </div>
            <div class="footer-row">
            @foreach($settings as $s)
                <div class="footer-left">
                    <h1>Opening Hours</h1>
                    <p><i class="fa fa-clock-o"></i>{{$s->openinghours_company}}</p>
                    <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 8am to 10pm</p>
                   
                </div>
                <div class="footer-right">
                    <h1>Get In Touch</h1>
                    <p>{{$s->address_company}}<i class="fa fa-map-marker"></i></p>
                    <p>{{$s->email_company}}<i class="fa fa-paper-plane"></i></p>
                    <p>{{$s->telp_company}}<i class="fa fa-phone"></i></p>
                </div>
                @endforeach
            </div>
            <div class="social-links">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-youtube-play"></i>
                <p>Copyright ReyhanF</p>
            </div>
        </section>

    <script>
        const menuBtn = document.getElementById("menuBtn");
        const sideNav = document.getElementById("sideNav");
        const menu = document.getElementById("menu");

        sideNav.style.right = "-250px"
        menuBtn.onclick = function() {
            if(sideNav.style.right == "-250px"){
                sideNav.style.right = "0"
                menu.src = "{{url('assets/css/close.png')}}"
            }
            else{
                sideNav.style.right = "-250px";
                menu.src = "{{url('assets/css/menu.png')}}"

            }
        }

        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>