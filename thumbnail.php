<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
<?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/>
<?php else: ?>
<?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); }
else { ?>
<img class="home-thumb" src="<?php echo catch_first_image() ?>" width="108px" height="108px" alt="<?php the_title(); ?>"/>
<?php } ?>
<?php endif; ?>