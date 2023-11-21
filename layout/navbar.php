<?php
extract($_SESSION['user']);
?>

<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<header class="header-style-two">
    <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="index.php?action=home">
                                    <img src="assets/img/logo/logo.png" alt="Logo">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="index.php?action=home">Home</a>
                                    </li>
                                    <li class="menu-item-has-children"><a href="index.php?action=list_movie">Movie</a>
                                    </li>
                                    <li><a href="index.php?action=combo">Combo</a></li>
                                    <li class="menu-item-has-children"><a href="index.php?action=blog">blog</a>
                                    </li>
                                    <li><a href="index.php?action=contact">contacts</a></li>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        if ($role == '1') {
                                            echo '  <li><a href="../admin/index.php?action=dashboard">Admin</a></li>';
                                        } else {
                                            echo '  <li><a href="index.php?action=your_ticket">Your tickets</a></li>';
                                        }
                                    } else {
                                        echo '  <li><a href="index.php?action=signin">Your tickets</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="d-none d-xl-block">
                                        <div class="footer-search">
                                            <form action="index.php?action=search" method="post">
                                                <input type="text" name="keysword" placeholder="Find Favorite Movie">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="header-lang">
                                        <form action="#">
                                            <div class="icon"><i class="flaticon-globe"></i></div>
                                            <select id="lang-dropdown">
                                                <option value="">EN</option>
                                                <option value="">VN</option>
                                                <option value="">AR</option>
                                                <option value="">TU</option>
                                            </select>
                                        </form>
                                    </li>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        echo '<li class="header-btn"><a href="index.php?action=logout" class="btn">' . $user . '</a></li>';
                                    } else {
                                        echo '<li class="header-btn"><a href="index.php?action=signin" class="btn">Sign In</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/logo.png" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="#">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home One</a></li>
                                            <li class="active"><a href="index-2.html">Home Two</a></li>
                                        </ul>
                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Movie</a>
                                        <ul class="submenu">
                                            <li><a href="movie.html">Movie</a></li>
                                            <li><a href="movie-details.html">Movie Details</a></li>
                                        </ul>
                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                    </li>
                                    <li><a href="tv-show.html">tv show</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li class="menu-item-has-children"><a href="#">blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                    </li>
                                    <li><a href="contact.html">contacts</a></li>
                                </ul>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>
</header>