<?php
/**
Template Name: Home
 */

get_header(); ?>



<div class="row"> 
<!-- <div id="splash-home" class="splash-content full" role="main">
		<div class="row">
		<div class="full">
		<img class="shadow" src="http://images.rockinguitarlessons.com/header-shadow.png"/> 		
		</div>
		</div>	clean this up-->	
<div class="site-content">
		<?php echo do_shortcode("[posts-to-page cat_ID=13 ] "); ?>
</div>
</div>

</div><!-- ! end splash from header file-->



<div class="body-wrap">	
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>