<?php get_header(); ?>
<?php 
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    if($featured_img_url == false){
?>
    <div class="page-big-image" style="background-image:url('https://via.placeholder.com/250x220')"></div>
<?php
    }else{
?>
    <div class="page-big-image" style="background-image:url('<?php echo $featured_img_url ?>')"></div>
<?php
    }
?>
<div class="wrapper">
    <h1><?php the_title(); ?></h1><hr>
    <?php get_template_part('includes/section','content'); ?>

</div>
<?php get_footer(); ?>