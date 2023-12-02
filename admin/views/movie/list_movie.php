<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>List movie</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="index.php?action=insert_movie" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i>THÊM PHIM</a>
                    </div>
                </div>
                <div class="row">
                    <?php
                    // Assuming $list_movie is your array of movies
                    $itemsPerPage = 6; // Adjust this based on your preference
                    $totalMovies = count($list_movie);
                    $totalPages = ceil($totalMovies / $itemsPerPage);

                    // Assuming $_GET['page'] is used for pagination
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                    $startIndex = ($currentPage - 1) * $itemsPerPage;
                    $moviesToDisplay = array_slice($list_movie, $startIndex, $itemsPerPage);

                    foreach ($moviesToDisplay as $movie) {
                        extract(($movie));
                        echo '<div class="col-md-6 col-xl-4 col-sm-12 d-flex">';
                        echo '<div class="blog grid-blog flex-fill">';
                        echo '<div class="blog-image movie-poster text-center equal-height">';
                        // echo '<div class="movie-poster text-center equal-height">';
                        echo '<a href=""><img class="img-fluid" src="../uploads/movie/' . $movie['image'] . '" alt="' . $movie['name_movie'] . '"></a>';
                        echo '<div class="blog-views">';
                        echo '<i class="feather-eye me-1"></i>' . $movie['reviews'] . '';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="blog-content">';
                        echo '<ul class="entry-meta meta-item">';
                        echo '<li>';
                        echo '<div class="post-author">';
                        echo '<a href="profile.html">';
                        echo '<span>';
                        echo '<span class="post-title">' . $movie['name_movie'] . '</span>';
                        echo '<span class="post-date"><i class="far fa-clock"></i>' . $movie['year'] . '</span>';
                        echo '</span>';
                        echo '</a>';
                        echo '</div>';
                        echo '</li>';
                        echo '</ul>';
                        echo '<h3 class="blog-title"><a href="">' . $movie['content'] . '</a></h3>';
                        echo '<p>' . $movie['content'] . '</p>';
                        echo '</div>';
                        echo '<div class="row">';
                        echo '<div class="edit-options">';
                        echo '<div class="edit-delete-btn">';
                        $edit_movie = 'index.php?action=edit_movie&id=' . $movie['id_movie'];
                        $delete_movie = 'index.php?action=delete_movie&id=' . $movie['id_movie'];
                        echo ' <a href="' . $edit_movie . '" class="text-success"><i class="feather-edit-3 me-1"></i>SỬA</a>';
                        echo '<a  href="' . $delete_movie . '" class="text-danger" onclick="return confirm(\'Bạn có chắc muốn xóa?\');" ><i class="feather-trash-2 me-1"></i>XÓA</a>';
                        echo '</div>';
                        echo '<div class="status-toggle">';
                        // echo '<input id="rating_' . $movie['id_movie'] . '" class="check" type="checkbox" ' . ($movie['active'] ? 'checked' : '') . '>';
                        // echo '<label for="rating_' . $movie['id_movie'] . '" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-tab  d-flex justify-content-center">
                            <ul class="pagination mb-0">
                                <?php if ($currentPage > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?action=movie&page=<?php echo $currentPage - 1; ?>" tabindex="-1">
                                            <i class="feather-chevron-left mr-2"></i>Previous
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                    <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                                        <a class="page-link" href="index.php?action=movie&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>
                                <?php if ($currentPage < $totalPages) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?action=movie&page=<?php echo $currentPage + 1; ?>">Next<i class="feather-chevron-right ml-2"></i></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content doctor-profile">
                            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="delete-wrap text-center">
                                    <div class="del-icon"><i class="feather-x-circle"></i></div>
                                    <h2>Sure you want to delete</h2>
                                    <div class="submit-section">
                                        <a href="<?php echo $delete_movie; ?>" class="btn btn-success me-2">Yes</a>
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>
<style>
    /* Adjust the height as needed */
    .equal-height img {
        height: 700px;
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