<?php
    $description = get_field('description');
    $link = get_field('link');
?>
<section class="road">
    <div class="container">
        <div class="row">
            <?php if($description): ?>
            <div class="col-md-12">
                <div class="road__description">
                    <?php echo $description; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-md-12">
                <?php if( have_rows('list') ): ?>
                <?php while( have_rows('list') ): the_row(); 
                    $date = get_sub_field('date');
                    $title = get_sub_field('title');
                ?>
                <div class="road__list">
                    <?php if($date): ?>
                    <p class="date"><?php echo $date; ?></p>
                    <?php endif; ?>
                    <?php if($title): ?>
                    <p class="title"><?php echo $title; ?></p>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php if($link): ?>
                <div class="road__button">
                    <a class="button" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>