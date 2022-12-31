<!DOCTYPE html>
<html lang="ru">

<html>
<head>
	
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>E-book</title>
	<link rel="stylesheet" href="css/style.css?<?echo rand(0, 1000)?>">
	<link rel="stylesheet" href="css/animation.css?<?echo rand(0, 1000)?>">
	<link rel="stylesheet" href="css/media.css?<?echo rand(0, 1000)?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
</head>
<body>
	<audio autoplay>
    <source src="audio/papintank.mp3" type="audio/ogg">
    	</audio>

	<header class="main">
		<div class="container">
			<div class="row">
				<div class="col-3 menu__logo">
					<a href="">
						<img src="img/SVG/logo.svg" alt="">
					</a>		
				</div>
				<div class="col col-md-8 menu__items">
					<nav>
						<ul class="d-flex justify-content-center">
							<li class="menu__item">
								<a href="#">Е-книга</a>
							</li>
							<li class="menu__item">
								<a href="#">База знань</a>
							</li>
							<li class="menu__item">
								<a href="#">Контакти</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="row">
				<div data-delighter class="logo-link d-flex justify-content-end">
					<!-- <div class="col-4 big-logo">
						<img src="img/big-logo.svg" alt="">
					</div>
					<div class="link">
						<img src="img/link-left.svg">
						<a href="#">дивитись відео</a>
					</div> -->
					<ul>
						<li class="col-4 big-logo"><img src="img/big-logo.svg" alt=""></li>
						<li class="link">
							<a href="https://www.youtube.com/watch?v=vvaZLn_vbig"><img src="img/link-left.svg">
							<span>дивитись відео</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="introduction">
		<div class="container">
			<div class="col-10 definition">
				<div class="row">
					<div class="col-2 definition__finger">
						<img src="img/finger.svg" alt="">
					</div>
					<div class="col-10 definition__items">
						<img id="logo" src="img/desc-logo.svg" alt="">
						<img id="devider" src="img/desc-devider.svg" alt="">
						<span id="description">система автоматизації бібліотек. Система побудована таким чином, щоб кожний бібліотекар без зайвих проблем міг розібратися і користуватися</span>
					</div>
				</div>
			</div>
			<div class="row d-flex">
				<div class="reader">
					<div class="reader__picture">
						<img src="img/read.jpg" alt="">
					</div>
				</div>
				<div class="col-8 col-sm-6 col-lg-7 offset-5 arrows_and_text">
					<div class="row d-flex justify-content-center">
						<img id="arrow-1" src="img/arrows-down.svg" alt="">
						<span>Масштабно і глибоко всередині, але просто і зручно назовні!</span>
						<img id="arrow-2" src="img/arrows-down.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="skills">
		<div class="container">
			<div data-delighter class="col-7 col-md-4 question offset-6">
				<span>ЩО МОЖЕ СИСТЕМА?</span>
			</div>
			<div data-delighter class="answers d-flex justify-content-center">
				<ul>
					<li>Додавати книги до електронного каталогу</li>
					<li>Додавати читачів</li>
					<li>Автоматично створювати всі необхідні для бібліотеки звіти</li>
					<li>Проводити інвентаризацію</li>
					<li>Шукати книги в загальній базі фондів</li>
					<br>
					<p>І все це в зручному та сучасному дизайні!</p>
				</ul>
			</div>
		</div>
	</div>
	<div class="stats">
		<div class="container">
			<div class="row today">
				<div class="col-5 col-lg-4 today-left offset-2 d-flex justify-content-end">
					<span>НА СЬОГОДНІ</span>
				</div>
				<div class="col-5 col-lg-4 today-right">
					<span>Система «Є-Книга» впроваджена та успішно працює:</span>
				</div>
			</div>
			<div class="row d-flex justify-content-center" style="@media (max-width: 991px) {position: absolute;}">
				<div class="col-md-6 col-lg-3 stats-item yellow d-flex">
					<h1 id="h1-1">51</h1><br><h2>бібліотека</h2>
					<img src="img/column-1-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-3 stats-item d-flex">
					<h1 id="h1-2">700 240</h1><br><h2>книг до загального каталогу додано</h2>
					<img src="img/column-2-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-3 stats-item d-flex">
					<h1 id="h1-3">42 561</h1><br><h2>кількість активних читачів</h2>
					<img src="img/column-3-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-3 stats-item d-flex">
					<h1 id="h1-4">ВЖЕ ПРАЦЮЄМО:</h1><br><h2 id="h2-4">Запоріжжя і Запорізька область, Маріуполь</h2>
					<img src="img/column-4-img.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="decision">
		<div class="container">
			<div class="title-question">
				<span>Що вирішує система?</span>
			</div>
			<br>
			<br>
			<br>
			<div class="list d-flex justify-content-center">
				<div class="left-list d-flex justify-content-center col-lg-6 col-md-12">
					<div class="row d-flex justify-content-center">
						<div class="circuit d-flex justify-content-center">
							<img src="img/for-read.png" alt="">
							<span>ДЛЯ ЧИТАЧА</span>
						</div>
					</div>
					<div class="circuit-description">
						<li class="d-flex">
							<div class="image">
								<img src="img/read-item-1.svg" alt="">
							</div>
							<div class="description d-flex">
								<ul>
									<li>
										<span class="title">ШВИДКИЙ І ЗРУЧНИЙ ПОШУК КНИГ ON-LINE</span>
									</li>
									<li>
										<span class="text">дізнатися про наявність книг у бібліотеках міста не виходячи з дому</span>
									</li>
								</ul>
							</div>	
						</li>
						<li class="d-flex">
							<div class="image">
								<img src="img/read-item-2.svg" alt="">
							</div>
							<div class="description d-flex">
								<ul>
									<li>
										<span class="title">МІЖБІБЛІОТЕЧНИЙ АБОНЕМЕНТ</span>
									</li>
									<li>
										<span class="text">взаємне використання бібліотечних фондів і довідково-пошукового апарату бібліотек</span>
									</li>
								</ul>
							</div>
						</li>
						<li class="d-flex">
							<div class="image">
								<img src="img/read-item-3.svg" alt="">
							</div>
							<div class="description d-flex">
								<ul>
									<li>
										<span class="title">МОЖЛИВІСТЬ БРОНЮВАННЯ ТА ЗАМОВЛЕННЯ КНИГ</span>
									</li>
									<li>
										<span class="text">доступність загального фонду всієї бібліотечної системи регіону</span>
									</li>
								</ul>
							</div>
						</li>
					</div>
				</div>
				<div class="right-list d-flex justify-content-center col-lg-6 col-md-12">
					<div class="row d-flex justify-content-center">
						<div class="circuit d-flex justify-content-center">
							<img src="img/for-lib.png" alt="">
							<span>ДЛЯ БІБЛІОТЕК ТА ЦБС</span>
						</div>
					</div>
					<div class="circuit-description">
						<li class="li-class d-flex">
							<div class="image">
								<img src="img/lib-item-1.svg" alt="">
							</div>	
							<div class="description d-flex">
								<ul>
									<li>
										<span>ПРОСТОТА ТА ШВИДКІСТЬ ОБСЛУГОВУВАННЯ</span>
									</li>
								</ul>
							</div>	
						</li>
						<li class="li-class d-flex">
							<div class="image">
								<img src="img/lib-item-2.svg" alt="">
							</div>	
							<div class="description">
								<ul>
									<li>
										<span>СТВОРЕННЯ ЄДИНОГО БІБЛІОТЕЧНОГО ФОНДУ</span>
									</li>
								</ul>
							</div>
						</li>
						<li class="li-class d-flex">
							<div class="image">
								<img src="img/lib-item-3.svg" alt="">
							</div>	
							<div class="description">
								<ul>
									<li>
										<span>НЕОБМЕЖЕННА КІЛЬКІСТЬ ЧИТАЦЬКИХ КВИТКІВ</span>
									</li>
								</ul>
							</div>
						</li>
						<li class="li-class d-flex">
							<div class="image">
								<img src="img/lib-item-4.svg" alt="">
							</div>	
							<div class="description">
								<ul>
									<li>
										<span>КОНТРОЛЬ ЗА ВИДАЧЕЮ КНИГ</span>
									</li>
								</ul>
							</div>
						</li>
						<li class="li-class d-flex">
							<div class="image">
								<img src="img/lib-item-5.svg" alt="">
							</div>	
							<div class="description">
								<ul>
									<li>
										<span>РОЗПОДІЛ НЕОБМЕЖЕНОЇ КІЛЬКОСТІ РОЛЕЙ</span>
									</li>
								</ul>
							</div>
						</li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="outward">
		<div class="container d-flex h-100">
			<div class="row justify-content-center align-self-center">
				<div class="col-10 slide">
					<div class="slide-title">
						<p>ЯК ЦЕ ВИГЛЯДАЄ?</p>
					</div>
					<div class="slider-inner d-flex justify-content-center">
						<div class="slides">
							<div class="slider-text">
								<p>Какая-то подпись о том, что мы видим</p>
							</div>
							<div class="slider-img">
								<img src="img/slider-img.png" alt="">
							</div>
						</div>
						<div class="slides">
							<div class="slider-text">
								<p>Какая-то подпись о том</p>
							</div>
							<div class="slider-img">
								<img src="img/img1.jpg" alt="">
							</div>
						</div>
						<div class="slides">
							<div class="slider-text">
								<p>Какая-то подпись</p>
							</div>
							<div class="slider-img">
								<img src="img/slider-img.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="arrows d-flex align-middle">
					<div class="prev col-1">
						<a class="prev unselectable" onclick="plusSlides(-1)">
							<img src="img/slick-right.png" alt=""></a>
					</div>
					<div class="next col-1 offset-10 d-flex justify-content-end">
						<a class="next unselectable" onclick="plusSlides(1)">
							<img src="img/slick-left.png" alt=""></a>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="knowledge">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="knowledge__title d-flex justify-content-center">
					<span class="base">БАЗА</span><span class="know">ЗНАНЬ</span>
				</div>
				<div class="content">
					<div class="slider-track d-flex">
						<div class="article-img col-6">
							<div class="article">
								<img id="fon" src="img/article-1.png" alt="">
								<div class="hover">
									<a href="https://www.youtube.com/watch?v=ViDAtGJI_JQ"><img id="fon" src="img/link-fon.png" alt=""></a>
									<div class="link">
										<a href="#"><img src="img/link-left.svg">
										<span>дивитись відео</span></a>
									</div>		
								</div>
							</div>
							<span class="article-text">Як додати читача?</span>
						</div>
						<div class="article-img col-6">
							<div class="article">
								<img id="fon" src="img/article-2.png" alt="">
								<div class="hover">
									<a href="https://www.youtube.com/watch?v=oxb2MO4MekU"><img id="fon" src="img/link-fon.png" alt=""></a>
									<div class="link">
										<a href="#"><img src="img/link-left.svg">
										<span>дивитись відео</span></a>
									</div>		
								</div>
							</div>
							<span class="article-text">Редагування читача</span>
						</div>
						<div class="article-img col-6">
							<div class="article">
								<img id="fon" src="img/article-3.png" alt="">
								<div class="hover">
									<a href="https://www.youtube.com/watch?v=_ki8hwagRWw"><img id="fon" src="img/link-fon.png" alt=""></a>
									<div class="link">
										<a href="#"><img src="img/link-left.svg">
										<span>дивитись відео</span></a>
									</div>		
								</div>
							</div>
							<span class="article-text">Як додавати книжки?</span>
						</div>
						<div class="article-img col-6">
							<div class="article">
								<img id="fon" src="img/article-3.png" alt="">
								<div class="hover">
									<a href=" https://www.youtube.com/watch?v=-d4LN9mjYYk"><img id="fon" src="img/link-fon.png" alt=""></a>
									<div class="link">
										<a href="#"><img src="img/link-left.svg">
										<span>дивитись відео</span></a>
									</div>		
								</div>
							</div>
							<span class="article-text">Редагування книжок</span>
						</div>
						<div class="article-img col-6">
							<div class="article">
								<img id="fon" src="img/article-3.png" alt="">
								<div class="hover">
									<a href="https://www.youtube.com/watch?v=GQAbo_G_0AI"><img id="fon" src="img/link-fon.png" alt=""></a>
									<div class="link">
										<a href="#"><img src="img/link-left.svg">
										<span>дивитись відео</span></a>
									</div>		
								</div>
							</div>
							<span class="article-text">Перегляд боржників</span>
						</div>
					</div>					
				</div>
				<div class="arrows d-flex align-middle">
					<div class="prev col-1">
						<a class="btn-prev unselectable">
							<img src="img/slick-right.png" alt=""></a>
					</div>
					<div class="next col-1 offset-10 d-flex justify-content-end">
						<a class="btn-next unselectable">
							<img src="img/slick-left.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="form-class d-flex justify-content-center">
					<span>
						Бажаємо приєднатися до є-книги
					</span>
					<div class="form-field ">
						<form action="">
							<li class="d-flex justify-content-center">
								<input type="text">
								<button>Долучитись</button>
							</li>				
						</form>
					</div>
				</div>
				<div class="contacts">
					<div class="link-btn d-flex justify-content-center">
						<a href="https://www.facebook.com/ebookcom"><img src="img/facebook.svg" alt=""></a>
						<a href="https://www.youtube.com/channel/UCy6CygB5qU4U-f8zsm6In0g"><img src="img/youtube.svg" alt=""></a>
					</div>
					<div class="info offset-5">
						<li class="d-flex">
							<img id="email" src="img/email.svg" alt="">
							<span>ebookcomua@gmail.com</span>
						</li>
						<li class="d-flex">
							<img id="phone" src="img/phone.svg" alt="">
							<span>+38 050 555 5556</span>
						</li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
	<script src="js/slide.js"></script>
	<script type="text/javascript" src="js/delighters.js"></script>
</body>
</html>