<?php
/*
Template Name: Шаблон страницы для политики конфиденциальности
*/
?>
<?php
get_header();
?>
  <section class="section privacy-policy-section">
            <div class="container">
              <div class="privacy-policy-section-content-wrap">
                <div class="privacy-policy-section-content-blur">
                  <div
                    class="privacy-policy-section-content-blur__ellipse privacy-policy-section-content-blur__ellipse--small"
                  >
                    <img
                      src="assets/img/privacy-policy-page/ellipse--big.svg"
                      alt="d"
                    />
                  </div>
                  <div
                    class="privacy-policy-section-content-blur__ellipse privacy-policy-section-content-blur__ellipse--big"
                  >
                    <img
                      src="assets/img/privacy-policy-page/ellipse--small.svg"
                      alt="e"
                    />
                  </div>
                </div>
                <div class="privacy-policy-section-content">
                  <h1> <?php echo get_the_title(); ?></h1>
                  <?php the_content(); ?>
                  <!-- <h1 class="privacy-policy-section-content__title">
                    Политика конфиденциальности сайта
                  </h1> -->
                  <!-- <div class="privacy-policy-section-content-text">
                    <h3 class="privacy-policy-section-content-text__title">
                      1. Для кого предназначена эта политика конфиденциальности?
                    </h3>
                    <p class="privacy-policy-section-content-text__descr">
                      Настоящая политика конфиденциальности предназначена для
                      всех посетителей сайта www.tmb-ix.net (далее в тексте –
                      Сайт), включая тех посетителей, которые осуществляют на
                      Сайте бронирование автомобилей, заказывают новостную
                      рассылку, подают запросы.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество считает, что Вы надлежащим образом ознакомились с
                      политикой конфиденциальности Сайта (далее в тексте –
                      Политика конфиденциальности) и даете ЗАО «Аутотехника»
                      (UAB «Autotechnika»), код юридического лица 304038834,
                      юридический адрес: ул. Метало, д. 12, LT-02190,
                      Вильнюсский районный муниципалитет (далее в тексте –
                      Общество) свое согласие на обработку представленной Вами
                      информации, включая персональные данные, в том объеме, в
                      каком это необходимо для управления и обеспечения
                      функционирования Сайта, а также оказания услуг Сайта.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество уважает Вашу конфиденциальность и принципы защиты
                      Ваших персональных данных, в связи с чем прилагает все
                      возможные усилия для обеспечения безопасности и
                      конфиденциальности Ваших персональных данных и прочей
                      информации, чья обработка осуществляется на Сайте
                      www.classtrucks.ru.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество оставляет за собой право по своему усмотрению
                      вносить изменения в положения Политики конфиденциальности.
                      Изменения Политики конфиденциальности вступают в силу с
                      момента их обнародования на Сайте. С учетом этого Вы при
                      посещении Сайта обязаны убедиться, что ознакомились с
                      последней версией Политики конфиденциальности, которая
                      будет представлена на Сайте, и посредством дальнейшего
                      использования услуг Сайта выражаете свое согласие с этими
                      изменениями.
                    </p>
                    <h3 class="privacy-policy-section-content-text__title">
                      1. Для кого предназначена эта политика конфиденциальности?
                    </h3>
                    <p class="privacy-policy-section-content-text__descr">
                      Настоящая политика конфиденциальности предназначена для
                      всех посетителей сайта www.tmb-ix.net (далее в тексте –
                      Сайт), включая тех посетителей, которые осуществляют на
                      Сайте бронирование автомобилей, заказывают новостную
                      рассылку, подают запросы.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество считает, что Вы надлежащим образом ознакомились с
                      политикой конфиденциальности Сайта (далее в тексте –
                      Политика конфиденциальности) и даете ЗАО «Аутотехника»
                      (UAB «Autotechnika»), код юридического лица 304038834,
                      юридический адрес: ул. Метало, д. 12, LT-02190,
                      Вильнюсский районный муниципалитет (далее в тексте –
                      Общество) свое согласие на обработку представленной Вами
                      информации, включая персональные данные, в том объеме, в
                      каком это необходимо для управления и обеспечения
                      функционирования Сайта, а также оказания услуг Сайта.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество уважает Вашу конфиденциальность и принципы защиты
                      Ваших персональных данных, в связи с чем прилагает все
                      возможные усилия для обеспечения безопасности и
                      конфиденциальности Ваших персональных данных и прочей
                      информации, чья обработка осуществляется на Сайте
                      www.classtrucks.ru.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество оставляет за собой право по своему усмотрению
                      вносить изменения в положения Политики конфиденциальности.
                      Изменения Политики конфиденциальности вступают в силу с
                      момента их обнародования на Сайте. С учетом этого Вы при
                      посещении Сайта обязаны убедиться, что ознакомились с
                      последней версией Политики конфиденциальности, которая
                      будет представлена на Сайте, и посредством дальнейшего
                      использования услуг Сайта выражаете свое согласие с этими
                      изменениями.
                    </p>
                    <h3 class="privacy-policy-section-content-text__title">
                      1. Для кого предназначена эта политика конфиденциальности?
                    </h3>
                    <p class="privacy-policy-section-content-text__descr">
                      Настоящая политика конфиденциальности предназначена для
                      всех посетителей сайта www.tmb-ix.net (далее в тексте –
                      Сайт), включая тех посетителей, которые осуществляют на
                      Сайте бронирование автомобилей, заказывают новостную
                      рассылку, подают запросы.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество считает, что Вы надлежащим образом ознакомились с
                      политикой конфиденциальности Сайта (далее в тексте –
                      Политика конфиденциальности) и даете ЗАО «Аутотехника»
                      (UAB «Autotechnika»), код юридического лица 304038834,
                      юридический адрес: ул. Метало, д. 12, LT-02190,
                      Вильнюсский районный муниципалитет (далее в тексте –
                      Общество) свое согласие на обработку представленной Вами
                      информации, включая персональные данные, в том объеме, в
                      каком это необходимо для управления и обеспечения
                      функционирования Сайта, а также оказания услуг Сайта.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество уважает Вашу конфиденциальность и принципы защиты
                      Ваших персональных данных, в связи с чем прилагает все
                      возможные усилия для обеспечения безопасности и
                      конфиденциальности Ваших персональных данных и прочей
                      информации, чья обработка осуществляется на Сайте
                      www.classtrucks.ru.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество оставляет за собой право по своему усмотрению
                      вносить изменения в положения Политики конфиденциальности.
                      Изменения Политики конфиденциальности вступают в силу с
                      момента их обнародования на Сайте. С учетом этого Вы при
                      посещении Сайта обязаны убедиться, что ознакомились с
                      последней версией Политики конфиденциальности, которая
                      будет представлена на Сайте, и посредством дальнейшего
                      использования услуг Сайта выражаете свое согласие с этими
                      изменениями.
                    </p>
                    <h3 class="privacy-policy-section-content-text__title">
                      1. Для кого предназначена эта политика конфиденциальности?
                    </h3>
                    <p class="privacy-policy-section-content-text__descr">
                      Настоящая политика конфиденциальности предназначена для
                      всех посетителей сайта www.tmb-ix.net (далее в тексте –
                      Сайт), включая тех посетителей, которые осуществляют на
                      Сайте бронирование автомобилей, заказывают новостную
                      рассылку, подают запросы.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество считает, что Вы надлежащим образом ознакомились с
                      политикой конфиденциальности Сайта (далее в тексте –
                      Политика конфиденциальности) и даете ЗАО «Аутотехника»
                      (UAB «Autotechnika»), код юридического лица 304038834,
                      юридический адрес: ул. Метало, д. 12, LT-02190,
                      Вильнюсский районный муниципалитет (далее в тексте –
                      Общество) свое согласие на обработку представленной Вами
                      информации, включая персональные данные, в том объеме, в
                      каком это необходимо для управления и обеспечения
                      функционирования Сайта, а также оказания услуг Сайта.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество уважает Вашу конфиденциальность и принципы защиты
                      Ваших персональных данных, в связи с чем прилагает все
                      возможные усилия для обеспечения безопасности и
                      конфиденциальности Ваших персональных данных и прочей
                      информации, чья обработка осуществляется на Сайте
                      www.classtrucks.ru.
                    </p>
                    <p class="privacy-policy-section-content-text__descr">
                      Общество оставляет за собой право по своему усмотрению
                      вносить изменения в положения Политики конфиденциальности.
                      Изменения Политики конфиденциальности вступают в силу с
                      момента их обнародования на Сайте. С учетом этого Вы при
                      посещении Сайта обязаны убедиться, что ознакомились с
                      последней версией Политики конфиденциальности, которая
                      будет представлена на Сайте, и посредством дальнейшего
                      использования услуг Сайта выражаете свое согласие с этими
                      изменениями.
                    </p> -->
                  <!-- </div> -->
                </div>
              </div>
            </div>
          </section>
    </div>
          <div class="bottom-gradient"></div>
        <!-- </div> -->
      </section>
<?php
  get_footer();
?>