<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

    <section id="main">

        <div id="content">

          <h2>Contact</h2>

             <div id="contact">

                 <p class="contact">
                   Takayuki Hamada<br><br>
                   Email : takayukihamada14[at]gmail.com
                 </p>

                 <a href="https://twitter.com/hamadayaro_?lang=ja" target="_blank">
                   <img class="sns" src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg">
                 </a>

                 <a href="https://www.facebook.com/takayuki.hamada.906" target="_blank">
                   <img class="sns" src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg">
                 </a>

                 <a href="https://www.instagram.com/hamadayaro_/?hl=ja" target="_blank">
                   <img class="sns" src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg">
                 </a>

            </div>

        </div>
    </section>

    <?php get_footer(); ?>

  </section>
  <?php wp_footer();?>
</body>
