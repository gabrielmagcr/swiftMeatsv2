<?php $recipes = get_sub_field('recipes'); ?>

<div class="flex-grow-1 d-flex align-items-stretch justify-content-end">
    <div class="block--inner">
        <?php print get_sub_field('content'); ?>

        <div class="gustavus-grid">
            <?php foreach ($recipes as $recipe) : ?>
                <div class="gustavus-grid--recipe">
                    <a href="<?php print get_the_permalink($recipe); ?>" class="stretched-link"></a>
                    <div class="gustavus-grid--recipe-bg" style="background: #C80220 url('<?php print str_replace('swift.local', 'swiftmeats.com', get_field('image', $recipe)); ?>') no-repeat center / cover;">

                    </div>
                    <div class="gustavus-grid--recipe-title">
                        <?php print get_the_title($recipe); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="gustavus-wrapper bg-blue">
    <img class="desktop" data-frame="1" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-desktop-frame-1.png" />
    <img class="desktop" data-frame="2" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-desktop-frame-2.png" />
    <img class="desktop" data-frame="3" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-desktop-frame-3.png" />
    <img class="desktop" data-frame="4" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-desktop-frame-4.png" />
    <img class="desktop" data-frame="5" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-desktop-frame-5.png" />
    
    <img class="mobile" data-frame="1" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-1.png" />
    <img class="mobile" data-frame="2" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-2.png" />
    <img class="mobile" data-frame="3" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-3.png" />
    <img class="mobile" data-frame="4" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-4.png" />
    <img class="mobile" data-frame="5" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-5.png" />
    <img class="mobile" data-frame="6" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-6.png" />
    <img class="mobile" data-frame="7" src="<?php print get_stylesheet_directory_uri(); ?>/assets/img/gustavus-mobile-frame-7.png" />
</div>