<?php
/*
Template Name: Шаблон для страницы документов
*/
?>
<?php
get_header();
?>
</div>
        <section class="section documents-section">
          <div class="container">
            <div class="privacy-policy-section-content-wrap">
              <div class="privacy-policy-section-content-blur">
                <div
                  class="privacy-policy-section-content-blur__ellipse privacy-policy-section-content-blur__ellipse--small"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/privacy-policy-page/ellipse--big.svg"
                    alt="d"
                  />
                </div>
                <div
                  class="privacy-policy-section-content-blur__ellipse privacy-policy-section-content-blur__ellipse--big"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/privacy-policy-page/ellipse--small.svg"
                    alt="e"
                  />
                </div>
              </div>
              <div
                class="privacy-policy-section-content documents-section-content"
              >
                <h1 class="privacy-policy-section-content__title"><?php the_title(); ?></h1>
                <div class="documents-section-content-swaper">
                  <div
                    class="section-offers-slider-arrows documents-section-slider-arrows"
                  >
                    <div
                      class="section-offers-slider-arrows-item section-offers-slider-arrows-item__prev documents-section-slider-arrows-item__prev"
                    >
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/section-offers/slider-arrow-prev.svg"
                        alt="Назад"
                      />
                    </div>
                    <div
                      class="section-offers-slider-arrows-item section-offers-slider-arrows-item__next documents-section-slider-arrows-item__next"
                    >
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/section-offers/slider-arrow-next.svg"
                        alt="Вперед"
                      />
                    </div>
                  </div>
                  <div class="documents-section-slider">
                  <?php
                    $getImg;
                    preg_match("/<!-- wp:gallery.*/sm", get_the_content(), $match);
                    if(count($match) === 0) :
                      print '0';
                    else:
                    $match2 = preg_replace("/<!-- wp:gallery.*|<!-- .wp:gallery.*/", "", $match[0]);
                    $content2 =  trim(strip_tags($match2, '<img>'));
                    $content3 = preg_replace("/</", "|<", $content2);
                    $content4 = explode("|", $content3);
                    foreach($content4 as $key=>$img):
                    if ($key == 0) : '';
                    else:
                  ?>
                    <div class="documents-section-slider-item">
                      <div class="documents-section-slider-item__img">
                        <?php print $img; ?>
                      </div>
                    </div>
                  <?php endif; endforeach; endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-gradient"></div>
        </section>
<?php
  get_footer();
?>