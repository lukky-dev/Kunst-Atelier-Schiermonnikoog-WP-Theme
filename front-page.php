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
        <h1> Het kleinste winkeltje van Schiermonnikoog</h1>

In de bus hebben we een hoekje ingericht met enorm leuke kadootjes. Ieder souveniertje is uniek en
gemaakt door eilander handen tijdens lange donkere winters bij de houtkachel.<br>
Piepkleine schilderijtjes op een ezeltje, notitieblokjes gemaakt van gevonden en gerecycelde frutsels.<br>
Speciaal voor het kleinste winkeltje heeft “Kadootje van Schier” armbandjes ontworpen met
schelpjes en stukjes barnsteen.<br> De buurvrouw van “Kadootje van Schier” maakt “Zeepronkjes”.<br> Wat
dat zijn? Dat is niet helemaal uit te leggen, gewoon komen kijken dus.<br> In de Bus!<br>

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