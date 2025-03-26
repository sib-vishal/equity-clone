<?php $page = 'about-us'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us | Kingfield </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>

        <div class="page_banner ">
            <div class="containerFull">
                <h1 class=" fontHeading heading fontWeight700 text-white">
                    About Us
                </h1>
                <p class=" mt-3  text-white ">
                    Home / About Us
                </p>
            </div>
            <div class="shap-1">

            </div>
            <div class="shap-2">

            </div>

        </div>
    </div>
    <section class="about-us-home" id="">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img_box_about">
                        <div class="img_box_1">
                            <img src="images/about-1.jpg" alt="">
                        </div>
                        <div class="img_box_2">
                            <img src="images/about-2.jpg" alt="">
                        </div>


                    </div>


                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="about_home_content">

                        <p class="badge">
                            Who We Are
                        </p>
                        <h2 class="fontHeading fontWeight700 heading mt-4 text_secondary">
                            About Kingfield

                        </h2>

                        <p class="mt-4 text_gray">
                            King Field is a globally accepted leader in financial intelligence and forensic
                            investigation. Our firm operates on a philosophy of integrity, accuracy, and competence,
                            offering support to our clients in all intricate financial aspects with confidence. Our
                            professional personnel are committed and work diligently towards delivering comprehensive
                            assessments to ensure firms and individuals are well-informed financially.

                        </p>

                        <ul class="mt-4 about-ul">

                            <li><strong>Unwavering Transparency &amp; Ethical Integrity</strong></li>
                            <li><strong>Unmatched Expertise &amp; Data-Driven Accuracy</strong></li>
                            <li><strong>Ironclad Confidentiality &amp; Robust Security</strong></li>
                            <li><strong>Tailored Financial Strategies &amp; Personalized Solutions</strong></li>
                            <li><strong>Proven Industry Excellence &amp; Trusted Track Record</strong></li>
                            <li><strong>Clear Communication &amp; Dedicated Client Support</strong></li>
                        </ul>

                        <div class="mt-5">
                            <a href="#" class="btn_3 ms-3">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>

                        </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="about-dots">
            <img src="images/dots.png" alt="">

        </div>
    </section>
    <section class="our-aim">
        <div class="containerFull">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <p class="services-badge">
                        Our Aim
                    </p>
                    <h2 class="fontHeading fontWeight700 heading mt-4 text_secondary">
                        What We Stand For

                    </h2>

                    <p class="mt-4">
                        We strive to build strong, lasting relationships with our clients worldwide by approaching every
                        case with a high level of professionalism and precision. Our goal is to ensure that clients
                        fully understand their financial landscape, empowering them with clear insights and actionable
                        solutions. By working closely with each client, we break down complex financial details,
                        providing transparency and confidence in every step of the process.
                    </p>



                </div>
                <div class="col-lg-6 ">
                    <div class="img_box">
                        <img src="images/about-aim.jpg" alt="">
                    </div>

                </div>


            </div>

        </div>

    </section>
    <section class="our-aim">
        <div class="containerFull">
            <div class="row align-items-center">

                <div class="col-lg-6 ">
                    <div class="img_box">
                        <img src="images/about-aim.jpg" alt="">
                    </div>

                </div>
                <div class="col-lg-6 ps-lg-5">
                    <p class="services-badge">
                        Our Mission
                    </p>
                    <h2 class="fontHeading fontWeight700 heading mt-4 text_secondary">
                        Director's Foreword

                    </h2>

                    <p class="mt-4">

                        At King Field, our mission is to provide clients with clear, accurate, and insightful financial
                        intelligence. We understand the importance of trust and diligence in forensic investigations,
                        and our team is dedicated to maintaining the highest standards of professionalism. With a
                        client-first approach, we ensure that every case is handled with meticulous care, delivering
                        solutions that drive financial security and success.
                    </p>



                </div>

            </div>

        </div>

    </section>

    <section class="cta_1">
        <div class="containerFull">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="fontHeading fontWeight700 heading mt-4 text-white text-center">

                    Secure Your Business with Risk Management Experts!
                    </h4>

                    <div class="mt-5 d-flex justify-content-center">
                        <a href="#" class="btn_2 ms-3">Know More <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>

                </div>


            </div>

        </div>

        <div class="shap-1">

        </div>
        <div class="shap-2">

        </div>

    </section>



    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".universities_slider", {
            spaceBetween: 10,
            // centeredSlides: true,
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


</body>

</html>