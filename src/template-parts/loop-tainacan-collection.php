<?php if ( have_posts() ) : ?>
	<div class="tainacan-list-post px-md-0 mt-5">
		<div class="tainacan-list-collection--container-card justify-content-center">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="tainacan-list-collection--card">
					<a class="tainacan-list-collection--card-link" href="<?php the_permalink(); ?>">
						<h5 class="tainacan-list-collection--title text-black text-left p-3 mb-0 text-truncate"><?php the_title(); ?></h5>
						<div class="media">
							<?php if ( has_post_thumbnail() ) : ?>
								<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'collection-list-card' ) ?>" class="tainacan-list-collection--card-img rounded-0 align-self-center mr-3" alt="">  
							<?php else : ?>
								<div class="image-placeholder">
									<h4>
									<?php echo tainacan_get_initials( get_the_title() ); ?>
									</h4>
								</div>
							<?php endif; ?>
							<div class="media-body text-oslo-gray">
								<?php if ( get_the_excerpt() ) : ?>
									<p><?php echo wp_trim_words( get_the_excerpt(), 35, '[...]' ); ?></p>
								<?php else : ?>
									<p style="font-style: italic;"><?php _e( 'Description not informed', 'tainacan-interface' ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<?php echo tainacan_pagination( 3 ); ?>

<?php else : ?>
	<?php _e( 'Nothing found', 'tainacan-interface' ); ?>
<?php endif; ?>
