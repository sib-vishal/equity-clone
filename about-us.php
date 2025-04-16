<?php $page = 'about-us';

$financialTeam = [
    [
        'name' => 'James Rickhart',
        'position' => 'Senior Financial Project Manager',
        'img' => 'images/seridon.png',
        // 'img' => 'images/james-rickhart.png',
        'bio' => 'With over 15 years of experience in financial project management, James Rickhart specializes in overseeing large-scale financial initiatives, ensuring efficiency, accuracy, and risk mitigation. His background in finance and business strategy allows him to streamline budgeting, forecasting, and investment planning. Known for his ability to lead cross-functional teams, he excels in driving financial projects that maximize profitability and long-term business growth.'
    ],
    [
        'name' => 'Ben Sheridan',
        // 'name' => 'Matthew Sheridan',
        'position' => 'International Finance Liaison Manager',
        'img' => 'images/fisher.png',
        'bio' => 'An expert in global finance and cross-border business relations, Matthew Sheridan facilitates seamless financial operations between multinational organizations. With extensive experience in international markets, foreign investments, and financial regulatory compliance, he ensures smooth financial transactions and strategic partnerships across borders. His expertise in risk analysis and financial diplomacy makes him a vital link in global financial negotiations.'
    ],
    [
        'name' => 'Charles Fischer',
        'position' => 'Senior Business & Financial Operations Manager',
        'img' => 'images/james-rickhart.png',
        'bio' => 'A results-driven financial operations leader, Charles Fischer specializes in optimizing financial workflows, improving cash flow management, and ensuring regulatory compliance. With over two decades of experience in business finance, he has successfully implemented cost-saving strategies and efficiency-driven financial models. His expertise in financial risk management and operational consulting makes him a key player in corporate financial stability and growth.'
    ],
    [
        'name' => 'Andrew Chan Li',
        'position' => 'Head of Financial Compliance & Risk Management',
        'img' => 'images/andrew.png',
        'bio' => 'As the Head of Financial Compliance, Andrew Chan Li ensures that financial operations adhere to global and local regulations, reducing risk exposure for the organization. His experience in regulatory frameworks, anti-money laundering (AML), and financial auditing makes him a key asset in safeguarding corporate financial integrity. His meticulous attention to detail and strategic approach to risk assessment help businesses maintain financial transparency and stability.'
    ],
    [
        'name' => 'Ben Xiang Lei',
        'position' => 'Head of Legal & Financial Advisory',
        'img' => 'images/ben.png',
        'bio' => 'An expert in corporate finance law, Ben Xiang Lei leads the legal and financial advisory division, ensuring that all transactions, contracts, and mergers align with financial regulatory standards. With a deep understanding of corporate governance, risk mitigation, and financial compliance, he provides strategic counsel to safeguard assets and minimize legal exposure. His expertise in financial dispute resolution and contract negotiation ensures the company operates within a secure and optimized legal framework.'
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us | Rockwater Accountant </title>
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
                <div class="col-lg-6 order-lg-2 order-2 mt-4 mt-lg-0">
                    <div class="img_box_about">
                        <div class="img_box_1">
                            <img src="images/about-1.jpg" alt="">
                        </div>
                        <div class="img_box_2">
                            <img src="images/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 order-lg-2 order-1">
                    <div class="about_home_content">

                        <p class="badge">
                            Who We Are
                        </p>
                        <h2 class="fontHeading fontWeight700 heading mt-lg-4 mt-2 text_secondary">
                            About Rockwater Accountant

                        </h2>

                        <p class="mt-lg-4  mt-3 text_gray">
                            Rockwater Accountant is a globally accepted leader in financial intelligence and forensic
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
                    <h2 class="fontHeading fontWeight700 heading mt-lg-4 mt-3 text_secondary">
                        What We Stand For
                    </h2>
                    <p class="mt-lg-4 mt-3">
                        We strive to build strong, lasting relationships with our clients worldwide by approaching every
                        case with a high level of professionalism and precision. Our goal is to ensure that clients
                        fully understand their financial landscape, empowering them with clear insights and actionable
                        solutions. By working closely with each client, we break down complex financial details,
                        providing transparency and confidence in every step of the process.
                    </p>
                </div>
                <div class="col-lg-6  mt-4 mt-lg-0">
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
                <div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-3 ">
                    <div class="img_box">
                        <img src="images/about-aim.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 order-lg-2 order-1 ">
                    <p class="services-badge">
                        Our Mission
                    </p>
                    <h2 class="fontHeading fontWeight700 heading mt-lg-4 mt-3 text_secondary">
                        Director's Foreword

                    </h2>

                    <p class="mt-4">

                        At Rockwater Accountant, our mission is to provide clients with clear, accurate, and insightful
                        financial
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
                    <div class="mt-lg-5 mt-3 d-flex justify-content-center">
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
    <section>
        <div class="containerFull">
            <div class="text-center ">
                <p class="services-badge ">
                    Our Team
                </p>
                <h2 class="fontHeading fontWeight700 heading mt-lg-4 mt-2 text_secondary">
                    Meet Our Financial Experts
                </h2>

            </div>

            <!-- <div class="row mt-5"> -->
            <?php foreach ($financialTeam as $index => $member): ?>
                <div class="col-lg-10 mx-auto">
                    <div class="row mt-lg-5 mt-3 align-items-center">

                        <?php if ($index % 2 === 0): ?>
                            <!-- Text Left | Image Right -->
                            <div class="col-lg-8 pe-lg-5  mt-3 mt-lg-0 order-2 order-lg-1">
                                <h4 class="fontHeading fontWeight600 text_primary sub_heading"><?php echo $member['name']; ?>
                                </h4>
                                <p class="mt-2">- <?php echo $member['position']; ?></p>
                                <p class="mt-2"><?php echo $member['bio']; ?></p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2">
                                <img class="img-team" src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>"
                                    style="width: 100%;" />
                            </div>

                        <?php else: ?>
                            <div class="col-lg-4">
                                <img class="img-team" src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>"
                                    style="width: 100%;" />
                            </div>
                            <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-3">
                                <h4 class="fontHeading fontWeight600 text_primary sub_heading"><?php echo $member['name']; ?>
                                </h4>
                                <p class="mt-2">- <?php echo $member['position']; ?></p>
                                <p class="mt-2"><?php echo $member['bio']; ?></p>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endforeach; ?>

            <!-- </div> -->

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