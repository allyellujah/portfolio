<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="portfolio-item">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <p><?php the_field('short_description'); ?></p>
          <h3>
            This happened in week <?php the_field('project_week') ?>.
          </h3>
          <div class="image-showcase">
            <?php while(has_sub_fields('images')): ?>
              <p class="caption"><?php the_sub_field('caption'); ?></p>
              <?php $image = get_sub_field('image'); ?>
              <img src="<?php echo $image ['sizes']['medium']; ?>" alt="">
            <?php endwhile; ?>
          </div>
        </div>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>