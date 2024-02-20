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
				<h2>Blog</h2>
				<dl>
					<dt>2020-08-04</dt>
					<dd>
						<div class="b_img"><img src="images/sample.jpg"></div>
						<div class="b_right"><a href="sample.html">社長通信</a></div>
					</dd>
					<dt>2020-08-02</dt>
					<dd>
						<div class="b_img"><img src="images/sample.jpg"></div>
						<div class="b_right"><a href="sample.html">社員紹介</a></div>
					</dd>
					<dt>2020-08-01</dt>
					<dd>
						<div class="b_img"><img src="images/sample.jpg"></div>
						<div class="b_right"><a href="sample.html">セミナー開催報告</a></div>
					</dd>
					
				</dl>
			</div>
			<div class="information">
				<h2>INFORMATION</h2>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$the_query = new WP_Query( array(
						'post_status' => 'publish',
						'post_type' => 'post', //ページの種類（例、page、post、カスタム投稿タイプ）
						'paged' => $paged,
						'posts_per_page' => 5, // 表示件数
						'orderby'     => 'date',
						'order' => 'DESC'
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
				<?php //endforeach; 
						endwhile;
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