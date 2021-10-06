
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p><?php echo get_the_date('d/m/Y h:i:s'); ?></p>
    <?php the_content(); ?>
    <!--User name of author-->
    <?php the_author(); ?> <br />
    <!-- Get first name and last name -->
    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>
    <p>Posted by <?php echo $fname; ?> <?php echo $lname; ?></p>
<?php endwhile;
else : endif; ?>