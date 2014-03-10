<?php /* Template name: Agenda */ get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'page'); ?>

<div id="content-area" class="clearfix">

	<section id="primary" class="col-md-12">
		<div id="content" class="site-content" role="main">
			<?php donp_calendar(); ?>
		</div><!-- #content -->
	</section><!-- #primary -->
	
</div> 	<!-- end #content-area -->

<?php get_footer(); ?>