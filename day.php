<?php
/*
Template Name: day
*/
?>
<?php get_header(); ?>


<div class="wrapper">
  <div class="day__inner">
    <?php if( get_field('day_headline') ): ?>
    <h1 class="day__headline"><?= get_field('day_headline'); ?></h1>
    <?php endif; ?>
    <ul class="day__list">
      <?php

    if( have_rows('spysok_rozkladu') ):

        while( have_rows('spysok_rozkladu') ) : the_row();
        
        $day_time = get_sub_field('day_time');
        $day_info = get_sub_field('day_info');
        ?>
      <li class="day__item">
        <span><?= $day_time?></span>
        <p><?= $day_info?></p>
      </li>
      <?php
      endwhile;
    endif;?>

    </ul>
    <div class="social">
      <a href="tel:+380993996754" class="social__phone">+38 (099) 399 67 54</a>
      <ul class="social__list">
        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/build/img/icons/fb.svg" alt="facebook"></a>
        </li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/build/img/icons/inst.svg"
              alt="facebook"></a></li>
      </ul>
    </div>
  </div>
</div>
</main>

<?php get_footer(); ?>