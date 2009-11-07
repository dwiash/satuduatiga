<?php get_header(); ?>

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

<?php get_footer(); ?>
