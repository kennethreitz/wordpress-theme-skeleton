<?php /* Template Name: Page*/ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<h1><?php the_title(); ?></h1>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>
	
	<?php if(comments_open()): ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>