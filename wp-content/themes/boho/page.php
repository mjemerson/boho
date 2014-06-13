<?php get_header(); ?>

<div id="main">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('category-thumb', array('class' => 'alignnone')); ?>
   </a>
 <?php endif; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content('Read More...'); ?>

<?php

if($post->ID == 14) { //contact page

    echo "contact page!";

}

?>

</div>

<div class="breaker"></div>

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.', 'newgamer'); ?></p><?php endif; ?>

<?php wp_link_pages(array('next_or_number'=>'next', 'previouspagelink' => '&#8592;', 'nextpagelink'=>'&#8594;')); ?>

<?php comments_template(); ?> 

</div>

<?php get_sidebar(); ?>

</div>

<div class="delimiter"></div>

<?php get_footer(); ?>