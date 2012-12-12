<?php blocks_header($page); global $root;?>

    <div id="heading_wrapper">
      <div id="heading_wrapper_after">
   	    <div class="row">
          <div class="twelve columns">
            <h3 class="page_heading_text"><?php print $title; ?></h3>
            <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
          </div>
        </div>
      </div> 
    </div>   
    
    <div class="row">
      <div class="three columns">
        <h3>Steve McQueen - CEO</h3>
	      <img src="<?php echo $root;?>/images/team3.jpg"> 
	      <h3>Bio</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h3>Connect</h3>
	        <ul class="member_icons">
	          <li><a href="#" target="_blank"><i class="social foundicon-twitter"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-facebook"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-linkedin"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-pinterest"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-google-plus"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-flickr"></i></a></li>       
          </ul>       
        </div>
      
      <div class="three columns">
        <h3>Robyn Sullivan - Vice President</h3>
	      <img src="<?php echo $root;?>/images/team2.jpg"> 
	      <h3>Bio</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h3>Connect</h3>
	      <ul class="member_icons">
	          <li><a href="#" target="_blank"><i class="social foundicon-twitter"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-facebook"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-linkedin"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-pinterest"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-google-plus"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-flickr"></i></a></li>       
          </ul>     
      </div>
      
      <div class="three columns">
        <h3>Aiko Takahashi - Design</h3>
	      <img src="<?php echo $root;?>/images/team1.jpg"> 
	      <h3>Bio</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h3>Connect</h3>
	      <ul class="member_icons">
	          <li><a href="#" target="_blank"><i class="social foundicon-twitter"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-facebook"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-linkedin"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-pinterest"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-google-plus"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-flickr"></i></a></li>       
          </ul>     
      </div>
      
      <div class="three columns">
        <h3>Frank Douglas - Marketing</h3>
	      <img src="<?php echo $root;?>/images/team4.jpg"> 
	      <h3>Bio</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h3>Connect</h3>
	      <ul class="member_icons">
	          <li><a href="#" target="_blank"><i class="social foundicon-twitter"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-facebook"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-linkedin"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-pinterest"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-google-plus"></i></a></li>
	          <li><a href="#" target="_blank"><i class="social foundicon-flickr"></i></a></li>       
          </ul>     
      </div>
    
    </div>    
    
<?php blocks_footer($page);?>