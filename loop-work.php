<?php if(is_category('2011')): ?>
  <div class="box_works">
    <?php get_template_part( 'loopwork/loop', 'kuis' );?>
  </div><!-- box_works -->
<?php elseif (is_category('2012')) :?>
  <div class="box_works">
    <?php get_template_part( 'loopwork/loop', 'ticket' );?>
  </div><!-- box_works -->
<?php elseif (is_category('2013')) :?>
  <div class="box_works">
       <?php get_template_part( 'loopwork/loop', 'reinstagram' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
       <?php get_template_part( 'loopwork/loop', 'co' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
       <?php get_template_part( 'loopwork/loop', 'library' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2014')) :?>
  <div class="box_works">
    <?php get_template_part( 'loopwork/loop', 'applim6th' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
    <?php get_template_part( 'loopwork/loop', 'branco' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2015')) :?>
  <div class="box_works">
    <?php get_template_part( 'loopwork/loop', 'unoldjoke' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2016')) :?>
  <div class="box_works">
       <?php get_template_part( 'loopwork/loop', 'noraled' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
      <?php get_template_part( 'loopwork/loop', 'optimal404' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2017')) :?>
  <div class="box_works">
      <?php get_template_part( 'loopwork/loop', 'archetecton' ); ?>
  </div><!-- box_works -->
<?php elseif (is_category('2018')) :?>
  <div class="box_works">
      <?php get_template_part( 'loopwork/loop', 'LP' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
      <?php get_template_part( 'loopwork/loop', 'zoetrope' ); ?>
  </div><!-- box_works -->
  <div class="box_works">
      <?php get_template_part( 'loopwork/loop', 'SLP' ); ?>
  </div><!-- box_works -->
<?php endif; ?>
