<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="images/logo.png">

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php get_header(); ?>

    <!-- Main content area with Bootstrap styling -->
    <div class="container mt-4">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <!-- Title with Bootstrap heading class -->
                        <h1 class="display-4"><?php the_title(); ?></h1>
                    </header>

                    <!-- Check if the post has a Post Thumbnail assigned to it. -->
                    <?php if (has_post_thumbnail()): ?>
                        <div class="post-thumbnail">
                            <!-- Responsive image class from Bootstrap -->
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                        </div>
                    <?php endif; ?>

                    <div class="entry-content mt-3">
                        <!-- Content with text styling -->
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </div>

    <?php get_footer(); ?>

    <!-- Bootstrap Javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>