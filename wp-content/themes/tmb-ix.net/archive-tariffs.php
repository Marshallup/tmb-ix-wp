<?php
get_header();
?>
</div>
  <h1 class="tx-title section-services-text-block__title archive-tariffs__title">Тарифы  на популярные направления</h1>
  <div class="container">
    <div class="archive-tariffs-content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) :
          the_post();
        ?>
      <div class="archive-tariffs-content-item-wrap">
        <div class="archive-tariffs-content-item">
          <div class="archive-tariffs-content-item-header"><span class="archive-tariffs-content-item-header__title"><?php echo get_field('tariff-title'); ?> <?php echo get_field('tariff-subtitle'); ?></span></div>
          <div class="archive-tariffs-content-item-body">
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title"><?php echo get_field('tariff_technology1'); ?></div>
              <div class="archive-tariffs-content-item-body-point__descr"><?php echo get_field('tariff_technology1_conditions'); ?></div>
            </div>
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title"><?php echo get_field('tariff_technology2'); ?></div>
              <div class="archive-tariffs-content-item-body-point__descr"><?php echo get_field('tariff_technology2_conditions_kopiya'); ?></div>
            </div>
            <div class="archive-tariffs-content-item-body__cost"><?php echo get_field('tariff-cost'); ?></div>
          </div><a class="tx-button section-tariffs-content-bit__button archive-tariffs-content-item__button" href="<?php the_permalink();?>">узнать Подробнее</a>
        </div>
      </div>
      <?php endwhile;
        endif;
      ?>
      <!-- <div class="archive-tariffs-content-item-wrap">
        <div class="archive-tariffs-content-item">
          <div class="archive-tariffs-content-item-header"><span class="archive-tariffs-content-item-header__title">Россия (МСК)</span></div>
          <div class="archive-tariffs-content-item-body">
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title">Звонки</div>
              <div class="archive-tariffs-content-item-body-point__descr">100 минут</div>
            </div>
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title">Звонки</div>
              <div class="archive-tariffs-content-item-body-point__descr">100 минут</div>
            </div>
            <div class="archive-tariffs-content-item-body__cost">1,22 ₽</div>
          </div><a class="tx-button section-tariffs-content-bit__button archive-tariffs-content-item__button" href="s">узнать Подробнее</a>
        </div>
      </div>
      <div class="archive-tariffs-content-item-wrap">
        <div class="archive-tariffs-content-item">
          <div class="archive-tariffs-content-item-header"><span class="archive-tariffs-content-item-header__title">Россия (спб)</span></div>
          <div class="archive-tariffs-content-item-body">
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title">Звонки</div>
              <div class="archive-tariffs-content-item-body-point__descr">100 минут</div>
            </div>
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title">Звонки</div>
              <div class="archive-tariffs-content-item-body-point__descr">100 минут</div>
            </div>
            <div class="archive-tariffs-content-item-body__cost">1,22 ₽</div>
          </div><a class="tx-button section-tariffs-content-bit__button archive-tariffs-content-item__button" href="s">узнать Подробнее</a>
        </div>
      </div>
      <div class="archive-tariffs-content-item-wrap">
        <div class="archive-tariffs-content-item">
          <div class="archive-tariffs-content-item-header"><span class="archive-tariffs-content-item-header__title">Россия (спб)</span></div>
          <div class="archive-tariffs-content-item-body">
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title">Звонки</div>
              <div class="archive-tariffs-content-item-body-point__descr">100 минут</div>
            </div>
            <div class="archive-tariffs-content-item-body-point">
              <div class="archive-tariffs-content-item-body-point__title">Звонки</div>
              <div class="archive-tariffs-content-item-body-point__descr">100 минут</div>
            </div>
            <div class="archive-tariffs-content-item-body__cost">1,22 ₽</div>
          </div><a class="tx-button section-tariffs-content-bit__button archive-tariffs-content-item__button" href="s">узнать Подробнее</a>
        </div>
      </div> -->
    </div>
  </div>
</section>
<?php
  get_footer();
?>