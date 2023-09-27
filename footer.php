<?php
$logo = get_field('logo', 'options');
$description = get_field('description', 'options');
$year = get_field('year', 'options');
$cacke = get_field('cacke', 'options');
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <?php if($logo): ?>
            <div class="col-md-12">
                <div class="footer__logo">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                </div>
            </div>
            <?php endif; ?>
            <?php if($description): ?>
            <div class="col-md-12">
                <div class="footer__description">
                    <p><?php echo $description; ?></p>
                </div>
            </div>
            <?php endif; ?>

            <?php if( have_rows('links', 'options') ): ?>
            <?php while( have_rows('links', 'options') ): the_row(); 
               $title = get_sub_field('title', 'options');
               $link = get_sub_field('link', 'options');
            ?>
            <div class="col-md-2">
                <div class="footer__block">
                    <h6><?php echo $title; ?></h6>
                    <?php echo $link; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-md-12 footer__socials">
                <?php if( have_rows('socials', 'options') ): ?>
                <?php while( have_rows('socials', 'options') ): the_row(); 
                  $link = get_sub_field('link', 'options');
                  $logo = get_sub_field('logo', 'options')
               ?>
                <a href="<?php echo $link['url']; ?>">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <div class="footer__year">
                    <?php if($year): ?>
                    <p><?php echo $year; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if($cacke): ?>
            <div class="col-md-12">
                <div class="footer__cacke">
                    <img src="<?php echo esc_url($cacke['url']); ?>" alt="<?php echo esc_attr($cacke['alt']); ?>" />
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>