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
   
  </header> 
          
<script type="text/javascript">
  jQuery(document).ready(function ($) {
	
	 
	 
    $('input[type="submit"]').addClass('btn');
       
   	$('.has-dropdown ul').addClass('dropdown');
   	 
   	$('.top-bar ul').removeClass('menu');
   	 
   	$('.top-bar ul').addClass('left');
   	
   	$(document).ready(function() {
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
   
   	$('.dropdown').prepend('<li class="title back js-generated"><h5><a href="#">Main Menu</a></h5></li>');
   	  
   	$('.menu_1 a').prepend('<i class="foundicon-heart"></i>');
   	
   	$('.menu_2 a').prepend('<i class="foundicon-website"></i>');
   	
   	$('.menu_3 a').prepend('<i class="foundicon-mic"></i>');
   	
   	$('.menu_4 a').prepend('<i class="foundicon-smiley"></i>');
   	
   	$('.menu_5 a').prepend('<i class="foundicon-phone"></i>');
   	
   	$().UItoTop({ easingType: 'easeOutQuart' });
   	
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