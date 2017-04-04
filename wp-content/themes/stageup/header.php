<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
	<header>
        <div class="burger-nav">
            <div class="center">
                <div class="search-item">
                    <input type="text" placeholder="поиск">
                    <input type="submit" value="">
                </div>
                <div class="burger-menu">
                    <div class="burger"></div>
                </div>
                <nav>
                    <ul>
                        <li><a href="">главная</a></li>
                        <li><a href="">по странам</a></li>
                        <li><a href="">по направлениям</a></li>
                        <li><a href="">новости</a></li>
                        <li><a href="">советы</a></li>
                        <li><a href="">контакты</a></li>
                        <li><a href="">for partners</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
		<div class="top-line">
			<div class="center">
				<div class="phone-item"><a href="tel:+380577556336" target="_blank">+38 057 755 63 36</a></div>
				<div class="phone-item"><a href="tel:+380577556336" target="_blank">+38 050 446 63 36</a></div>
				<div class="search-item">
					<input type="text" placeholder="поиск">
					<input type="submit" value="">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="middle-line">
			<div class="center">
                <a href="">
                    <div class="logo"></div>
                </a>
            </div>
		</div>
		<div class="bottom-line">
			<div class="center">
                <nav>
                    <?php wp_nav_menu( array('menu' => 'main_menu' )); ?>
                </nav>
            </div>
		</div>
	</header>


