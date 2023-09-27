<?php 
$description = get_field('description');
$subtext = get_field('subtext');
?>

<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if($description): ?>
                <div class="subscribe__description">
                    <?php echo $description; ?>
                </div>
                <?php endif; ?>
            </div>
            <form method="post" action="">
                <input type="text" name="to" placeholder="Enter your e-mail">
                <br><br>
                <input class="button" type="submit" value="Subscribe"><br><br>
            </form>
            <?php
                $headers =	'From: no-reply@example.com' . "\r\n" .
			    'Reply-To: webmaster@example.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
                if (isset($_POST['to']) && isset($_POST['subject']) && isset($_POST['message']))
                	if (mail($_POST['to'], $_POST['subject'], $_POST['message'], $headers)) {
                		echo '<font color=green><b>List been send</b></font>';
                	} else {
                		echo '<font color=red><b>error...</b></font>';
                	}
            ?>
            <div class="col-md-12">
                <?php if($subtext): ?>
                <div class="subscribe__subtext">
                    <?php echo $subtext; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12 subscribe__icons">
                <?php if( have_rows('icons') ): ?>
                    <?php while( have_rows('icons') ): the_row(); 
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                    ?>
                        <a href="<?php echo $link['url']; ?>">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>