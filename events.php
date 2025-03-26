<?php $page = 'events'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Events | Kingfield </title>
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
                <h1 class=" fontHeading heading fontWeight700  text-white "> Events and Conferences

                </h1>
                <p class=" mt-3 text-white"> Home / Events and Conferences </p>
            </div>
            <div class="shap-1">

            </div>
            <div class="shap-2">

            </div>

        </div>
    </div>
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

                        At Kingfield, we value our clients and partners. Our global conferences bring
                        together
                        industry leaders to foster meaningful collaborations and long-lasting business
                        relationships.aborations and long-lasting business
                    </p>
                    <p class="mt-4">

                        At Kingfield, we value our clients and partners. Our global conferences bring
                        together
                        industry leaders to foster meaningful collaborations and long-lasting business
                        relationships.
                        At Kingfield, we value our clients and partners. Our global conferences bring
                        together
                        industry leaders to foster meaningful collaborations and long-lasting business
                        relationships.
                    </p>
                    <div class="mt-5">
                        <a href="#events" class="btn_3 ">List of Events Given Below <i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="w-100" src="images/conference.jpg" alt="">

                </div>
            </div>
        </div>
    </section>
    <section class="events-data  " id="events">
        <?php
        $events = [
            ["day" => "16", "month" => "MAR", "description" => "Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus.", "venue" => "Siemens Arena", "price" => "$50.00"],
            ["day" => "5", "month" => "APR", "description" => "Phasellus et est quis diam iaculis fringilla id nec sapien.", "venue" => "Nike Arena", "price" => "FREE"],
            ["day" => "31", "month" => "MAY", "description" => "Ut consectetur commodo justo, sed sollicitudin massa venenatis ut 2013.", "venue" => "Samsung Arena", "price" => "$30.00"],
            ["day" => "17", "month" => "SEP", "description" => "Pellentesque justo turpis, fringilla sit amet pulvinar ut, tincidunt nec leo.", "venue" => "Samsung Arena", "price" => "FREE"],
            // Repeated events
            ["day" => "16", "month" => "MAR", "description" => "Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus.", "venue" => "Siemens Arena", "price" => "$50.00"],
            ["day" => "5", "month" => "APR", "description" => "Phasellus et est quis diam iaculis fringilla id nec sapien.", "venue" => "Nike Arena", "price" => "FREE"],
            ["day" => "31", "month" => "MAY", "description" => "Ut consectetur commodo justo, sed sollicitudin massa venenatis ut 2013.", "venue" => "Samsung Arena", "price" => "$30.00"],
            ["day" => "17", "month" => "SEP", "description" => "Pellentesque justo turpis, fringilla sit amet pulvinar ut, tincidunt nec leo.", "venue" => "Samsung Arena", "price" => "FREE"],
        ];
        ?>

        <div class="containerFull">
            <div class="section">
                <div class="">
                    <!-- <div class="single-post-title">
                        <h2>Title</h2>
                    </div> -->
                    <div class="single-post-content">
                        <table class="events-list ">
                            <tr class="border-bottom-2 fontHeading fontWeight600">
                                <td>
                                    <h4>Sr No.</h4>
                                </td>
                                <td>
                                    <h4>Title</h4>
                                </td>
                                <td>
                                    <h4>Place</h4>
                                </td>
                                <td>
                                    <h4>Contact</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">

                                </td>
                            </tr>

                            <?php foreach ($events as $event): ?>
                                <tr>
                                    <td>
                                        <div class="event-date">
                                            <div class="event-day"><?= htmlspecialchars($event['day']) ?></div>
                                            <div class="event-month"><?= htmlspecialchars($event['month']) ?></div>
                                        </div>
                                    </td>
                                    <td><?= htmlspecialchars($event['description']) ?></td>
                                    <td class="event-venue hidden-xs"><i class="icon-map-marker"></i>
                                        <?= htmlspecialchars($event['venue']) ?></td>

                                    <td><a href="contact-us.php" class="btn btn-grey btn-sm event-more">know More</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="cta_1">
        <div class="containerFull">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="fontHeading fontWeight700 heading mt-4 text-white ">

                        Expand Your Network at Our Global Conferences!
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