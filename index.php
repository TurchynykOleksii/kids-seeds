<?php get_header(); ?>

<section class="hero" id="hero">
  <div class="wrapper">
    <div class="hero__inner">
      <?php if( get_field('hero_headline') ): ?>
      <h1 class="hero__headline hero__anim"><?= get_field('hero_headline')?></h1>
      <?php endif; ?>
      <div class="hero__mobile">
        <p class="hero__info hero__anim">
          <?= get_field('hero_subtext')?>
        </p>
        <div class="hero__mobile-info">
          <div class="hero__img hero__anim">
            <img src="<?= get_field('hero_sunflower')?>" alt="photo">

          </div>
          <div class="hero__img-btns hero__anim">
            <img src="<?= get_field('hero_girl')?>" alt="photo">

            <div class="hero__btn-enroll">
              <a href="#form__request" class="link__scroll-form"><?= get_field('hero_writingbtn')?></a>
              <p><?= get_field('hero_writingtext')?></p>
            </div>
            <div class="hero__brn-call">
              <a href="#form__request" class="link__scroll-form"><?= get_field('hero_callbtn')?></a>
              <p><?= get_field('hero_calltext')?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__desktop">
        <div class="hero__desktop-left">
          <p class="hero__desktop-slogan hero__anim">
            <?= get_field('hero_subtext')?>
          </p>
          <div class="hero__desktop-writing">
            <img src="<?= get_field('hero_sunflower')?>" alt="фото соняшника" class="hero__sunflower hero__anim">

            <div class="hero__desktop-writing-right hero__anim">
              <img src="<?= get_field('hero_girl')?>" alt="фото дитини що грає">

              <a href="#form__request" class="link__scroll-form"><?= get_field('hero_writingbtn')?></a>
              <p><?= get_field('hero_writingtext')?></p>
            </div>
          </div>
        </div>
        <div class="hero__desktop-right">
          <div class="hero__call hero__anim">
            <div class="hero__call-front">
              <div class="hero__call-front--img">
                <img src="<?= get_field('hero_front')?>" alt="Фото фасаду">
              </div>
              <p><svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 384 512">
                  <path
                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                </svg> требухів</p>
            </div>
            <div class="hero__call-kids hero__anim">
              <img src="<?= get_field('hero_call')?>" alt="фото розпису">
              <a href="#form__request" class="link__scroll-form"><?= get_field('hero_callbtn')?></a>
              <p><?= get_field('hero_calltext')?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="kids">
  <div class="wrapper">
    <div class="kids__inner">
      <?php if( get_field('kids_headline') ): ?>
      <h2 class="kids__headline"><?= get_field('kids_headline')?></h2>
      <?php endif; ?>

      <ul class="kids__benefits">
        <?php
        if( have_rows('kids_list') ):

        while( have_rows('kids_list') ) : the_row();
        
        $kids_img = get_sub_field('kids_img');
        $kids_text = get_sub_field('kids_text');
        ?>
        <li class="kids__benefits-item">
          <img src="<?= $kids_img?>" alt="kids photo">
          <p>
            <?= $kids_text?>
          </p>
        </li>
        <?php
        endwhile;
        endif;?>
      </ul>
      <p class="kids__subtext"><?= get_field('kids_slogan')?></p>


    </div>
  </div>
  <svg class="kids__figure" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208 353" fill="none">
    <path
      d="M207.275 209.173C205.62 271.292 137.951 356.31 3.42595 352.725C-131.099 349.14 -232.307 342.747 -230.651 280.628C-228.996 218.508 -271.841 -3.06914 -137.316 0.515766C-2.79067 4.10067 207.992 119.001 207.275 209.173Z"
      fill="#F9EBC7" />
  </svg>
  <svg class="kids__figure-pc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 803" fill="none">
    <path
      d="M959.661 482.043C955.917 622.55 739.942 813.172 306.161 801.612C-127.62 790.053 -454.064 772.993 -450.319 632.487C-446.575 491.98 -590.38 -10.4475 -156.599 1.11219C277.182 12.6719 959.661 278.043 959.661 482.043Z"
      fill="#F9EBC7" />
  </svg>
</section>
<section class="education">
  <div class="wrapper">
    <div class="education__inner">
      <?php if( get_field('education_headline') ): ?>
      <h3 class="education__headline"><?= get_field('education_headline')?></h3>
      <?php endif; ?>

      <div class="swiper education__slider">
        <ul class="swiper-wrapper education__list">
          <?php
        if( have_rows('education_cards') ):

        while( have_rows('education_cards') ) : the_row();
        
        if( have_rows('education_card') ):
        while( have_rows('education_card') ) : the_row();
        $education_card_text = get_sub_field('education_card_text');
        $education_cardheadline = get_sub_field('education_cardheadline');

        ?>
          <li class="swiper-slide education__item">
            <strong class="education__item-strong"><?= $education_cardheadline; ?></strong>
            <ul class="swiper__list">
              <?php
              if( have_rows('education_card_list-item') ):
                while( have_rows('education_card_list-item') ) : the_row();
                $education_list_element = get_sub_field('education_list_element')
              ?>
              <li><?= $education_list_element; ?></li>
              <?php
                endwhile;
              endif;
              ?>
            </ul>
            <div class="education__preload">
              <p><?= $education_card_text; ?></p>
            </div>
          </li>
          <?php
          endwhile;
        endif;
        endwhile;
        endif;?>
        </ul>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="56" viewBox="0 0 46 56" fill="none">
            <path
              d="M8.23402 27.9999L24.5104 48.3629C24.6444 48.527 24.7503 48.7218 24.8221 48.9361C24.8938 49.1504 24.9299 49.3798 24.9284 49.6112C24.9268 49.8426 24.8875 50.0713 24.8129 50.2841C24.7382 50.4969 24.6296 50.6896 24.4934 50.8509C24.3572 51.0123 24.196 51.1392 24.0192 51.2242C23.8425 51.3092 23.6536 51.3508 23.4635 51.3464C23.2735 51.342 23.0861 51.2917 22.9121 51.1985C22.7381 51.1054 22.581 50.9711 22.4499 50.8036L5.19994 29.2202C4.93885 28.8935 4.79276 28.4557 4.79276 27.9999C4.79276 27.5441 4.93885 27.1063 5.19994 26.7796L22.4499 5.19622C22.581 5.02866 22.7381 4.89441 22.9121 4.80124C23.0861 4.70807 23.2735 4.65782 23.4635 4.65342C23.6536 4.64901 23.8424 4.69053 24.0192 4.77557C24.196 4.86062 24.3571 4.98749 24.4934 5.14886C24.6296 5.31023 24.7382 5.50288 24.8129 5.71568C24.8875 5.92847 24.9268 6.15718 24.9284 6.38856C24.9299 6.61995 24.8938 6.84942 24.8221 7.06369C24.7503 7.27797 24.6444 7.47279 24.5104 7.63689L8.23402 27.9999Z"
              fill="#3A3939" />
          </svg>
        </div>
        <div class="swiper-button-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="56" viewBox="0 0 46 56" fill="none">
            <path
              d="M37.766 28.0001L21.4897 7.63711C21.3557 7.47301 21.2497 7.27819 21.178 7.06391C21.1062 6.84964 21.0701 6.62017 21.0717 6.38878C21.0733 6.1574 21.1125 5.92869 21.1872 5.7159C21.2618 5.5031 21.3704 5.31045 21.5067 5.14908C21.6429 4.98771 21.804 4.86084 21.9808 4.7758C22.1576 4.69075 22.3464 4.64923 22.5365 4.65364C22.7265 4.65804 22.914 4.70828 23.0879 4.80146C23.2619 4.89463 23.419 5.02888 23.5501 5.19644L40.8001 26.7798C41.0612 27.1065 41.2073 27.5443 41.2073 28.0001C41.2073 28.4559 41.0612 28.8937 40.8001 29.2204L23.5501 50.8038C23.419 50.9713 23.2619 51.1056 23.0879 51.1988C22.914 51.2919 22.7265 51.3422 22.5365 51.3466C22.3464 51.351 22.1576 51.3095 21.9808 51.2244C21.804 51.1394 21.6429 51.0125 21.5067 50.8511C21.3704 50.6898 21.2618 50.4971 21.1872 50.2843C21.1125 50.0715 21.0733 49.8428 21.0717 49.6114C21.0701 49.3801 21.1062 49.1506 21.178 48.9363C21.2497 48.722 21.3557 48.5272 21.4897 48.3631L37.766 28.0001Z"
              fill="#3A3939" />
          </svg>
        </div>
      </div>
      <p class="education__slogan"><?= get_field('education_slogan')?></p>
      <a href="#form__headline" class="education__link"><?= get_field('education_btn')?></a>
    </div>
  </div>
  <svg class="education__figure" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208 353" fill="none">
    <path
      d="M263.135 3.07319C322.945 19.9374 393.652 88.9797 367.251 182.61C340.85 276.241 317.413 345.749 257.603 328.885C197.794 312.02 -23.854 286.125 2.54656 192.494C28.9471 98.8635 176.029 -20.2218 263.135 3.07319Z"
      fill="#F9EBC7" />
  </svg>
</section>
<section class="price" id="price">
  <div class="wrapper">
    <div class="price__inner">
      <?php if( get_field('price_headline') ): ?>
      <h4 class="price__headline"><?= get_field('price_headline')?></h4>
      <?php endif; ?>

      <ul class="price__list">
        <?php
        if( have_rows('price_cards') ):

        while( have_rows('price_cards') ) : the_row();
        if( have_rows('price_card') ):

        while( have_rows('price_card') ) : the_row();

        $price_card_headline = get_sub_field('price_card_headline');
        $price_schedule_linktext = get_sub_field('price_schedule_linktext');
        $price__schedule_link = get_sub_field('price__schedule_link');
        $price_schedule_price = get_sub_field('price_schedule_price');
        $price_schedule_btn = get_sub_field('price_schedule_btn');
        $price_sumkids = get_sub_field('price_sumkids');
        ?>
        <li class="price__item">
          <div class="price__item-info">
            <h5><?= $price_card_headline; ?></h5>
            <ul class="price__item-list">
              <?php
              if( have_rows('price_schedule_item') ):
                while( have_rows('price_schedule_item') ) : the_row();
                $tekst_punktu_spysku = get_sub_field('tekst_punktu_spysku')
              ?>
              <li><?= $tekst_punktu_spysku; ?></li>
              <?php
                endwhile;
              endif;?>
            </ul>
            <a href="<?= $price__schedule_link; ?>" class="price__btn-link"
              target="_blank"><?= $price_schedule_linktext; ?></a>
            <div class="price__sum">
              <strong><?= $price_schedule_price; ?></strong>
              <p>/ на місяць</p>
            </div>
            <?php
            if($price_sumkids && $price_card_headline != 'Відвідування дитини з 7:30 до 13:00'):
            ?>
            <div class="price__sum-kids">
              <strong><?= $price_sumkids; ?></strong>
              <p>для дітей до 3 років</p>
            </div>
            <?php else: ?>
            <div class="price__sum price__sum-kids price__hidden">
              <strong><?= $price_sumkids; ?></strong>
              <p>для дітей до 3 років</p>
            </div>
            <?php
            endif;
            ?>
          </div>
          <?php if($price_card_headline == 'Відвідування дитини з 7:30 до 13:00'):
          ?>
          <button class="price__item-btn price__item-btn--parttime"><?= $price_schedule_btn; ?></button>
          <?php else: ?>
          <button class="price__item-btn price__item-btn--day"><?= $price_schedule_btn; ?></button>
          <?php endif?>
        </li>
        <?php
        endwhile;
        endif;
        endwhile;
        endif;?>
      </ul>
      <p class="price__subtext">
        <?= get_field('price_slogan')?>
      </p>
    </div>
  </div>
</section>
<section class="boss" id="boss">
  <div class="wrapper">
    <div class="boss__inner">
      <?php if( get_field('boss_headline') ): ?>
      <h5 class="boss__headline"><?= get_field('boss_headline')?></h5>
      <?php endif; ?>

      <ul class="boss__list">
        <?php
        if( have_rows('boss_list') ):
        while( have_rows('boss_list') ) : the_row();
        $boss_card = get_sub_field('boss_card');
          while( have_rows('boss_card') ) : the_row();
            $boss_img = get_sub_field('boss_img');
            $bos_name = get_sub_field('boss_name');
        ?>
        <li class="boss__item">
          <img src="<?= $boss_img; ?>" alt=" Катерина фото">
          <p><?= $bos_name; ?></p>
        </li>

        <?php
          endwhile;
        endwhile;
        endif;?>
      </ul>
      <p class="boss__slogan"><?= get_field('boss_slogan')?></p>
    </div>
  </div>
  <svg class="boss__figure" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 214 362" fill="none">
    <path
      d="M213.162 230.319C205.529 291.99 147.963 372.318 51.4181 360.368C-45.1268 348.419 -117.378 335.753 -109.744 274.082C-102.111 212.411 -110.005 -10.6048 -13.46 1.34481C83.0849 13.2944 223.027 140.693 213.162 230.319Z"
      fill="#F9EBC7" />
  </svg>
</section>
<section class="gallary">
  <div class="wrapper">
    <div class="gallary__inner">
      <?php if( get_field('gallary_headline') ): ?>
      <h5 class="gallary__headline"><?= get_field('gallary_headline')?></h5>
      <?php endif; ?>

      <ul class="gallary__list">
        <?php
        $images = get_field('gallary_imgs');
        $size = 'full';
        if( $images ): ?>

        <?php foreach( $images as $image ): ?>
        <li class="gallary__item">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

        </li>
        <?php endforeach; ?>
        <?php
        endif;?>
      </ul>
      <p class="gallary__info">
        <?= get_field('gallary_slogan')?>
      </p>
      <a href="#form__request" class="gallary__btn">залишити заявку</a>
    </div>
  </div>
</section>
<section class="request" id="form__request">
  <div class="wrapper">
    <div class="request__inner">
      <?php if( get_field('request_headline') ): ?>
      <h5 class="request__headline" id="form__headline"><?= get_field('request_headline')?></h5>
      <?php endif; ?>


      <div class="request__form">
        <?php echo do_shortcode( '[contact-form-7 id="2067de2" html_class="form__application" title="Контактна форма 1"]' );?>
        <div class="request__info">
          <h6 class="request__info-headline"><?= get_field('request_headline_text')?></h6>
          <ul class="request__list">
            <?php
        if( have_rows('request_list') ):
        while( have_rows('request_list') ) : the_row();
        $boss_card = get_sub_field('request_list_item');
          ?>
            <li class="request__item"><?= $boss_card; ?>
            </li>
            <?php
        endwhile;
        endif;?>
          </ul>
        </div>
      </div>
      <div class="request__qr">
        <p class="request__qr-text">
          <?= get_field('request_subtext')?>
          <strong><?= get_field('request_text_bold')?></strong>
        </p>
        <div class="request__qr-wrapper">
          <a class="request__guide" target="_blank"
            href="https://drive.google.com/file/d/1vnHksiU8usZDieQWnCaKZaEL7-XfP7dA/view">Отримати гайд</a>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="faq">
  <div class="wrapper">
    <div class="faq__inner">
      <?php if( get_field('faq_headline') ): ?>
      <h5 class="faq__headline"><?= get_field('faq_headline')?></h5>
      <?php endif; ?>

      <ul class="faq__list">
        <?php
        if( have_rows('faq_list') ):

        while( have_rows('faq_list') ) : the_row();
        
        $faq_issue = get_sub_field('faq_issue');
        $faq_answar = get_sub_field('faq_answar');
        ?>
        <li class="faq__item">
          <p class="faq__item-headline">
            <?= $faq_issue; ?>
          </p>
          <div class="faq__item-text">
            <?= $faq_answar; ?>
          </div>
          <button class="faq__btn-close">
            <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/cross.svg" alt="Картинка плюса">
          </button>
        </li>
        <?php
        endwhile;
        endif;?>
      </ul>
      <p class="faq__slogan"><?= get_field('faq_slogan')?></p>
    </div>
  </div>
</section>
<section class="map" id="contacts">
  <div class="wrapper">
    <div class="map__inner">
      <h5 class="map__headline hidden">контакти</h5>
      <a href="https://goo.gl/maps/BPnuwzkBowtuuJoF6" target="_blank" class="map__adress">Требухів, Броварський
        р-н</a>
      <div class="map__contact">
        <ul class="map__social">
          <li class="map__social-item">
            <a href="<?= get_field('header_facebook'); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/fb.svg" alt="facebook іконка">
            </a>
          </li>
          <li class="map__social-item">
            <a href="<?= get_field('header_inst'); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/inst.svg" alt="instagram іконка">
            </a>
          </li>
        </ul>
        <div class="map__contact-info">
          <a href="tel:<?= get_field('header_phone_auto'); ?>"><?= get_field('header_phone'); ?></a>
          <a href="mailto:<?= get_field('map_email_name'); ?>"><?= get_field('map_email_name'); ?></a>
        </div>
      </div>

    </div>
  </div>
</section>
<footer class="footer">
  <div class="wrapper">
    <div class="footer__inner">
      <a href="#" class="footer__logo">
        <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/logo.svg" alt="Kids Seeds логотип">
      </a>
      <nav class="footer__nav">
        <?php wp_nav_menu(array(
				'menu' => 'header_menu',
				'container' => 'ul',
				'container_class' => 'footer__nav',
				'container_id' => '',
				'menu_class' => 'footer__list',
				'menu_id' => 'footer__list',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'depth' => 0,
				'walker' => '',
			)) ?>

      </nav>
      <a href="#header__logo-link" class="footer__btn-up">
        <svg width="8" height="35" viewBox="0 0 8 53" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4.35258 0.646446C4.15732 0.451183 3.84073 0.451183 3.64547 0.646446L0.463492 3.82843C0.268229 4.02369 0.268229 4.34027 0.463492 4.53553C0.658754 4.7308 0.975336 4.7308 1.1706 4.53553L3.99903 1.70711L6.82745 4.53553C7.02271 4.7308 7.3393 4.7308 7.53456 4.53553C7.72982 4.34027 7.72982 4.02369 7.53456 3.82843L4.35258 0.646446ZM4.49902 53L4.49903 1L3.49903 1L3.49902 53L4.49902 53Z"
            fill="#3A3939" />
        </svg>
      </a>
    </div>
  </div>
</footer>

<div class="overlay__parttime">
  <div class="popup__parttime">
    <h4 class="headline__parttime">
      Відвідування дитини з 7:30 до 13:00
    </h4>
    <?php echo do_shortcode( '[contact-form-7 id="d669426" html_class="form__parttime" title="Пошта на пів дня"]' );?>
    <button class="close__parttime">x</button>
  </div>
</div>

<div class="overlay__day">
  <div class="popup__day">
    <h4 class="headline__day">
      Відвідування дитини з 7:30 до 19:00
    </h4>
    <?php echo do_shortcode( '[contact-form-7 id="35d2961" html_class="form__day" title="Пошта на день"]' );?>
    <button class="close__day">x</button>
  </div>
</div>

<?php get_footer(); ?>