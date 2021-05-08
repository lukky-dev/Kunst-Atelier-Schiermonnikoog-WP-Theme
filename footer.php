
<?php wp_footer(); ?>
<div class="footer">
    <div class="left">
        <h3>Contact </h3>
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=Contact' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
</div>
<div class="right"> 
    Website door <a href="http://www.lukky.nl">Sybren Lukkien</a>
</div>
</footer>
</body>
</html>