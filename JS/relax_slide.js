function debounce(func, wait = 20, immediate = true) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if(!immediate)
				func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if(callNow)
			func.apply(context, args);
	};
}

const slide_images1 = document.getElementById("animation1").querySelectorAll('.slide-in-left');
const slide_images2 = document.getElementById("animation2").querySelectorAll('.slide-in-right');

function checkslide(e) {
	slide_images1.forEach(slideimage => {
		//get the height or location
		const slideinat = (window.scrollY + window.innerHeight) - slideimage.clientHeight / 2;
		
		//bottom of the element
		const imagebottom = slideimage.offsetTop + slideimage.clientHeight;
		const ishalfshown = slideinat > slideimage.offsetTop;
		const isnotscrolledpast = window.scrollY < imagebottom;
		
		//check if active or not
		if(ishalfshown && isnotscrolledpast) {
			slideimage.classList.add('active');
		}
		else {
			slideimage.classList.remove('active');
		}
		
	});
	
	slide_images2.forEach(slideimage => {
		//get the height or location
		const slideinat = (window.scrollY + window.innerHeight) - slideimage.clientHeight / 2;
		
		//bottom of the element
		const imagebottom = slideimage.offsetTop + slideimage.clientHeight;
		const ishalfshown = slideinat > slideimage.offsetTop;
		const isnotscrolledpast = window.scrollY < imagebottom;
		
		//check if active or not
		if(ishalfshown && isnotscrolledpast) {
			slideimage.classList.add('active');
		}
		else {
			slideimage.classList.remove('active');
		}
		
	});
}

window.addEventListener('scroll', debounce(checkslide));