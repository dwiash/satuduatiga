<?php


function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
     
      <div class="comment-avatar">
         <?php echo get_avatar($comment,$size='50' ); ?>
      </div>
      
      <div class="comment-pointer">&nbsp;</div>
      
      <div class="comment-wrap<?php if(get_comment_author_email()=='dwiasharialdy@gmail.com'){ print(' me'); }?>" >
      

     
        <div class="comment-author vcard">
           <?php printf(__('<span class="fn">%s</span>'), get_comment_author_link()) ?>
            <span class="comment-meta commentmetadata">
              <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>
            </span>
        </div>
        
        <div class="comment-content">
        
          <?php if ($comment->comment_approved == '0') : ?>
             <em><?php _e('Your comment is awaiting moderation.') ?></em>
             <br />
          <?php endif; ?>

          <?php comment_text() ?>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
          
        </div>
        
      </div>

     </div>
   </li>
<?php
}



?>
