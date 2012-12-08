<?php 
function blocks_footer($page){
  global $root; 
?>

<!-- begin footer -->        
    <div id="footer"> 
      <div class="container">
        
        <?php if (theme_get_setting('enable_primary_footer') == '1') { ?>
        <div class="row">
        
          <div class="three columns">
            <?php if(!$page['footer_1']) {?>
            <h3>About Us</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
            <ul class="footer_icons">
           
              <li><a href="#" target="_blank"><i class="social foundicon-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="social foundicon-facebook"></i></a></li>
              <li><a href="#" target="_blank"><i class="social foundicon-linkedin"></i></a></li>
              <li><a href="#" target="_blank"><i class="social foundicon-pinterest"></i></a></li>
              <li><a href="#" target="_blank"><i class="social foundicon-google-plus"></i></a></li>
              <li><a href="#" target="_blank"><i class="social foundicon-flickr"></i></a></li>
              <li><a href="#" target="_blank"><i class="social foundicon-youtube"></i></a></li>     
                     
            </ul> 
            <?php } else { print render($page['footer_1']); }?>   
          </div> 
      
          <div class="three columns">
            <?php if(!$page['footer_2']) {?>
            <h3>Footer 2</h3>
            <?php } else { print render($page['footer_2']); }?>  
          </div>
          
          <div class="three columns">
            <?php if(!$page['footer_3']) {?>
            <h3>Footer 3</h3>
            <?php } else { print render($page['footer_3']); }?>  
          </div>
          
          <div class="three columns">
            <?php if(!$page['footer_4']) {?>
            <h3>Latest Tweets</h3>
            <div class='tweet query'></div>
							<script type="text/javascript">
							                        
							    jQuery(document).ready(function ($) {
							      
							      $(".tweet").tweet({
							        username: "envato",
							        avatar_size: 34,
							        count: 3,
							        loading_text: "loading tweets..."
							      });
							    
							    });
							    
							  </script>
          <?php } else { print render($page['footer_4']); }?>      
          </div>
          
        </div> 
        <?php } ?> 
        
        <?php if (theme_get_setting('enable_secondary_footer') == '1') { ?>
        <div class="row">
          <div class="twelve columns"> 
            <?php if(!$page['footer_full']) {?>    
            <hr>
            <h6 class="after_footer"><?php echo theme_get_setting('secondary_footer_text'); ?></h6>
            <?php } else { print render($page['footer_full']); }?>  
          </div> 
        </div>
        <?php } ?>
      </div> 
    </div>
    <!-- end footer --> 
<?php }
?>