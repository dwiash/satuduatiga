<?php get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<ul id="topNav">
				  <li>
		        <?php previous_post_link('<span id="navPrev" > %link </span>', '<span class="navText" title="%title">%title</span>') ?>
	        </li>
				  <li>
				    <a id="navHome" href="<?php bloginfo('home'); ?>" title="Blog Index">
				      <span class="navText">
  				      Blog Index
				      </span>
				    </a>
				  </li>
				  <li>
		        <?php next_post_link('<span id="navNext" > %link </span>', '<span class="navText" title="%title">%title</span>') ?>
				  </li>
				</ul>
				
				<span id="date"><?php the_time('Y.m.d') ?></span>
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>
				
				
				<div id="comment_container">
				  <?php comments_template(); ?>
				</div>
				
	<?php endwhile; else: ?>
	      <div id="error-404">
	        THE <br />
	        REQUESTED <br />
	        PAGE <br />
	        WAS <br />
	        NOT <br />
	        FOUND!
	      </div>
	  

<?php endif; ?>				
				

<?php get_footer(); ?>
