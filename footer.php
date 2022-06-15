
<?php wp_footer(); ?>

<div class="footer">
    <div class="left">
        <h3>Contact </h3>
<?php

    $your_query = new WP_Query( 'pagename=Contact' );
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;

    wp_reset_postdata();
?>
</div>
<div class="right"> 
    Website door <a href="http://www.lukky.nl">Sybren Lukkien</a>
</div>
</footer>
</body>
</html>