const swiper = new Swiper('.swiper', {
	slidesPerView: 'auto',
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true
	},

	spaceBetween: 20,
	autoHeight: true,
	breakpoints: {
		// when window width is >= 992px
		992: {
			spaceBetween: 101
		}
	}
});


// $('.swiper-button-prev').remove();
// $('.swiper-button-next').remove();

// const swiper = new Swiper('.swiper', {
// 	slidesPerView: 1,
// 	watchOverflow: true,
// 	pagination: {
// 		el: '.swiper-pagination',
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	},
// 	spaceBetween: 20,
// 	autoHeight: true
// });