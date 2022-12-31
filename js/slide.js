const container = document.querySelector('.knowledge');
const contWidth = container.clientWidth;
let position = 0;
let slidesToShow = 2;
let slidesToScroll = 2;
if (contWidth < 768){
	slidesToScroll = 1;
	slidesToShow = 1;
}
const content = document.querySelector('.content');
const track = document.querySelector('.slider-track');
// const item = document.querySelector('.article-img');
const btnPrev = document.querySelector('.btn-prev');
const btnNext = document.querySelector('.btn-next');
const itemsCount = document.querySelectorAll('.article-img').length;
const itemWidth = content.clientWidth / slidesToShow;
const movePosition = slidesToScroll * itemWidth;

btnNext.addEventListener('click', () => {
	const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;

	position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth; 

	track.style.transform = `translateX(${position}px)`;
	btnNext.disabled = position <= -(itemsCount - slidesToShow) * itemWidth;
});

btnPrev.addEventListener('click', () => {
	const itemsLeft = Math.abs(position) / itemWidth;

	position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;

	track.style.transform = `translateX(${position}px)`;
	btnPrev.disabled = position === 0;
});

// if (contWidth < 992){
// 	var slideIndex = 1;
// 	showSlides(slideIndex);
// 	function plusSlides(n){
// 		showSlides(slideIndex += n);
// 	}

// 	function currentSlide(n){
// 		showSlides(slideIndex = n);
// 	}

// 	function showSlides(n){
// 		var i;
// 		var slides = document.getElementsByClassName("slides");

// 		if(n > slides.length){
// 			slideIndex = 1
// 		}
// 		if(n < 1){
// 			slideIndex = slides.length
// 		}
// 		for (i = 0; i < slides.length; i++){
// 			slides[i].style.display = "none";
// 		}
// 		slides[slideIndex-1].style.display = "block";

// 	}
// }


