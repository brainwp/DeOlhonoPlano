<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'index'); ?>

<div id="content-area" class="clearfix">

	<h1 class="page_title"><?php single_term_title(); ?></h1>

	<div id="agenda-grid">
    
	<?php
		// Pega o term corrente
		$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

		// Pega o slug do term corrente
		$term_slug = get_term( $term, 'agenda-categoria' );

		// Pega o ID pelo slug
		$desc = get_ID_by_slug( $term_slug->slug );
		
		// Pega uma página ou post pelo slug, fornecendo o ID acima
		$page = get_post( $desc );
		
		//Pega o the_content da página acima
		$content_desc = $page->post_content;
		
		// Aplica filtros ao content
		$content_desc = apply_filters('the_content', $content_desc);

		if ( ! empty($page) ) {
			echo $content_desc;	
		}
		
		
	?>
        
        <div class="archive-agenda">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php get_template_part( 'includes/entry', 'agenda' ); ?>
		
		<?php endwhile; ?>
		</div><!-- .archive-agenda -->
        
		<?php

            if (function_exists('wp_pagenavi')) { wp_pagenavi(); }
            else { get_template_part('includes/navigation','portfolio'); }

        ?>

		<?php else : ?>

			<?php get_template_part( 'includes/no-results' ); ?>

		<?php endif; ?>

	</div> <!-- end #agenda-grid -->

</div> 	<!-- end #content-area -->



<?php get_footer(); ?>