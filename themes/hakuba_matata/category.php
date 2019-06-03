<?php get_header();?>
			<div class="recent_posts">
				<div class="section_title">
					<P><?php single_cat_title(); ?></P>
				</div>
				<div class="article_wrap">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink();?>" >
                    <div class="article">
					<?php
						$image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id, true);
						$category = get_the_category();
						$cat_name = $category[0]->cat_name;
					?>
					<img src="<?php echo $image_url[0]; ?>" class="thumbnail">
                        <div class="article_info">
                            <div class="article_category"><?php echo $cat_name; ?></div>
                            <div class="article_date"><?php echo get_the_date("y/m/d");?></div>
                        </div>
                        <div class="article_title">
                            <p><?php the_title(); ?></p>
                        </div>
					</div>
				</a>
                <?php endwhile;?>
                <?php else : ?>
                <!-- 記事が1件も見つからなかったときの処理 -->
                <?php endif; ?>
				</div>
			</div>
			<?php get_footer();?>
		</section>
		<?php get_template_part('sidemenu');?>
	</div>
</body>
</html>