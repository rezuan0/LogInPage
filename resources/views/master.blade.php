<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- font awesome  -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    />

    <!-- Bootstraps css  -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />

    <!-- Remix Icon  -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css"
        rel="stylesheet"
    />

    <!-- Cdn's for counter up  -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
        rel="stylesheet"
    />

    <!-- AOS Animation  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>Log In Page (Research) </title>

    <!-- custom css  -->
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>

<!-- Navbar Part Start  -->
<section>
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container container-xl d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0">
                <a href="/"><b>RH</b><span>.</span></a>
            </h1>

            <nav class="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="/registration">Registration</a></li>
                    <li><a href="/logInPage">Log In</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </nav>
{{--            <a href="#aboutUs" class="  btn">Get Started</a>--}}
        </div>
    </header>
</section>
<!-- Navbar Part End  -->


<!-- Banner part start  -->
<section id="banner" >
    <div class="margin-top">
        <div class="container">
            @yield('content')
        </div>
        </div>
    </div>
</section>
<!-- Banner part end  -->



<!-- Footer Part STart -->
<section id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3>GP<span>.</span></h3>
                    <p>
                        A108 Adam Street <br />
                        NY 535022, USA <br />
                        <br />
                        <strong>Phone:</strong> +1 5589 55488 55<br />
                        <strong>Email:</strong> info@example.com <br />
                    </p>
                    <div>
                        <div class="social_links">
                            <a href="#" class="mx-2"
                            ><i
                                ><span
                                        class="iconify"
                                        data-icon="ant-design:twitter-outlined"
                                    ></span></i
                                ></a>

                            <a href="#" class="mx-2"
                            ><i
                                ><span
                                        class="iconify"
                                        data-icon="akar-icons:facebook-fill"
                                    ></span></i
                                ></a>

                            <a href="#" class="mx-2"
                            ><i
                                ><span
                                        class="iconify"
                                        data-icon="akar-icons:instagram-fill"
                                    ></span></i
                                ></a>
                            <a href="#" class="mx-2"
                            ><i
                                ><span
                                        class="iconify"
                                        data-icon="ant-design:skype-filled"
                                    ></span></i
                                ></a>

                            <a href="#" class="mx-2"
                            ><i
                                ><span
                                        class="iconify"
                                        data-icon="akar-icons:linkedin-fill"
                                    ></span></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-5 usefulService">
                    <p>Useful Links</p>
                    <div>
                        <ul>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Home</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">About us</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Services</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 mt-5 usefulService">
                    <p>Our Services</p>
                    <div>
                        <ul>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Marketing</a>
                            </li>
                            <li>
                    <span
                        class="iconify icon_right"
                        data-icon="akar-icons:chevron-right"
                    ></span>
                                <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mt-5">
                    <h4>Our Newsletter</h4>
                    <p class="para">
                        Tamen quem nulla quae legam multos aute sint culpa legam noster
                        magna
                    </p>
                    <form action="" method="post">
                        <input type="email" name="email" /><input
                            type="submit"
                            value="Subscribe"
                        />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="copyright">
            &copy; Copyright <strong><span>Gp</span></strong
            >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">BootstrapMade</a></div>
    </div>
</section>
<!-- Footer Part End -->






<!-- Bootstrap Scripts -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
></script>

<!-- Footer Icon's  -->
<script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>

<!-- Cdn's for counts  -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- AOS Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- custom js -->
<script src="/js/main.js"></script>
</body>
</html>

