<footer class="container">
        <p>&copy; <?php the_date('Y') . ' ' . bloginfo('site_name'); ?> </p>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="<?php echo  get_stylesheet_directory_uri() . '/js/bootstrap.min.js' ?>"></script>

    <?php wp_footer(); ?>
</body>
</html>