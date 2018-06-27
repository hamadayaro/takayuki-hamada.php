<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<html prefix="og: http://ogp.me/ns#">
<head>
  <?php if(is_home()):/*ホームが表示されている場合*/ ?>
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?php echo home_url('/') ?>">
  <meta property="og:title" content="<?php bloginfo('name') ?>">
  <meta property="og:image" content="<?php echo home_url('wp-content/uploads/2018/06/top.png') ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <?php else:/*ホーム以外のページが表示されている場合*/ ?>
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?php echo ( 'https://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ] ); ?>">
  <meta property="og:title" content="<?php wp_title('', true, 'right'); ?> | <?php bloginfo('name') ?>">
  <meta property="og:image" content="<?php the_post_thumbnail_url( 'full' ); ?>">
  <meta property="og:description" content="<?php echo mb_substr( str_replace( array( "\r\n" , "\n" , "\r" ), '', strip_tags( $post->post_content ) ), 0, 150 ); ?>">
  <?php endif; ?>
  <!--共通-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name"  content="<?php bloginfo() ?>">
  <!--Facebook-->
  <meta property="fb:app_id" content="1709070802756894">
  <meta property="article:publisher" content="https://www.facebook.com/takayuki.hamada.906/">
  <!--twitter-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@hamadayaro_">

  <meta name="description" content="<?php
    if(is_home()){ ?>浜田卓之のポートフォリオ的なものです。年間の作品や日々のスタディを更新しています。細々と続けていきます。<?php }
    elseif (is_single()){
      echo mb_substr($content_summary, 0, 60). "..."; }
    else { ?><?php bloginfo('description'); ?><?php } ?>">
  <meta name="keywords" content="<?php
    if(is_home()) { ?>浜田 卓之,Takayuki Hamada,Skateboarding<?php }
    elseif (is_single()){ ?><?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ','; }} ?><?php the_title(); ?><?php }
    else { ?>浜田 卓之,Takayuki Hamada,Skateboarding<?php } ?>">

  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/iphone_icon.png"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title><?php bloginfo('name') ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head();?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/test.js"></script>
</head>

<body>
  <svg version="1.1" id="background-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
  	 y="0px" viewBox="0 0 5197.262 3716.808" enable-background="new 0 0 5197.262 3716.808"
  	 xml:space="preserve">
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2589.103" y1="1446.259" x2="5507.558" y2="2917.95"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="-52.99" y1="113.929" x2="2589.103" y2="1446.259"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2606.4" y1="1534.013" x2="-16.997" y2="1844.001"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="5305.676" y1="1215.058" x2="2606.4" y2="1534.013"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2768.569" y1="1718.865" x2="-118.325" y2="3648.272"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="5427.619" y1="-58.266" x2="2768.569" y2="1718.865"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2663.173" y1="1735.281" x2="5124.241" y2="-496.9"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="159.282" y1="4006.304" x2="2663.173" y2="1735.281"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2585.707" y1="1965.52" x2="665.972" y2="4081.591"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="4662.068" y1="-323.194" x2="2585.707" y2="1965.52"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2335.073" y1="2126.676" x2="2481.369" y2="-165.827"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2203.927" y1="4181.777" x2="2335.073" y2="2126.676"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2502.266" y1="1604.965" x2="2610.433" y2="4414.796"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2429.25" y1="-291.802" x2="2502.266" y2="1604.965"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2851.763" y1="1763.345" x2="3114.922" y2="4063.234"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2612.489" y1="-327.794" x2="2851.763" y2="1763.345"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2277.694" y1="1688.374" x2="1088.97" y2="-195.82"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="3703.046" y1="3947.64" x2="2277.694" y2="1688.374"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2620.897" y1="1637.79" x2="5107.718" y2="3916.468"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="272.654" y1="-513.909" x2="2620.897" y2="1637.79"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2553.773" y1="1704.419" x2="4805.001" y2="3991.362"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="482.424" y1="-399.79" x2="2553.773" y2="1704.419"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2241.239" y1="1705.975" x2="4434.886" y2="4337.539"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="520.907" y1="-357.788" x2="2241.239" y2="1705.975"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2439.406" y1="1658.638" x2="4826.541" y2="3950.85"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="425.117" y1="-275.554" x2="2439.406" y2="1658.638"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2427.857" y1="1717.96" x2="4676.98" y2="3867.712"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2364.991" y1="1657.872" x2="2427.857" y2="1717.96"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="469.547" y1="-153.829" x2="2364.991" y2="1657.872"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2267.74" y1="1946.613" x2="-494.008" y2="448.616"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="5425.435" y1="3659.373" x2="2267.74" y2="1946.613"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="2268.333" y1="1832.786" x2="-197.232" y2="254.302"/>
    <line class="background-svg"fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" x1="5219.265" y1="3722.009" x2="2268.333" y2="1832.786"/>
  </svg>
  <!-- <object type="image/svg+xml" data="images/background.svg" width="100%" height="auto"></object> -->
  <!-- <img src="images/background.svg" width="100%" height="auto"> -->
  <section id = "container">

    <header id="top-head">
      <div class="inner">
          <div id="mobile-head">
              <h1 class="logo">
                <a href="http://takayuki-hamada.com">
                  <svg height="50px" version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                  	 y="0px" viewBox="0 0 1487.986 678.068" enable-background="new 0 0 1487.986 678.068"
                  	 xml:space="preserve">
                  <g>

                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="614.932" y1="136.068" x2="198.01" y2="595.629"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="41.805" y1="339.295" x2="465.131" y2="610.315"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="105.066" y1="71.553" x2="631.635" y2="577.043"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="97.568" y1="297.744" x2="179.264" y2="427.239"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="179.264" y1="427.239" x2="261.432" y2="525.809"/>
                  </g>
                  <g>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="1380.377" y1="139.582" x2="970.482" y2="511.355"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="859.422" y1="191.131" x2="1354.445" y2="664.285"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="1371.896" y1="215.811" x2="1422.709" y2="661.16"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="902.379" y1="132.865" x2="1453.639" y2="67.726"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="1398.029" y1="155.828" x2="1123.881" y2="17.583"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="973.768" y1="42.888" x2="1473.945" y2="501.203"/>
                  		<line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="1406.15" y1="220.184" x2="970.482" y2="511.355"/>
                  </g>
                  <line fill="none" stroke="#000000" stroke-width="7" stroke-miterlimit="10" x1="756.966" y1="321.461" x2="756.966" y2="352.213"/>
                  </svg>

                </a>
              </h1>
              <div id="nav-toggle">
                  <div>
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
          </div>
          <nav id="global-nav">
              <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/works">WORKS</a></li>
                <li><a href="/studys">STUDYS</a></li>
                <li><a href="/profile">PROFILE</a></li>
                <li><a href="/contact">CONTACT</a></li>
              </ul>
          </nav>
      </div>
    </header>
