<?php
require "koneksi.php";

$data = query("SELECT * FROM product");
// var_dump($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===================== BOX ICONS ==================== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===================== CSS ==================== -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ===================== SLICK CSS ==================== -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <title>Ataraxia</title>
</head>
<body>
    <!-- ===================== SCROLL TOP ==================== -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!-- ===================== HEADER ==================== -->
    <header class="l-header" id="header">
        <nav class="nav bd-container">

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
            

            <a href="#" class="nav__logo">Ataraxia</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Quality</a></li>
                    <li class="nav__item"><a href="#products" class="nav__link">Product</a></li>
                    <li class="nav__item"><a href="#size" class="nav__link">Size Chart</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>

                    <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div>
                <a href="login_admin.php" class="nav__user" id="nav-user"><i class='bx bxs-user'></i></a>
            </div>

        </nav>
    </header>

    <main class="l-main">
        <!-- ===================== HOME ==================== -->
        <section class="home" id="home">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="home__container bd-container bd-grid">
                        <div class="home__data">
                            <h1 class="home__title">People Pleaser</h1>
                            <h2 class="home__subtitle">Oversized T-shirt keluaran pertama tahun 2023</h2>
                            <a href="#" class="button">Explore Now</a>
                        </div>
                        <img src="assets/img/p1.png" alt="" class="home__img">
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="home__container bd-container bd-grid">
                        <div class="home__data">
                            <h1 class="home__title">DEKGRAFI's</h1>
                            <h2 class="home__subtitle">Oversized T-shirt Ataraxia dengan design terbaru!</h2>
                            <a href="#" class="button">Explore Now</a>
                        </div>
                        <img src="assets/img/p2.png" alt="" class="home__img">
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="home__container bd-container bd-grid">
                        <div class="home__data">
                            <h1 class="home__title">Erazor</h1>
                            <h2 class="home__subtitle">Oversized T-shirt Ataraxia dengan kualitas terbaik!</h2>
                            <a href="#" class="button">Explore Now</a>
                        </div>
                        <img src="assets/img/p.png" alt="" class="home__img">
                    </div>
                </div>
                
            </div>
            <br>
        </section>
        
            <!-- Next and Previous Button -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- the dots/circles -->
            <div style="text-align: center;">
                <span class="dots" onclick="currentSlide(1)"></span>
                <span class="dots" onclick="currentSlide(2)"></span>
                <span class="dots" onclick="currentSlide(3)"></span>
                <span class="dot"></span>
            </div>

        <!-- ===================== ABOUT ==================== -->
        <section class="about section bd-container" id="about">
            <div class="about__container bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">About us</span>
                    <h2 class="section-title about__initial">We create the best <br> local t-shirt </h2>
                    <p class="about__description">Atarxia T-Shirt mulai di rilis pada tahun 2023 oleh Andre dan Hani,
                         sang pemilik sekaligus pencetus brand lokal tersebut sejak tahun 2023 di Pontianak, Kalimantan Barat.</p>
                    <a href="#" class="button">Explore history</a>
                </div>

                <img src="assets/img/logo.jpg" alt="?" class="about__img">
            </div>
        </section>

        <!-- ===================== SERVICE ==================== -->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Offering</span>
            <h2 class="section-title">Our amazing services</h2>
            <div class="services__container bd-grid">
                <div class="services__content">
                    <img src="assets/img/service/s1.jpeg" alt="?" class="services__img">
                    <h3 class="services__title">Premium Packaging</h3>
                    <p class="services__description">Kemasan dengan model yang menarik serta kualitas terbaik.</p>
                </div>

                <div class="services__content">
                    <img src="assets/img/service/s2c.jpeg" alt="?" class="services__img">
                    <h3 class="services__title">Trendy Sticker</h3>
                    <p class="services__description">Sticker keren dari brand ataraxia dan tentunya dengan kualitas yang premium.</p>
                </div>

                <div class="services__content">
                    <img src="assets/img/service/s3.jpeg" alt="?" class="services__img">
                    <h3 class="services__title">Aestetic Design</h3>
                    <p class="services__description">Design aestetic yang membuat style anda menjadi semakin menarik.</p>
                </div>
            </div>
        </section>

        <!-- ===================== PRODUCT ==================== -->
        <section class="product section bd-container" id="products">
            <span class="section-subtitle">Special</span>
            <h2 class="section-title">PRODUCTS of the week</h2>

            <div class="products__container bd-grid logo-slider slick_two">
                <?php foreach($data as $db) : ?>
                <div class="products__content">
                    <img src="assets/img/<?= $db['img'] ?>" alt="!" class="products__img">
                    <h3 class="products__name"><?= $db['product_name'] ?></h3>
                    <span class="products__detail"><?= $db['product_detail'] ?></span><br>
                    <span class="products__price">Rp. <?= $db['product_price'] ?>,-</span>
                    <form action="product.php" method="post">
                        <!-- <a href="product.php" class="button products__button_detail">Detail Product</a> -->
                        <input type="hidden" name="id" value="<?= $db['id'] ?>">
                        <button type='submit' class="button products__button_detail">Detail Product</button>
                    </form>
                    <div class="button products__button"><i class='bx bxs-star'></i></div>
                </div>
    
                <!-- <div class="products__content">
                    <img src="assets/img/p2.png" alt="!" class="products__img">
                    <h3 class="products__name">DEKGRAFI's</h3>
                    <span class="products__detail">Low</span><br>
                    <span class="products__price">Rp. 120.000,-</span>
                    <a href="#" class="button products__button_detail">Detail Product</a>
                    <div class="button products__button"><i class='bx bxs-star'></i></div>
                </div>
    
                <div class="products__content">
                    <img src="assets/img/p3.png" alt="!" class="products__img">
                    <h3 class="products__name">OOTDstudios</h3>
                    <span class="products__detail">Low</span><br>
                    <span class="products__price">Rp. 115.000,-</span>
                    <a href="#" class="button products__button_detail">Detail Product</a>
                    <div class="button products__button"><i class='bx bxs-star'></i></div>
                </div>
    
                <div class="products__content">
                    <img src="assets/img/p.png" alt="!" class="products__img">
                    <h3 class="products__name">Erazor</h3>
                    <span class="products__detail">Oversize</span><br>
                    <span class="products__price">Rp. 135.000,-</span>
                    <a href="#" class="button products__button_detail">Detail Product</a>
                    <div class="button products__button"><i class='bx bxs-star'></i></div>
                </div> -->
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ===================== SIZE CHART ==================== -->
        <section class="size section bd-container" id="size">
            <div class="size__container bd-grid">
                <div class="size__data">
                    <span class="section-subtitle size__initial">Size Chart</span>
                    <h2 class="section-title size__initial">Find Your Size</h2>
                    <p class="size__description">Silahkan luangkan waktu anda sejenak untuk mengamati size chart kami.<br>
                    Ini akan membantu Anda mengetahui ukuran yang sesuai.</p>
                </div>
                <img src="assets/img/size.jpg" alt="!" class="size__img" style="width: 230px;">
            </div>
        </section>

        <!-- ===================== CONTACT US ==================== -->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's Talk</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">Jika kamu ingin membeli t-shirt Ataraxia di toko kami, hubungi kami dan kami akan segera melayani kamu dengan layanan 24/7</p>
                </div>
                <div class="contact__button">
                    <a href="#" class="button">Contact us now</a>
                </div>
            </div>
        </section>
    </main>

    <!-- ===================== FOOTER ==================== -->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Ataraxia</a>
                <span class="footer__description">Store</span>
            </div>

            <div>
                <a href="https://twitter.com/ataraxia_oc" class="footer__social"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/ataraxia.oc/" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.tiktok.com/@ataraxia_oc?_t=8b2dzcCfVrt&_r=1" class="footer__social"><i class='bx bxl-tiktok'></i></a>
                <a href="https://open.spotify.com/user/31ognrosba7gqw6jqsvgnerxbl64?si=VnciuuDnSPWjv4OrG4ym4A" class="footer__social"><i class='bx bxl-spotify'></i></a>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="#" class="footer__link">Shipping and Returns</a></li>
                    <li><a href="#" class="footer__link">Mesurement Guide</a></li>
                    <li><a href="#" class="footer__link">Size Conversion Chart</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Event</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Privacy policy</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Adress</h3>
                <ul>
                    <li>Jl. Abdul Rahman Wahid</li>
                    <li>Kubu Raya, Kalimantan Barat 78391 - Indonesia</li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; 2023 Ataraxia. All right reserved | Daffa RN.</p>


    </footer>

    <!-- ===================== SCROLL REVEAL ==================== -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ===================== MAIN JS  ==================== -->
    <script src="assets/js/main.js"></script>

    <!-- ===================== SLICK JS  ==================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('.slick_two').slick({
            dots: true,
            arrows: true,
            autoplay: true,
            infiniite :true,
            speed: 2000,
            autoplaySpeed: 2000,
            
            responsive: [
                {
                    breakpoint: 5000,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
            });
    </script>
</body>
</html>