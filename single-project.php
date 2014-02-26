<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'index'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1 class="page_title"><?php the_title(); ?></h1>

	
	<div id="content-area" class="clearfix">
		<div id="left-area">
			<?php get_template_part('loop', 'single_project'); ?>
		</div> <!-- end #left_area -->
	<?php endwhile; ?>
		
	</div> 	<!-- end #content-area -->

<?php get_footer(); ?>