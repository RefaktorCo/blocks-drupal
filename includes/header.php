<?php 
function blocks_header($page){
  global $root; 
?>
<div id="main_wrapper">
  <header>
    <div class="container">
       
      <div id="top_header" > 
      <div class="row">
        <div class="six columns">
          <ul class="header_icons left">
            <li><a href="#" data-reveal-id="login_modal"><i class="general foundicon-settings"></i></a></li>
            <li> <a href="#" data-reveal-id="contact_modal"><i class="general foundicon-mail"></i></a></li>
          </ul>
        </div>
        <div class="six columns">
          <ul class="header_icons">
           
            <?php if (theme_get_setting('twitter_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('twitter_url'); ?>" target="_blank"><i class="social foundicon-twitter"></i></a></li><?php endif ?>
             <?php if (theme_get_setting('facebook_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('facebook_url'); ?>" target="_blank"><i class="social foundicon-facebook"></i></a></li><?php endif ?>
               <?php if (theme_get_setting('google_plus_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('google_plus_url'); ?>" target="_blank"><i class="social foundicon-google-plus"></i></a></li><?php endif ?>
               <?php if (theme_get_setting('pinterest_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('pinterest_url'); ?>" target="_blank"><i class="social foundicon-pinterest"></i></a></li><?php endif ?>
               <?php if (theme_get_setting('linkedin_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('linkedin_url'); ?>" target="_blank"><i class="social foundicon-linkedin"></i></a></li><?php endif ?>
             <?php if (theme_get_setting('flickr_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('flickr_url'); ?>" target="_blank"><i class="social foundicon-flickr"></i></a></li><?php endif ?>
             <?php if (theme_get_setting('youtube_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('youtube_url'); ?>" target="_blank"><i class="social foundicon-youtube"></i></a></li><?php endif ?>
             <?php if (theme_get_setting('rss_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('rss_url'); ?>" target="_blank"><i class="social foundicon-rss"></i></a></li><?php endif ?>

          </ul>  
        </div>
      </div> 
      </div> 
      
      <div class="row">  
        <div class="three columns branding" >
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
            <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
              <h2 id="main_title_slogan"><?php print variable_get('site_slogan'); ?></h2>
            </a>
          <?php endif; ?>
        </div>
      	<div class="nine columns"> 
          <div id="nav">
            <!-- begin menu -->
             <nav class="top-bar">
              <ul class="left">
              <li class="name">
	              <h1>
	                <a href="#">
	                  Select a page 
	                </a>
	              </h1>
	            </li>
              <li class="toggle-topbar"><a href="#"></a></li>
              </ul>
              <section class="menu_wrap">
				          <?php print theme('links__system_main_menu', array(
				            'attributes' => array(
				              'id' => 'main-menu-links',
				              'class' => array('links', 'clearfix'),
				            ),
				            'heading' => array(
				              'text' => t('Main menu'),
				              'level' => 'h2',
				              'class' => array('element-invisible'),
				            ),
				          )); 
				          ?>
              </section>
             </nav>
				      </div> 
				        
				    </div> 
				 
            <!-- end menu -->   
          </div> 
        </div>
        <!-- end main span2 -->  
        
        <div id="slideout">
	      <div id="slidecontent">
	      
		      <h6 class="switch_heading">Colors</h6>
		        <div class="color_switch_wrap">
					    <ul id="color-nav">
					      <li class="<?php echo $root;?>/css/colors/default.css"><div class="switch_tile blue"></div></li>
					      <li class="<?php echo $root;?>/css/colors/black.css"><div class="switch_tile black"></li>
					      <li class="<?php echo $root;?>/css/colors/green.css"><div class="switch_tile green"></li>
					      <li class="<?php echo $root;?>/css/colors/orange.css"><div class="switch_tile orange"></li>
					      <li class="<?php echo $root;?>/css/colors/red.css"><div class="switch_tile red"></li>
					      <li class="<?php echo $root;?>/css/colors/teal.css"><div class="switch_tile teal"></li>
					      <li class="<?php echo $root;?>/css/colors/purple.css"><div class="switch_tile purple"></li>
					 		  <li class="<?php echo $root;?>/css/colors/yellow.css"><div class="switch_tile yellow"></li>
					    </ul>
			      </div>
			      
			      <h6 class="switch_heading">Heading Patterns</h6>  
			        <ul id="heading-bg-nav">
			          <li class="shattered-bg"><div class="switch_tile shattered"></div></li>
			          <li class="tile-bg"><div class="switch_tile tile_bg"></div></li>
			          <li class="checkered-bg"><div class="switch_tile checkered"></div></li>  
			        </ul>
			      
			    <h6 class="switch_heading">Layout</h6>  
			      <ul id="layout-nav">
			        <li class="switch_wide"><a class="tiny secondary button">Wide</a></li>
			        <li class="switch_boxed"><a class="tiny secondary button">Boxed</a></li>
			      </ul>  
	  
			    <div class="bg_patterns_wrap">
				    <h6 class="switch_heading">Background Patterns</h6>
				    <ul id="bg-nav">
				      <li class="grey-bg"><div class="switch_tile grey-bg"></li>
				      <li class="grid-bg"><div class="switch_tile grid-bg"></li>
				      <li class="cream-bg"><div class="switch_tile cream-bg"></li>
				      <li class="gplay-bg"><div class="switch_tile gplay-bg"></li>
				    </ul>
				   </div>
				   
				   <div class="bg_patterns_wrap">
				    <h6 class="switch_heading">Background Colors</h6>
				    <ul id="bg-nav">
				      <li class="blue-bg"><div class="switch_tile blue"></li>
				      <li class="black-bg"><div class="switch_tile black"></li>
				      <li class="green-bg"><div class="switch_tile green"></li>
				      <li class="orange-bg"><div class="switch_tile orange"></li>
				    </ul>
			    </div>
			    
	      </div>
      
	      <div id="clickme">
	       <img src="<?php echo $root;?>/images/switch/edit.png" alt="switch">
	      </div>
      
        </div>
   
  </header> 
  
  <!-- Header login modal (block region) -->    
    <div id="login_modal" class="reveal-modal medium">
	    <?php if(!$page['header_login']) {?>
        <h2>Add the user menu block here or your own custom code</h2>
      <?php } else { print render($page['header_login']); }?>  
      <a class="close-reveal-modal">&#215;</a>
    </div>

    <!-- Header contact modal (block region) -->  
    <div id="contact_modal" class="reveal-modal medium">
      <?php if(!$page['header_contact']) {?>
        <h2>Add the contact block here or your own custom code</h2>
      <?php } else { print render($page['header_contact']); }?> 
      <a class="close-reveal-modal">&#215;</a>
    </div>

          
<script type="text/javascript">
  jQuery(document).ready(function ($) {
    
    jQuery(document).ready(function ($) {
      $("#color-nav li ").click(function() { 
        $("link.switch").attr("href",$(this).attr('rel'));
      });
    });

	jQuery(document).ready(function ($) {
	  $('#slideout').hover(function() {
	    $(this).animate({left:'0px'}, {queue:false, duration: 500});
	  }, 
	  function() {
	    $(this).animate({left:'-150px'}, {queue:false, duration: 500});
	  });
	}); 
	
	jQuery(document).ready(function ($) {
      $("#color-nav li").click(function() { 
        $("link.switch").attr("href",$(this).attr('class'));
      });
      
      $(".grey-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/grey.png)");
      });
      
      $(".grid-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/noisy_grid.png)");
      });
      
      $(".cream-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/cream_dust.png)");
      });
      
      $(".gplay-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/gplaypattern.png)");
      });
      
      $(".shattered-bg").click(function() {
        $('#heading_wrapper').css("background-image", "url(http://localhost:8888/development/blocks_demo/sites/all/themes/blocks-drupal/images/heading-backgrounds/shattered.png)");
      });
      
       $(".tile-bg").click(function() {
        $('#heading_wrapper').css("background-image", "url(http://localhost:8888/development/blocks_demo/sites/all/themes/blocks-drupal/images/heading-backgrounds/tile.png)");
      });
      
       $(".checkered-bg").click(function() {
        $('#heading_wrapper').css("background-image", "url(http://localhost:8888/development/blocks_demo/sites/all/themes/blocks-drupal/images/heading-backgrounds/checkered.png)");
      });
      
      $(".blue-bg").click(function() {
        $('body').css({'background-image': 'none', 'background': '#2f88f0'});
      });
      
      $(".black-bg").click(function() {
        $('body').css({'background-image': 'none', 'background': '#000'});
      });
      
      $(".green-bg").click(function() {
        $('body').css({'background-image': 'none', 'background': '#8fad30'});
      });
      
      $(".orange-bg").click(function() {
        $('body').css({'background-image': 'none', 'background': '#DB8916'});
      });
      
      $(".switch_wide").click(function() {
        $('#main_wrapper').css({ 'max-width': '100%', 'margin': '0 auto' });
        $('header').css({ 'max-width': '100%'});
        $('#heading_wrapper').css({'box-shadow': '0px 0px 3px 0px black'});
        $('.bg_patterns_wrap').css({ 'display': 'none'});
      });

      $(".switch_boxed").click(function() {
        $('#main_wrapper').css({ 'max-width': '1120px', 'margin': '0 auto'});
        $('#heading_wrapper').css({'box-shadow': 'none'});
        $('header').css({ 'max-width': '1120px'});
        $('.bg_patterns_wrap').css({ 'display': 'block'});

      });
      
    });

  
  $(".featured").orbit({timer: false});
 
  $(".recent_posts_wrap").live({
		mouseenter : function(){
			$(this).children("div.recent_post_info").stop().animate({left: "50%"}, 300 );
		},
		mouseleave : function(){
			$(this).children("div.recent_post_info").stop().animate({left: "0%"}, 300 );
		}
	});
	    
	  $(".services_content").hover(
        function(){
            $(this).children(".team_image_hover").fadeTo(400,.8).show();
        },
        function(){
            $(this).children(".team_image_hover").fadeTo(400,0);
        }
    );
    
    
    $(".carousel_item_wrapper").hover(
        function(){
            $(this).children(".carousel_item_hover").fadeTo(400,.9).show();
        },
        function(){
            $(this).children(".carousel_item_hover").fadeTo(400,0);
        }
    );
    
   
       

   	
	$(".recent_post_photo a").replaceWith(function() {  return $(this).contents(); });
    
   $(window).load(function(){
   var $container = $('#isotope_test');

      $container.isotope({
        itemSelector : '.switch'
      });
      

      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });
    });  

  
  $('#recent_projects').carouFredSel({
    width: '100%',
    responsive: true,
    circular : false,
    infinite : false,
    auto: false,
    next : {
      button : "#next",
      key	: "right"
    },
    prev : {
      button : "#prev",
      key	: "left"
    },
    swipe: {
      onMouse: true,
      onTouch: false
    },
    items: {
      
      visible: {
        min: 1,
        max: 4
      }
    }
  });
  
  		
        $('#banner').oneByOne({
			className: 'oneByOne1',	             
			/* Please provide the width and height in the responsive 
			version, for the slider will keep the ratio when resize 
			depends on these size. */
			width: 1050,
			height: 420,
			easeType: 'random',
			slideShow: false,
			enableDrag: false, 
			responsive: true,
			minWidth: 480,
			pauseByHover: true, 
			autoHideButton: false
		});  
		
	
    $('input[type="submit"]').addClass('small button');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.menu_wrap ul').addClass('right');
   	
  

	       
    
    
    $('#recent_projects').after('<div style="clear:both;"></div>');
   
   	$('.dropdown').prepend('<li class="title back js-generated"><h5><a href="#">Main Menu</a></h5></li>');
   	  
   	$('.menu_1 a').prepend('<i class="general foundicon-heart"></i>');
   	
   	$('.menu_2 a').prepend('<i class="general foundicon-smiley"></i>');
   	
   	$('.menu_3 a').prepend('<i class="general foundicon-mic"></i>');
   	
   	$('.menu_4 a').prepend('<i class="general foundicon-website"></i>');
   	
   	$('.menu_5 a').prepend('<i class="general foundicon-phone"></i>');
   	
   
   	
   	$("#test").click(function() {
			$("#test").addClass(".expand-first-hover");
    });
   	
   			
	  $("#google_map").fitMaps( {w: '100%', h:'370px'} ); 
	 
	  jQuery("ul.faq li").each(function(){
	    if(jQuery(this).index() > 0){
	    jQuery(this).children(".faq-content").css('display','none');
	    }
	    else{
	    jQuery(this).find(".faq-head-image").addClass('active');
	    }
	
	    jQuery(this).children(".faq-head").bind("click", function(){
	    jQuery(this).children().addClass(function(){
	    if(jQuery(this).hasClass("active")) return "";
	      return "active";
	    });
	    jQuery(this).siblings(".faq-content").slideDown();
	    jQuery(this).parent().siblings("li").children(".faq-content").slideUp();
	    jQuery(this).parent().siblings("li").find(".active").removeClass("active");
	    });
	  });
	});
    
</script>
<?php }
?>