<?php
/**
 * Template Name: Documentos
 */

get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'page'); ?>

<div id="content-area" class="clearfix no-bg">

<h1 class="page_title"><?php the_title(); ?></h1>

<?php
$args = array(
	    	'post_type'      => 'dlm_download',
			'posts_per_page' => '8',
			//'dlm_download_category' => 'biblioteca',
	    	'no_found_rows'  => 1,
	    	'post_status'    => 'publish',
	    	'meta_query'     => array()
	  	);
		
$downloads = new WP_Query( $args );
if ( $downloads->have_posts() ) : ?>

<?php while ( $downloads->have_posts() ) : $downloads->the_post(); ?>

		<div class="cada-download" <?php post_class(); ?>>

				<a class="img-destacada-biblioteca" href="<?php $dlm_download->the_download_link(); ?>">
					<?php $dlm_download->the_image( 'downloads' ); ?>
				</a>

			<h3 class="entry-title-download-query"><a href="<?php $dlm_download->the_download_link(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php $dlm_download->the_title(); ?></a></h3>

			<div class="entry-content-download">
	            <?php echo wp_trim_words( get_the_content(), 150 ); ?>
			</div><!-- .entry-content-download -->

				<a href="<?php $dlm_download->the_download_link(); ?>" rel="bookmark" class="biblioteca biblioteca-bg">
                	<span class="botao-download">DOWNLOAD</span>
				</a>

		</div><!-- .cada-download -->
        
			<?php endwhile; // end of the loop. ?>
		
		<?php endif;

		wp_reset_postdata();
	
		?><!-- Fim Loop -->
        
        <div class="clear"></div>

</div> 	<!-- end #content-area -->

<?php get_footer(); ?>