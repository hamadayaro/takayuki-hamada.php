<?php get_header(); ?>
    <section id="main">
        <div id="content">
          <div class="wrap">
            <?php get_template_part( 'loop', 'catname' ); ?>
            <nav class="category">
              <?php get_template_part( 'loop', 'catnav' ); ?>
            </nav>
            <?php get_template_part( 'loop', 'content' ); ?>
        </div>
    </section>
    <?php get_footer(); ?>
  </section>
  <?php wp_footer();?>
</body>
