<?php get_header();  ?>
<!--
====================
ABOUT SECTION BEGINS
====================
-->
      <section class="about" id="about">
        <div class="wrapper">
        <?php $aboutQuery = new WP_Query(array(
        'posts_per_page'=> -1,
        'post_type'=> 'about'
      )); ?>

      <?php if($aboutQuery-> have_posts()): ?>
        <?php while($aboutQuery-> have_posts()): ?>
          <?php $aboutQuery-> the_post(); ?>
          <div class="heading">
            <h2 class="clip"><?php the_field('highlight_text'); ?></h2>
            <h6><?php the_field('subtext') ?></h6>
          </div><!-- .heading -->
            <?php $headshot = get_field('headshot'); ?>
            <div class="content clearfix">
              <div class="imgContainer wow slideInUp">
                <div class="small"></div>
                <div class="name">
                  <p>
                    <?php bloginfo( 'name', 'display' ); ?>
                  </p>
                </div>
                <img src="<?php echo $headshot['sizes']['medium'] ?>" class="headshot" alt="">
              </div><!-- .imgContainer -->
              <div class="text wow slideInUp">
                <?php the_content(); ?>
                <button><a href="http://allyevice.com/Resume_web.pdf" target="_blank">View my resume</a></button>
              </div><!-- .text -->
            </div><!-- .content -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      </div><!-- .wrapper -->
      </section>
<!--
==================
ABOUT SECTION ENDS
==================
-->

<!--
========================
PORTFOLIO SECTION BEGINS
========================
-->
  <section class="portfolio" id="portfolio">
    <h2 class="clip">Portfolio</h2>
      <?php $itemQuery = new WP_Query(array(
        'posts_per_page'=> -1,
        'post_type'=> 'portfolio'
      )); ?>
      <?php if($itemQuery-> have_posts()): ?>
        <?php while($itemQuery-> have_posts()): ?>
        <?php $itemQuery-> the_post(); ?>
          <div class="item wow slideInUp">
            <div class="shape"></div>
            <div class="filter"></div>
            <div class="overlay">
              <h3 class="clip">
                <?php the_field('pf_title'); ?>
              </h3>
              <h6>
                <?php the_field('short_description') ?>
              </h6>
              <?php the_content(); ?>
            <ul class="clearfix">
              <li>Built with</li>
              <?php while(has_sub_field('tools_used')): ?>
                  <li><?php the_sub_field('list'); ?></li>
              <?php endwhile; ?>
            </ul>
            <div class="buttons">
              <button><a href="<?php the_field('github_url') ?>">View on GitHub</a></button>
              <button><a href="<?php the_field('live_url') ?>">View Live</a></button>
            </div>
          </div><!-- .overlay -->
          <div class="imgContainer">
            <div class="imgFilter"></div>
            <?php $image = get_field('screenshot'); ?>
            <img class="screenshot" src="<?php echo $image['sizes']['large'] ?>" alt="">
          </div><!-- .imgContainer -->
        </div><!-- .item -->
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>
<!--
======================
PORTFOLIO SECTION ENDS
======================
-->
<!--
=====================
SKILLS SECTION BEGINS
=====================
-->
  <section class="skills" id="skills">
    <div class="wrapper clearfix">
      <?php $skillQuery = new WP_Query(array(
        'posts_per_page'=> -1,
        'post_type'=> 'skills'
      )); ?>
      <?php if($skillQuery-> have_posts()): ?>
        <?php while($skillQuery-> have_posts()): ?>
          <?php $skillQuery-> the_post(); ?>
          <div class="heading">
            <h2 class="clip"><?php the_title(); ?></h2>
            <h6><?php the_field('subtext') ?></h6>
          </div><!-- .heading -->
          <div class="skillset wow slideInUp">
            <?php while(has_sub_field('skill')): ?>
              <div class="skill">
                <?php the_sub_field('icon'); ?>
                <p class="caption">
                  <?php the_sub_field('caption') ?>
                </p>
              </div><!-- skill -->
            <?php endwhile; ?>
          </div><!-- .skillset -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div><!-- .wrapper -->
  </section>
<!--
===================
SKILLS SECTION ENDS
===================
-->

<!--
======================
CONTACT SECTION BEGINS
======================
-->
  <section class="contact wow slideInUp" id="contact">
    <div class="half"></div>
    <div class="shape"></div>
      <div class="heading">
        <h6>Drop me a line</h6>
        <h2 class="clip">Contact</h2>
      </div><!-- .heading -->
      <div class="formContainer">
        <?php the_content(); ?>
      </div><!-- .formContainer -->
    
    
  </section>
<!--
====================
CONTACT SECTION ENDS
====================
-->
<?php get_footer(); ?>