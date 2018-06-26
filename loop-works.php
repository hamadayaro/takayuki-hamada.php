<?php if(is_category('2011')): ?>
  <div class="box_works">
    <?php get_template_part( 'loop', 'kuis' );?>
  </div><!-- box_works -->
<?php elseif (is_category('2012')) :?>
  <div class="box_works">
    <?php get_template_part( 'loop', 'ticket' );?>
  </div><!-- box_works -->
<?php elseif (is_category('2013')) :?>
  <div class="box_works">
       <?php get_template_part( 'loop', 'reinstagram' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
       <?php get_template_part( 'loop', 'co' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
       <?php get_template_part( 'loop', 'library' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2014')) :?>
  <div class="box_works">
    <?php get_template_part( 'loop', 'applim6th' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
    <?php get_template_part( 'loop', 'branco' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2015')) :?>
  <div class="box_works">
    <?php get_template_part( 'loop', 'unoldjoke' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2016')) :?>
  <div class="box_works">
       <?php get_template_part( 'loop', 'noraled' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
      <?php get_template_part( 'loop', 'optimal404' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2017')) :?>
  <div class="box_works">
      <?php get_template_part( 'loop', 'takayukihamada' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
      <?php get_template_part( 'loop', 'archetecton' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2018')) :?>
  <div class="box_works">

  </div><!-- box_works -->
<?php endif; ?>
