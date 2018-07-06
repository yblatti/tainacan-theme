<?php get_header(); ?>

<!-- Get the banner to display -->
<?php get_template_part( 'template-parts/bannerHeader' ); ?>
<!-- Get the menu if is create in panel admin -->
<?php get_template_part( 'template-parts/menuBellowBanner' ); ?>

<main role="main" class="max-large margin-one-column">
    <div class="row">
        <div class="col col-sm mx-sm-auto">
            <div class="form-inline mt-4 tainacan-collection-list--simple-search">
                <?php //_e('Order by', 'tainacan-theme'); ?>
                <!-- <select class="custom-select" name="orderby">
                    <option value="date" <?php //selected('date', get_query_var('orderby')); ?> >
                        <?php //_e('Creation date', 'tainacan-theme'); ?>
                    </option>
                    <option value="title" <?php //selected('title', get_query_var('orderby')); ?> >
                        <?php //_e('Title', 'tainacan-theme'); ?>
                    </option>
                </select> -->
                
                <div class="dropdown">
                    <button class="btn bg-white dropdown-toggle text-black" type="button" id="dropdownMenuSorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php _e('Sorting', 'tainacan-theme'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSorting">
                        <a class="dropdown-item <?php tainacan_active(get_query_var('orderby'), 'date'); ?>" href="<?php echo add_query_arg('orderby', 'date'); ?>"><?php _e('Creation date', 'tainacan-theme'); ?></a>
                        <a class="dropdown-item <?php tainacan_active(get_query_var('orderby'), 'title'); ?>" href="<?php echo add_query_arg('orderby', 'title'); ?>"><?php _e('Title', 'tainacan-theme'); ?></a>
                    </div>
                </div>
                    
                <a class="btn btn-white bg-white margin-one-column-left <?php tainacan_active(get_query_var('order'), 'ASC'); ?>" href="<?php echo add_query_arg('order', 'ASC'); ?>">
                    <i class="mdi mdi-sort-ascending"></i>
                </a>
                <a class="btn btn-white bg-white <?php tainacan_active(get_query_var('order'), 'DESC'); ?>" href="<?php echo add_query_arg('order', 'DESC'); ?>">
                    <i class="mdi mdi-sort-descending"></i>
                </a>
                
                <div class="dropdown margin-one-column-left">
                    <button class="btn bg-white dropdown-toggle text-black" type="button" id="dropdownMenuViewMode" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-view-list text-oslo-gray"></i>
                        <?php _e('View Mode', 'tainacan-theme'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuViewMode">
                        <a class="dropdown-item <?php tainacan_active(get_query_var('tainacan_collections_viewmode'), 'table'); ?>" href="<?php echo add_query_arg('tainacan_collections_viewmode', 'table'); ?>"><?php _e('Table', 'tainacan-theme'); ?></a>
                        <a class="dropdown-item <?php tainacan_active(get_query_var('tainacan_collections_viewmode'), 'cards'); ?>" href="<?php echo add_query_arg('tainacan_collections_viewmode', 'cards'); ?>"><?php _e('Cards', 'tainacan-theme'); ?></a>
                        <a class="dropdown-item <?php tainacan_active(get_query_var('tainacan_collections_viewmode'), 'grid'); ?>" href="<?php echo add_query_arg('tainacan_collections_viewmode', 'grid'); ?>"><?php _e('Grid', 'tainacan-theme'); ?></a>
                    </div>
                </div>

                <?php //_e('View Mode', 'tainacan-theme'); ?>
                <!-- <select class="custom-select" name="tainacan_collections_viewmode">
                    <option value="table" <?php //selected('table', get_query_var('tainacan_collections_viewmode')); ?> >
                        <?php //_e('Table', 'tainacan-theme'); ?>
                    </option>
                    <option value="cards" <?php //selected('cards', get_query_var('tainacan_collections_viewmode')); ?> >
                        <?php //_e('Cards', 'tainacan-theme'); ?>
                    </option>
                    <option value="grid" <?php //selected('grid', get_query_var('tainacan_collections_viewmode')); ?> >
                        <?php //_e('Grid', 'tainacan-theme'); ?>
                    </option>
                </select> -->
                
                <form role="search" class="ml-auto" method="get" id="tainacan-collection-search">
                    <input type="hidden" name="orderby" value="<?php echo get_query_var('orderby'); ?>" />
                    <input type="hidden" name="order" value="<?php echo get_query_var('order'); ?>" />
                    <input type="hidden" name="tainacan_collections_viewmode" value="<?php echo get_query_var('tainacan_collections_viewmode'); ?>" />
                    <div class="input-group">
                        <input class="form-control rounded-0" type="search" name="s" value="<?php echo get_query_var('s'); ?>" placeholder="<?php _e('Search in collection'); ?>" />
                        <span class="input-group-append">
                            <button class="btn border border-left-0 rounded-0 bg-white text-midnight-blue" type="submit">
                                <i class="mdi mdi-magnify" style="line-height: inherit;"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>

            <?php get_template_part('template-parts/loop-tainacan-collection', get_query_var('tainacan_collections_viewmode')); ?>
        </div>
    </div><!-- /.row -->
</main>
<?php get_footer(); ?>