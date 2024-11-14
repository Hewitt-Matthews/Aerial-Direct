window.siteui.swiperContent = function() {
	if(!document.querySelector('.swiper-content .swiper')) {
		return;
	}
	const swiper = new Swiper('.swiper-content .swiper', {
		spaceBetween: 0,
		slidesPerView: 1,
		threshold: 30,
		centeredSlides: true,
		speed: 600,
		autoplay: {
			delay: 4000,
		},

		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	});
}
window.siteui.incInitScript(window.siteui.swiperContent);
