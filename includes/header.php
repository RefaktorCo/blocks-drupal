<?php 
function blocks_header($page){
  global $root; 
?>
  <header>
    <div class="container">
      <div class="row">  
      	<div class="twelve columns"> 
          <div id="nav">
            <div class="row">
      
              <div class="twelve columns">
            <!-- begin menu -->
             <nav class="top-bar">
              <ul class="left">
              <li class="name">
	              <h1>
	                <a href="#">
	                  Blocks - Drupal 7
	                </a>
	              </h1>
	            </li>
              <li class="toggle-topbar"><a href="#"></a></li>
              </ul>
              <section>
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
      </div>
    </div>
  </header> 
          
<script type="text/javascript">
  jQuery(document).ready(function ($) {
	
	  $().UItoTop({ easingType: 'easeOutQuart' });
	 
    $('input[type="submit"]').addClass('btn');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.top-bar ul').addClass('left');
   	  
   
   	
   	$('.dropdown').prepend('<li class="title back js-generated"><h5><a href="#">Main Menu</a></h5></li>');
   	  
   	$('.menu_1 a').prepend('<i class="foundicon-heart"></i>');
   	
   	$('.menu_2 a').prepend('<i class="foundicon-website"></i>');
   	
   	$('.menu_3 a').prepend('<i class="foundicon-mic"></i>');
   	
   	$('.menu_4 a').prepend('<i class="foundicon-smiley"></i>');
   	
   	$('.menu_5 a').prepend('<i class="foundicon-phone"></i>');
   	
   	$(".live-tile").not(".exclude").liveTile();
   	
   	
	
	  $('ul#quotes').quote_rotator();
	
	 
	  
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