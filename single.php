<?php get_header(); ?>

<?php 
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    if($featured_img_url == false){
?>

    <div class="workshop-big-image" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero-image.jpg')"></div>

<?php
    }else{
?>

    <div class="workshop-big-image" style="background-image:url('<?php echo $featured_img_url ?>')"></div>

<?php
    }
?>

<div class="wrapper-workshop">
    <h1><?php the_title() ?></h1>
    <?php get_template_part('includes/section','content'); ?>
</div>

<?php get_footer(); ?>