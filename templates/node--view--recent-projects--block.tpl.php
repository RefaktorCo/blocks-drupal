<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>

   <li>
 <div class="carousel_item_wrapper"> 
    
      <div class="carousel_item_content">
	      <div class="carousel_item_image">
	        <?php print render($content['field_portfolio_image']); ?>
	      </div>
	      <div class="carousel_item_description">
	        <h3><?php print $title; ?></h3>
	      </div>
      </div>
      
      <div class="carousel_item_hover">
	      <p><?php print $title; ?> </p>
	    
	      <p><a style="line-height: 12px;" href="<?php echo file_create_url($node->field_portfolio_image['und'][0]['uri']); ?>" rel="lightbox" title="<?php print $title; ?>"><i class="general foundicon-search"></i></a><a href="<?php print $node_url;?>" style="line-height: 12px;" > <i class="general foundicon-paper-clip"></i></a></p>
	    </div>
	    
    </div>  
    
   </li>