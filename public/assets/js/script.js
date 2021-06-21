var wnd = $(window),
    scrollPrev = 0;
wnd.scroll(function(){
  var scrolled = wnd.scrollTop(),
      wndhg = wnd.height(),
      wntop = scrolled + wndhg;
  if (scrolled > 50) {
    $('body').addClass('fix');
  } else {
    $('body').removeClass('fix');
  }
  if (scrolled > 200 && scrolled > scrollPrev  && !$('body').hasClass('openav')) {
    $('body').addClass('fopen');
  } else {
    $('body').removeClass('fopen');
  }
  scrollPrev = scrolled;
  if ($('.anim').length) {
    $('.anim').each(function () {
      var it = $(this).offset().top,
          is = $(this).find('svg, img');
      if (wntop > it && !is.hasClass('active')) {
        is.addClass('active');
        initialize(is);
        setTimeout(function () {
          animate(is);
        }, 500);
      }
    });
  }
  if ($('.srv-im').length && wnd.width() < '1024') {
    $('.srv-im').each(function () {
      var st = $(this).offset().top,
          sv = $(this).find('video');
      if (wntop > st) {
        sv.trigger('play');
      } else {
        sv.trigger('pause');
      }
    });
  }

  $('.glr-im').on('click', function() {
	  window.location.href = $(this).find('a').attr('href');
	});
});

// document.oncontextmenu = prohibit;
// document.onselectstart = prohibit;
// function prohibit() {
// 	console.log('AA');
// 	return false;
// }

if ($(window).width() > '1023') {
  $('.srv-im').hover(function(e){
    $(this).find('video').trigger('play');
  }, function(e){
    $(this).find('video').trigger('pause');
  });

  $('.mut i.videoblock, .mub i.videoblock').hover(function(e){
    $(this).find('video').trigger('play');
  }, function(e){
    $(this).find('video').trigger('pause');
  });

  $('[data-openav]').hover(function(e){
    var tl = $(this).data('openav');
    $('.nav-menu li, .nav-menu li a, .nav-bn-sch').removeClass('active');
    if ($('body').hasClass('openav')) {
      $(this).addClass('active');
      $('.nav-ct > div').hide();
      $('.nav-ct').show().addClass('active').removeClass('onsch').find('.nav-'+tl).show();
    }
    if (tl == 'ucs' && !$('.nav-ucs-sl').hasClass('slick-slider')) {
      $('.nav-ucs-sl').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: true
      });
    }
    if(tl == 'glr' && !$('.nav-glr-sl').hasClass('slick-slider')){
      $('.nav-glr-sl').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: true
      });
    }
  }, function(e){
    $('.nav-ct').removeClass('active');
    setTimeout(function(){
      if (!$('.nav-ct').hasClass('active')) {
        $('.nav-ct').hide();
        $('.nav-menu li').removeClass('active');
      }
    },150);
  });
  $('.nav-ct').hover(function(e){
    if ($('body').hasClass('openav')) {
      $('.nav-ct').show().addClass('active');
    }
  }, function(e){
    if (!$('.nav-ct').hasClass('onsch')) {
      $('.nav-ct').hide().removeClass('active');
      $('.nav-menu li').removeClass('active').find('a').removeClass('active');
    }
  });
} else {
  if($('.cap-z ul li').length > 2){
    $('.cap-z ul').addClass('last').find('li').hide();
  }
  if($('.pcs-im').length > 4){
    $('.pcs-all').show();
  }
  $('.mut i.videoblock, .mub i.videoblock').find('video').trigger('play');
}

$('.humb').on('click', function() {
  if (!$('.humb').hasClass('o-sch')) {
    $('body').toggleClass('openav');
    $('.ov').fadeToggle(300);
    $('.nav-ct').load('/modals/?type=nav');
    if (!$('body').hasClass('openav')) {
      $('.nav-ct').hide();
    }
    setTimeout(function(){
      svg();
    }, 100)
  } else {
    $('.humb, .head').removeClass('o-sch');
    $('.nav-ct').fadeOut(300);
  }
});

$('.pcs-all').on('click', function() {
  $('.pcs-all').slideUp();
  $('.pcs-im').slideDown();
});

$('.ov').on('click', function(){
  $('body').removeClass('openav');
  $('.ov').fadeOut(300);
});

$('.wdg button, .wdg a').on('click', function(){
  $('.wdg').toggleClass('active');
});

$('.nav-bn-sch').on('click', function(){
  $('.nav-ct > div').hide();
  if ($(window).width() > '1023') {
    $(this).toggleClass('active');
    $('.nav-ct').fadeToggle(0).toggleClass('active onsch').find('.nav-sch').fadeToggle(0);
  } else {
    $('.humb, .head').addClass('o-sch');
    $('.nav-ct').fadeToggle(300).toggleClass('active onsch').find('.nav-sch').fadeToggle(0);
  }
});

$('body').delegate('.ajax-form', 'submit', function() {
	event.preventDefault();
});

$('body').delegate('.nav-sch .form input', 'input change', function() {
	event.preventDefault();
  var form = $(this).parents('.form');
  value = $(this).val();
  if (value.length > 2) {
    form.addClass('load active');

    $.ajax({
      type: 'POST',
      url: '/modals/?type=search',
      data: {keyword: value},
      success: function(response) {
	      console.log(response);
	      form.removeClass('load');
	      $('.nav-sch ul').html(response);
	      $('.nav-sch ul').slideDown(300);
      }
    });
  } else {
    form.removeClass('load active');
    $('.nav-sch ul').slideUp(300);
  }
});

$('body').delegate('.qi input, .qt textarea', 'change', function() {
  if($(this).val().length > 0) {
    $(this).addClass('active');
  } else {
    $(this).removeClass('active');
  }
});
$('.qf input').change(function(){
  if($(this).val().replace(/.*\\/, "")=='') {
    $(this).removeClass('active').next('label').text('attach file');
  } else {
    $(this).addClass('active').next('label').text($(this).val().replace(/.*\\/, ""));
  }
});
$('.qf i').on('click', function(){
  $('.qf input').val('').removeClass('active').next('label').text('attach file');
});

$('.mub span a').on('click', function(){
  $(this).hide();
  $('.mub span section').css('max-height', 'none')
});

/*
$('.prc-im a').on('click', function(){
	if($('.lst form input[name=package]').length && $('.prc-im').length){
		package_name = $(this).parents('.prc-im').find('h4').text();
		package_price = $(this).parents('.prc-im').find('.prc-price').text();
		$('.lst form input[name=package]').val(package_name + ' / ' +package_price);
	}
  scroll('.lst', 0);
});
*/

$('body').delegate('.mfp-close, .md-suc a', 'click', function() {
  $.magnificPopup.close();
});

$('body').delegate('.fancy-select', 'click', function() {
  $('.fancy-select').not(this).find('.trigger, .options').removeClass('open');
});

$(window).on('load', function () {
	$('.preloader').fadeOut();

  if($('.wps-bc').length){
    var $wps = $('.wps-bc');
    $wps.masonry({
      itemSelector: '.wps-im',
      columnWidth: '.wps-im',
      percentPosition: true
    });
  }
  if($('.tms').length){
    var $tms = $('.tms-bc');
    $tms.masonry({
      itemSelector: '.tms-im',
      columnWidth: '.tms-im',
      percentPosition: true
    });
    total = $tms.data('count');

    $('.tms .shm').on('click', function(e){
	    offset = $('.tms-bc').find('.tms-im').length;
      $.ajax({
        url:'/modals/?type=tms&offset='+offset,
        data:'',
        success:function (data) {
          $data = $(data);
          $tms.append($data).masonry('appended', $data);
          if(total == $('.tms-bc').find('.tms-im').length){
	          $('.tms .shm').hide();
					}
        }
      });
    });
  }
});

$(document).ready(function() {
	if (wnd.scrollTop() > 50) {
	  $('body').addClass('fix');
	}

  svg();

  $('select').fancySelect();

  if($('.lazy').length){
    $('.lazy').Lazy({
      effect : 'fadeIn'
    });
  }

  if($('.glr-sort').length){
    var $glr = $('.glr-bc');
    var hashID = "." + window.location.hash.substring(1);
    if (hashID == '.') {
      var hash = '*';
    } else {
      var hash = hashID;
    }
    if($('.glr').length){
	    total = $glr.data('count');
	    limit = $glr.data('limit');
    }
		if(location.hash.length && location.hash != '#'){
			$('.tags li[data-filter='+location.hash.substr(1)+']').addClass('active');
			$('.glr-phrases p').hide();
			$('.glr-phrases p.'+location.hash.substr(1)).show();
      setTimeout(function(){
	      items = $('.glr-bc').find('.glr-im:visible').length;
	      if(items < limit && $('.glr .shm').length){
	      	$('.glr .shm').click();
	      }
      }, 1000);

		} else {
			$('.tags .default').addClass('active');
			$('.glr-phrases p').hide();
			$('.glr-phrases p:first-child').show();
		}
    $glr.isotope({
      filter: hash
    });
    $('.glr-sort ul li').on('click', function(){
      $('.glr-sort ul li').removeClass('active');
      $(this).addClass('active');

			var selector = $(this).attr('data-filter');
      if (selector == '*') {
        $glr.isotope({ filter: selector });
				history.replaceState(null, null, ' ');
				$('.glr-phrases p').hide();
				$('.glr-phrases p:first-child').show();
      } else {
        $glr.isotope({ filter: '.'+selector });
				location.hash = '' + encodeURIComponent( selector );
				$('.glr-phrases p').hide();
				$('.glr-phrases p.'+selector).show();
      }
      setTimeout(function(){
	      items = $('.glr-bc').find('.glr-im:visible').length;
	      if(items < limit && $('.glr .shm').length){
	      	$('.glr .shm').click();
	      }
      }, 1000);
      $('.glr-sort').removeClass('open').find('p').text($(this).text());
      return false;
    });
    $('.glr-sort p').on('click', function(){
      $('.glr-sort').toggleClass('open');
    });
    $('.glr .shm').on('click', function(e){
	    offset = $('.glr-bc').find('.glr-im').length;
	    tag = $('.tags li.active').data('filter');
      $.ajax({
        url:'/modals/?type=glr&offset='+offset+'&limit='+limit,
        data:'',
        success:function (data) {
          $data = $(data);
          if(tag != '*'){
	          totalTag = $data.closest('.glr-im.'+tag).length;
          } else {
	          totalTag = $data.closest('.glr-im').length;
          }
	        updated = $data.closest('.glr-im').length;
	        $glr.append($data).isotope('insert', $data);

	        setTimeout(function(){
	         if(totalTag < limit && $('.glr .shm').length && updated > 0){
							$('.glr .shm').click();
	         }
		      }, 100);
          if(total == $('.glr-bc').find('.glr-im').length || updated == 0){
	          $('.glr .shm').remove();
					}
        }
      });
    });
  }

  if($('.glr-sl2').length){
    $('.glr-sl2').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      swipeToSlide: true,
      arrows: false,
      responsive: [
      {
        breakpoint: 4000,
        settings: 'unslick'
      },
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
      ]
    });
  }

  if($('.glr-sl').length){
    $('.glr-sl').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      swipeToSlide: true,
      arrows: true,
      responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
      ]
    });
  }

  if($('.fow').length){
    $('.fow-bc div').slick({
      slidesToShow: 2,
      swipeToSlide: true,
      responsive: [
      {
        breakpoint: 9999,
        settings: 'unslick'
      },
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true
        }
      }
      ]
    });
  }
  if($('.tsb-sl.sliderline').length){
    $('.tsb-sl.sliderline').slick({
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: true,
      dots: true,
      responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: false
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
					swipeToSlide: true,
          dots: false
        }
      }
      ]
    });
  }

  $('.wps-bc').magnificPopup({
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    removalDelay: 300,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300,
      opener: function(element) {
        return element.find('img');
      }
    },
    callbacks: {
      beforeOpen: function() {
        $('body').addClass('fopen');
      },
      close: function() {
        $('body').removeClass('fopen');
      }
    }
  });

  $('.open-modal').magnificPopup({
    type: 'ajax',
    fixedContentPos: true,
    fixedBgPos: true,
    autoFocusLast: false,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in',
    callbacks: {
      beforeOpen: function() {
        $('body').addClass('fopen');
      },
      close: function() {
        $('body').removeClass('fopen');
      }
    }
  });

  $('.open-video').magnificPopup({
    type: 'iframe',
    fixedContentPos: true,
    fixedBgPos: true,
    overflowY: 'auto',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    disableOn: 200,
    preloader: false,
    callbacks: {
      beforeOpen: function() {
        $('body').addClass('fopen');
      },
      close: function() {
        $('body').removeClass('fopen');
      }
    }
  });

  $('body').delegate('.ajax-form', 'submit', function() {
		event.preventDefault();
    var th = $(this);
    th.find('span.error').remove();

		if(!window.FormData) {
      data = th.serialize();
    } else {
	    data = new FormData(th.get(0));
    }

    $.ajax({
      type: th.attr("method"),
      url: th.attr("action"),
      data: data,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(response) {
	      if(response.success){
		      if(response.template){
			      modal = '/modals/?type='+response.template;
		      } else {
			      modal = '/modals/?type=success';
		      }
	        $.magnificPopup.open({
	          items: {
	            src: modal
	          },
	          type: 'ajax',
	          fixedContentPos: true,
	          fixedBgPos: true,
	          overflowY: 'auto',
	          closeBtnInside: true,
	          preloader: false,
	          midClick: true,
	          removalDelay: 300,
	          mainClass: 'my-mfp-zoom-in',
	          callbacks: {
	            beforeOpen: function() {
	              $('.head').addClass('hide');
	            },
	            close: function() {
	              $('.head').removeClass('hide');
	            }
	          }
	        });
	        setTimeout(function() {
	          th.find('input, textarea, select').val('');
	          th.find('input[name=file]').next('label').text(th.find('input[name=file]').next('label').data('alt'));
	          th.trigger('reset');
	        }, 100);
        } else {
	        for (var i in response.error){
		        if($('input[name='+i+']')){
			        $('input[name='+i+']').parents('.qi').append('<span class="error"><p>'+response.error[i]+'</p></span>');
		        }
		        if($('textarea[name='+i+']')){
			        $('textarea[name='+i+']').parents('.qt').append('<span class="error"><p>'+response.error[i]+'</p></span>');
		        }
	        }
        }
      },
      error: function() {
        alert('Form submission error');
      }
    });
    return false;
  });

});

function svg() {
  $('img[src$=".svg"]').each(function() {
    var $img = $(this);
    var imgURL = $img.attr('src');
    var attributes = $img.prop('attributes');
    if ($img.hasClass('svg')) {
      $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        $svg = $svg.removeAttr('xmlns:a');
        $.each(attributes, function() {
          $svg.attr(this.name, this.value);
        });
        $img.removeClass('svg').replaceWith($svg);
      }, 'xml');
    }
  });
}

function scroll(e, p) {
  $('html, body').stop().animate({
    scrollTop: ($(e).offset().top)-p + "px"
  }, {duration: 500});
  return false;
}

function initialize(e) {
  var delay, i, len, length, path, paths, previousStrokeLength, results, speed;
  paths = $('path, circle, rect', e);
  delay = 0;
  results = [];
  for (i = 0, len = paths.length; i < len; i++) {
    path = paths[i];
    length = path.getTotalLength();
    previousStrokeLength = speed || 0;
    speed = length < 100 ? 20 : Math.floor(length);
    delay += previousStrokeLength + 100;
    results.push($(path).css('transition', 'none').attr('data-length', length).attr('data-speed', speed).attr('data-delay', delay).attr('stroke-dashoffset', length).attr('stroke-dasharray', length + ',' + length));
  };
  return results;
}
function animate(e) {
  var delay, i, len, length, path, paths, results, speed;
  paths = $('path, circle, rect', e);
  results = [];
  for (i = 0, len = paths.length; i < len; i++) {
    path = paths[i];
    length = $(path).attr('data-length');
    speed = $(path).attr('data-speed');
    delay = $(path).attr('data-delay');
    results.push($(path).css('transition', 'stroke-dashoffset ' + speed + 'ms ' + delay + 'ms linear').attr('stroke-dashoffset', '0'));
  };
  return results;
}

function jivo_onLoadCallback(){
	jivo_cstm_widget = document.getElementById('onlineConsultant');
	jivo_cstm_widget.setAttribute('id', 'jivo_custom_widget');
	jivo_cstm_widget.onclick = function(){
		jivo_api.open();
	}
	if (jivo_config.chat_mode == "online"){
		jivo_cstm_widget.setAttribute("class", "jivo_online");
	}
	window.jivo_cstm_widget.style.display='flex';
}
function jivo_onOpen(){
	if (jivo_cstm_widget)
		jivo_cstm_widget.style.display = 'none';
}
function jivo_onClose(){
	if (jivo_cstm_widget)
		jivo_cstm_widget.style.display = 'flex';
}
