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

    <script src="<?php echo  get_stylesheet_directory_uri() . '/js/bootstrap.min.js' ?>"></script>
    
    <?php wp_footer(); ?>
</body>
</html>