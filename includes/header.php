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
            <li><i class="general foundicon-settings"></i> Login</li>
            <li><i class="general foundicon-mail"></i> Contact</li>
          </ul>
        </div>
        <div class="six columns">
          <ul class="header_icons">
            <li><i class="social foundicon-facebook"></i></li>
            <li><i class="social foundicon-twitter"></i></li>
            <li><i class="social foundicon-linkedin"></i></li>
            <li><i class="social foundicon-vimeo"></i></li>
            <li><i class="social foundicon-pinterest"></i></li>
            <li><i class="social foundicon-google-plus"></i></li>
            <li><i class="social foundicon-rss"></i></li>
          </ul>  
        </div>
      </div> 
      </div> 
      
      <div class="row">  
      	<div class="twelve columns"> 
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
				         <hr>
				    </div> 
				 
            <!-- end menu -->   
          </div> 
        </div>
        <!-- end main span2 -->  
   
  </header> 
          
<script type="text/javascript">
  jQuery(document).ready(function ($) {
    
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
      onTouch: true
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
			width: 1080,
			height: 420,
			easeType: 'random',
			slideShow: true,
			responsive: true,
			minWidth: 480,
			autoHideButton: true
		});  
		
	
    $('input[type="submit"]').addClass('btn');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.top-bar ul').addClass('left');
   	
  
		
		$(".carousel_item_wrapper .carousel_item_hover").click(function() {
			$(".carousel_item_wrapper .carousel_item_hover").addClass(".carousel_item_hover_click");
    });
    
    
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
   	
   	 $(".live-tile").not(".exclude").liveTile();
   	   	
   	var $tiles = $("#tile1").liveTile({ repeatCount: 0, delay: 0 });
   
   	var isPeeking = false;
   	$("#tile1").hover(function() {
    if (!isPeeking) {
        var tileData = $(this).data("LiveTile");
        tileData.isReversed = false;
        tileData.stops = ['50%'];
        $(this).data("LiveTile", tileData).liveTile('play');
        isPeeking = true;
    }
}, function() {
    if (isPeeking) {
        var tileData = $(this).data("LiveTile");
        tileData.isReversed = false;
        tileData.stops = ['0'];
        $(this).data("LiveTile", tileData).liveTile('play');
        isPeeking = false;
    }
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