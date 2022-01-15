const img_cta = document.querySelector('.img_cta'),
cta = document.querySelector('.cta');

img_cta.style.display = 'block';

cta.style.display = 'none';

setInterval(() => {
	let xhr = new XMLHttpRequest();
	xhr.open('GET', '');
	xhr.onload = () => {
		if (screen.width < 950) {
			let data = xhr.response;
			img_cta.style.display = 'none';
		} else {
			img_cta.style.display = 'block';
		}
	};
	xhr.send();
}, 100);
