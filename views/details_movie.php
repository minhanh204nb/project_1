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
                        <!-- <h5>New Episodes</h5> -->
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
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i>Chia sẻ</a></li>
                                <li class="streaming">

                                    <!-- <h6>Prime Video</h6>
                                    <span>Streaming Channels</span> -->
                                </li>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    echo '  <li class="watch"><a href="index.php?action=booking&id=' . $movie['id_movie'] . '"" class="btn"><i class="fas fa-play"></i>ĐẶT VÉ NGAY</a></li>';
                                } else {
                                    echo '  <li class="watch"><a href="index.php?action=signin" class="btn"><i class="fas fa-play"></i>ĐẶT VÉ NGAY</a></li>';
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
                        <h3 class="title">TÓM TẮT <span>PHIM</span></h3>
                        <p><?php echo $movie['content']; ?></p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="blog-comment mb-10">
                    <?php foreach ($list_comment as $comment) : ?>
                        <ul>
                            <li>
                                <div class="single-comment">
                                    <div class="comment-avatar-img">
                                        <img src="assets/img/images/avatar.jpg" alt="img">
                                    </div>
                                    <div class="comment-text">
                                        <div class="comment-avatar-info">
                                            <h5><?= $comment['name_user'] ?> <span class="comment-date"><?= $comment['date_submit'] ?></span></h5>
                                        </div>
                                        <span><?= $comment['content'] ?></span>
                                    </div>
                                </div>
                            </li>
                            <br>
                        </ul>
                    <?php endforeach; ?>
                </div>
                <div class="contact-form-wrap">
                    <div class="widget-title mb-50">
                        <h5 class="title">Bình luận : </h5>
                    </div>
                    <div class="contact-form">
                        <form action="index.php?action=details_movie&id=<?php echo $movie['id_movie'] ?>" method="post">
                            <input hidden type="text" name="name_user" value="<?php echo $name_clinet ?>">
                            <input hidden type="text" name="id_movie" value="<?php echo $movie['id_movie'] ?>">
                            <textarea name="content" placeholder="Nội dung bình luận . . ."></textarea>
                            <input class="btn" name="submit" type="submit" value="Gủi">
                            <!-- <button name="submit" class="btn">Gủi</button> -->
                        </form>
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
                    <span class="sub-title">những phim có cùng</span>
                    <h2 class="title">THỂ LOẠI <?php echo  $movie['id_category'] ?></h2>
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
        height: 350px;
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

    .blog-comment {
        width: 100%;
        /* max-width: 73%; */
        margin: 0 auto;
        padding: 20px;
    }

    .title {
        /* color: #333; */
        display: inline-block;
        /* Đảm bảo span không bị "đẩy" ra khỏi dòng */
    }

    .title span {
        color: #e44d26;
        /* Màu của từ 'PHIM' */
    }

    .movie-history-wrap {
        margin-bottom: 30px;
    }

    .movie-history-wrap p {
        line-height: 1.6;
        color: #666;
    }

    .blog-comment {
        margin-bottom: 80px;
    }

    .widget-title {
        margin-bottom: 45px;
    }

    .title.comment-date {
        color: #888;
    }

    .single-comment {
        display: flex;
        margin-bottom: 30px;
    }

    .comment-avatar-img img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 20px;
    }

    .comment-text {
        flex-grow: 1;
    }

    .comment-avatar-info h5 {
        margin-bottom: 5px;
    }

    .contact-form-wrap {
        flex-grow: 1;
    }

    .contact-form textarea {
        width: calc(100% - 30px);
        /* Thêm giảm kích thước padding để tránh làm rộng textarea quá mức */
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        resize: vertical;
    }

    .contact-form input {
        background-color: #e44d26;
        color: #fff;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>