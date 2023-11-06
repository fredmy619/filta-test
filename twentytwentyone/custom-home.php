<?php /* Template Name: Home */ get_header(); ?>

<style>
	h1{
		font-size: 30px;
	}
	
	.product-wrapper{
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-gap: 1rem;
		margin: 2rem 0;
	}

	.product-item{
		border: solid 1px #ccc;
		background: #fff;
		padding: 2rem;
		border-radius: 3px;
	}
	.dashicons-flag{
		position: absolute;
		top: 20px;
		left: 20px;
		color: red;
		font-size: 30px!important;
	}
	.thumbnail-wrapper{
		position: relative;
	}
</style>

	<div class="entry-content">
			
		<div style="max-width: 1000px;">
			<?php 
			$page_title = get_field('title','option');
			$product_count = get_field('products_count','option');
			?>

			<h1><?php echo $page_title;?></h1>

			<div class="products-wrapper">
				<?php
				$posts = get_posts(
					array(
						'posts_per_page' => $product_count,
						'post_type' => 'product',
						'order' => 'ASC',
						'meta_query' => array(
							'relation' => 'AND',
							array(
								'key' => 'product_of_the_day',
								'value' => 'Yes'
							)
						)
					)
				);

				if( $posts ): ?>
					
					<div class="product-wrapper">
						
					<?php foreach( $posts as $post ): setup_postdata( $post );
						
						$image_url = get_the_post_thumbnail_url($post->ID,'medium');
						$featured = get_field('product_of_the_day');
						?>
						<div class="product-item">
							
							<p><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></p>
							<div class="image">
								<?php
								if(!empty($image_url)){?>
								<div class="thumbnail-wrapper">
									<?php if($featured==="Yes"){?>
										<span class="dashicons dashicons-flag"></span>
									<?php } ?>
									<a href="<?php the_permalink();?>" title="<?php echo esc_html($title);?>">
										<img src="<?php echo $image_url;?>" alt="<?php echo esc_html($title);?>" width="214" height="120">
									</a>
								</div>
								<p><?php the_excerpt();?></p>
								<?php } ?>
							</div>
						</div>
					
					<?php endforeach; ?>
					
					</div>
					
					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
