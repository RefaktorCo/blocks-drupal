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
            <li><a href="#" data-reveal-id="login_modal" class="has-tip" data-width="50" title="Login"><i class="general foundicon-settings"></i></a></li>
            <li> <a href="#" data-reveal-id="contact_modal" class="has-tip" data-width="60" title="Contact"><i class="general foundicon-mail"></i></a></li>
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
        <div class="three columns" style="padding-top: 15px;">
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
            <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          <?php endif; ?>
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
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
	                  Blocks 
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
            $(this).children(".carousel_item_hover").fadeTo(400,.85).show();
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
			slideShow: true,
			responsive: true,
			minWidth: 480,
			pauseByHover: true, 
			autoHideButton: true
		});  
		
	
    $('input[type="submit"]').addClass('small button');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.menu_wrap ul').addClass('right');
   	
  

	       
    
    
    $('#recent_projects').after('<div style="clear:both;"></div>');
   
   	$('.dropdown').prepend('<li class="title back js-generated"><h5><a href="#">Main Menu</a></h5></li>');
   	  
   	$('.menu_1 a').prepend('<i class="general foundicon-heart"></i>');
   	
   	$('.menu_2 a').prepend('<i class="general foundicon-website"></i>');
   	
   	$('.menu_3 a').prepend('<i class="general foundicon-mic"></i>');
   	
   	$('.menu_4 a').prepend('<i class="general foundicon-smiley"></i>');
   	
   	$('.menu_5 a').prepend('<i class="general foundicon-phone"></i>');
   	
   	$().UItoTop({ easingType: 'easeOutQuart' });
   	
   	$("#test").click(function() {
			$("#test").addClass(".expand-first-hover");
    });
   	
   			
	  $("#google_map").fitMaps( {w: '100%', h:'370px'} ); 
	 
	  jQuery("ul.accordion li").each(function(){
	    if(jQuery(this).index() > 0){
	    jQuery(this).children(".accordion-content").css('display','none');
	    }
	    else{
	    jQuery(this).find(".accordion-head-image").addClass('active');
	    }
	
	    jQuery(this).children(".accordion-head").bind("click", function(){
	    jQuery(this).children().addClass(function(){
	    if(jQuery(this).hasClass("active")) return "";
	      return "active";
	    });
	    jQuery(this).siblings(".accordion-content").slideDown();
	    jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
	    jQuery(this).parent().siblings("li").find(".active").removeClass("active");
	    });
	  });
	});
    
</script>
<?php }
?>