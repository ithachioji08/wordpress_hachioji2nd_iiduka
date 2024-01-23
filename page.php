<?php get_header(); ?> 
	
	<div id="cont_first" class="container">
		<div class="">
			<?php if(function_exists('bcn_display'))
			{
			bcn_display();
			}?>
		</div>
        <div id="contents">
            <div id="cont_left">
			<?php if(have_posts()): while(have_posts()): the_post();?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
	        </div>
			<?php get_sidebar(); ?>
        </div>
    </div>
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
</body>
</html>
<?php get_footer(); ?>