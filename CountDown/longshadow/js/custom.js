$(document).ready(function () {
       var clock = $('.countdown').FlipClock(3600 * 24 * 324, {
           clockFace: 'DailyCounter',
           countdown: true
       });

       $(".your-clock").append('<span class="test">');
       $("span.dias").nextUntil("span.horas").wrapAll("<div class='dias-wrap'></div>");
       $("span.horas").nextUntil("span.minutos").wrapAll("<div class='horas-wrap'></div>");
       $("span.minutos").nextUntil("span.segundos").wrapAll("<div class='mins-wrap'></div>");
       $("span.segundos").nextUntil("span.test").wrapAll("<div class='segundos-wrap'></div>");
       $(".test").remove();

    $('.theme-change li a').click(function(){
      if ($(".theme-change li a").hasClass('current')) {
        $(".theme-change li a").removeClass('current'); 
      }
    $(this).addClass('current');
		 $('body').removeClass(b_class);
        var b_class = $(this).attr('class');
        $('body').addClass(b_class);
	})

    $('#submit').click(function() {
        var sEmail = $('#email').val();
        if ($.trim(sEmail).length == 0) {
				$(".error").fadeIn();
            e.preventDefault();
        }
        if (validateEmail(sEmail)) {
			  $(".error").fadeOut();
        }
        else {
				$(".error").fadeIn();
            e.preventDefault();
        }
    });

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

$(function() {
    var input = $('input[type=text]');

    input.focus(function() {
         $(this).val('');
    }).blur(function() {
         var el = $(this);
         if(el.val() == '')
             el.val(el.attr('title'));
    });
 });
  });
  
  	
