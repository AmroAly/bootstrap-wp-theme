<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap WP Theme</title>

    <link rel="stylesheet" href="<?php echo  get_stylesheet_directory_uri() . '/css/bootstrap.min.css' ?>">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('site_name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <form class="form-inline my-2 my-lg-0">
              
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Blog Posts</h5>
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()):  the_post(); ?>
                        <div class="row">
                            <div class="col-md-3">
                            Image Here</div>
                            <div class="col-md-9">
                                <h2><?php echo the_title(); ?></h2>
                            </div>
                        </div>
                    <?php 
                        endwhile; 
                    endif;
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                    <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar');  ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    
    <hr>

    <footer class="container">
        <p>&copy; <?php the_date('Y') . ' ' . bloginfo('site_name'); ?> </p>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="<?php echo  get_stylesheet_directory_uri() . '/js/bootstrap.min.js' ?>"></script>

    <?php wp_footer(); ?>
</body>
</html>