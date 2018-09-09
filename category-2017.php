<?php get_header(); ?>
    <section id="main">

        <div id="content">
            <?php get_template_part( 'loop', 'catname' ); ?>
            <nav class="category">
              <?php get_template_part( 'loop', 'nav' ); ?>
            </nav>
              <?php get_template_part( 'loop', 'work' ); ?>
        </div><!-- content -->
    </section><!-- main -->

    <?php get_footer(); ?>

  </section>
  <?php wp_footer();?>
</body>
