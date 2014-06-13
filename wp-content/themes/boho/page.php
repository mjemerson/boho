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
?>
<p>Be social! Visit us on Facebook, Twitter and YouTube.</p>
<div id="social">
    <a target="_blank" class="facebook" href="http://facebook.com/thebohemianembassy" title="Like us on Facebook">
        <img src="/wp-content/themes/boho/images/facebook-icon.png" alt="Like us on Facebook" title="Like us on Facebook" />
    </a>
    <a target="_blank" class="twitter" href="http://twitter.com/bohemianembassy" title="Follow us on Twitter">
        <img src="/wp-content/themes/boho/images/twitter-icon.png" alt="Follow us on Twitter" title="Follow us on Twitter" />
    </a>
    <a target="_blank" class="youtube" href="http://youtube.com/user/BohemianEmbassyBand" title="Subscribe to us on YouTube">
        <img src="/wp-content/themes/boho/images/youtube-icon.png" alt="Subscribe to us on YouTube" title="Subscribe to us on YouTube" />
    </a>
</div>
<?php
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