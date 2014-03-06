<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'index'); ?>

<div id="content-area" class="clearfix">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('entry clearfix'); ?>>
		<h1 class="page_title"><?php the_title(); ?></h1>

		<div class="post-content">

		<?php
			$_event_start = get_post_meta( get_the_ID(), 'event_start', true );
			$event_start = date_i18n( 'd \d\e F', strtotime( date( 'Y-m-d', $_event_start ) ) );
			$_event_end = get_post_meta( get_the_ID(), 'event_end', true );
			$event_end = date_i18n( 'd \d\e F', strtotime( date( 'Y-m-d', $_event_end ) ) );
		?>
	
			<h2 class="date-single"><?php echo $event_start; ?><?php if ( ! empty ( $event_end ) ) : ?> a <?php echo $event_end; ?><?php endif; ?></h2>

			<?php
				$index_postinfo = et_get_option('flexible_postinfo2');
				
				if ( $index_postinfo ){

					echo '<p class="meta-info">';

					et_postinfo_meta( $index_postinfo, et_get_option('flexible_date_format'), esc_html__('0 comments','Flexible'), esc_html__('1 comment','Flexible'), '% ' . esc_html__('comments','Flexible') );

					echo '</p>';

				}

			?>

			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => '<p><strong>'.esc_attr__('Pages','Flexible').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<?php edit_post_link(esc_attr__('Editar esse Evento','Flexible')); ?>

		</div> 	<!-- end .post-content -->

	</article> <!-- end .entry -->


<?php endwhile; // end of the loop. ?>
</div> 	<!-- end #content-area -->

<?php get_footer(); ?>