<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>

<link rel="preload" href="/wp-content/themes/blankslate/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" crossorigin="anonymous" />

</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <?php if(!is_front_page()){?>
    <header id="header">
    <div class="header-inner container">
      <div class="head-left">
        <div class="logo">
            <a href="/" class="wrapper_img"  title="AryaS Protection UG"><img src="/wp-content/uploads/2020/11/Gummiadler-ZSD_05_final_1500px_8.png" alt=""/></a>
        </div>
        <img class="logo-text" src="/wp-content/uploads/2024/08/AryaS-Protection-UG.png" alt=""/>
      </div>
      <div class="head-right">
        <nav id="menu">
          <?php wp_nav_menu( [ 'menu' => 'Main menu' ] ); ?>
        </nav>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
            </label>
           
            <div class="menu__box">
               
                <div class="logo">
                    <a href="/" class="wrapper_img">
                      <img src="/wp-content/uploads/2020/11/Gummiadler-ZSD_05_final_1500px.png" alt="">
                      
                    </a>
                </div>
                <div style="text-align:center;margin-bottom:50px;">
                    <a href="/" title="AryaS Protection UG"><img style="margin-left:auto;margin-right:auto" src="/wp-content/uploads/2024/08/logo-admin-black.png" alt=""></a>
                </div>
                
                <?php wp_nav_menu( [ 
                    'menu' => 'Mobile Main Menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ,
                    'container' => false ] ); ?>
            </div>

        </div>

      </div>
    </div>
    </header>
    <?php } ?>