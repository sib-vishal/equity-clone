<?php $page = 'home';

$services = [
    [
        "title" => "Forensic Accounting & Investigations",
        "description" => "We analyze financial data, detect inconsistencies, and provide clear insights into market trends to support legal and business decisions.",
        "link" => "Learn More"
    ],
    [
        "title" => "Risk Management",
        "description" => "Our experts assess potential financial risks and develop strategic solutions to mitigate them, ensuring stability for businesses and individuals.",
        "link" => "Learn More"
    ],
    [
        "title" => "Insurance Disputes",
        "description" => "We provide expert analysis and advisory services to navigate complex insurance disputes, ensuring fair outcomes for our clients.",
        "link" => "Learn More"
    ],
    [
        "title" => "Legal Mitigation",
        "description" => "Our team facilitates negotiations and settlements, helping opposing parties reach fair and practical resolutions.",
        "link" => "Learn More"
    ]
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Equity Clone </title>
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

        <div class="banner-wrapper ">
            <div class="hero">
                <div class="containerFull">
                    <div class="inner_hero">
                        <div class="hero_content">
                            <h1 class="fontHeading zoom-up">
                                Leading Company in Forensic Investigation & Financial Intelligence
                            </h1>
                            <p class="mt-4 zoom-up">
                                We specialize in uncovering financial discrepancies, assessing risks, and providing
                                expert insights to help businesses and individuals safeguard their financial future.
                            </p>
                            <div class="mt-5 ">

                                <a href="#" class="btn_1"> <i class="fa-solid fa-calendar-check me-2"></i> <span>Book an
                                        Appointment</span></a>
                                <a href="#" class="btn_2 ms-3">Know More <i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape-1"></div>
                <div class="hero-shape-2"></div>
            </div>
        </div>
        <section class="bg_secondary states">
            <div class="containerFull">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="badge">

                            welcome to our agency
                        </p>
                        <h4 class="fontHeading fontWeight700 heading mt-4 text-white">

                            Secure & Safe Advices for your Small & Big Businesses
                        </h4>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="grid_states">
                            <div class="item_states">
                                <h3>
                                    962

                                </h3>
                                <p>

                                    Happy Customers
                                </p>
                            </div>
                            <div class="item_states">
                                <h3>
                                    853

                                </h3>
                                <p>
                                    Completed Cases
                                </p>
                            </div>
                        </div>

                    </div>

                </div>


                <!--  -->
                <div class="states-card-grid">
                    <?php
                    $states = [
                        [
                            "title" => ["Wealth", "Management"],
                            "icon" => "wealth.png",
                            "index" => "01"
                        ],
                        [
                            "title" => ["Audit", "Marketing"],
                            "icon" => "wealth.png",
                            "index" => "02"
                        ],
                        [
                            "title" => ["Finance", "Consulting"],
                            "icon" => "wealth.png",
                            "index" => "03"
                        ]
                    ];
                    ?>
                    <?php foreach ($states as $service): ?>
                        <div class="item_grid">

                            <div class="state-card">
                                <div class="service-content">

                                    <h4 class="fontHeading"><?= $service["title"][0]; ?> <br> <?= $service["title"][1]; ?>
                                    </h4>
                                    <img class="icon-states" src="images/icons/<?= $service["icon"]; ?>" alt="">
                                    <span class="index-number"><?= $service["index"]; ?></span>
                                    <button class="arrow-btn"><i class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!--  -->
            </div>
        </section>
        <section class="about-us-home" id="">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img_box_about">
                            <div class="img_box_1">
                                <img src="images/about-1.jpg" alt="" />
                            </div>
                            <div class="img_box_2">
                                <img src="images/about-2.jpg" alt="" />
                            </div>


                        </div>


                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="about_home_content">

                            <p class="badge">
                                Get to Know Us
                            </p>
                            <h2 class="fontHeading fontWeight700 heading mt-4 text_secondary">
                                About Equity Vantage Limited

                            </h2>

                            <p class="mt-4 text_gray">
                                At Equity Vantage Limited, we believe in empowering businesses and individuals with
                                accurate financial intelligence. With our expertise in forensic investigation, we
                                provide deep insights that help clients make informed decisions. Our team ensures that
                                every analysis is thorough, precise, and tailored to secure your financial well-being.

                            </p>

                            <ul class="mt-4 about-ul">

                                <li><strong>Unwavering Transparency & Ethical Integrity</strong></li>
                                <li><strong>Unmatched Expertise & Data-Driven Accuracy</strong></li>
                                <li><strong>Ironclad Confidentiality & Robust Security</strong></li>
                                <li><strong>Tailored Financial Strategies & Personalized Solutions</strong></li>
                                <li><strong>Proven Industry Excellence & Trusted Track Record</strong></li>
                                <li><strong>Clear Communication & Dedicated Client Support</strong></li>
                            </ul>

                            <div class="mt-5">
                                <a href="#" class="btn_3 ms-3">Know More <i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>

                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <div class="about-dots">
                <img src="images/dots.png" alt="" />

            </div>
        </section>



        <!-- services -->
        <section class="services_home">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="services-badge">
                            Our Services
                        </p>
                        <h3 class="fontHeading fontWeight700 heading mt-4 text_secondary">
                            Explore Our Range of Expert Financial Solutions
                        </h3>

                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <p class="mt-5">
                            Our team of seasoned professionals brings a diverse skill set, enabling us to deliver expert
                            insights and tailored solutions across multiple industries. With extensive experience and a
                            deep understanding of various sectors, we ensure our clients receive the highest level of
                            expertise, precision, and strategic guidance.
                        </p>

                    </div>

                </div>

                <div class="row mt-5">

                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-6 mb-4">
                            <div class="item_services">
                                <img src="images/127.jpg" alt="">

                                <div class="content">
                                    <h4 class="text-white fontHeading sub_heading"><?php echo $service['title']; ?></h4>
                                    <p class="mt-3 text-white"><?php echo $service['description']; ?></p>
                                    <a class="d-block mt-2" href="#">Read More</a>

                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square icons_services"></i>


                            </div>

                        </div>

                    <?php endforeach; ?>



                </div>

            </div>

            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>

        </section>

        <section class="cta_1">
            <div class="containerFull">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h4 class="fontHeading fontWeight700 heading mt-4 text-white text-center">

                            Creating Seamless and Memorable Experiences for Every Customer !
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

        <!-- case study -->
        <?php
        $casestudy = [
            [
                "category" => "LEADERSHIP",
                "title" => ["Businesses", "Growth"],
                "image" => "images/case-1-1.b11ed9ea.jpg",
                "icon" => "arrow-icon.png",
            ],
            [
                "category" => "MANAGEMENT",
                "title" => ["Marketing", "Advice"],
                "image" => "images/case-1-1.b11ed9ea.jpg",
                "icon" => "arrow-icon.png",
            ],
            [
                "category" => "STRATEGY",
                "title" => ["Finance", "Consulting"],
                "image" => "images/case-1-1.b11ed9ea.jpg",
                "icon" => "arrow-icon.png",
            ]
        ];
        ?>

        <section>
            <div class="containerFull">
                <h3 class="fontHeading fontWeight700 heading mt-4 text_secondary text-center">
                    New Case Studies
                </h3>
                <div class="row mt-5">
                    <?php foreach ($casestudy as $case): ?>
                        <div class="col-lg-4">

                            <div class="casestudy-card">
                                <div class="casestudy-card-img">
                                    <img src="<?= $case["image"]; ?>" alt="">

                                </div>
                                <div class="casestudy-content shadow">
                                    <span class="category"><?= $case["category"]; ?></span>
                                    <h3 class="mt-2"><?= $case["title"][0]; ?> <br> <?= $case["title"][1]; ?></h3>
                                    <button class="arrow-btn"><i class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>
        </section>


        <section class="conference">
            <div class="containerFull">
                <div class="row">

                    <div class="col-lg-7 pe-lg-5">
                        <p class="badge">
                            Our Latest Event
                        </p>

                        <h4 class="fontHeading fontWeight700 heading mt-4 text_secondary">
                            Exclusive Business Conferences

                        </h4>
                        <p class="mt-4">

                            At Equity Vantage Limited, we value our clients and partners. Our global conferences bring
                            together
                            industry leaders to foster meaningful collaborations and long-lasting business
                            relationships.aborations and long-lasting business
                        </p>
                        <p class="mt-4">

                            At Equity Vantage Limited, we value our clients and partners. Our global conferences bring
                            together
                            industry leaders to foster meaningful collaborations and long-lasting business
                            relationships.
                            At Equity Vantage Limited, we value our clients and partners. Our global conferences bring
                            together
                            industry leaders to foster meaningful collaborations and long-lasting business
                            relationships.
                        </p>
                        <div class="mt-5">
                            <a href="#" class="btn_3 ">Know Aboot Conference <i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img class="w-100" src="images/conference.jpg" alt="" />

                    </div>
                </div>
            </div>
        </section>
        <!-- our team -->
        <?php
        $team = [
            [
                "category" => "Leadership",
                "title" => ["John", "Doe"],
                "image" => "images/team.jpg",
            ],
            [
                "category" => "Management",
                "title" => ["Jane", "Smith"],
                "image" => "images/team.jpg",
            ],
            [
                "category" => "Strategy",
                "title" => ["Mike", "Johnson"],
                "image" => "images/team.jpg",
            ],
            [
                "category" => "Marketing",
                "title" => ["Emily", "Davis"],
                "image" => "images/team.jpg",
            ],
           
        ];
        ?>

        <section>
            <div class="containerFull">
            <h3 class="fontHeading fontWeight700 heading mt-4 text_secondary text-center">
                   Meet Our Team
                </h3>

                <div class="row mt-5 ">
                    <?php foreach ($team as $member): ?>
                        <div class="col-lg-3">
                            <div class="team-card">
                                <div class="team-card-img">
                                    <img src="<?= htmlspecialchars($member["image"]); ?>" alt="Team Member">
                                </div>
                                <div class="team-content">
                                    <span class="category"><?= htmlspecialchars($member["category"]); ?></span>
                                    <h3 class="mt-2 text-white">
                                        <?= isset($member["title"][0]) ? htmlspecialchars($member["title"][0]) : ""; ?>
                                       
                                        <?= isset($member["title"][1]) ? htmlspecialchars($member["title"][1]) : ""; ?>
                                    </h3>
                                   
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>

            </div>
        </section>

        <section class="bg-gray-light">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6   order-2 order-lg-1  mt-5 mt-lg-0">
                        <div class="leftContact">
                            <img src="images/inquiry.jpg" alt="">

                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 ps-lg-5">
                        <div class="rightContact">
                            <p class="badge-contant">Contact us</p>
                            <h3 class="heading fontHeading mt-2 fontWeight700">You can contact us</h3>
                            <h3 class="heading fontHeading mt-2 fontWeight400">if you have any query</h3>
                            <div class="borderLine"></div>
                            <form action="">
                                <div class="row mt-4">
                                    <div class="col-lg-6">
                                        <div class="itemForm">
                                            <input type="text" name="name" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="itemForm">
                                            <input type="email" name="email" placeholder="Email*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="itemForm">
                                            <input type="tel" name="phone" placeholder="Phone*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="itemForm">
                                            <input type="text" name="subject" placeholder="Subject*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="itemForm">
                                            <textarea name="message" id="message" placeholder="Message"
                                                spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="itemForm">
                                            <button class="btn_3 mt-3 ">Send Message <i
                                                    class="fa-solid fa-arrow-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
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