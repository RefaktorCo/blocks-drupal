<?php 
function blocks_header($page){
  global $root; 
?>
  <header>
    <div class="container">
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
				    </div> 
            <!-- end menu -->   
          </div> 
        </div>
        <!-- end main span2 -->  
   
  </header> 
          
<script type="text/javascript">
  jQuery(document).ready(function ($) {
  
   var $container = $('#isotope_test');

      $container.isotope({
        itemSelector : '.switch'
      });
      
      $container.imagesLoaded( function(){
        $container.isotope({
			    // options...
			  });
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
	
    $('input[type="submit"]').addClass('btn');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.top-bar ul').addClass('left');
   	
   	jQuery(document).ready(function ($) {
		  function filterPath(string) {
		  return string
		    .replace(/^\//,'')
		    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
		    .replace(/\/$/,'');
		  }
		  var locationPath = filterPath(location.pathname);
		  var scrollElem = scrollableElement('html', 'body');
		 
		  $('a[href*=#]').each(function() {
		    var thisPath = filterPath(this.pathname) || locationPath;
		    if (  locationPath == thisPath
		    && (location.hostname == this.hostname || !this.hostname)
		    && this.hash.replace(/#/,'') ) {
		      var $target = $(this.hash), target = this.hash;
		      if (target) {
		        var targetOffset = $target.offset().top;
		        $(this).click(function(event) {
		          event.preventDefault();
		          $(scrollElem).animate({scrollTop: targetOffset}, 900, function() {
		            location.hash = target;
		          });
		        });
		      }
		    }
		  });
		 
		  // use the first element that is "scrollable"
		  function scrollableElement(els) {
		    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
		      var el = arguments[i],
		          $scrollElement = $(el);
		      if ($scrollElement.scrollTop()> 0) {
		        return el;
		      } else {
		        $scrollElement.scrollTop(1);
		        var isScrollable = $scrollElement.scrollTop()> 0;
		        $scrollElement.scrollTop(0);
		        if (isScrollable) {
		          return el;
		        }
		      }
		    }
		    return [];
		  }
		 
		});
		
		$(".carousel_item_wrapper .carousel_item_hover").click(function() {
			$(".carousel_item_wrapper .carousel_item_hover").addClass(".carousel_item_hover_click");
    });
    
    $('#recent_projects').after('<div style="clear:both;"></div>');
   
   	$('.dropdown').prepend('<li class="title back js-generated"><h5><a href="#">Main Menu</a></h5></li>');
   	  
   	$('.menu_1 a').prepend('<i class="foundicon-heart"></i>');
   	
   	$('.menu_2 a').prepend('<i class="foundicon-website"></i>');
   	
   	$('.menu_3 a').prepend('<i class="foundicon-mic"></i>');
   	
   	$('.menu_4 a').prepend('<i class="foundicon-smiley"></i>');
   	
   	$('.menu_5 a').prepend('<i class="foundicon-phone"></i>');
   	
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