<section class="movie-area movie-bg" data-background="assets/img/bg/movie_bg.jpg">
    <div class="container">
        <div class="row align-items-end mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left">
                    <span class="sub-title">ONLINE STREAMING</span>
                    <h2 class="title">New Release Movies</h2>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active">
            <?php
            foreach ($list_movie_limit as $movie) {
                echo '<div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">';
                echo '<div class="movie-item movie-item-three mb-50">';
                echo '<div class="movie-poster text-center">'; // Added class "text-center"
                echo '<img src="../uploads/' . $movie['image'] . '" alt="">';
                echo '<ul class="overlay-btn">';
                echo '<li class="rating">';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '</li>';
                echo '<li><a href="' . $movie['trailer_movie'] . '" class="popup-video btn">Watch Now</a></li>';
                echo '<li><a href="index.php?action=details_movie&id=' . $movie['id_movie'] . '" class="btn">Details</a></li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="movie-content">';
                echo '<div class="top">';
                echo '<h5 class="title"><a href="#">' . $movie['name_movie'] . '</a></h5>';
                echo '<span class="date">' . $movie['year'] . '</span>';
                echo '</div>';
                echo '<div class="bottom">';
                echo '<ul>';
                echo '<li><span class="quality">hd</span></li>';
                echo '<li>';
                echo '<span class="duration"><i class="far fa-clock"></i> ' . $movie['time'] . '</span>';
                echo '<span class="rating"><i class="fas fa-thumbs-up"></i>' . $movie['reviews'] . '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</section>

<section class="services-area services-bg-two" data-background="assets/img/bg/services_bg02.jpg" style="background-image: url(&quot;assets/img/bg/services_bg02.jpg&quot;);">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="services-img-wrap">
                    <img src="assets/img/images/services_img02.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="services-content-wrap">
                    <div class="section-title mb-40">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Download Your Shows Watch Offline.</h2>
                    </div>
                    <div class="services-list">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-television"></i>
                                </div>
                                <div class="content">
                                    <h5>Enjoy on Your TV.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consecetur adipiscing
                                        elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-video-camera"></i>
                                </div>
                                <div class="content">
                                    <h5>Watch Everywhere.</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consecetur adipiscing
                                        elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->

<!-- top-rated-movie -->
<section class="top-rated-movie tr-movie-bg2" data-background="assets/img/bg/tr_movies_bg.jpg" style="background-image: url(&quot;assets/img/bg/tr_movies_bg.jpg&quot;);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title title-style-three text-center mb-70">
                    <span class="sub-title">top rated movies</span>
                    <h2 class="title">Top Online Shows Watch</h2>
                </div>
            </div>
        </div>
        <div class="row movie-item-row">
            <?php
            // Number of movies per page
            $moviesPerPage = 10;

            // Current page from URL parameter
            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            // Calculate the starting index for movies on the current page
            $startIndex = ($currentPage - 1) * $moviesPerPage;

            $pagedMovies = array_slice($list_movie, $startIndex, $moviesPerPage);
            foreach ($pagedMovies as $movie) {
                echo '<div class="custom-col">';
                echo '<div class="movie-item movie-item-two">';
                echo '<div class="movie-poster">';
                echo '<img src="../uploads/' . $movie['image'] . '" alt="">';
                echo '<ul class="overlay-btn">';
                echo '<li>';
                echo '<a href="' . $movie['trailer_movie'] . '" class="popup-video btn">Watch Now</a>';
                echo '</li>';
                echo '<li>';
                echo '<li><a href="index.php?action=details_movie&id=' . $movie['id_movie'] . '" class="btn">Details</a></li>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="movie-content">';
                echo '<div class="rating">';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '</div>';
                echo '<h5 class="title">';
                echo '<a href="index.php?action=details_movie&id=' . $movie['id_movie'] . '">' . $movie['name_movie'] . '</a>';
                echo '</h5>';
                foreach ($list_category as $category) {
                    if ($movie['id_category'] == $category['id_category']) {
                        $movie['id_category'] = $category['name_category'];
                    }
                }
                echo '<span class="rel">' . $movie['id_category'] . '</span>';
                echo '<div class="movie-content-bottom">';
                echo '<ul>';
                echo '<li class="tag">';
                echo '<a href="#">HD</a>';
                foreach ($list_country as $country) {
                    if ($movie['id_country'] == $country['id_country']) {
                        $movie['id_country'] = $country['name_country'];
                    }
                }
                echo '<a href="#">' . $movie['id_country'] . '</a>';
                echo '</li>';
                echo '<li>';
                echo '<span class="like"><i class="fas fa-thumbs-up"></i>' . $movie['reviews'] . '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pagination-wrap mt-30">
                    <nav>
                        <ul>
                            <?php
                            // Calculate the total number of pages
                            $totalPages = ceil(count($list_movie) / $moviesPerPage);
                            if ($currentPage > 1) {
                                echo '<li><a href="index.php?action=home&page=' . ($currentPage - 1) . '">Previous</a></li>';
                            }
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<li' . ($i === $currentPage ? ' class="active"' : '') . '><a href="index.php?action=home&page=' . $i . '">' . $i . '</a></li>';
                            }
                            if ($currentPage < $totalPages) {
                                echo '<li><a href="index.php?action=home&page=' . ($currentPage + 1) . '">Next</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- top-rated-movie-end -->