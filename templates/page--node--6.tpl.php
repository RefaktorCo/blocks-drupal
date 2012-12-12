<?php blocks_header($page); global $root;?>

    <div id="heading_wrapper">
      <div id="heading_wrapper_after">
   	    <div class="row">
          <div class="twelve columns">
            <h2 class="page_heading_text"><?php print $title; ?></h2>
            <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
          </div>
        </div>
      </div> 
    </div>   
    
    <div class="row">
      <div class="three columns">
        <h2>Steve McQueen - CEO</h2>
	      <img src="<?php echo $root;?>/images/team3.jpg"> 
	      <h2>Bio</h2>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	      <h2>Connect</h2>
	      <a href="http://facebook.com" target="_blank"><i class="social foundicon-facebook"></i></a> <a href="http://twitter.com" target="_blank"><i class="social foundicon-twitter"></i></a> <a href="http://linkedin.com" target="_blank"><i class="social foundicon-linkedin"></i></a>
      </div>
    
    </div>    
    
<?php blocks_footer($page);?>