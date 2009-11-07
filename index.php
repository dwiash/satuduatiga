<?php get_header(); ?>


					<h2></h2>
	<?php if (have_posts()) : ?>
	
				<ul id="TOC">

		<?php while (have_posts()) : the_post(); ?>
		
					<li>
									<span class="postDate"><?php the_time('Y.m.d') ?></span>
									<span class="postTitle">
									  <a title="<?php the_title(); ?>" rel="bookmark" href="<?php the_permalink() ?>">
									    <?php the_title(); ?>
									  </a>
									  <span class="commentCount">
									    &#8212; 
									    <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
								    </span>
									</span>
					</li>

		<?php endwhile; ?>

				</ul>
				
	<?php else : ?>
	
	<?php endif; ?>	
	


<?php get_footer(); ?>
