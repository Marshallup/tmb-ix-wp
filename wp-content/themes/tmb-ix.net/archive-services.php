<?php
get_header();
?>
</div>
        <div class="archive-services">
          <div class="container">
            <h1 class="tx-title section-services-text-block__title archive-services__title">Дополнительные услуги</h1>
            <?php if (have_posts()) : ?>
            <div class="archive-services-content">
            <?php while (have_posts()) :
              the_post();
            ?>
              <div class="archive-services-content-item-wrap"><a class="archive-services-content-item" href="<?php the_permalink(); ?>"><span class="archive-services-content-item__title"><?php the_title(); ?></span>
                  <p class="archive-services-content-item__text">
                    <?php if (get_the_excerpt()) {
                      echo get_the_excerpt();
                    } else {
                      echo 'Нет контента !';
                    } ?>
                  </p></a></div>
              <?php endwhile; ?>
            </div>
              <?php endif; ?>
          </div>
        </div>
      </section>
<?php 
  get_footer();
?>