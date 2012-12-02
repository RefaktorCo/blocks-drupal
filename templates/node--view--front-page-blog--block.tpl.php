<div class="six columns">
  <div id="blog_tiles">
    <div>
    <?php print render($content['field_image']); ?>
      <div class="blog_info" style="display: block;
	background: #5f419b;
	color: #fff;
	
	height: 100%;
	width: 50%;
	top: 0%;
	position: absolute;
	padding:15px;
	 -moz-transition: all 0.4s ease-in-out;
   -webkit-transition: all 0.4s ease-in-out;
   -o-transition: all 0.4s ease-in-out;
   transition: all 0.4s ease-in-out; font-size: 20px;">
     <h2 style="text-decoration: none; color: white;"><?php print $title; ?></h2>
    <i class="general foundicon-calendar"></i><?php print format_date($node->created, 'custom', 'M d, Y'); ?>
    <i class="general foundicon-mic"></i><a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?></a>
    
      </div>
    </div>
    <div class="tile_contents ">
    <p style="padding-top:-20%; padding-left: 50%; color: black;"><a href="#" style="line-height: 12px" data-reveal-id="myModal_<?php print $node->nid; ?>"><i class="general foundicon-search"></i></a><a href="<?php print $node_url; ?>" style="line-height: 12px"><i class="general foundicon-paper-clip"></i></a></p>
    </div>
  </div>  
</div>



<div id="myModal_<?php print $node->nid; ?>" class="reveal-modal large blog_front three columns">
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <?php if ($user_picture || $display_submitted || !$page): ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
    <a href="<?php print $node_url; ?>"><h3 class="blog_front_title"><?php print $title; ?></h3></a>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <div class="post_image"><?php print render($content['field_image']); ?></div>
    <?php if ($display_submitted): ?>
      <ul class="blog_front_meta">
        <li><i class="icon-calendar"></i> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></li>
        <li><i class="icon-comment"></i> <a href="<?php print $node_url;?>/#comments"><?php print $comment_count; ?></a></li>
     </ul>
    <?php endif; ?>
  <?php endif; ?>
  
  <div class="blog_front_content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_image']);
      
     print render($content);
     
   
     
    ?>
    
  

  </div>
  <div class="clearfix"></div>

  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
<a class="close-reveal-modal">&#215;</a>
</div>
