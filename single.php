<?php get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	      
	      <?php posts_nav_link('sep','prelabel','nxtlabel'); ?>

				<ul id="topNav">
				  <li>
		        <?php previous_post_link('%link', '<span title="(PREVIOUS) %title" id="navPrev" ><span class="navText">%title</span></span>') ?>
	        </li>
	        
          <li>
            <a href="<?php bloginfo('home'); ?>/">
              <span id="navHome" title="Blog Index">
                <span class="navText">Blog Index</span>
              </span>
            </a>	        
          </li>	        
	        
				  <li>
		        <?php next_post_link('%link', '<span title="(NEXT) %title" id="navNext" ><span class="navText">%title</span></span>') ?>
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
