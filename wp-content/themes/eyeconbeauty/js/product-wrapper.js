const wrapper = document.querySelector('.product-wrapper');
const detail = document.querySelector('.product-detail');
const body = document.querySelector('body');

const changeWrapperPosition = () => {
	let xPadding = '27px';
	if(window.innerWidth > 800)
		xPadding = '64px';

	if(wrapper !== null) {
		if(window.innerWidth < 1024) {
			if(window.outerHeight <= detail.getBoundingClientRect().bottom ){
				wrapper.style.position = 'fixed';
				wrapper.style.padding = '2rem '+ xPadding +' 2.666667rem';
				detail.style.paddingBottom = wrapper.clientHeight + 'px';
				
			} else {
				wrapper.style.position = 'static';
				wrapper.style.padding = '0';
				detail.style.paddingBottom = '2rem';
			}
		} else {
			wrapper.style.position = 'static';
			wrapper.style.padding = '0';
			detail.style.paddingBottom = '2rem';
		}
	}	
}

changeWrapperPosition();

window.addEventListener('resize', () => {
	changeWrapperPosition();
})

window.addEventListener('scroll', () => {
	changeWrapperPosition();
});

