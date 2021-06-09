<?php
/*
Template Name: Шаблон для главной страницы
*/
?>
<?php
get_header();
?>
<div class="section-header-main-content">
    <div class="section-header-main-content__texts">
      <div class="main-subtitle">
        <?php the_title(); ?>
      </div>
      <div class="main-lines">
        <div class="main-lines__item main-lines__item--long"></div>
        <div class="main-lines__item main-lines__item--short"></div>
      </div>
    </div>
    <div class="section-header-main-content__imgs">
      <div class="blur">
        <div class="blur-figure blur-figure__circle" id="circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-header/section-header-blur-circle.svg" alt="e"></div>
        <div class="blur-figure blur-figure__circle--big"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-header/section-header-blur-ellipse.svg" alt="e"></div>
        <div class="blur-figure blur-figure__arbitrary"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-header/section-header-blur-arbitrary.svg" alt="e"></div>
        <div class="blur-figure blur-figure__arbitrary--big"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-header/section-header-blur-arbitrary-big.svg" alt="e"></div>
      </div>
      <div class="hand-mockap">
        <div class="hand-mockap__bg-circle">
          <svg width="584" height="564" viewbox="0 0 584 564" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f)">
              <ellipse cx="292" cy="282" rx="282" ry="272" fill="url(#paint0_linear)"></ellipse>
            </g>
            <defs>
              <filter id="filter0_f" x="-3.05176e-05" y="0" width="584" height="564" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feblend>
                <fegaussianblur stddeviation="5" result="effect1_foregroundBlur"></fegaussianblur>
              </filter>
              <lineargradient id="paint0_linear" x1="118.572" y1="114.763" x2="292.098" y2="553.961" gradientunits="userSpaceOnUse">
                <stop stop-color="#8151FF"></stop>
                <stop offset="1" stop-color="#8151FF" stop-opacity="0"></stop>
              </lineargradient>
            </defs>
          </svg>
        </div>
        <h3 class="hand-mockap-void-item hand-mockap-void-item--up"><span class="hand-mockap-void-item__word">V</span><span class="hand-mockap-void-item__word">O</span><span class="hand-mockap-void-item__word">I</span><span class="hand-mockap-void-item__word">P</span>
        </h3>
        <h3 class="hand-mockap-void-item hand-mockap-void-item--down"><span class="hand-mockap-void-item__word">V</span><span class="hand-mockap-void-item__word">O</span><span class="hand-mockap-void-item__word">I</span><span class="hand-mockap-void-item__word">P</span>
        </h3>
        <div class="hand-mockap__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-header/hand-mockap.png" alt="Рука с мокапом"></div>
        <div class="dots"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg" alt="dots"></div>
        <div class="lines"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/block-lines.svg" alt="lines"></div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="section section-offers" id="offers">
  <div class="container">
    <h2 class="tx-title"><?php the_field('offers_title'); ?></h2>
    <p class="tx-subtitle"><?php the_field('offers_descr'); ?></p>
    <div class="element-will-change section-offers-ellipse-bg--big"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-offers/ellipse-bg--big.svg" alt="ellipse big"></div>
    <div class="section-offers-slider-arrows">
      <div class="section-offers-slider-arrows-item section-offers-slider-arrows-item__prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/section-offers/slider-arrow-prev.svg" alt="Назад"></div>
      <div class="section-offers-slider-arrows-item section-offers-slider-arrows-item__next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/section-offers/slider-arrow-next.svg" alt="Вперед"></div>
    </div>
    <div class="swiper-container section-offers-slider">
    <?php
      global $post;
      $post_offers = get_posts([
        'numberposts' => -1,
        'post_type' => 'offers'
      ]);
      foreach ($post_offers as $post):
        setup_postdata( $post );
    ?>
      <div class="swiper-slide section-offers-slider-item--first section-offers-slider-item">
        <div class="section-offers-slider-item-wrap-img">
          <div class="section-offers-slider-item-wrap-img__line"></div>
          <div class="section-offers-slider-item-wrap-img__img">
          <?php echo get_the_post_thumbnail($post, 'post-thumbnail', [
            'class' => ''
          ]); ?>
          </div>
        </div><a class="section-offers-slider-item__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div class="section-offers-slider-item__descr">
        <?php echo get_the_excerpt(); ?>
        </div>
      </div>
    <?php
      endforeach;
      wp_reset_postdata();
    ?>
</section>
<section class="section section-services" id="services">
  <div class="container container-services section-services-bg-block">
    <img class="element-will-change section-services-bg-block__block-dots-lines" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-advantages/bg-advantages-with-shadow.svg" alt="advantages">
    <img class="element-will-change section-services-bg-block__graphs" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-advantages/graphs.svg" alt="ellipse">
    <img class="element-will-change section-services-bg-block__blur" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-advantages/ellipse-blur.svg" alt="blur">
    <img class="element-will-change section-services-bg-block__dots" src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg" alt="lines">
    <div class="section-services-text-block element-will-change">
      <div class="tx-title section-services-text-block__title"><?php the_field('services_title'); ?></div>
      <div class="section-services-text-block-content-wrap">
        <?php
          $services = get_posts([
            "post_type" => "services",
            'numberposts' => 5,
            'meta_key' => "services-ser-number",
            "orderby" => "meta_value",
            'order' => 'ASC'
          ]);
        ?>
        <div class="section-services-text-block-content">
          <div class="section-services-text-block-content__line"></div>
          <ul class="section-services-text-block-content-list">
            <li class="section-services-text-block-content-list__item">
              <div class="section-services-text-block-content-list__cross"></div>
              <a class="section-services-text-block-content-list__link" href="<?php echo get_the_permalink($services[0]->ID); ?>"><span><?php echo $services[0]->post_title; ?></span></a></li>
            <li class="section-services-text-block-content-list__item">
              <div class="section-services-text-block-content-list__cross"></div>
              <a class="section-services-text-block-content-list__link" href="<?php echo get_the_permalink($services[1]->ID); ?>"><span><?php echo $services[1]->post_title; ?></span></a></li>
          </ul>
        </div>
        <div class="section-services-text-block-content">
          <div class="section-services-text-block-content__line"></div>
          <ul class="section-services-text-block-content-list">
            <li class="section-services-text-block-content-list__item">
              <div class="section-services-text-block-content-list__cross"></div>
              <a class="section-services-text-block-content-list__link" href="<?php echo get_the_permalink($services[2]->ID); ?>"><span><?php echo $services[2]->post_title; ?></span></a></li>
            <li class="section-services-text-block-content-list__item">
              <div class="section-services-text-block-content-list__cross"></div>
              <a class="section-services-text-block-content-list__link" href="<?php echo get_the_permalink($services[3]->ID); ?>"><span><?php echo $services[3]->post_title; ?></span></a></li>
          </ul>
        </div>
<!--         <div class="section-services-text-block-content">
          <div class="section-services-text-block-content__line"></div>
          <ul class="section-services-text-block-content-list">
            <li class="section-services-text-block-content-list__item">
              <div class="section-services-text-block-content-list__cross"></div> 
               <a class="section-services-text-block-content-list__link" href="<?php // echo get_the_permalink($services[4]->ID); ?>"><span><?php // echo $services[4]->post_title; ?></span></a></li>
          </ul>
        </div> -->
<!--         <a class="tx-button section-tariffs-content-bit__button section-services-button" href="/services">Смотреть все услуги </a> -->
      </div>
    </div>
  </div>
</section>
<section class="section section-tariffs">
  <div class="container" id="tariffs">
    <div class="section-tariffs-content-wrap"><img class="element-will-change section-tariffs-content-circle--normal" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-header/section-header-blur-ellipse.svg" alt="e">
      <div class="section-tariffs-content-inner">
        <div class="section-tariffs-content-bit">
          <h2 class="tx-title section-tariffs-content-bit__title"><?php the_field('tariffs_title'); ?></h2>
          <p class="tx-subtitle section-tariffs-content-bit__subtitle"><?php the_field('tariffs_descr'); ?></p><a class="tx-button section-tariffs-content-bit__button" href="#anchor_coop">Оставить заявку</a>
        </div>
        <div class="section-tariffs-content-cards">
          <?php 
            $tariffs = new WP_Query([
              'numberposts' => 3,
              'post_type' => 'tariffs',
              'meta_key' => 'tariff_num_show',
              "orderby" => 'meta_value_num',
              'order' => 'ASC'
            ]);
            $tarfId = $tariffs->posts;
          ?>
          <div class="section-tariffs-content-cards-card-wrap--blue">
            <a style="background: <?php  echo get_post_meta( $tarfId[0]->ID, 'tx-bg-color')[0];?>"  class="section-tariffs-content-cards-card section-tariffs-content-cards-card--blue" href="<?php  echo get_permalink($tarfId[0]->ID);?>">
              <div class="section-tariffs-content-cards-card-text">
                <div style="color: <?php  echo get_post_meta( $tarfId[0]->ID, 'tariff-titles-color')[0]; ?>" class="section-tariffs-content-cards-card-text__title"><?php  echo get_post_meta( $tarfId[0]->ID, 'tariff-title')[0]; ?></div>
                <div style="color: <?php  echo get_post_meta( $tarfId[0]->ID, 'tariff-titles-color')[0]; ?>" class="section-tariffs-content-cards-card-text__subtitle"><?php  echo get_post_meta( $tarfId[0]->ID, 'tariff-subtitle')[0]; ?></div>
              </div>
              <div style="color: <?php  echo get_post_meta( $tarfId[0]->ID, 'number-color')[0]; ?>" class="section-tariffs-content-cards-card__cost"><?php  echo get_post_meta( $tarfId[0]->ID, 'tariff-cost')[0]; ?></div>
            </a>
              <img class="section-tariffs-content-cards-card__bg-lines" src="<?php echo get_template_directory_uri(); ?>/assets/img/block-lines.svg" alt="Линии на фоне"></div>
          <div class="section-tariffs-content-cards-wrap-right">
            <a style="background: <?php  echo get_post_meta( $tarfId[1]->ID, 'tx-bg-color')[0]; ?>" class="section-tariffs-content-cards-card section-tariffs-content-cards-card--white" href="<?php  echo get_permalink($tarfId[1]->ID);?>">
              <div class="section-tariffs-content-cards-card-text">
                <div style="color: <?php  echo get_post_meta( $tarfId[1]->ID, 'tariff-titles-color')[0]; ?>" class="section-tariffs-content-cards-card-text__title"><?php  echo get_post_meta( $tarfId[1]->ID, 'tariff-title')[0]; ?></div>
                <div style="color: <?php  echo get_post_meta( $tarfId[1]->ID, 'tariff-titles-color')[0]; ?>" class="section-tariffs-content-cards-card-text__subtitle"><?php  echo get_post_meta( $tarfId[1]->ID, 'tariff-subtitle')[0]; ?></div>
              </div>
              <div style="color: <?php  echo get_post_meta( $tarfId[1]->ID, 'number-color')[0]; ?>" class="section-tariffs-content-cards-card__cost"><?php  echo get_post_meta( $tarfId[1]->ID, 'tariff-cost')[0]; ?></div>
            </a>
            <a class="section-tariffs-content-cards-card section-tariffs-content-cards-card--gradient" href="<?php  echo get_permalink($tarfId[2]->ID);?>">
              <div style="background: <?php  echo get_post_meta( $tarfId[2]->ID, 'tx-bg-color')[0]; ?>" class="section-tariffs-content-cards-card__bg--gradient"></div>
              <div class="section-tariffs-content-cards-card-text">
                <div style="color: <?php  echo get_post_meta( $tarfId[2]->ID, 'tariff-titles-color')[0]; ?>" class="section-tariffs-content-cards-card-text__title"><?php  echo get_post_meta( $tarfId[2]->ID, 'tariff-title')[0]; ?></div>
                <div style="color: <?php  echo get_post_meta( $tarfId[2]->ID, 'tariff-titles-color')[0]; ?>" class="section-tariffs-content-cards-card-text__subtitle"><?php  echo get_post_meta( $tarfId[2]->ID, 'tariff-subtitle')[0]; ?></div>
              </div>
              <div style="color: <?php  echo get_post_meta( $tarfId[2]->ID, 'number-color')[0]; ?>" class="section-tariffs-content-cards-card__cost"><?php  echo get_post_meta( $tarfId[2]->ID, 'tariff-cost')[0]; ?></div>
            </a></div>
            <span class="section-tariffs-content-more" >Посмотреть прайс</span>
        </div>
        <div class="content-lines section-tariffs-content-lines">
          <div class="content-lines--short section-tariffs-content-lines__short"></div>
          <div class="content-lines--long section-tariffs-content-lines__long"></div>
        </div>
      </div>
      <img class="element-will-change section-tariffs-content-circle--big" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-tariffs/ellipse--pink.svg" alt="ellipse pink">
      <img class="element-will-change section-tariffs-content-circle--small" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-tariffs/ellipse--gradient.svg" alt="ellipse gradient">
    </div>
  </div>
</section>
<section class="section section-advantages" id="advantages">
  <div class="container">
    <h2 class="tx-title section-advantages__title"><?php the_field('advantages_title'); ?></h2>
    <div class="section-advantages-content">
    <?php
        // global $post;
        $post_advantages = get_posts([
          'post_type' => 'advantages',
          'numberposts' => -1
        ]);
        foreach ($post_advantages as $post):
          setup_postdata( $post );
      ?>
      <div class="section-advantages-content-item">
        <?php echo get_the_post_thumbnail($post, 'small', [
            'class' => 'section-advantages-content-item__icon'
          ]); ?>
        <div class="section-advantages-content-item__title"><?php the_title(); ?></div>
        <div class="section-advantages-content-item__descr"><?php echo get_the_content(); ?></div>
      </div>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<section class="section section-coop">
  <div class="container section-coop__container">
    <div class="section-coop-content" id="coop">
      <div class="section-coop-content-text-wrap"><img class="section-coop-content-text__dots" src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg" alt="block-dots">
        <div class="content-lines section-coop-content-text-lines">
          <div class="content-lines--short section-coop-content-text-lines__line section-coop-content-text-lines__line--short"></div>
          <div class="content-lines--long section-coop-content-text-lines__line section-coop-content-text-lines__line--long"></div>
        </div>
        <h2 class="tx-title section-coop-content-text__title"><?php the_field('form_title'); ?>
          <div class="section-coop-content-text__line--medium"></div>
        </h2>
      </div>
      <div class="section-coop-content-form-wrap">
        <img class="section-coop-content-form-circle--blur-pink" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-coop/ellipse--pink.svg" alt="pink">
        <img class="section-coop-content-form-circle--blur-gradient" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-coop/ellipse--gradient.svg" alt="gradient">
        <img class="section-coop-content-form-circle--blur-arbitrary" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-coop/ellipse--arbitrary.svg" alt="arbitrary">
        <svg class="section-coop-content-form-circle--fill" width="584" height="564" viewbox="0 0 584 564" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_f)">
            <ellipse cx="292" cy="282" rx="282" ry="272" fill="url(#paint0_linear)"></ellipse>
          </g>
          <defs>
            <filter id="filter0_f" x="-3.05176e-05" y="0" width="584" height="564" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
              <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feblend>
              <fegaussianblur stddeviation="5" result="effect1_foregroundBlur"></fegaussianblur>
            </filter>
            <lineargradient id="paint0_linear" x1="118.572" y1="114.763" x2="292.098" y2="553.961" gradientunits="userSpaceOnUse">
              <stop stop-color="#8151FF"></stop>
              <stop offset="1" stop-color="#8151FF" stop-opacity="0"></stop>
            </lineargradient>
          </defs>
        </svg>
        <div class="section-coop-content-form-inner">
          <?php the_field('coop-form'); ?>
        </div><img class="section-coop-content-form__dots" src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg" alt="block-dots">
      </div>
    </div>
  </div>
</section>
<div class="modal-tariffs-overlay">
        <div class="modal-tariffs">
            <?php
                $dataExel = getDataExel(get_field('file_price'));
                $dataExelRandomTarfs = getRandomTariffs($dataExel['tariffs']);
            ?>
            <div class="modal-tariffs__bg modal-tariffs__bg-ellips">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg__ellips.svg" alt="bg">
            </div>
            <div class="modal-tariffs__bg modal-tariffs__bg-smoke">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg__smoke.svg" alt="bg">
            </div>
            <div class="modal-tariffs__cross">
                <span></span>
            </div>
            <div class="modal-tariffs__title">Прайс</div>
            <div class="modal-tariffs-body-wrap">
                <div class="modal-tariffs-body">
                    <div class="modal-tariffs-table modal-tariffs-table-header">
                        <? foreach ($dataExel['header'] as $headerData): ?>
                            <div class="modal-tariffs-table__row">
                                <div class="modal-tariffs-table__cell">
                                    <span class="modal-tariffs-table__text"><?= $headerData['title']; ?></span>
                                </div>
                                <div class="modal-tariffs-table__cell">
                                    <span class="modal-tariffs-table__text"><?= $headerData['desc']; ?></span>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="modal-tariffs-table__subdesc"><?= $dataExel['ndsText']; ?></div>
                    <div class="modal-tariffs-table modal-tariffs-table-body">
                        <div class="modal-tariffs-table__row">
                            <div class="modal-tariffs-table__cell modal-tariffs-table__th">
                                <span class="modal-tariffs-table__text">КОД</span>
                            </div>
                            <div class="modal-tariffs-table__cell modal-tariffs-table__th">
                                <span class="modal-tariffs-table__text">Наименование</span>
                            </div>
                            <div class="modal-tariffs-table__cell modal-tariffs-table__th">
                                <span class="modal-tariffs-table__text">Цена, руб</span>
                            </div>
                        </div>
                        <? foreach ($dataExelRandomTarfs as $tariff): ?>
                            <div class="modal-tariffs-table__row">
                                <div class="modal-tariffs-table__cell">
                                    <span class="modal-tariffs-table__text"><?= $tariff['code']; ?></span>
                                </div>
                                <div class="modal-tariffs-table__cell">
                                    <span class="modal-tariffs-table__text"><?= $tariff['direction']; ?></span>
                                </div>
                                <div class="modal-tariffs-table__cell">
                                    <span class="modal-tariffs-table__text"><?= $tariff['price']; ?></span>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="modal-tariffs-table__subdesc"><?= $dataExel['title']; ?></div>
                </div>
            </div>
            <a class="tx-button modal-tariffs__download" download href="<?= get_field('file_price')['url'] ?>">Скачать полный прайс</a>
        </div>
    </div>
<?php
  get_footer();
?>