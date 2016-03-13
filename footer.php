<footer class="wow fadeInDown">
  <div class="wrapper clearfix">
    <?php $footerQuery = new WP_Query(array(
        'posts_per_page'=> -1,
        'post_type'=> 'footer'
      )); ?>
      <?php if($footerQuery-> have_posts()): ?>
        <?php while($footerQuery-> have_posts()): ?>
        <?php $footerQuery-> the_post(); ?>
        <ul class="clearfix">
          <?php while(has_sub_field('social_media')): ?>
            <li>
              <a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <div class="credit">
      <p>Coded by</p>
    <h3 class="clip">Allye</h3>
    </div><!-- .credit -->
  </div><!-- .wrapper -->
</footer>
<!-- CREDITS 
Design: Creato by Pletikos (themeforest.com)
Lato font from Google Fonts
Icons from Font Awesome and Devicons
Toronto map from Snazzy Maps (Shades of Grey design by Adam Krogh)
Headshot by Pam Lau (pamlau.com)
Animations - animate.css -http://daneden.me/animate and wow.js http://mynameismatthieu.com/WOW/index.html
-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71584069-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>