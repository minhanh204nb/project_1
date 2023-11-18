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
                        <img src="../uploads/movie/<?php echo $movie['image']; ?>" alt="">
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
                                <li class="watch"><a href="index.php?action=booking" class="btn popup-video"><i class="fas fa-play"></i>BOOKING</a></li>
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
                    <h2 class="title">World Best TV Series</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="movie-item mb-50">
                    <div class="movie-poster">
                        <a href="index.php?action=details_movie"><img src="assets/img/poster/ucm_poster09.jpg" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="index.php?action=details_movie">Women's Day</a></h5>
                            <span class="date">2021</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">hd</span></li>
                                <li>
                                    <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="movie-item mb-50">
                    <div class="movie-poster">
                        <a href="index.php?action=details_movie"><img src="assets/img/poster/ucm_poster10.jpg" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="index.php?action=details_movie">The Perfect Match</a></h5>
                            <span class="date">2021</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">4k</span></li>
                                <li>
                                    <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="movie-item mb-50">
                    <div class="movie-poster">
                        <a href="index.php?action=details_movie"><img src="assets/img/poster/ucm_poster03.jpg" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="index.php?action=details_movie">The Dog Woof</a></h5>
                            <span class="date">2021</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">hd</span></li>
                                <li>
                                    <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="movie-item mb-50">
                    <div class="movie-poster">
                        <a href="index.php?action=details_movie"><img src="assets/img/poster/ucm_poster04.jpg" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="index.php?action=details_movie">The Easy Reach</a></h5>
                            <span class="date">2021</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">hd</span></li>
                                <li>
                                    <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                    <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>