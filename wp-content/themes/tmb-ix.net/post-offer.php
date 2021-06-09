<?php
/*
Template Name: Шаблон страницы для предложений
Template Post Type: offers
*/
?>
<?php
get_header();
?>
<div class="offer-content">
            <div
              class="section-header-main-content__texts offer-content__texts"
            >
              <h1 class="main-title offer-title">
                <!-- Местная <span>связь</span> -->
                <?php echo get_the_title() ?>
              </h1>
              <div class="main-subtitle offer-subtitle">
                <?php echo get_the_excerpt(); ?>
              </div>
            </div>
            <div class="section-header-main-content__imgs">
              <div class="blur offer-blur">
                <div class="offer-blur">
                  <div
                    class="blur-figure offer-blur-figure__ellipse-bg-pink-small"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/offer-page/figur-ellipse-bg-pink-small.svg"
                      alt="e"
                    />
                  </div>
                  <div
                    class="blur-figure offer-blur-figure__ellipse-bg-pink-big"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/offer-page/figur-ellipse-bg-pink-big.svg"
                      alt="e"
                    />
                  </div>
                  <div
                    class="blur-figure offer-blur-figure__ellipse-bg-gradient"
                  >
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/offer-page/figur-ellipse-bg-gradient.svg"
                      alt="e"
                    />
                  </div>
                  <div class="blur-figure offer-blur-figure__arbitrary-bg">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/offer-page/figur-arbitrary-bg.svg"
                      alt="e"
                    />
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide section-offers-slider-item--first section-offers-slider-item offer-img"
              >
                <div class="offer-dots">
                  <img
                    class="section-services-bg-block__dots"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg"
                    alt="lines"
                  />
                </div>
                <div class="section-offers-slider-item-wrap-img offer-img-wrap">
                  <div
                    class="section-offers-slider-item-wrap-img__line offer-img__line"
                  ></div>
                  <div
                    class="section-offers-slider-item-wrap-img__img offer-img-inner"
                  >
                    <?php echo get_the_post_thumbnail($post, 'large', [
                      'class' => ''
                    ]); ?>
                  </div>
                </div>
                <div class="main-lines offer-lines">
                <div
                  class="main-lines__item main-lines__item--long offer-lines__item--long"
                ></div>
                <div
                  class="main-lines__item main-lines__item--short offer-lines__item--short"
                ></div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section offer-page-section-content">
        <div class="container">
          <div class="post-content offer-page-section-content-edit">
            <!-- <h2 class="offer-page-section-content__title">Мы предлагаем</h2> -->
            <?php the_content(); ?>
            <!-- <p class="offer-page-section-content__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
              quibusdam, repellat nisi veniam distinctio inventore laboriosam odio
              ex illum ea amet velit, sed repellendus saepe accusantium tenetur,
              impedit libero id!Quis, et exercitationem amet libero ipsum corrupti
              natus perspiciatis ipsa recusandae odio sed distinctio modi, quam
              tenetur, sit a placeat? Voluptas iste ad dolorum, nam autem qui
              debitis adipisci maiores!Aut, debitis fugit! Corrupti officiis,
              deserunt nihil voluptates illo cumque laboriosam similique? Deleniti
              placeat ducimus ut, aliquam atque ipsa maiores qui. Adipisci autem
              recusandae commodi perferendis sequi magnam, quod esse.
            </p> -->
          </div>
        </div>
      </section>
<?php
  get_footer();
?>