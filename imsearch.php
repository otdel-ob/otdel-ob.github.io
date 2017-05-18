﻿<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title>Поиск - Отдел образования</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Гаранин Алексей Игоревич" />
		<meta property="og:locale" content="ru" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://otdel-ob.github.io/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="Отдел образования" />
		<meta property="og:image" content="https://otdel-ob.github.io/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="600">
		<meta property="og:image:height" content="450">
		<meta name="viewport" content="width=960" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css" media="screen" />
		<link rel="icon" href="http: //otdel-ob.github.io/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="http: //otdel-ob.github.io/favicon.ico"type="image/x-icon" />
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Поиск - Отдел образования</h1>
				<div id="imHeaderObjects"><div id="imHeader_imTextObject_02_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_2" class="" > <div id="imHeader_imCellStyleGraphics_2"></div><div id="imHeader_imCellStyle_2" ><div id="imHeader_imTextObject_02">
	<div class="text-tab-content"  id="imHeader_imTextObject_02_tab0" style="">
		<div class="text-inner">
			<span class="fs16 cf1">ЗАТО Озёрный</span><div><span class="fs16 cf1">Отдел образования</span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imHeader_imHTMLObject_03_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_3" class="" > <div id="imHeader_imCellStyleGraphics_3"></div><div id="imHeader_imCellStyle_3" ><div id="imHeader_imHTMLObject_03" class="imHTMLObject" style="height: 350px; overflow: auto; text-align: center;"><script language="javascript" type="text/javascript"><!--

var d = new Date();

var day=new Array("Воскресенье","Понедельник","Вторник",

"Среда","Четверг","Пятница","Суббота");

var month=new Array("января","февраля","марта","апреля","мая","июня",

"июля","августа","сентября","октября","ноября","декабря");

document.write(day[d.getDay()]+" " +d.getDate()+ " " + month[d.getMonth()]

+ " " + d.getFullYear() + " г.");

//--></script></div></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
			<a id="imGoToMenu"></a><p class="imHidden">Главное меню:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Главная</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="page-3.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Документы</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode4" class=" imPage">
						<a href="page-4.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">О нас</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode5" class=" imPage">
						<a href="page-5.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Контакты</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Результаты поиска</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><div id="imFooter_imTextObject_01">
	<div class="text-tab-content"  id="imFooter_imTextObject_01_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs9 cf1 ff1">Сайт создан в учебных целях</span></div>
		</div>
	</div>

</div>
</div></div></div></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>

	</body>
</html>
