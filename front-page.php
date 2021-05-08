<?php get_header(); ?>

<div class="full-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg')" >
</div>



<div class="wrapper-front">
        <h1><?php the_title() ?> </h1>
        <?php get_template_part('includes/section','content'); ?>
</div>


<div class="triple-image">
        <div class="image-1" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg')"></div>
        <div class="image-2" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg')"></div>
        <div class="image-3" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg')"></div>
</div>

<div class="wrapper-front">
        <?php
        
        $args = array(
                'p'         => 57, // ID of a page, post, or custom type
                'post_type' => 'page'
        );

        $your_query = new WP_Query( $args );
        
        while ( $your_query->have_posts() ) : $your_query->the_post();
                the_title('<h1>','</h1>');

                the_content();
        endwhile;

        wp_reset_postdata();
        ?>
</div>
<div class="quote">
        <?php

        $your_query = new WP_Query( 'pagename=Quote' );

        while ( $your_query->have_posts() ) : $your_query->the_post();
                the_content();
        endwhile;

        wp_reset_postdata();
        ?>
</div>
<?php get_footer(); ?>