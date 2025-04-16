<?php $page = 'services'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | Rockwater Accountant </title>
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
                <h1 class=" fontHeading heading fontWeight700  text-white "> Services
                </h1>
                <p class=" mt-3 text-white"> Home / Services </p>
            </div>
            <div class="shap-1">

            </div>
            <div class="shap-2">

            </div>

        </div>
    </div>
    <section class="py-0">
        <div class="containerFull ">
            <?php

            $services = [
                [
                    "title" => "Forensic Accounting & Investigations",
                    "description" => "At Rockwater Accountant, our forensic accounting experts meticulously analyze financial records, uncovering discrepancies and identifying fraudulent activities. By assessing current market trends and financial data, we provide clients with accurate, in-depth reports that support legal proceedings, corporate audits, and financial decision-making. Our investigations help businesses and individuals safeguard their financial interests with clarity and confidence.",
                    "image" => "forensic.jpg"
                ],
                [
                    "title" => "Risk Management",
                    "description" => "Understanding and mitigating risk is essential in today’s dynamic financial landscape. Our team at Rockwater Accountant consists of experienced professionals with a proven track record in evaluating potential risks across various industries. We conduct comprehensive risk assessments, identifying vulnerabilities and providing strategic solutions to minimize exposure. Whether it’s financial, operational, or reputational risk, we equip our clients with the tools to make informed, proactive decisions.",
                    "image" => "risk.jpg"
                ],
                [
                    "title" => "Insurance Disputes",
                    "description" => "Navigating insurance disputes can be complex, with policy interpretations and claim settlements often leading to legal conflicts. At Rockwater Accountant, we specialize in analyzing insurance claims, identifying discrepancies, and providing expert advisory services to ensure fair outcomes. Whether for corporate entities or individual clients, our expertise in insurance dispute resolution helps achieve equitable settlements while minimizing financial losses.",
                    "image" => "insurence.jpg"
                ],
                [
                    "title" => "Legal Mitigation",
                    "description" => "Disputes and legal conflicts can be costly and time-consuming. At Rockwater Accountant, we act as strategic advisors, helping parties navigate legal challenges efficiently. Our team facilitates negotiations, mediation, and structured settlements to ensure fair and practical resolutions. By focusing on collaboration and conflict resolution, we assist businesses and individuals in reaching mutually beneficial agreements while avoiding prolonged litigation.",
                    "image" => "legal.jpg"
                ]
            ];

            ?>

            <?php foreach ($services as $index => $service): ?>
                <div class="row align-items-center  py-5 position-relative overflow-hidden item_services_page">
                    <?php if ($index % 2 == 0): ?>
                        <div class="shape-1">

                        </div>


                        <div class="col-lg-6 pe-lg-5">
                            <div class="service-card">
                                <p class="badge-contant">
                                    Our Services
                                </p>
                                <h4 class="fontHeading fontWeight700 heading mt-lg-4 mt-2">
                                    <?php echo htmlspecialchars($service['title']); ?>
                                </h4>
                                <p class="mt-lg-4 mt-3"><?php echo htmlspecialchars($service['description']); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6  mt-lg-0 mt-3">
                            <div class="service-card-img">
                                <img src="images/<?php echo htmlspecialchars($service['image']); ?>"
                                    alt="<?php echo htmlspecialchars($service['title']); ?>">
                            </div>
                        </div>

                       
                    <?php else: ?>
                        <div class="shape-2">
                        </div>
                        <div class="col-lg-6 order-lg-1 order-2  mt-lg-0 mt-3">
                            <div class="service-card-img">
                                <img src="images/<?php echo htmlspecialchars($service['image']); ?>"
                                    alt="<?php echo htmlspecialchars($service['title']); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5  order-lg-2 order-1">
                            <div class="service-card">
                                <p class="badge-contant">
                                    Our Services
                                </p>
                                <h4 class="fontHeading fontWeight700 heading mt-lg-4 mt-2 ">
                                    <?php echo htmlspecialchars($service['title']); ?>
                                </h4>
                                <p class="mt-lg-4 mt-3"><?php echo htmlspecialchars($service['description']); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>



        </div>
    </section>
    <section class="cta_1">
        <div class="containerFull">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="fontHeading fontWeight700 text-center heading mt-4 text-white ">

                        Expand Your Network at Our Global Conferences!
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