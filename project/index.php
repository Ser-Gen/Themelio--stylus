<!doctype html>
<!--[if lte IE 7]> <html class="ielte7 ielte9 ielte8" lang="ru"> <![endif]-->
<!--[if IE 8]> <html class="ie8 ielte9 ielte8" lang="ru"> <![endif]-->
<!--[if IE 9]> <html class="ie9 ielte9" lang="ru"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="ru"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Страница на фундаменте</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link rel="stylesheet" href="/css/main.css" media="all">

	<!-- включена поддержка некоторых хтмл5 особенностей для ие -->
	<script src="/js/modernizr.js"></script>
</head>

<body class="Page">

	<header class="Page__header">
	</header>

	<div class="Page__content">
		<h1>Блоки Фундамента</h1>

		<h2>Вторичное</h2>

		<h3>Троечник!</h3>

		<h4>Четвёртован</h4>

		<h5>Пятёрочка</h5>

		<h6>Шерсть</h6>

		<p><strong>Далеко-далеко</strong> за <em>словесными горами</em> в стране, <sup>гласных</sup> и <sub>согласных</sub> живут	<big>рыбные</big> <small>тексты</small>. <mark>Всё</mark> <q>это</q> — <abbr class="textUppercase" title="Язык ГиперТекстовой Разметки">ЯГТР</abbr>.</p>

		<p><a href="#">Ссылка</a>, <span class="pseudoLink">псевдоссылка</span></p>

		<ul>
			<li>Раз</li>
			<li>Два</li>
			<li>Три</li>
		</ul>

		<ul class="custom dashed">
			<li>Раз</li>
			<li>Два</li>
			<li>Три</li>
		</ul>

		<ol>
			<li>Раз</li>
			<li>Два</li>
			<li>Три</li>
		</ol>

		<ul class="List ib justify">
			<li class="List__item"><img src="http://placedog.com/100/35" alt=""></li>
			<li class="List__item"><img src="http://placedog.com/100/35" alt=""></li>
			<li class="List__item"><img src="http://placedog.com/100/35" alt=""></li>
		</ul>

		<ul class="List Counter">
			<li class="List__item">
				Раз
			</li><li class="List__item">
				Два
			</li><li class="List__item last">Три</li>
		</ul>

		<hr>

		<h2>Подзаголовок, например</h2>

		<p class="TextFade">Длинный текст о многом, плавно скрывающийся при помощи современных технологий.</p>

		<p class="Ellipsify"><span class="Ellipsify__text">Эксикатор разрушаем. Заиливание волнообразно. Очевидно, что надолба перемещает легкосуглинистый бур, вне зависимости от предсказаний теоретической модели явления. Латерит, как следует из полевых и лабораторных наблюдений, восстанавливает пахотный чернозём одинаково по всем направлениям.</span></p>

		<p>
			<span class="c-info">Информация</span>,
			<span class="c-error">Ошибка</span>,
			<span class="c-success">Успех</span>
		</p>

		<div class="PseudoTable m-b-1">
			<div class="PseudoTable__cell">
				<img src="http://placedog.com/50/50" style="margin-right: 1em;">
			</div>
			<div class="PseudoTable__cell">
				Няшная картинка клёвой собаченьки
			</div>
		</div>

		<form action="" class="Form Form--complex m-b-1">
			<input type="text" name="" id="" class="Form__object--fillspace">
			<button class="Btn--default Form__object--fillspace-gap">Найти</button>
		</form>

		<form action="" class="Form Form--complex m-b-1 w-full">
			<div class="PseudoTable__cell w-full">
				<input type="text" name="" id="" class="w-full">
			</div>
			<div class="PseudoTable__cell">
				<button class="Btn--default m-l-space">Найти</button>
			</div>
		</form>

		<ul class="List m-b-1">
			<li class="List_item">
				<label><input type="checkbox" name="" id=""> Поставьте галочку</label>
			</li>
			<li class="List_item">
				<label><input type="radio" name="" id=""> Отметьте радиобатон</label>
			</li>
		</ul>

		<p>
			<label class="FieldFile">
				<span class="FieldFile__trigger">
					Загрузить
					<span class="FieldFile__wrapper">
						<input type="file" class="FieldFile__input" />
					</span>
				</span>
			</label>
		</p>

		<div class="Breadcrumbs m-b-1">
			<ul class="Breadcrumbs__list">
				<li class="Breadcrumbs__item"><a href="#">Главная</a></li><li class="Breadcrumbs__item active"><span>Обратная связь</span></li>
			</ul>
		</div>

		<div class="Paginator m-b-1">
			<span class="Paginator__pager"><a href="#">&larr;</a><small> + Ctrl</small></span>
			<ul class="Paginator__list">
				<li class="Paginator__item">
					<a href="#">1</a>
				</li><li class="Paginator__item active">
					2
				</li><li class="Paginator__item">
					...
				</li><li class="Paginator__item">
					<a href="#">7</a>
				</li>
			</ul>
			<span class="Paginator__pager"><small>Ctrl + </small><a href="#">&rarr;</a></span>
		</div>

		<div class="Tab__wrapper main fill m-b-1">
			<ul class="Tab__list main">
				<li class="Tab details Tab--active">
					<span class="Tab__text">Основное</span>
				</li><li class="Tab grid">
					<span class="Tab__text">Товары-участники</span>
					<span class="Tab__info">(4&nbsp;532)</span>
				</li><li class="Tab list">
					<span class="Tab__text">Описание</span>
				</li>
			</ul>
		</div>
		<div class="TabContent__wrapper">
			<div class="TabContent">
			</div>
		</div>

		<div class="Progress rounded fancy green big animated m-b-1">
			<div class="Progress__bar"><div class="Progress__done" style="width: 30%"><span class="Progress__title">30%</span></div></div>
		</div>

		<div class="Overlay d-ib m-b-1" data-overlay="Изображение будет удалено">
			<img src="http://placedog.com/180/180" alt="">
		</div>

		<p>
			<a href="#" class="TipHolder top" data-cont="Звонок платный">+7 495 212-85-06</a>
		</p>

		<p>
			<span class="Bubble Example__bubble">
				<span class="Bubble__trigger">Тригер</span>
				<span class="Bubble__content">Коньтеньть!!!!!</span>
			</span>
		</p>

		<p>
			<span class="Bubble Example__bubble">
				<span class="Bubble__trigger">Тригер</span>
				<span class="Bubble__content BubbleSelect__list">
					<span class="BubbleSelect__item active" data-item="sopt">Самсон-опт</span>
					<span class="BubbleSelect__item" data-item="dks">ДКС</span>
				</span>
			</span>
		</p>

		<p>
			<span class="Badge BadgeTag sizeM action">
				<span class="BadgeTail"></span><span class="BadgeText">Акция</span>
			</span>
			<a href="#" class="Badge BadgeOutline planet textUppercase">ОП</a>
		</p>
		<p>
			120<span class="Rub"> руб.</span>
		</p>

		<p>
			<span class="Btn--default">Вариант</span>
		</p>

		<p>
			<span class="Btn--default Btn--group Btn--active">Вариант</span><span class="Btn--default Btn--group">Опциональность</span><span class="Btn--default Btn--group">Вариативность</span>
		</p>

		<p>
			<span class="Spinner"></span> Загрузка
		</p>
	</div>

	<footer class="Page__footer">
	</footer>
	

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>