<?php get_header(); ?>
    <section id="main">
        <div id="content">

          <div class="single">
            <h2><?php the_title();?></h2>

            <nav class="category">
              <?php get_template_part( 'loop', 'nav' ); ?>
            </nav>

              <div class="single-content">
                <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
              </div>
          </div><!-- single -->
        </div><!-- content -->
    </section><!-- main -->

    <?php get_footer(); ?>

  </section>
  <?php wp_footer();?>
</body>
