<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $button = get_field('button');
?>
<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="about__title">
                    <h2><?php echo $title; ?></h2>
                    <?php echo $subtitle; ?>
                </div>
            </div>
        </div>
        <?php if( have_rows('specification') ): ?>
        <div class="row">
            <?php while( have_rows('specification') ): the_row(); 
                $image = get_sub_field('image');
                $description = get_sub_field('description');
            ?>
            <div class="col-md-4 about-block">
                <div class="about__specification">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <div><p><?php echo $description; ?></p></div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if( have_rows('directors') ): ?>
        <div class="row specifications">
            <?php while( have_rows('directors') ): the_row(); 
                $photo = get_sub_field('photo');
                $job_title = get_sub_field('job_title');
                $name = get_sub_field('name');
                $linkedin = get_sub_field('linkedin');
                $linkedin_logo = get_sub_field('linkedin_logo');
            ?>
            <div class="col-md-3">
                <div class="about__directors">
                    <img class="about__directors-photo" src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                    <p class="about__directors-job"><?php echo $job_title; ?></p>
                    <a href="<?php echo $linkedin['url']; ?>">
                        <p><?php echo $name; ?></p>
                        <img src="<?php echo esc_url($linkedin_logo['url']); ?>" alt="<?php echo esc_attr($linkedin_logo['alt']); ?>" />
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="about__button">
                <a class="button" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>