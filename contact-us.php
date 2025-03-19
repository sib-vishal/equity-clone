<?php $page = 'contact-us';

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
    <title>Contact Us | Equity Clone </title>
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
                <h1 class="text-center fontHeading heading fontWeight700 text-white">
                    Contact Us

                </h1>
                <p class="text-center mt-3  text-white ">
                    Home / Contact Us

                </p>

            </div>

        </div>
        <section>
            <div class="containerFull">
                <div class="row ">
                    <div class="col-lg-6">
                        <p class="badge-contant">Contact us</p>
                        <h3 class="heading fontHeading mt-2 fontWeight700">Contact us. Feel free to
                            call or write anytime</h3>

                        <div class="icon_list mt-5 pe-lg-5">
                            <div class="item_contact">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>


                                </div>
                                <div class="content">
                                    <h5 class="text_secondary">
                                        Address
                                    </h5>
                                    <p>
                                        123 Business Avenue, Suite 456, Cityname, Country, 10001
                                    </p>

                                </div>

                            </div>

                            <hr />
                            <div class="item_contact">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>


                                </div>
                                <div class="content">
                                    <h5 class="text_secondary">
                                        Phone Number
                                    </h5>
                                    <p>
                                        <a href="#">0123456789</a> , <a href="#">0123456789</a>
                                    </p>

                                </div>

                            </div>

                            <hr />
                            <div class="item_contact">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>


                                </div>
                                <div class="content">
                                    <h5 class="text_secondary">
                                        Mail Address
                                    </h5>
                                    <p>
                                        info@company.com
                                    </p>

                                </div>

                            </div>



                        </div>



                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="rightContact">

                            <h3 class="heading fontHeading mt-2 fontWeight400">Please fill this form</h3>
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
        </section>
        <div>
            <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201411.07131473965!2d72.71412525687607!3d19.08280670615086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1742375362808!5m2!1sen!2sin"
                 height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>



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