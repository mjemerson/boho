<?php get_header(); ?>

<div id="main">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('category-thumb', array('class' => 'alignnone')); ?>
   </a>
 <?php endif; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_excerpt(''); ?>

<div class="more-link"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php _e('Read More', 'newgamer'); ?></a></div>

</div>

<div class="delimiter"></div>
<div class="linebreaker"></div>

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.', 'newgamer'); ?></p><?php endif; ?>

<?php wp_link_pages(array('next_or_number'=>'next', 'previouspagelink' => '&#8592;', 'nextpagelink'=>'&#8594;')); ?>

<?php comments_template(); ?>

<h4 class="pagi">
<?php posts_nav_link(' &#183 ', 'Previous Page', 'Next Page'); ?>
</h4>

</div>

<?php get_sidebar(); ?>

</div>

<div class="delimiter"></div>

<?php get_footer(); ?>