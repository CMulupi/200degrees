<?php  view('partials/header.php'); ?>
<main>
   <?php view('partials/nav.php') ?>
   <div class="container-fluid m-0 p-0">
    <section class="hero-section">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="assets/images/hero-vid2.mp4" type="video/mp4" id="herovid">
                Your browser does not support the video tag.
            </video>
            <div class="overlay-text ms-md-5">
                <h1 class="display-4 fw-bold">200 Degrees,</h1>
                <h2 class="display-4 fw-bold mb-5">Infinite Shine.</h2>
                <div class="why-us-container d-md-flex align-items-center ">
                    <div class="why-us-items d-flex  align-items-center mb-2 mb-md-5 mx-md-3">
                        <i class='bx bxs-book-open'></i> <span>Instant Quotes</span>
                    </div>
                    <div class="why-us-items d-flex  align-items-center mb-2 mb-md-5 mx-md-3">
                        <i class='bx bx-book-add'></i> <span>Optional Contracts</span>
                    </div>
                    <div class="why-us-items d-flex  align-items-center  mb-5 mx-md-3">
                        <i class='bx bx-dollar-circle'></i> <span>Affordable pricing</span>
                    </div>
                </div>

                <a href="link-to-booking-page" class="cta-button">Book your cleaning Now</a>
            </div>
        </div>
    </section>
    <section class="main-body">
        <div class="row sub1"> 
            <div class="col-md-6 profile col-12 mb-5">
                    <div class="staffphoto">
                        <img class="imgstaffphoto " src="assets/images/staffphoto.png" alt="" srcset="">
                    </div>
                    <div class="ratings me-5 px-2">
                            <h4>4.8</h4>
                            <div class="stars d-flex align-items-center justify-content-center">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Trusted by over 300 Reviews</p>
                    </div>
                    <div class="companycar">
                        <img src="assets/images/companycar.png" class="companycar">
                    </div>
            </div>
            <div class="col-md-6 col-12 colexperience">
                <h4>15+ Years of superior cleaning</h4>
                <p>200 Degrees has the distinguished record of using environmentally friendly cleaning products since our beginning in the 2012. We were eco-friendly before the recent popular trend of all natural products.</p>
            </div>
        </div>
    </section>
</div>
</main>
<?php  view('partials/footer.php'); ?>