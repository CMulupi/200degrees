<?php loadPartial('header.php') ?>
<?php loadpartial('nav.php') ?>
<main class="p-0 hero">
    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner mb-5">
            <div class="carousel-item carousel-hero active">
                <img  src="assets/images/200degbg2.png">
                <div class="carousel-caption d-md-block" style="z-index: 10;">
                    <div class="px-md-5 px-3">
                        <h2 class="display-5 animate__animated animate__fadeInLeft">Expert Cleaning Services <br> You can trust</h2>
                        <p class="animate__animated animate__fadeInLeft">Join over 300 satisfied clients who have experienced the difference with 200 Degrees. <br> Their glowing testimonials speak volumes about our commitment to quality.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-hero " data-bs-interval="8000">
                <img src="assets/images/cleaning services img-2.jpg">
                <div class="carousel-caption d-md-block" style="z-index: 10;">
                    <div class="px-md-5 px-3">
                        <h2 class="display-5 animate__animated animate__fadeInLeft">Customized Pricing<br> Plans to Suit Your Budget.</h2>
                        <p class="animate__animated animate__fadeInLeft">No two spaces are alike, and neither are our cleaning plans. <br> We customize our services to meet your specific needs, ensuring a <br> personalized cleaning experience every time.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-hero" data-bs-interval="8000">
                <img src="assets/images/enjoy-cleaning.jpg">
                <div class="carousel-caption d-md-block" style="z-index: 10;">
                    <div class="px-md-5 px-3">
                        <h2 class="display-5 animate__animated animate__fadeInLeft" style="color: whitesmoke;">Home Cleaning <br> Like no other</h2>
                        <p class="text-info animate__animated animate__fadeInLeft" style="text-shadow: 1px 1px 2px rgba(0,0,0, .8);">Experience the pinnacle of home cleanliness with our unparalleled home cleaning service. <br>
                         From meticulous attention to detail to using eco-friendly products, we redefine clean, leaving <br> your home sparkling and refreshed like never before.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>
<div class="container-fluid p-0">

    <div class="row px-5">
        <div class=" col bubbles mb-3">
            <div class="bubble bubble-yellow "></div>
            <div class="bubble bubble-blue"></div>

        </div>
    </div>
    <div class="row what-we-do px-5">
        <div class="col col-md-6">
            <h4 class="display-4 fw-bold animate_animated animate__fadeInLeft">What We Do?</h4>
            <p>With a blend of professionalism, reliability, and eco-conscious practices, we redefine the essence of cleanliness, leaving behind a trail of satisfaction and tranquility. Trust us to transform your spaces into immaculate havens, where every sweep, scrub, and polish reflects our unwavering commitment to excellence.</p>
        </div>
        <div class="col col-md-6 d-flex justify-content-end">
            <a href="/services/residential">
                <div class="cta-cleaning-category residential">Residential</div>
            </a>
            <a href="/services/commercial">
                <div class="cta-cleaning-category commercial">Commercial</div>
            </a>
        </div>
    </div>
    <div class="row  mt-5 pt-5">
        <div class="owl-carousel owl-theme p-0">

            <div class="card pt-0">
                <img src="assets/images/carpet-cleaning-1.png" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Carpet Cleaning</h5>
                </div>
            </div>
            <div class="card pt-0">
                <img src="assets/images/cleaning services-2.png" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Sofa Set Cleaning</h5>
                </div>
            </div>
            <div class="card pt-0">
                <img src="assets/images/Office carpet cleaning.jpg" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">Office Furniture Cleaning</h5>
                </div>
            </div>


        </div>
    </div>

    <div class="how-it-works">
        <div class="row">

            <div class="col-md-7  mx-auto px-5 p-md-0">

                <div class="bubbles d-flex flex-column align-items-center mt-5">
                    <div class="bubble bubble-yellow"></div>
                    <div class="bubble bubble-blue"></div>
                </div>
                <h4 class="display-4 fw-bold text-center mt-3">How it Works</h4>
                <p>We understand that navigating the steps from booking to completion can sometimes
                    feel daunting, which is why we've crafted a seamless and transparent process
                    to guide you every step of the way. From submitting your booking request to
                    basking in the cleanliness of your space, our team is dedicated to ensuring
                    a hassle-free experience. </p>
                <p class=" mb-5">Below, we'll walk you through our step-by-step
                    process and provide clear instructions on how to book your cleaning service,
                    whether online, over the phone, or via email. At 200 Degrees, we're committed
                    to delivering exceptional results while making the entire process as effortless
                    as possible for you.</p>
            </div>
        </div>

        <div class="row align-items-center justify-content-center gap-5 my-5">
            <div class="HIT-step mb-3" id="HIT-Step1">
                <div class="HIT-step-inner">
                    <img src="assets/images/book-cleaning.jpg" alt="">
                </div>
                <h4 class="fw-bold">Easy Online Scheduling</h4>
            </div>

            <div class="HIT-step mb-3" id="HIT-Step2">
                <div class="HIT-step-inner">
                    <img src="assets/images/book-cleaning.jpg" alt="">
                </div>
                <h4 class="fw-bold">Easy Online Scheduling</h4>
            </div>

            <div class="HIT-step mb-3" id="HIT-Step3">
                <div class="HIT-step-inner">
                    <img src="assets/images/book-cleaning.jpg" alt="">
                </div>
                <h4 class="fw-bold">Easy Online Scheduling</h4>
            </div>
        </div>
    </div>
</div>

<?php loadpartial('footer.php') ?>