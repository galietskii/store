<?php
/* Template Name: Archive Blogs */

get_header();
?>

<main id="main" class="content-wrapper">
    <div class="container">
        <div class="row">
            <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'blogs' ),
            'post_status'    => array( 'publish' ),
        );

        // The Query
        $post_query = new WP_Query( $args );

        if ( $post_query->have_posts() ) : ?>

            <header class="page-header col-md-12">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>
            </header>

            <?php
            // Start the Loop.
            while ( $post_query->have_posts() ) :
                // You can list your posts here
                $post_query->the_post();
                ?>
            <div class="col-md-4 blog__post">
                <div class="blog__post-image">
                    <?php echo the_post_thumbnail(); ?>
                    <p class="blog-data"><?php echo date('j'); ?><span><?php echo date('M'); ?></span></p>
                </div>
                <div class="blog__post-desc">
                    <h4><?php echo the_title(); ?></h4>
                    <?php echo the_content(); ?>
                </div>
            </div>
            <?php
            endwhile;
            // No Post Found
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();