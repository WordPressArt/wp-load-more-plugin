<div class="col-md-4 col-sm-6">
	<div class="post-box equalize-col">
		<div class="post-box-content">
		<div class="image-col">
		<?php $image_url_load_more = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
		 if($image_url_load_more) { 
		 	$image_post_display = $image_url_load_more[0];
		 } else {
		 	$image_post_display = plugin_dir_url(). "/wp-load-more/assets/default.jpg";
		 }
		 // var_dump(plugin_dir_url());
		  ?>
		<img src="<?php echo $image_post_display; ?>" width="100%">
	
		</div>
			<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<div class="post-content"><?php echo wp_trim_words(get_the_content(), 12, "..." ); ?></div>	
			<div class="readmore-container">
			<a href="<?php the_permalink(); ?>">Read more</a>
			</div>
		</div>
		
	</div>
</div>

