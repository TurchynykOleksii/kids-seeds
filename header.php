<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=wp_get_document_title(); ?></title>
  <link rel="Shortcut Icon" type="image/x-icon" href="<?= get_field('header_logo')?>" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="wrapper">
      <div class="header__inner">
        <nav class="header__navigation">
          <?php wp_nav_menu(array(
				'menu' => 'header_menu',
				'container' => 'ul',
				'container_class' => 'header__navigation',
				'container_id' => '',
				'menu_class' => 'header__navigation-list',
				'menu_id' => 'header__navigation-list',
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
        <div class="header__logo">
          <a href="#" class="header__logo-img" id="header__logo-link">
            <img src="<?= get_field('header_logo')?>" alt="kids seeds логотип">
          </a>
          <div class="header__logo-contacts">
            <a href="tel:<?= get_field('header_phone_auto'); ?>"
              class="header__phone"><?= get_field('header_phone'); ?></a>

            <a href="<?= get_field('header_facebook'); ?>" class="header__fb">
              <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/fb.svg" alt="facebook іконка">
            </a>
            <a href="<?= get_field('header_inst'); ?>" class="header__inst">
              <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/inst.svg" alt="instagram іконка">
            </a>

          </div>
          <div class="header__link-wrapper">
            <a href="#form__request" class="header__logo-link">записатись</a>
            <svg viewBox="0 0 42 8" fill="none">
              <path
                d="M41.3536 4.35355C41.5488 4.15829 41.5488 3.84171 41.3536 3.64645L38.1716 0.464466C37.9763 0.269204 37.6597 0.269204 37.4645 0.464466C37.2692 0.659728 37.2692 0.976311 37.4645 1.17157L40.2929 4L37.4645 6.82843C37.2692 7.02369 37.2692 7.34027 37.4645 7.53553C37.6597 7.7308 37.9763 7.7308 38.1716 7.53553L41.3536 4.35355ZM0 4.5H41V3.5H0V4.5Z"
                fill="#3A3939" />
            </svg>
          </div>
        </div>
        <button class="header__burger">
          <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/burger.svg" alt="мобільне меню відкрити"
            data-open>
          <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/cross.svg" alt="мобільне меню закрити"
            data-close>
        </button>
        <?php wp_nav_menu(array(
				'menu' => 'header_menu',
				'container' => 'ul',
				'container_class' => 'header__mobile-menu',
				'container_id' => '',
				'menu_class' => 'header__mobile-menu',
				'menu_id' => 'header__mobile-menu',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'depth' => 0,
				'walker' => '',
			)) ?>
      </div>
    </div>
  </header>

  <main>