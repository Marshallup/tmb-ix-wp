<?php
/*
Template Name: Шаблон страницы для тарифов
Template Post Type: tariffs
*/
?>
<?php
get_header();
?>
   <div class="tariff-section-content">
            <div class="tariff-section-content-location">
              <h2 class="tariff-section-content-location__contry"><?php echo get_field('tariff-title'); ?></h2>
              <h3 class="tariff-section-content-location__city">
              <?php echo get_field('tariff-subtitle'); ?>
              </h3>
            </div>
            <div class="tariff-section-content-cost">
              <div class="tariff-section-content-cost-card-wrap">
                <div style="background:<?php echo get_post_meta($post->ID, 'tx-bg-color')[0]; ?>;" class="tariff-section-content-cost-card">
                  <span style="color:<?php echo get_field('number-color'); ?>" class="tariff-section-content-cost-card__price"><?php echo get_field('tariff-cost'); ?></span>
                  <div class="tariff-section-content-cost-card__dots">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg" alt="dots" />
                  </div>
                </div>
                <div class="tariff-section-content-cost-card-blur">
                    <div
                      class="tariff-section-content-cost-card-blur__item tariff-section-content-cost-card-blur__ellipse--normal"
                    >
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/tariff-page/figur-ellipse-bg-normal.svg"
                        alt="normal ellipse"
                      />
                    </div>
                    <div
                      class="tariff-section-content-cost-card-blur__item tariff-section-content-cost-card-blur__ellipse--small"
                    >
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/tariff-page/figur-ellipse-bg-small.svg"
                        alt="small ellipse"
                      />
                    </div>
                    <div
                      class="tariff-section-content-cost-card-blur__item tariff-section-content-cost-card-blur__arbitrary"
                    >
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/tariff-page/figur-arbitrary-bg.svg"
                        alt="arbitrary figur"
                      />
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="post-content tariff-section-about">
          <?php the_content(); ?>
            <!-- <h4 class="tariff-section-about__title">Условия тарифа</h4>
            <p class="tariff-section-about__descr">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p> -->
          </div>
        </div>
      </section>
      <section class="section section-coop">
        <div class="container section-coop__container">
          <div class="section-coop-content" id="coop">
            <div class="section-coop-content-text-wrap">
              <img
                class="section-coop-content-text__dots"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg"
                alt="block-dots"
              />
              <div class="content-lines section-coop-content-text-lines">
                <div
                  class="content-lines--short section-coop-content-text-lines__line section-coop-content-text-lines__line--short"
                ></div>
                <div
                  class="content-lines--long section-coop-content-text-lines__line section-coop-content-text-lines__line--long"
                ></div>
              </div>
              <h2 class="tx-title section-coop-content-text__title">
                <?php the_field('tariff-form-title'); ?>
                <div class="section-coop-content-text__line--medium"></div>
              </h2>
            </div>
            <div class="section-coop-content-form-wrap">
              <img
                class="section-coop-content-form-circle--blur-pink"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/section-coop/ellipse--pink.svg"
                alt="pink"
              /><img
                class="section-coop-content-form-circle--blur-gradient"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/section-coop/ellipse--gradient.svg"
                alt="gradient"
              /><img
                class="section-coop-content-form-circle--blur-arbitrary"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/section-coop/ellipse--arbitrary.svg"
                alt="arbitrary"
              />
              <svg
                class="section-coop-content-form-circle--fill"
                width="584"
                height="564"
                viewbox="0 0 584 564"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g filter="url(#filter0_f)">
                  <ellipse
                    cx="292"
                    cy="282"
                    rx="282"
                    ry="272"
                    fill="url(#paint0_linear)"
                  ></ellipse>
                </g>
                <defs>
                  <filter
                    id="filter0_f"
                    x="-3.05176e-05"
                    y="0"
                    width="584"
                    height="564"
                    filterunits="userSpaceOnUse"
                    color-interpolation-filters="sRGB"
                  >
                    <feflood
                      flood-opacity="0"
                      result="BackgroundImageFix"
                    ></feflood>
                    <feblend
                      mode="normal"
                      in="SourceGraphic"
                      in2="BackgroundImageFix"
                      result="shape"
                    ></feblend>
                    <fegaussianblur
                      stddeviation="5"
                      result="effect1_foregroundBlur"
                    ></fegaussianblur>
                  </filter>
                  <lineargradient
                    id="paint0_linear"
                    x1="118.572"
                    y1="114.763"
                    x2="292.098"
                    y2="553.961"
                    gradientunits="userSpaceOnUse"
                  >
                    <stop stop-color="#8151FF"></stop>
                    <stop
                      offset="1"
                      stop-color="#8151FF"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                </defs>
              </svg>
              <div class="section-coop-content-form-inner">
                <?php echo get_field('tariff-form'); ?>
                <!-- <form class="section-coop-content-form">
                  <div class="section-coop-content-form-item-wrap">
                    <label class="section-coop-content-form__label" for="name"
                      >Ваше имя</label
                    >
                    <input
                      class="section-coop-content-form-field section-coop-content-form-field-input"
                      name="name"
                      type="text"
                    />
                  </div>
                  <div class="section-coop-content-form-item-wrap">
                    <label class="section-coop-content-form__label" for="email"
                      >E-mail*</label
                    >
                    <input
                      class="section-coop-content-form-field section-coop-content-form-field-input"
                      name="email"
                      type="email"
                    />
                  </div>
                  <div class="section-coop-content-form-item-wrap">
                    <label
                      class="section-coop-content-form__label"
                      for="message"
                      >Сообщение</label
                    >
                    <textarea
                      class="section-coop-content-form-field section-coop-content-form-field-textarea"
                      name="message"
                    ></textarea>
                  </div>
                  <button class="tx-button section-coop-content-form__button">
                    Связаться с нами
                  </button>
                </form> -->
              </div>
              <img
                class="section-coop-content-form__dots"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/block-dots.svg"
                alt="block-dots"
              />
            </div>
          </div>
        </div>
      </section>
<?php
  get_footer();
?>