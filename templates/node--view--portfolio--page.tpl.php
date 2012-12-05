<?php global $root, $base_url;

?>


  <div class="three columns switch <?php print render($content['field_portfolio_description']); ?>" data-category="<?php print render($content['field_portfolio_description']); ?>">
  
    <div class="carousel_item_wrapper"> 
    
      <div class="carousel_item_content">
	      <div class="carousel_item_image">
	        <?php print render($content['field_portfolio_image']); ?>
	      </div>
	      <div class="carousel_item_description">
	        <h3>Test</h3>
	      </div>
      </div>
      
      <div class="carousel_item_hover">
	      <p>Testing hover</p>
	    
	      <p><a href="<?php echo file_create_url($node->field_portfolio_image['und'][0]['uri']); ?>" rel="lightbox" title="Beautiful, isn't it?">Click here</a> to view a picture inside Slimbox.</p>
	    </div>
	    
    </div>  
        
  </div>
  
