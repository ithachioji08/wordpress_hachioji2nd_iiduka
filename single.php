<?php get_header(); ?> 
<div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
                <?php if(have_posts()): while(have_posts()): the_post();?>
                <?php the_time('Y/m/d'); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
			<?php get_sidebar(); ?>
        </div>
    </div>
	<?php get_footer(); ?>