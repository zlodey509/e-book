function countSymbols(el) {
	var input = document.getElementById(el);
	text = input.innerHTML;
	len = text.length;
	if (len > 6 && len < 10){
		input.style.fontSize = 'calc(34px + 7 * ((100vw - 320px) / (1080-320)))';
	}
	if (len > 10){
		input.style.fontSize = 'calc(16px + 7 * ((100vw - 320px) / (1080-320)))';
	}
}
// document.querySelector("#description")
countSymbols('h1-1');
countSymbols('h1-2');
countSymbols('h1-3');
countSymbols('h1-4');
    
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n){
	showSlides(slideIndex += n);
}

function currentSlide(n){
	showSlides(slideIndex = n);
}

function showSlides(n){
	var i;
	var slides = document.getElementsByClassName("slides");

	if(n > slides.length){
		slideIndex = 1
	}
	if(n < 1){
		slideIndex = slides.length
	}
	for (i = 0; i < slides.length; i++){
		slides[i].style.display = "none";
	}
	slides[slideIndex-1].style.display = "block";

}


