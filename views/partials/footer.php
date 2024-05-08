<!-- Bootstrap -->
<div class="footer p-5">
   
        <div class="row">
            <div class="col-md-3">
                <h6>Contact Us</h6>
                <p>Phone: +254-0727 167 900 | 0722 533 043</p>
                <p>Email: info@200degrees.co.ke</p>
                <p>Address: Westlands Commercial Centre Off Kabete Road</p>
            </div>
            <div class="col-md-3">
                <h6>Navigation</h6>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services/residential">Residential</a></li>
                    <li><a href="/services/commercial">Commercial</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6>Connect with Us</h6>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100057349183966" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/200degreeshot/?utm_source=qr&igsh=dm9keHFkejV3cXhz" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6>Book a Cleaning Service</h6>
                <form action="book_service.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Your Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Select Service</label>
                        <select class="form-select" id="service" name="service" required>
                            <option value="">Select a Service</option>
                            <option value="House Cleaning">House Cleaning</option>
                            <option value="Office Cleaning">Office Cleaning</option>
                            <option value="Office Cleaning">Furniture Cleaning</option>
                            <option value="Office Cleaning">Fumigation</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">© <?php echo date("Y") ?> 200-Degrees Cleaning Services Company. All rights reserved.</p>
            </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 3,
                stagePadding: 50
            }
        }
    })
</script>
<script>
    window.addEventListener('scroll', function() {
        var topNav = document.getElementById('topNav');
        var bottomNav = document.getElementById('bottomNav');

        var topNavHeight = topNav.clientHeight;
        var scrollPos = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;

        if (scrollPos > topNavHeight) {
            // Scrolled past top navigation, make bottom navigation fixed and visible
            bottomNav.classList.add('fixed-nav');
            topNav.classList.add('hidden-nav');
        } else {
            // Not scrolled past top navigation, make bottom navigation normal and hide it
            bottomNav.classList.remove('fixed-nav');
            topNav.classList.remove('hidden-nav');
        }
    });
</script>

</body>

</html>