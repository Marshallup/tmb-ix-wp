<section class="section section-footer">
        <div class="container section-footer__container">
          <div class="section-footer-contact">
            <?php
                if (is_active_sidebar('tx-footer-contacts'))
                {
                    dynamic_sidebar('tx-footer-contacts');
                }
            ?>
            </div>
          <?php wp_nav_menu([
              'theme_location' => 'menu-footer',
              'container' => 'ul',
              'container_class' => 'section-footer-menu',
              'menu_class' => 'section-footer-menu',
              'items_wrap' => '<ul class="%2$s">%3$s</ul>'
            ]); ?>
        </div>
      </section>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>