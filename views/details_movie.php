<?php
$movie_id = isset($_GET['id']) ? $_GET['id'] : 0;
$movie = loadone_movie($movie_id);
if ($movie) {
?>
    <section class="movie-details-area" data-background="assets/img/bg/movie_details_bg.jpg">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <div class="movie-poster text-center equal-height">
                            <img src="../uploads/movie/<?php echo $movie['image']; ?>" alt="">
                        </div>
                        <a href="<?php echo $movie['trailer_movie']; ?>" class="popup-video"><img src="assets/img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h5>New Episodes</h5>
                        <h2><span><?php echo $movie['name_movie']; ?></span></h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">
                                    <span><?php echo $movie['age_limit']; ?></span>
                                    <span>hd</span>
                                </li>
                                <?php
                                foreach ($list_category as $category) {
                                    if ($movie['id_category'] == $category['id_category']) {
                                        $movie['id_category'] = $category['name_category'];
                                    }
                                }
                                ?>
                                <li class="category">
                                    <a href="#"><?php echo $movie['id_category']; ?></a>
                                </li>
                                <li class="category">
                                    <a href="#"><?php echo $movie['author']; ?></a>
                                </li>
                                <li class="category">
                                    <a href="#"><?php echo $movie['performer']; ?></a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i><?php echo $movie['year']; ?></span>
                                    <span><i class="far fa-clock"></i><?php echo $movie['time']; ?></span>
                                </li>
                            </ul>
                        </div>
                        <p><?php echo $movie['content']; ?></p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <!-- <li class="watch"><a href="index.php?action=booking" class="btn popup-video"><i class="fas fa-play"></i>BOOKING</a></li> -->
                                <?php
                                if (isset($_SESSION['user'])) {
                                    echo '  <li class="watch"><a href="index.php?action=booking" class="btn"><i class="fas fa-play"></i>BOOKING</a></li>';
                                } else {
                                    echo '  <li class="watch"><a href="index.php?action=signin" class="btn"><i class="fas fa-play"></i>BOOKING</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="movie-history-wrap">
                        <h3 class="title">About <span>History</span></h3>
                        <p><?php echo $movie['content']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
} else {
    echo '<p>Movie not found</p>';
}
?>



<section class="tv-series-area tv-series-bg" data-background="assets/img/bg/tv_series_bg02.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <span class="sub-title">Best TV Series</span>
                    <h2 class="title">Same Category <?php echo  $movie['id_category'] ?></h2>
                </div>
            </div>
        </div>
        <?php
        foreach ($list_category as $category) {
            if ($movie['id_category'] == $category['name_category']) {
                $movie['id_category'] = $category['id_category'];
            }
        }
        ?>
        <!-- <form class="movie-filter-form" action="index.php?action=details_movie&id=<?php echo $id_movie; ?>" method="post">
            <select id="categoryFilter" class="custom-select" name="same_category">
                <?php
                foreach ($list_category as $category) {
                    $selected = ($category['id_category'] == $id_category) ? 'selected' : '';
                    echo '<option value="' . $category['id_category'] . '" ' . $selected . '>' . $category['name_category'] . '</option>';
                }
                ?>
            </select>
            <input type="submit" value="Submit">
        </form> -->
        <div class="row justify-content-center">
            <?php
            foreach ($list_same_category as $same_category) {
                echo '<div class="col-xl-3 col-lg-4 col-sm-6">';
                echo '<div class="movie-item movie-item-two mb-50">';
                echo '<div class="movie-poster text-center equal-height">';
                echo '<a href="index.php?action=details_movie&id=' . $same_category['id_movie'] . '"><img src="./uploads/movie/' . $same_category['image'] . '" alt=""></a>';
                echo '</div>';
                echo '<div class="movie-content">';
                echo '<div class="top">';
                echo '<h5 class="title"><a href="index.php?action=details_movie&id=' . $same_category['id_movie'] . '">' . $same_category['name_movie'] . '</a></h5>';
                echo '<span class="date">' . $same_category['year'] . '</span>';
                echo '</div>';
                echo '<div class="bottom">';
                echo '<ul>';
                echo '<li><span class="quality">hd</span></li>';
                echo '<li>';
                echo '<span class="duration"><i class="far fa-clock"></i>' . $same_category['time'] . '</span>';
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