
<?php get_header(); ?>
<div class="container posts">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Blog Posts</h4>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()):  the_post(); ?>
                    <div class="row post">
                    <?php if(has_post_thumbnail()): ?>
                        <div class="col-md-3">
                            <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>    
                           </div>
                        </div>
                        <div class="col-md-9">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="meta">
                            Posted at <?php the_time(); ?> on <?php echo get_the_date(); ?> by <a href=""><?php  the_author(); ?></a>
                            </p>
                            <p><?php the_excerpt(); ?></p>

                            <a href="<?php the_permalink(); ?>" class="btn">Read more >></a>
                        </div>
                    <?php else: ?>
                    <div class="col-md-12">
                        <div class="post-no-thumbnail">
                        
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="meta">
                            Posted at <?php the_time(); ?> on <?php echo get_the_date(); ?> by <a href=""><?php  the_author(); ?></a>
                            </p>
                            <p><?php the_excerpt(); ?></p>

                            <a href="<?php the_permalink(); ?>" class="btn">Read more >></a>
                        </div>
                    </div>
                    <?php endif; ?>
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