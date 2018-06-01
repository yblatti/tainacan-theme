<?php if (have_posts()):  ?>

    <div class="tainacan-mosaic-container card-columns">

        <?php while (have_posts()): the_post(); ?>
        
                <div class="tainacan-mosaic">
                    <?php if ( tainacan_current_view_displays('thumbnail') ): ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>    
                    <?php endif; ?>
                    <?php if ( tainacan_current_view_displays('title') ): ?>
                        <a href="<?php the_permalink(); ?>">
                            <p class="metadata-title"><?php the_title(); ?></p>
                        </a>
                    <?php endif; ?>
                </div>      

        <?php endwhile; ?>

    </div>

<?php else: ?>
    <div class="tainacan-mosaic-container">
        Nenhum item encontrado
    </div>
<?php endif; ?>