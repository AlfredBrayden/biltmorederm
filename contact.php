<?php include('header.php'); ?>

<title>Carpenter Heating and Cooling | Contact Us</title>



</head>



<body>
    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        <!--    <div id="de-loader"></div> -->
        <!-- page preloader close -->

        <?php include('menu.php'); ?>

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/contact us 2000x1333-min.webp" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="container relative z-index-1000">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!--                <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Our Service</div> -->
                                <h1>Get In Touch</h1>
                                <ul class="crumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-lg-end">
                                <div class="fs-20 fw-600 no-bottom sm-hide">Air Conditioning and Heating Specialists
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>
            <!-- section close -->

            <div class="bg-color relative z-index-1000 mt-40 mb40">
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide"
                    alt="">
                    <i class="icofont-envelope fs-36"></i>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-8">
                            <p>Whether you have a question, a suggestion, or just want to say hello, this is the place
                                to do it. Please fill out the form below with your details and message, and we'll get
                                back to you as soon as possible.</p>


                            <form name="contactForm" id="contact_form" class="position-relative z1000" method="post"
                                action="#">
                                <div class="row gx-4">
                                    <div class="col-lg-6 col-md-6 mb10">
                                        <div class="field-set">
                                            <span class="d-label">Name</span>
                                            <input type="text" name="Name" id="name" class="form-control"
                                                placeholder="Your Name" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Email</span>
                                            <input type="text" name="Email" id="email" class="form-control"
                                                placeholder="Your Email" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Phone</span>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Your Phone" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-set">
                                            <span class="d-label">City</span>
                                            <input type="text" name=city" id="city" class="form-control"
                                                placeholder="Your City" required>
                                        </div>

                                        <div class="field-set mb20">
                                            <span class="d-label">Message</span>
                                            <textarea name="message" id="message" class="form-control"
                                                placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="g-recaptcha" data-sitekey="6Le7_BcqAAAAAGdccR9kltzA40Cs07wKrOKMWlTl"></div>

                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more
                                    messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>

                        </div>

                        <div class="col-lg-4">
                            <!--  <h4>Our Office</h4> -->
                            <!-- <div class="img-with-cap mb20">
                                <div class="d-title">Mon - Fri 08.00 - 18.00</div>
                                <div class="d-overlay"></div>
                                <img src="images/misc/5.webp" class="img-fullwidth rounded-1" alt="">
                            </div> -->

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark"><i class="icofont-clock-time me-2 id-color-2"></i>Office
                                Hours
                            </div>
                            Mon - Fri 08.00 - 05.00

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Office
                                Location</div>
                            2714 Wall Ave, Ogden, UT 84401

                            <div class="spacer-single"></div>

                            <!--  <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Send a
                                Message</div>
                            contact@coolair.com -->

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Call Us Directly
                            </div>
                            (801) 399-1127

                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->


        <?php include('footer.php'); ?>