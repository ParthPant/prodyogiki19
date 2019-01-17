<!-- footer top -->
<div class="footer-top py-5">
    <div class="container">
        <div class="row footer-cform pt-lg-5">
            <div class="col-lg-5 wthree-form-left my-lg-0 mt-4">
                <h5 class="footer-top-title">send us a message</h5>
                <div class="footer-top-form">
                    <form action="#" method="get" class="footer-top-wthree">
                        <div class="form-group d-flex">
                            <label>
                                Name
                            </label>
                            <input class="form-control" type="text" placeholder="Johnson" name="email" required="">
                        </div>
                        <div class="form-group d-flex">
                            <label>
                                Email
                            </label>
                            <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                required="">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-agile btn-block w-25">Send</button>
                        </div>
                    </form>
                </div>
                <div class="social-icons d-flex  mt-lg-5 my-5">
                    <h2 class="mr-4">stay connected :</h2>
                    <ul class="social-iconsv2 agileinfo">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offset-lg-1"></div>
            <div class="col-lg-6">
                <h5 class="footer-top-title">site navigation</h5>
                <div class="footer-top-agileits">
                    <ul class="list-agileits d-flex">
                        <li>
                            <a href="index.html" class="nav-link py-0 pl-0">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.html" class="nav-link py-0">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="portfolio.html" class="nav-link py-0">
                                portfolio
                            </a>
                        </li>
                    </ul>
                    <ul class="list-agileits d-flex">
                        <li>
                            <a href="single.html" class="nav-link py-0 pl-0">
                                single
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="nav-link py-0">
                                privacy policy
                            </a>
                        </li>
                        <li>
                            <a href="contact.html" class="nav-link py-0">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-cont-btm">
                    <h5 class="footer-top-title">contact information</h5>
                    <address class="my-4">
                        <p>+4667 Woodland Terrace Folsom, California 916-983-6577.</p>
                    </address>
                    <ul class="d-flex header-agile pt-0 flex-column">
                        <li>
                            <span class="fa fa-envelope-open mr-3"></span>
                            <a href="mailto:example@email.com">info@example.com</a>
                        </li>
                        <li class="mt-3">
                            <span class="fa fa-phone mr-3"></span>
                            <p class="d-inline">+456 123 7890</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //footer top -->
<!-- footer -->
<footer>
    <div class="container">
        <div class="cpy-right text-center">
            <p class="text-white">© 2018 Interface. All rights reserved | Design by
                <a href="http://w3layouts.com"> W3layouts.</a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<script src="js/gridview.js"></script>
<!-- //grid view -->
<!--  menu toggle -->
<script src="js/menu.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="js/scrolling-nav.js"></script>
<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>

</html>
