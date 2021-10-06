<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-lg-4 col-sm-6 mb-4">
      <!-- Portfolio item 1-->
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
          </div>

          <?php if (has_post_thumbnail()) echo '<img class="img-fluid" src=' . the_post_thumbnail(array(470, 312)) . '>'; ?>
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading"><?php the_title(); ?></div>
          <div class="portfolio-caption-subheading text-muted"><?php the_excerpt(); ?></div>
        </div>
        <div>
          <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
        </div>
      </div>
    </div>

<?php endwhile;
else : endif; ?>