<?php require('koneksi.php');

require __DIR__.'/../vendor/autoload.php';
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
    <?php
     $id = $_POST['id'];
     $data = cariData($id);
    ?>
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
         <!--========== PAGINATION ==========-->            
         <section class="section bd-container" id="breadcrumb">
            <div class="bd-grid breadcrumb">
                <div class="breadcrumb">
                    <li><a href="index.php"> <i class='bx bxs-home'></i>  Home</a></li>
                    <li>Detail</li>
                </div>
                <div class="breadcrumb-pagination">
                </div>
            </div>
        </section>
        
        <?php foreach($data as $d) : ?>
        <section class="detail bd-container" id="detail">
            <div class="detail__container bd-grid">
                <div class="detail__img">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" src="assets/img/detail/<?= $d['img_1']?>" alt="" />
                    </div>
                    <div class="product-thumbs">
                        <div class="product-thumbs-track ps-slider bd-grid multiple-items">
                            <div class="pt active" data-imgbigurl="assets/img/detail/<?= $d['img_1']?>">
                                <img src="assets/img/detail/<?= $d['img_1']?>" alt="" />
                            </div>
                            <div class="pt" data-imgbigurl="assets/img/detail/<?= $d['img_2']?>">
                                <img src="assets/img/detail/<?= $d['img_2']?>" alt="" />
                            </div>
                            <div class="pt" data-imgbigurl="assets/img/detail/<?= $d['img_3']?>">
                                <img src="assets/img/detail/<?= $d['img_3']?>" alt="" />
                            </div>
                            <div class="pt" data-imgbigurl="assets/img/detail/<?= $d['img_4']?>">
                                <img src="assets/img/detail/<?= $d['img_4']?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="detail__data">
                    <span class="section-subtitle detail__initial">Ataraxia</span>
                    <h2 class="section-title detail__initial"><?= $d['product_name']?></h2>
                    <p class="detail__description"> <b>GENERAL SPECIFICATION</b><br>                       
                        Color : Tosca tua

                        <div class="size_detail-container">
                            <b>SIZE</b>
                            <div class="sizes_detail" >
                                <span class="size_detail">S</span>
                                <span class="size_detail">M</span>
                                <span class="size_detail">L</span>
                                <span class="size_detail">XL</span>
                                <span class="size_detail">XXL</span>
                            </div>
                        </div>   
                        <b>MATERIALS</b><br>                          
                        Jenis Kain   : Cotton Combed 24s <br>
                        Sablon       : Plastisol <br>
                        Cutting      : Oversized </p><br>
                        
                        <div class="price_detail">
                            <b>Rp. 110.000</b>
                        </div>
                        <br>    
                    <a href="index.php" class="button">Pesan Sekarang</a>
                </div> 
            </div>
            <?php endforeach; ?>
        </section>

        <!-- ===================== CONTACT US ==================== -->
        <!-- <section class="contact section bd-container" id="contact">
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
        </section> -->
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
        <p class="footer__copy">&#169; 2023 Daffa RN. All right reserved</p>
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
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });

        /*---Single Product---*/
        $('.product-thumbs-track .pt').on('click', function () {
            $('.product-thumbs-track .pt').removeClass('active');
            $(this).addClass('active');
            var imgurl = $(this).data('imgbigurl');
            var bigImg = $('.product-big-img').attr('src');
            if (imgurl != bigImg) {
                $('.product-big-img').attr({
                    src: imgurl
                });
                $('.zoomImg').attr({
                    src: imgurl
                });
            }
        });

        $('.product-pic-zoom').zoom();
    </script>

</body>
</html>