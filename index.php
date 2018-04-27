<?php
session_start();
$period_cookie = 25920000; // 30 дней (2592000 секунд)

if($_GET){
setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
$_SESSION['utms'] = array();
$_SESSION['utms']['utm_source'] = '';
$_SESSION['utms']['utm_medium'] = '';
$_SESSION['utms']['utm_term'] = '';
$_SESSION['utms']['utm_content'] = '';
$_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pet Brush Glove - Перчатка для расчеcки шерсти животных</title>
	<meta name="description" content="Pet Brush Glove - Перчатка для расчеcки шерсти животных со скидкой и быстрой доставкой по СНГ">
      <meta name="keywords" content="Pet Brush Glove, купить Pet Brush Glove, Pet Brush Glove отзывы">
	<link rel="shortcut icon" href="img/favicon.ico.gif" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=480">
    <link media="all" href="css/main.css"  rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link href="css/css-family=Roboto-400,500,700&subset=latin,cyrillic.css" rel='stylesheet' type='text/css'>
</head>
<body>
        <div class="main-wrap">
            <div class="section block-1">
                <div class="container-1 clearfix">
                    <div class="cost old-cost">
                        <p>Старая цена:</p>
                        <strong>1061 грн.</strong>
                    </div>
                    <div class="sale">
                        <p>Скидка</p>
                        <strong>53%</strong>
                    </div>
                    <div class="cost new-cost">
                        <p>Новая цена:</p>
                        <strong>499 грн.</strong>
                    </div>
                </div>
                <div class="container-2">
                    <div class="timer">
                        <p>До конца акции осталось:</p><br>
                        <script src="js/TimeCircles.js"></script>
                    </div>
                    <div class="attention">Осталось всего 9 шт. по акции!</div>
                    <div class="center"><a href="#delivery" class="button-m"></a></div>
                </div>
            </div>
            <div class="section block-2" style="">
                <div class="container">
					<h2>Уникальная массажная перчатка, которая поможет избавиться от шерсти дома!</h2>
					<div  class="video-container"><div class="youtube" id="B02B3k8rxUY"></div></div>
					<h3>Никакой шерсти!</h3>
					<p>Многие люди опасаются заводить домашнее животное, справедливо полагая, что шерсть от него будет летать по всему дому. А те, кто решился на котика или собачку, знает, как сложно бороться с шерстью, что остается на диванах, забивается по углам и даже попадает в пищевые продукты. Pet Brush Glove избавит вас от таких проблем! Уникальная массажная перчатка соберет «лишнюю» шерсть с тела вашего любимца!</p>
					
					<h3>Простая в использовании!</h3>
					<p>Ничего сложного в использовании массажной перчатки нет – просто наденьте ее и погладьте своего любимца. При этом кот или собачка не почувствует никакого дискомфорта – животное получит своего рода массаж и дополнительное внимание от хозяина. В качестве благодарности вы получите довольного урчащего котика или пса, что радостно виляет хвостом и вылизывает вам руки. Ну, разве не чудо?</p>
					
					<h3>Помощь и экономия!</h3>
					<p>Больно смотреть на длинношерстного любимца, который в летний день изнывает от жары? Воспользуйтесь массажной щеткой, она уберет лишнюю шерсть с тела животного, и ему станет намного легче переносить высокую температуру. Поверьте, покупка Pet Brush Glove, которая прослужит вам долго, поможет сэкономить средства на стрижке питомцев.</p>
					<h2>Галерея</h2>
					<div class="regular slider">
						
						<div>
							<img alt="Pet Brush Glove" title="Pet Brush Glove"  src="img/gallery_big_1.jpg"/>
                        </div>

						<div>
							<img alt="Pet Brush Glove" title="Pet Brush Glove"  src="img/gallery_big_2.jpg"/>
						</div>

						<div>
							<img alt="Pet Brush Glove" title="Pet Brush Glove"  src="img/gallery_big_3.jpg"/>
						</div>

						<div>
							<img alt="Pet Brush Glove" title="Pet Brush Glove"  src="img/gallery_big_4.jpg"/>
						</div>

						<div>
							<img alt="Pet Brush Glove" title="Pet Brush Glove"  src="img/gallery_big_5.jpg"/>
						</div>

						<div>
							<img alt="Pet Brush Glove" title="Pet Brush Glove"  src="img/prod_gall_big4.jpg"/>
						</div>
					</div>
					<p style="padding-bottom:;">
						<img alt="Pet Brush Glove" title="Pet Brush Glove"    style="float:left; width:200px; margin-right:25px;"  src="img/about_1.jpg"/>
						<span style="font-weight:bold;">ЧИСТЫЙ ДОМ</span><br>Больше никакой шерсти по углам и на мебели! Просто периодически поглаживайте вашего любимца по спине с помощью массажной щетки, и вы снимете «лишнюю» шерсть, которая окажется на перчатке, а не в вашей гостиной. Снимать прилипшую шерсть с силиконовых пупырышек очень легко – требуется всего лишь одно движение руки.
						<div style="clear:both;"></div>
					<p style="padding-bottom:;"> 
						<img alt="Pet Brush Glove" title="Pet Brush Glove"    style="float:right; width:200px; margin-left:25px;"  src="img/about_2.jpg"/>
						<span style="font-weight:bold;">БОЛЬШЕ ОБЩЕНИЯ С ЛЮБИМЦЕМ</span><br>У всех нас есть работа и друзья, у наших питомцев есть только мы. Не забывайте уделять верным котикам и собачкам больше времени – перчатка имитирует мягкий массаж, а поглаживая животное, вы покажите ему свою любовь. Благодарностью будет довольное урчание или помахивание хвостом.
						<div style="clear:both;"></div>
				</div>
            </div>
			<!-- owmen17 -->
            <div class="section block-7">
                <h2>Отзывы</h2>
                <div class="container">
                    <div class="rev rev-1">
                        <img alt="Pet Brush Glove" title="Pet Brush Glove"      src="img/10.jpg"/>
                        <p class="rev-title">Настя</p>
                        <p class="rev-text">Родители разрешили завести кота-британца только с условием, что в доме будет идеальная чистота. Но как ее достичь, если котик, хоть и гладкошерсный, постоянно линяет? С
                                                помощью Pet Brush Glove я избавилась от проблемы – теперь шерсть не остается на диване, полу и особенно на одежде!</p>
                    </div>
                    <div class="rev rev-2">
                        <img alt="Pet Brush Glove" title="Pet Brush Glove"    src="img/ava_2.png"/>
                        <p class="rev-title">Олег</p>
                        <p class="rev-text">Вы бы видели, как блаженно закрывает глаза и урчит мой кот, когда я провожу перчаткой по его упитанному телу. Потом еще и руки лижет, еще просит – никогда бы не подумал, что
                                                мой эгоистичный котяра способен на любовь и благодарность. Перчатку только ради этого уже можно купить.</p>
                    </div>
                    <div class="rev rev-3">
                       <img alt="Pet Brush Glove" title="Pet Brush Glove"     src="img/ava_3.png"/>
                        <p class="rev-title">Алина</p>
                        <p class="rev-text">Когда моя собака видит, что я надеваю перчатку, подбегает и ложится на колени, чтобы я ее погладила. А раньше при виде обычной чесалки
					    пряталась. На самой перчатке очень мягкие силиконовые пупырышки, которые не цепляются за шерсть и деликатно ее расчёвыют и собирают лишнюю шерсть.
					    Я и моя собачка очень довольны покупкой!)</p>
                    </div>
				
                </div>    
            </div>
            <div class="section block-6">
                <h2>Доставка и оплата</h2>
                <div class="container">
                    <div class="deliv-item">
                        <span class="deliv-icon deliv-pic-1"></span>
                        <p>Доставка почтой в течение <br>от 1 до 10 рабочих дней.<br/>Стоимость доставки товара от 30 грн.</p>
                    </div>
                    <div class="deliv-item">
                        <span class="deliv-icon deliv-pic-2"></span>
                        <p>Никаких предоплат! Оплата заказов осуществляется непосредственно по факту получения заказа</p>
                    </div>
                    <div class="deliv-item">
                        <span class="deliv-icon deliv-pic-3"></span>
                        <p>Вы вправе отказаться от покупки в течение 14 дней с момента получения заказа, независимо от причины возврата.</p>
                    </div>
                </div>
            </div>
            <div class="dot-line-2"></div>
            <div class="section block-1">
                <div class="container-1 clearfix">
                    <div class="cost old-cost">
                        <p>Старая цена:</p>
                        <strong>1061 грн.</strong>
                    </div>
                    <div class="sale">
                        <p>Скидка</p>
                        <strong>53%</strong>
                    </div>
                    <div class="cost new-cost">
                        <p>Новая цена:</p>
                        <strong>499 грн.</strong>
                    </div>
                </div>
                <div class="container-2" id="delivery">
                    <div class="order">
                        <p class="center">
                            <strong>Оставьте заявку</strong><br/>
                            и мы свяжемся с вами для уточнения деталей заказа
                        </p>
                        <form action="zakaz.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">
                            <div><input type="text" name="name" placeholder="Введите Ф.И.О" required=""></div>
                            <div><input type="text" name="phone" placeholder="Введите телефон" required=""></div>
                            <div><button></button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section footer">
                <div class="center">
                    <img alt="Pet Brush Glove" title="Pet Brush Glove" class="mob-vis" src="img/cop1-b-320.png" >
<p style="text-align: center">
    <a style="color: inherit;" href="-page=politics.htm" target="_blank">Политика конфиденциальности</a>&nbsp;&nbsp;
    <a style="color: inherit;" href="-page=agreement.htm" target="_blank">Пользовательское соглашение</a></p>
                </div>
            </div>
        </div>
	



<link rel="stylesheet" type="text/css" href="css/roboto.css">
//<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/plugins.js" type="text/javascript"></script>
<script src="js/detect.js" type="text/javascript"></script>

            <link href="css/popup-m1-style.css-v=4.css" rel="stylesheet" type="text/css"/>
        <script src="js/popup-m1.js-v=4.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	M1.initComebacker(3000);
	var M1Text = {
		'validation_name': 'Укажите корректные ФИО.',
		'validation_phone1': 'Номер телефона может содержать только цифры, символы "+", "-", "(", ")" и пробелы.',
		'validation_phone2': 'В вашем телефоне слишком мало цифр.',
		'comebacker_text': 'ВНИМАНИЕ'
	};
	M1.validateAndSendForm(false, M1Text);
});
</script>
    <script type="text/javascript" src="js/previewYouTube.js"></script>
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="js/init.js"></script>
    </body>
</html>   