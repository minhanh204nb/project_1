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
                    <?php
                    if (isset($_POST['same_category']) && $_POST['same_category']) {
                        echo ' <span class="sub-title">ONLINE STREAMING</span>';
                        echo ' <a href="index.php?action=list_movie"><h2 class="title">All Movies</h2></a> ';
                        echo ' <style>
                        .dis_none{
                            display: none;
                        }
                        </style>';
                    } else {
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="movie-page-meta">
                    <form class="movie-filter-form" action="index.php?action=list_movie" method="post" id="filterForm">
                        <input type="hidden" name="id_movie" value="<?php echo $id_movie; ?>">
                        <select id="categoryFilter" class="custom-select" name="same_category" onchange="submitForm()">
                            <?php
                            foreach ($list_category as $category) {
                                $selected = ($category['id_category'] == $id_category) ? 'selected' : '';
                                echo '<option value="' . $category['id_category'] . '" ' . $selected . '>' . $category['name_category'] . '</option>';
                            }
                            ?>
                        </select>
                        <input hidden type="submit" value="Apply Filter">
                    </form>
                    <script>
                        function submitForm() {
                            document.getElementById("filterForm").submit();
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach ($list_same_category as $same_category) {
                echo '<div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">';
                echo '<div class="movie-item movie-item-three mb-50">';
                echo '<div class="movie-poster text-center equal-height">';
                echo '<img src="../uploads/movie/' . $same_category['image'] . '" alt="">';
                echo '<ul class="overlay-btn">';
                echo '<li class="rating">';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '</li>';
                echo '<li><a href="' . $same_category['trailer_movie'] . '" class="popup-video btn">Watch Now</a></li>';
                echo '<li><a href="index.php?action=details_movie&id=' . $same_category['id_movie'] . '" class="btn">Details</a></li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="movie-content">';
                echo '<div class="top">';
                echo '<h5 class="title"><a href="#">' . $same_category['name_movie'] . '</a></h5>';
                echo '<span class="date">' . $same_category['year'] . '</span>';
                echo '</div>';
                echo '<div class="bottom">';
                echo '<ul>';
                echo '<li><span class="quality">hd</span></li>';
                echo '<li>';
                echo '<span class="duration"><i class="far fa-clock"></i> ' . $same_category['time'] . '</span>';
                echo '<span class="rating"><i class="fas fa-thumbs-up"></i>' . $same_category['reviews'] . '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="row align-items-end mb-60 dis_none">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left">
                    <span class="sub-title">ONLINE STREAMING</span>
                    <h2 class="title">All Movies</h2>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active dis_none">
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
                echo '<div class="movie-poster text-center equal-height">';
                echo '<img src="../uploads/movie/' . $movie['image'] . '" alt="">';
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

<style>
    /* Adjust the height as needed */
    .equal-height img {
        height: 300px;
        /* Set your desired height */
        width: auto;
        object-fit: cover;
        /* This property ensures that the image covers the entire box even if it has to be cropped */
    }

    /* Optional: Add some styling to the movie items */
    .movie-item {
        transition: transform 0.3s ease-in-out;
    }

    .movie-item:hover {
        transform: scale(1.05);
    }
</style>