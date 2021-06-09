<?php
/*
Template Name: Шаблон страницы для услуги
Template Post Type: services
*/
?>
<?php
get_header();
?>

</div>
<div class="section-services-bg-block service-page-bg-block">
          <div class="container service__container">
            <h1 class="service__title">
              <!-- Аренда серверов <span>(dedicated)</span> -->
              <?php the_title(); ?>
            </h1>
            <div class="post-content">
<!--               <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sit, porro dolore velit et omnis odio fugit dignissimos eum, maiores aut exercitationem quos. Debitis magni similique itaque amet deserunt? Assumenda.</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim a non accusamus incidunt officia in facilis nobis et odit doloremque, numquam ducimus quia illum ex placeat amet? Aliquam, mollitia officiis.Aliquid nisi iusto ipsum voluptatem nesciunt, vero corporis accusamus facilis, architecto odio commodi placeat, est atque eaque obcaecati numquam illo dicta minus neque sint nemo totam? Debitis odit dolorum consequatur!Necessitatibus animi quos error nesciunt deserunt aspernatur officia odio eveniet. Rerum enim neque sit quos minus optio accusamus dignissimos, adipisci quo quisquam eveniet officia placeat expedita nulla quod dolor! Molestias.Molestias et fuga eligendi nostrum ex quae, doloremque in saepe aperiam dignissimos, asperiores accusamus corrupti reiciendis, cupiditate aspernatur excepturi a? Optio sequi odio tenetur praesentium molestiae, magni temporibus explicabo consequatur!Cupiditate recusandae modi perspiciatis! Officia fugit vel, ex blanditiis tempore quasi voluptatem amet consectetur pariatur voluptatum eaque, facere doloremque. Ratione atque eius cum harum vero rerum! Corrupti sit ipsam reiciendis.Ratione quas deleniti accusamus perferendis cum similique ipsa debitis fuga eveniet laborum, minus ea aperiam inventore placeat repudiandae. Est aut non id rem vero repudiandae odit sequi nihil distinctio tempore.Illo quibusdam, dolores distinctio sapiente totam aliquam deleniti pariatur, vel quia tenetur, eligendi quasi blanditiis ex consequuntur non nostrum porro cumque id numquam quo facere. Quod nobis facere animi dolorem!Culpa at accusantium facere excepturi iste sunt fugit deserunt explicabo iure libero incidunt ipsum ipsam modi veritatis soluta eius omnis unde minima consequatur a corrupti, magni ea ad quidem! Beatae.Officia, eveniet! Delectus sed quaerat ex fugit natus molestiae, a ad iste maxime libero laborum est odio veniam reprehenderit, reiciendis cupiditate excepturi iusto laudantium! Accusamus atque explicabo eos ex distinctio.Perferendis repudiandae rerum quidem nam omnis voluptatem hic tempore quis, facere consectetur, alias sit tenetur veritatis dolorem nesciunt vero nulla repellendus! Unde blanditiis nobis vel minus iusto, earum sapiente aliquam.</p>
              <h2>sdsdsdsdsdsd</h2> -->
				<?php the_content(); ?>
            </div>
          </div>
          <div class="service-page-bg-block-wrap">
            <img
              class="service-page-bg-block__block-dots-lines"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/section-advantages/bg-advantages-with-shadow.svg"
              alt="advantages"
            /><img
              class="service-page-bg-block__graphs"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/section-advantages/graphs.svg"
              alt="ellipse"
            /><img
              class="service-page-bg-block__blur"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/section-advantages/ellipse-blur.svg"
              alt="blur"
            />
          </div>
      </section>

<?php
  get_footer();
?>