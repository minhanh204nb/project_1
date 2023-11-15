<section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Our <span>Movie</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php?action=home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Movie</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="movie-area movie-bg" data-background="assets/img/bg/movie_bg.jpg">
    <div class="container">
        <div class="row align-items-end mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left">
                    <span class="sub-title">ONLINE STREAMING</span>
                    <h2 class="title">New Release Movies</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="movie-page-meta">
                    <div class="tr-movie-menu-active text-center">
                        <button class="active" data-filter="*">Animation</button>
                        <button class="" data-filter=".cat-one">Movies</button>
                        <button class="" data-filter=".cat-two">Romantic</button>
                    </div>
                    <form action="#" class="movie-filter-form">
                        <select class="custom-select">
                            <option selected>English</option>
                            <option value="1">Blueray</option>
                            <option value="2">4k Movie</option>
                            <option value="3">Hd Movie</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active">
            <?php
            // Number of movies per page
            $moviesPerPage = 8;

            // Current page from URL parameter
            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            // Calculate the starting index for movies on the current page
            $startIndex = ($currentPage - 1) * $moviesPerPage;

            // Get a subset of movies for the current page
            $pagedMovies = array_slice($list_movie, $startIndex, $moviesPerPage);

            foreach ($pagedMovies as $movie) {
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

        <div class="row">
            <div class="col-12">
                <div class="pagination-wrap mt-30">
                    <nav>
                        <ul>
                            <?php
                            // Calculate the total number of pages
                            $totalPages = ceil(count($list_movie) / $moviesPerPage);

                            // Previous button
                            if ($currentPage > 1) {
                                echo '<li><a href="index.php?action=list_movie&page=' . ($currentPage - 1) . '">Previous</a></li>';
                            }

                            // Page numbers
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<li' . ($i === $currentPage ? ' class="active"' : '') . '><a href="index.php?action=list_movie&page=' . $i . '">' . $i . '</a></li>';
                            }

                            // Next button
                            if ($currentPage < $totalPages) {
                                echo '<li><a href="index.php?action=list_movie&page=' . ($currentPage + 1) . '">Next</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</section>