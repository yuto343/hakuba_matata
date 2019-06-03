<?php get_header(); ?>
<?php
  //記事のビュー数を更新する関数
  if (!is_user_logged_in() && !is_robots()){
    setPostViews(get_the_ID());
  }
?>
<div class="single_page_content">
<div class="article_info">
    <div class="article_category"><?php the_category(); ?></div>
    <div class="article_date"><?php echo get_the_date("y/m/d");?></div>
</div>
    <div class="article_title">
		<p><?php the_title(); ?></p>
    </div>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <?php the_content();?>
    <?php endwhile;endif; ?>
</div>
<?php get_footer();?>
</section>
<?php get_template_part('sidemenu');?>
	</div>
</body>
</html>
