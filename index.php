
<?php get_header(); ?>
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

<?php get_footer(); ?>