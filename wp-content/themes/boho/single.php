<?php get_header(); ?>

<div id="main">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
<div class="post-date"><?php _e('Posted on ', 'newgamer'); ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?></a></div>

<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('category-thumb', array('class' => 'alignnone')); ?>
   </a>
 <?php endif; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content('Read More...'); ?>

</div>

<div class="post-navigation">
<div class="previous-post"><?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'newgamer' ) . ' %title' ); ?></div>
<div class="next-post"><?php next_post_link( '%link', '%title' . _x( ' &rarr;', 'Next post link', 'newgamer' ) . '' ); ?></div>
</div>

<div class="breaker"></div>

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.', 'newgamer'); ?></p><?php endif; ?>

<?php wp_link_pages(array('next_or_number'=>'next', 'previouspagelink' => '&#8592;', 'nextpagelink'=>'&#8594;')); ?>


</div>

<?php get_sidebar(); ?>

</div>

<div class="delimiter"></div>

<?php get_footer(); ?>