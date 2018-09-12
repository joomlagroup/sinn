$(document).ready(function () {

	$('.menu-procedure').on('click',function () {
		var find_sub = $(this).closest('li').find('.sub-menu');



		var val = find_sub.attr('val');
		if (val && val == 1){
			find_sub.attr('val',0);
			find_sub.css('display','none');
			find_sub.parent().removeClass('li-clicked');
		}
		else{
			find_sub.attr('val',1);
			find_sub.css('display','block');
			find_sub.parent().addClass('li-clicked');
		}
	});
	$('body').on('click', function (e) {

		if(!$(e.target).parent().hasClass('li-clicked')) {
			var find_sub = $('.menu-procedure').find('.sub-menu');
			var val = find_sub.attr('val');
			if (val && val == 1) {
				if (find_sub.parent().hasClass('li-clicked')) {
					find_sub.attr('val', 0);
					find_sub.css('display', 'none');
					find_sub.parent().removeClass('li-clicked');
				}
			}
			console.log(val);
		}
	});
	$('.section-home-about-stewart--navigate ul li').on('click',function () {
		$('.section-home-about-stewart--navigate ul li').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
	})

	//$('#menu-main-menu li:nth-child(2).menu-item-has-children').addClass('menu-procedure');
	$('.chose-sub-category-provider').on('click',function (e) {
		e.preventDefault();
		$('.chose-sub-category-provider').each(function () {
			$(this).removeClass('active');
			$(this).find('i').removeClass('fa-angle-down');
			$(this).find('i').addClass('fa-angle-right');
		});
		$(this).addClass('active');
		$(this).find('i').removeClass('fa-angle-right');
		$(this).find('i').addClass('fa-angle-down');

		var url_term = $(this).attr('data-url');
		var name_term = $(this).attr('data-name');
		$('.procedures-list-article').load(url_term+' .procedures-list-article .container-fluid');
		$('.title-sub-category-wrap').html('<div class="container"><div class="index-title margin-top-60 margin-bottom-40">'+name_term+'</div></div>');
	});

	$('.mobile-button-menu').on('click',function (e) {
		var val = $(this).attr('val');
		if (val && val == 1){
			$('.main-menu-top').css('display','none');
			$(this).attr('val',0);

			$(this).find('.btn-menu').removeClass('btn-close-menu');
			$(this).find('.btn-menu').addClass('btn-open-menu');
		}
		else{
			$('.main-menu-top').css('display','block');
			$(this).attr('val',1);
			$(this).find('.btn-menu').removeClass('btn-open-menu');
			$(this).find('.btn-menu').addClass('btn-close-menu');
		}

	});

	if($('body').width() < 768){
		$('.block-tab-navigate li a').each(function () {
			var text = $(this).text();
			console.log(text);
			var id = $(this).attr('href');
			$('.block-tab-navigate .tab-content '+id).prepend('<div class="block-tab-navigate--tab-content--mobile--subtitle">'+text+'</div>');
		});
	}
});
