<?php
/* Template Name: 会社概要 */
?>
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
                <h2>会社概要</h2>
                <table>
    	            <tr>
    					<th>会社名</th>
    		            <td><?php the_field('add_name'); ?></td>
    	            </tr>
                    <tr>
                        <th>本社</th>
                        <td>
							<?php the_field('add_address'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td><?php the_field('add_time'); ?></td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td><?php the_field('add_money'); ?></td>
                    </tr>
                    <tr>
						<th>従業員数</th>
						<td><?php the_field('add_member'); ?></td>
					</tr>
					<tr>
						<th>電話番号</th>
						<td><?php the_field('add_tel'); ?></td>
					</tr>
    	            <tr>
    					<th>代表者</th>
    		            <td><?php the_field('add_leader'); ?></td>
    	            </tr>
                </table>
            </div>
            <div id="cont_right">
                <div class="sub-menu">
                    <h3>SERVICE</h3>
                    <h4>Web事業</h4>
                    <ul>
                        <li><a href="service.html#s1">ホームページ制作</a></li>
                        <li><a href="service.html#s2">エンジニア派遣</a></li>
                    </ul>
                </div>
            </div>
			<?php get_sidebar(); ?> 
        </div>
    </div>
    <?php get_footer(); ?>