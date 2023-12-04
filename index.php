<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>English Test</title>
	<link href="css/fonts.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<base target="_blank">
</head>

<body>
	<div class="banner">
		<div class="bgi">
			<img class="bg" src="img/Rectangle 376.png">
			<img class="coffeeleft" src="img/granos-cafe-768x480 2.png">
			<img class="coffeerigh" src="img/granos-cafe-768x480 1.png">
			<img class="happy" src="img/Тема 1.png">
			<div class="grad"></div>
		</div>
		<div class="logo">
			<img src="img/ico_logo.svg">
			<img src="img/English.svg" class="name">
		</div>
		<h2>Вкладывайте незначительные деньги каждый день в копилку своих знаний.</h2>
		<h3>Следующий курс для вас будет стоить всего <q>178 рублей в день</q></h3>
		<div class="dates">
			<div class="date">
				<p class="num">01</p>
				<p class="month">Ноября</p>
				<p class="event">Ближайший старт</p>
			</div>
			<div class="date">
				<p class="num">21</p>
				<p class="month">Октября</p>
				<p class="event">Конец акции</p>
			</div>
		</div>
		<div class="buttons">
			<div id="more" onClick="scrollMore()"><p>Узнать подробнее</p></div>
			<div id="free" onClick="scrollFree()"><p>Бесплатная консультация</p></div>
		</div>
	</div>
	
	<div class="main">
		<h3>Выберите свой вариант обучения</h3>
		<div class="variants" id="variants">
			<div class="var">
				<p class="varname" id="varname1">Один курс</p>
				<p class="price" id="AcPr1">10 900</p>
				<div class="sale" id="Sale1">56</div>
				<del class="oldprice" id="OldPr1">24 900</del>
				<ul>
					<li style="font-weight: 600;"><q id="month1">2</q> месяца обучения</li>
					<li>Грамматическая выжимка</li>
					<li>Разговорный тренажёр</li>
					<li>Слова с ассоциациями</li>
					<li>Регулярные мини-задания</li>
					<li>Персональный куратор</li>
					<li>Сертификат об обучении</li>
					<li>Best Teachers</li>
					<li style="font-weight: 600;">Звонки от Second Teacher</li>
				</ul>
				<p class="pre">Предоплата</p>
				<p class="preprice" id="PrPr1">900</p>
				<div class="pay">
					<a href="" id="PR1">Внести предоплату<br/>из РФ</a>
				</div>
				<div class="pay">
					<a href="" id="PE1">Внести предоплату<br/>из-за границы</a>
				</div>
			</div>
			<div class="var">
				<p class="varname" id="varname2">Два курса</p>
				<p class="price" id="AcPr2">21 900</p>
				<div class="sale" id="Sale2">60</div>
				<del class="oldprice" id="OldPr2">48 900</del>
				<ul>
					<li style="font-weight: 600;"><q id="month2">4</q> месяца обучения</li>
					<li>Грамматическая выжимка</li>
					<li>Разговорный тренажёр</li>
					<li>Слова с ассоциациями</li>
					<li>Регулярные мини-задания</li>
					<li>Персональный куратор</li>
					<li>Сертификат об обучении</li>
					<li>Best Teachers</li>
					<li style="font-weight: 600;">Звонки от Second Teacher</li>
				</ul>
				<p class="pre">Предоплата</p>
				<p class="preprice" id="PrPr2">900</p>
				<div class="pay">
					<a href="" id="PR2">Внести предоплату<br/>из РФ</a>
				</div>
				<div class="pay">
					<a href="" id="PE2">Внести предоплату<br/>из-за границы</a>
				</div>
			</div>
			<div class="var">
				<p class="varname" id="varname3">Три курса</p>
				<p class="price" id="AcPr3">28 900</p>
				<div class="sale" id="Sale3">61</div>
				<del class="oldprice" id="OldPr3">74 900</del>
				<ul>
					<li style="font-weight: 600;"><q id="month3">6</q> месяцев обучения</li>
					<li>Грамматическая выжимка</li>
					<li>Разговорный тренажёр</li>
					<li>Слова с ассоциациями</li>
					<li>Регулярные мини-задания</li>
					<li>Персональный куратор</li>
					<li>Сертификат об обучении</li>
					<li>Best Teachers</li>
					<li style="font-weight: 600;">Звонки от Second Teacher</li>
				</ul>
				<p class="pre">Предоплата</p>
				<p class="preprice" id="PrPr3">900</p>
				<div class="pay">
					<a href="" id="PR3">Внести предоплату<br/>из РФ</a>
				</div>
				<div class="pay">
					<a href="" id="PE3">Внести предоплату<br/>из-за границы</a>
				</div>
			</div>
			<div class="var">
				<p class="varname" id="varname4">Пять курсов</p>
				<p class="price" id="AcPr4">44 900</p>
				<div class="sale" id="Sale4">65</div>
				<del class="oldprice" id="OldPr4">124 900</del>
				<ul>
					<li style="font-weight: 600;"><q id="month4">10</q> месяцев обучения</li>
					<li>Грамматическая выжимка</li>
					<li>Разговорный тренажёр</li>
					<li>Слова с ассоциациями</li>
					<li>Регулярные мини-задания</li>
					<li>Персональный куратор</li>
					<li>Сертификат об обучении</li>
					<li>Best Teachers</li>
					<li style="font-weight: 600;">Звонки от Second Teacher</li>
				</ul>
				<p class="pre">Предоплата</p>
				<p class="preprice" id="PrPr4">900</p>
				<div class="pay">
					<a href="" id="PR4">Внести предоплату<br/>из РФ</a>
				</div>
				<div class="pay">
					<a href="" id="PE4">Внести предоплату<br/>из-за границы</a>
				</div>
			</div>
			<div class="promo">
				<img alt="Текущая акция" src="img/promo.jpg" style="max-width: 100%"/>
			</div>
		</div>
	</div>
	
	<div class="form" id="form">
		<h3>Ещё думаете?</h3>
		<p class="formtext1">Записывайтесь на бесплатный урок и попробуйте сами, это поможет принять решение</p>
		<form id="freeles">
			<input type="text" placeholder="Введите ваше имя" id="name" required>
			<input type="tel" placeholder="Введите ваш телефон" id="phone" required>
			<input type="email" placeholder="Введите ваш email" id="mail" required>
			<input type="button" value="Записаться" onClick="fullform()">
		</form>
		<p class="formtext2">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой конфиденциальности</p>
	</div>
	
	<div class="footer">
		<div class="logo" style="justify-content: center;"><img src="img/ico_logo_bot.svg"><img src="img/English.png" class="name"></div>
		<p>2015-2021 &#169; English. Все права защищены. Политика Конфиденциальности</p>
		<p>Соглашение об обработке персональных данных</p>
		<p class="place">ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица, д. 0/00 лит. 0, пом. 0 <br>
		ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000</p>
		<div class="links"><img alt="Наш VK" src="img/ico_vk.svg"><img alt="Наш Telegram" src="img/ico_tg.svg"></div>
	</div>
		
	<script src="script.js"></script>
</body>
</html>
