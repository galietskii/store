<?php
$description = get_field('description');
?>
<section class="discover">
    <div class="container">
        <div class="row">
            <?php if($description): ?>
            <div class="col-md-12">
                <div class="discover__description text-center">
                    <?php echo $description; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( have_rows('discovers') ): ?>
            <?php while( have_rows('discovers') ): the_row(); 
                $background = get_sub_field('background');
                $logo = get_sub_field('logo');
                $link = get_sub_field('link');
            ?>
            <div class="col-md-6">
                <div class="discover__block"
                    <?php if($background): ?>style="background-image: url('<?php echo $background['url']; ?>')"
                    <?php else: ?>style="background-color: #02B31B"<?php endif; ?>>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>