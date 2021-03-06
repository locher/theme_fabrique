<?php get_header(); ?>
        
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="content">           
            <h1><?php the_title(); ?></h1>             
            <?php the_content();?>
        </div>
        
            
            <?php if(have_rows('images_projet')):?>
            <div class="img-folio-wrapper">

               <?php
                while(have_rows('images_projet')) : the_row(); 
                $projet_img = get_sub_field('image');
                
                // thumbnail
                $size = 'moyenne';
                $thumb = $projet_img['sizes'][ $size ];
                $width = $projet_img['sizes'][ $size . '-width' ];
                $height = $projet_img['sizes'][ $size . '-height' ];                
                
                ?>
                
                <div>
                    <div class="img-wrapper">
                        <img src="<?php echo $thumb;?>" alt="">
                    </div>
                </div>
                

                <?php endwhile;?>

            </div>
            <?php endif;?> 
        
        <?php endwhile; endif;?>
        
<?php get_footer(); ?>