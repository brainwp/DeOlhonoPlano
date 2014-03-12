<?php
// Template Name: Slider
get_header(); ?>

<div class="content-home" class="clearfix">

	<div class="slider-home">
		<?php if ( is_active_sidebar( 'slider-temp' ) ) : ?>
            <div class="widget-slider">
                <?php dynamic_sidebar( 'slider-temp' ); ?>
            </div><!-- .widget-contador -->
        <?php endif; ?>
    </div><!-- .slider-home -->

    <div class="contador">
		<?php if ( is_active_sidebar( 'contador' ) ) : ?>
            <div class="widget-contador">
                <?php dynamic_sidebar( 'contador' ); ?>
            </div><!-- .widget-contador -->
        <?php endif; ?>
    </div><!-- .contador -->


	<div class="widgets-home">
   		<?php if ( is_active_sidebar( 'widgets-home' ) ) : ?>
            <div class="cada-widget">
                <?php dynamic_sidebar( 'widgets-home' ); ?>
            </div><!-- .cada-widget -->
        <?php endif; ?>
    </div><!-- .widget-home -->
   
    </div><!-- .content-home -->
    </div><!-- .container -->

    <div class="timeline-home">
    	<div class="timeline-home-title"><h1>PROCESSO DE ELABORAÇÃO DO PLANO MUNICIPAL DE EDUCAÇÃO DA CIDADE DE SÃO PAULO</h1></div>
        
        <div class="timeline-loop">
	        <?php donp_timeline(); ?>
        </div><!-- .timeline-loop -->
        
        <div class="quebra-cabeca">
        	<?php 
			//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
			
			$args = array(
			  'taxonomy'     => 'agenda-categoria',
			  'orderby'      => 'name',
			  'show_count'   => 0,
			  'pad_counts'   => 0,
			  'title_li'     => '',
			  'hide_empty'   => 0,
			  'walker' => new donp_wp_list_categories
			);
			?>
			
			<ul class="time-cats">
				<?php wp_list_categories( $args ); ?>
			</ul><!-- .time-cats -->
        </div><!-- .quebra-cabeca -->
        
    </div><!-- .timeline-home -->
    
    <div class="noticias-home">
        <div class="noticias-loop">
		
		<?php if ( 'on' == et_get_option('flexible_display_fromblog_section','on') && ( 'false' == et_get_option('flexible_blog_style','false') ) ) { ?>
            <section id="blog" class="clearfix">
                <h1 class="section-title"><?php esc_html_e( '+ Not&iacute;cias', 'Flexible' ); ?></h1>
        
                <div id="blog-grid">
                    <?php $i = 0; ?>
                    <?php query_posts('showposts=3'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php
                            $i++;
                            $last_class = ( $i % 3 == 0 ) ? ' last' : '';
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-item' . $last_class); ?>>
                            <span class="date"><?php echo get_the_time( 'M' ); ?><strong><?php echo get_the_time( 'd' ); ?></strong></span>
        
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="meta-info"><?php printf( __('Publicado em %1$s por %2$s', 'Flexible'), get_the_time( apply_filters( 'et_home_post_date_format', 'M j' ) ), et_get_the_author_posts_link() ); ?></p>
                            <p><?php truncate_post(180); ?></p>
                        </article> <!-- end .blog-item -->
                    <?php endwhile; else : ?>
                        <article id="post-0" class="post no-results not-found">
                            <h2 class="entry-title"><?php _e( 'Nada encontrado', 'Flexible' ); ?></h1>
                        </article><!-- end #post-0 -->
                    <?php endif; ?>
                </div> <!-- end #blog-grid -->
            </section> <!-- end #blog -->
        <?php } ?>
       
        </div><!-- .noticias-loop -->
	    
    </div><!-- .noticias-home -->

	<div class="container">
    <div class="content-home">

</div> 	<!-- end #content-home -->

<?php get_footer(); ?>
