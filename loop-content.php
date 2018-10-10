<?php if(have_posts()): while(have_posts()): the_post();　?>
<div class="contents">
        <a href="<?php echo get_permalink(); ?>">
        <div class="contentsArea">
          <h3><?php the_title();?></h3>
          <p class="time"><?php the_time(‘Y年n月j日’); ?></p>
            <?php the_post_thumbnail(); ?>
          <p><?php the_excerpt() ?></p>
        </div>
      　</a>
</div>
<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
<div class="pager">
  <?php global $wp_rewrite; $paginate_base = get_pagenum_link(1); if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
      $paginate_format = '';
      $paginate_base = add_query_arg('paged','%#%');
  }
  else{
      $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
      user_trailingslashit('page/%#%/','paged');;
      $paginate_base .= '%_%';
  }
  echo paginate_links(array(
      'base' => $paginate_base,
      'format' => $paginate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 5,
      'current' => ($paged ? $paged : 1),
      'prev_text' => '«',
      'next_text' => '»',
  )); ?></div>
