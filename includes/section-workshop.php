<?php if( have_posts() ):while( have_posts() ):the_post();?>    
    <a href="<?php the_permalink()?>" 
    >
        <div class="workshop-item">
        
        <?php 
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
            if($featured_img_url == false){
        ?>
            <div class="image" style="background-image:url('https://via.placeholder.com/250x220')">
        <?php
            }else{
        ?>
            <div class="image" style="background-image:url('<?php echo $featured_img_url ?>')">
        <?php
            }
        ?>


            </div>
            <div class="label">
                <h3><?php the_title(); ?></h3>
                <p>
                    <?php
                        the_excerpt(); 
                    ?>
                </p>
            </div>
        </div>
    </a>
<?php endwhile; else: endif; ?>