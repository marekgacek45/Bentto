
import './fancybox';
import "./bootstrap";
import "./hamburger";
import './realisations'
import 'flowbite';
import './footerYear'
import './animationObserver'
import './preloader'
import './brandsSlider'
import './cookiesBar'



const nav = document.querySelector('nav')

let previousScrollPosition = window.pageYOffset || document.documentElement.scrollTop

window.addEventListener('scroll', () => {
	const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop

	if (currentScrollPosition > previousScrollPosition) {
		nav.style.top = '-160px'
	} else {
		nav.style.top = '0px'
	}

	previousScrollPosition = currentScrollPosition
})







