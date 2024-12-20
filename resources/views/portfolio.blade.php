<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel Jaya Umroh page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    
    <link href="css/templatemo-ebook-landing.css" rel="stylesheet">
    <!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <i class="navbar-brand-icon bi-book me-2"></i>
                    <span>Travel Jaya Umroh</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto me-lg-4">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Background</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Author</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Paket</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Hero Section Start --}}
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                        <h6>Introducing</h6>

                        <h1 class="text-white mb-4"> Travel Jaya Umroh landing page</h1>

                        <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                    </div>

                    <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                        <img src="images/education-online-books.png" class="hero-image img-fluid"
                            alt="education online books">
                    </div>

                </div>
            </div>
        </section>
        {{-- Hero Section End --}}

        {{-- People --}}
        <section class="featured-section">
            <div class="container">
            </div>
        </section>
        {{-- People End --}}


        <section class="py-lg-5"></section>

        {{-- About Start --}}
        <section class="book-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="images/umroh1.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="book-section-info">
                            <h6>Amanah &amp; Cepat</h6>


                            <h2 class="mb-4">About Us</h2>

                            <p>Travel Jaya Umroh hadir untuk memenuhi kebutuhan umat Islam dalam menjalankan ibadah
                                umroh dan haji dengan amanah, profesional, dan terjangkau. Didukung oleh tim
                                berpengalaman, layanan berkualitas, dan fasilitas terbaik, Travel Jaya Umroh berkomitmen
                                memastikan kenyamanan dan kekhusyukan jamaah selama perjalanan ibadah.</p>

                            <p>Fokus utama perusahaan adalah memberikan pelayanan yang mengutamakan kepuasan jamaah,
                                mulai dari proses pendaftaran hingga kepulangan ke tanah air. Dengan motto "Ibadah
                                Nyaman, Hati Tenang", Travel Jaya Umroh berusaha menjadi mitra perjalanan terbaik dalam
                                mewujudkan impian ibadah suci Anda.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- About End --}}

        {{-- Author Section Start --}}
        <section class="author-section section-padding" id="section_3">
            <div class="container">
                @foreach ($portfolioData as $data)
                <div class="row mb-5">

                    <div class="col-lg-6 col-12">
                        <img src="{{ asset('storage/' . $data->image) }}" class="author-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <h6>Meet Author</h6>

                        <h2 class="mb-4">{{ $data->nama }}</h2>

                        <p>{{ $data->nim }}.</p>

                        <p>{{ $data->email }}</p>
                        <p>Kami membuat Travel Jaya Umroh untuk mempermudah masyarakat untuk pergi melaksanakan rukun
                            islam ke-5</p>
                    </div>

                </div>
                @endforeach
            </div>
        </section>
        {{-- Author Section End --}}

        {{-- Paket Section Start --}}
        <section class="reviews-section section-padding" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h6>Paket</h6>

                        <h2>Paket apa saja yg tersedia...</h2>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block d-flex flex-wrap">
                            <div class="custom-block-image-wrap d-flex flex-column">
                                <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg"
                                    class="img-fluid avatar-image" alt="">

                                <div class="text-center mt-3">
                                    <span class="text-white">Paket</span>

                                    <strong class="d-block text-white">Ekonomi</strong>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="reviews-group mb-3">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="mb-0">Durasi: 9 hari</p>
                                <p class="mb-0">Fasilitas: Hotel bintang 3, transportasi AC, makanan 3 kali sehari,
                                    pembimbing ibadah.</p>
                                <p class="mb-0 ">Harga: Rp25.000.000</p>
                                <a href="/admin" class="btn btn-md btn-danger mt-2 ">Pesan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 my-5 my-lg-0">
                        <div class="custom-block d-flex flex-wrap">
                            <div class="custom-block-image-wrap d-flex flex-column">
                                <img src="images/avatar/portrait-young-redhead-bearded-male.jpg"
                                    class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="text-center mt-3">
                                    <span class="text-white">Paket</span>

                                    <strong class="d-block text-white">Reguler</strong>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="reviews-group mb-3">
                                    <strong>5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>

                                <p class="mb-0">Durasi: 12 hari</p>
                                <p class="mb-0">Fasilitas: Hotel bintang 4, transportasi AC eksklusif, makanan 3 kali
                                    sehari dengan menu Indonesia, pembimbing ibadah berpengalaman, perlengkapan umroh.
                                </p>
                                <p class="mb-0">Harga: Rp30.000.000</p>
                                <a href="/admin" class="btn btn-md btn-danger mt-2 ">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="custom-block d-flex flex-wrap">
                            <div class="custom-block-image-wrap d-flex flex-column">
                                <img src="images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image" alt="">

                                <div class="text-center mt-3">
                                    <span class="text-white">Paket</span>

                                    <strong class="d-block text-white">VIP</strong>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="reviews-group mb-3">
                                    <strong>4.8</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="mb-0">Durasi: 12 hari</p>
                                <p class="mb-0">Fasilitas: Hotel bintang 5 dekat Masjidil Haram & Masjid Nabawi,
                                    transportasi mewah, makanan premium, pembimbing ibadah senior, layanan fast track,
                                    dan asuransi perjalanan.</p>
                                <p class="mb-0">Harga: Rp40.000.000</p>
                                <a href="/admin" class="btn btn-md btn-danger mt-2 ">Pesan</a>
                            </div>
                        </div>
                    </div>
                    </a>

                </div>
            </div>
        </section>
        {{-- Paket Section End --}}


        <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form ebook-download-form bg-white shadow" action="#" method="post"
                            role="form">
                            <div class="text-center mb-5">
                                <h2 class="mb-1">Get your free ebook</h2>
                            </div>

                            <div class="ebook-download-form-body">
                                <div class="input-group mb-4">
                                    <input type="text" name="ebook-form-name" id="ebook-form-name" class="form-control"
                                        aria-label="ebook-form-name" aria-describedby="basic-addon1"
                                        placeholder="Your Name" required>

                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="custom-form-icon bi-person"></i>
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <input type="email" name="ebook-email" id="ebook-email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="your@company.com"
                                        aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">

                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="custom-form-icon bi-envelope"></i>
                                    </span>
                                </div>

                                <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Download ebook</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <h6 class="mt-5">Say hi and talk to us</h6>

                        <h2 class="mb-4">Contact</h2>

                        <p class="mb-3">
                            <i class="bi-geo-alt me-2"></i>
                            Poliban, Banjarmasin
                        </p>
                        @foreach ($portfolioData as $data)
                        <p class="mb-2">
                            <a href="tel: 010-020-0340" class="contact-link">
                                {{ $data->phone }}
                            </a>
                        </p>

                        <p>
                            <a href="mailto:info@company.com" class="contact-link">
                                {{ $data->email }}
                            </a>
                        </p>
                        @endforeach

                        <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                        <ul class="social-icon mb-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>

                        <p class="copyright-text">Copyright © 2048 ebook company
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by
                                templatemo</a></p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
