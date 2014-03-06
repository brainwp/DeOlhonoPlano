	<?php
		$category = get_the_terms( get_the_ID(), 'agenda-categoria' );
		$category_colors = get_option( 'agenda_category_meta' );
		$_event_start = get_post_meta( get_the_ID(), 'event_start', true );
		$event_start = date_i18n( 'd \d\e F', strtotime( date( 'Y-m-d', $_event_start ) ) );

		$color = '#1a86ac';
		if ( is_array( $category ) ) {
			$term = current( $category );
			$term_id = $term->term_id;
			$color = ( is_array( $category_colors ) && isset( $category_colors[ $term_id ] ) ) ? $category_colors[ $term_id ] : '#1a86ac';
		}
    ?>
    
    <div class="item" data-id="<?php echo date( 'd/m/Y', $_event_start ); ?>" data-description="<?php the_title(); ?>">
        <div style="border-top: 5px solid <?php echo esc_attr( $color ); ?>"></div>
        <h2><?php echo $event_start; ?></h2>
        <h3><?php the_title(); ?></h3>
        <span><?php echo wp_trim_words( get_the_content(), 225 ); ?></span>
        <a class="read_more" href="<?php the_permalink(); ?>"><?php _e( 'Leia mais' ); ?></a>
    </div>