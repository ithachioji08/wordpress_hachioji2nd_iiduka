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
			<div class="information">
				<h2>INFORMATION</h2>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$the_query = new WP_Query( array(
						'post_status' => 'publish',
						'post_type' => 'post', //ページの種類（例、page、post、カスタム投稿タイプ）
						'paged' => $paged,
						'posts_per_page' => 4, // 表示件数
						'orderby'     => 'date',
						'order' => 'DESC',
						'cat' => 1
					) );
					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) : $the_query->the_post();
				?> 
							<dt><?php the_time('Y-m-d')?></dt>
							<dd>
								<span class="tab tag_<?php $cat = get_the_category(); $cat=$cat[0];{echo $cat->slug;}?>">
								<?php $cat=get_the_category();$cat=$cat[0];{echo $cat->cat_name;} ?></span>
								<a href="<?php the_permalink(); ?>"><?php the_title();?>を掲載しました</a>
							</dd>
				<?php endwhile;
					else:
						echo '<div><p>ありません。</p></div>';
					endif;
					wp_pagenavi();
				?>	

			</div>
			
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>