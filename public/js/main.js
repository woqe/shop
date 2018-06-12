/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};

/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

var notify = function(message,color,lifetime){
  var id = Math.floor(Math.random() * 51 + 50);
  if($('div').is('.alert_')){
    $('.alert_').remove();
  }
  $('body').append('\
  <div class="alert_" id="message_notify'+id+'">\
    <div id="message_notify_container">\
      <div id="message_notify_text">'+message+'</div>\
    </div>\
  </div>\
  ');
  $('#message_notify'+id).css({
    'display':'none',
    'position':'fixed',
    'bottom':'0',
    'left':'0',
    'right':'0',
    'z-index':'9999999',
    'height':'7%',
    'background-color':'rgba('+color+',0.8)',
  });

  $('#message_notify_container').css({
    'display':'flex',
    'width':'100%',
    'height':'100%',
  });

  $('#message_notify_text').css({
    'margin':'auto',
    'font-size':'200%',
    'color':'white',
  });

  $('#message_notify'+id).slideDown(200).delay(lifetime).slideUp(200);
  setTimeout(function(){
    $('#message_notify'+id).remove();
  },lifetime+400);
}

var refresh_cart = function(){
  var xhr = new XMLHttpRequest();
  xhr.open('GET','/engine/block/basket/get.php', true);
  xhr.send();
  xhr.onreadystatechange = function(){
    if (xhr.readyState != 4) return;
    if (xhr.status != 200) {
      alert(xhr.status + ': ' + xhr.statusText);
    } else {
      if(xhr.responseText!=''){
        var json_basket = JSON.parse(xhr.responseText);
        $('#cart_text').html('<i class="fa fa-shopping-cart"></i> '+json_basket.count+' товаров на сумму '+json_basket.summ+' р.');
      }
    }
  }
}
