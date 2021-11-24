<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
<!--      <link href="--><?//= _tx_assets_path('fonts/Dekar.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->
<!--      <link href="--><?//= _tx_assets_path('fonts/Exo2-Light.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->


      <link href="<?= _tx_assets_path('fonts/Exo2-Regular.woff'); ?>" rel="preload" as="font" type="font/woff" crossorigin="">
<!--      <link href="--><?//= _tx_assets_path('fonts/Exo2-Medium.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->
<!--      <link href="--><?//= _tx_assets_path('fonts/Exo2-Bold.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->



<!--      <link href="--><?//= _tx_assets_path('fonts/Montserrat-Regular.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->
<!--      <link href="--><?//= _tx_assets_path('fonts/Play-Regular.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->
<!--      <link href="--><?//= _tx_assets_path('fonts/Play-Bold.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->
<!--      <link href="--><?//= _tx_assets_path('fonts/Roboto-Regular.woff'); ?><!--" rel="preload" as="font" type="font/woff" crossorigin="">-->



<!--          Global site tag (gtag.js) - Google Analytics -->
<!--      <script async src="https://www.googletagmanager.com/gtag/js?id=G-68KCPTBMKH"></script>-->
<!--      <script async>-->
<!--          window.dataLayer = window.dataLayer || [];-->
<!--          function gtag(){dataLayer.push(arguments);}-->
<!--          gtag('js', new Date());-->
<!---->
<!--          gtag('config', 'G-68KCPTBMKH');-->
<!--      </script>-->

      <!-- Yandex.Metrika counter -->
<!--      <script async type="text/javascript" >-->
<!--          (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};-->
<!--              m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})-->
<!--          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");-->
<!---->
<!--          ym(73508521, "init", {-->
<!--              clickmap:true,-->
<!--              trackLinks:true,-->
<!--              accurateTrackBounce:true-->
<!--          });-->
<!--      </script>-->
<!--      <noscript><div><img src="https://mc.yandex.ru/watch/73508521" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
      <!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>
      <script>
          var lazyLoadInstance = new LazyLoad({
              // Your custom settings go here
          });
      </script>
  </head>
  <body>
    <div class="preloader-wrap"></div>
    <div class="wrap-for-blur">
      <div class="particles particles-left" id="particles-left"></div>
      <div class="particles particles-right" id="particles-right"></div>
      <section class="section section-header">
        <div class="container">
          <header class="header">
            <div class="burger"><span>   </span></div>
            <?php wp_nav_menu([
              'theme_location' => 'menu-header',
              'container' => 'ul',
              'container_class' => 'menu-header',
              'menu_class' => 'menu-header',
              'items_wrap' => '<ul class="%2$s"><div class="container menu-header__container">%3$s</div></ul>'
            ]); ?>
            </ul>
              <a class="logo" href="/">
                  <div class="logo__subtitle">
                      Тамбов Эксчендж Телеком <br>
                      Оператор цифровой связи
                  </div>
              </a>
              <div class="header-contacts">
                  <?
                      if (is_active_sidebar('tx-footer-contacts')) {
                          dynamic_sidebar('tx-footer-contacts');
                      }
                  ?>
                  <style>
                      .header-contacts {
                          align-items: center;
                      }
                      .header-contacts__item {
                          z-index: 3;
                          position: relative;
                      }
                      .header-contacts__link {
                          display: flex;
                          align-items: center;
                          margin-left: 20px;
                      }
                      .header-contacts__link-text {
                          color: #FFFFFF;
                          font-family: Exo2, sans-serif;
                          margin-left: 10px;
                          font-size: 17px;
                      }
                      @media screen and (max-width: 1477px) {
                          .header-contacts__item {
                              margin-top: 10px;
                              width: 100%;
                          }
                          .header-contacts__link {
                              margin-left: 0;
                          }
                      }
                      @media screen and (max-width: 550px) {
                          .header-contacts__item {
                              margin-top: 20px;
                          }
                          .header-contacts__link-text {
                              display: none;
                          }
                      }
                  </style>
                  <div class="header-contacts__item">
                      <a href="<?the_field('login_address', 36);?>" class="header-contacts__link">
                          <img style="filter: none;" src="<?php echo get_template_directory_uri(); ?>/assets/img/login.svg" class="header-contacts__link-img">
                          <span class="header-contacts__link-text">
                            <?the_field('login_text', 36);?>
                          </span>
                      </a>
                  </div>
              </div>
              <?php
                // ИКОНКА ТЕЛЕФОНА ВИДЖЕТ
//                  if(is_active_sidebar('tx-header'))
//                  {
//                    dynamic_sidebar( 'tx-header');
//                  }
              ?>
          </header>