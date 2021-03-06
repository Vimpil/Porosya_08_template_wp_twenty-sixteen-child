<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<?php ob_start();?>
<html <?php language_attributes();?> class="no-js">
<div id="page" class="main_page">
  <div class="mh-head Sticky header" id="my-header">
    <a href="#menu"><span></span></a>
    Строй Союз
  </div>


	<!-- Global Functinos -->
	<?php
global $temp_path;
global $css_folder;
global $images_folder;
?>
<!--  END Global Functinos -->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php
echo get_stylesheet_directory_uri() ?>/style.css" media="screen" />
	<link rel="stylesheet" href="<?php
echo $css_folder; ?>normalize.css" media="screen" />
	<link rel="stylesheet" href="<?php
echo $css_folder;

?>demo.css" media="screen" />
	<link rel="stylesheet" href="<?php
echo $css_folder;

?>slick.css" media="screen" />
	<link rel="stylesheet" href="<?php
echo $css_folder;

?>jquery.mmenu.all.css" media="screen" />
	<link rel="stylesheet" href="<?php
echo $css_folder;

?>jquery.mhead.css" media="screen" />
	<link rel="stylesheet" href="<?php
echo $css_folder;
?>magnific-popup.css" media="screen" />

	<?php wp_head();?>
</head>

<header>
<div class="logo_smm">
  <div class="logo"><img src="<?php
echo $images_folder
?>logo.png" alt="logo"></div>
  <div class="smm">
    <a href="" class="vk"><i class="fab fa-vk"></i></a>
    <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
  </div>
</div>
<div class="mail_addr">
  <p><i class="fas fa-envelope"></i><b>E-mail:</b> <a href="mailto:and922020@mail.ru?subject=Order">and922020@mail.ru</a></p>
  <p><i class="fab fa-skype"></i><b>Skype:</b> <a href="skype:and922020?call">and922020</a></p>
  <p><i class="fas fa-map-marked-alt"></i><b>Адрес:</b> г. Великий Новгород , ул.Большая Санкт-Петербургская, 56, офис 5, 2 этаж, рядом с ТК "Лента"</p>
</div>
<div class="phone">
  <a href="tel:88162603686">8 (8162) <b>60-36-86</b></a>
  <a href="tel:88162605578">8 (8162) <b>60-55-78</b></a>
   <span>Звоните с <b>8:00 - 23:00</b> (без выходных)</span>
  <button class="yellow_button" id="to_book_a_call" type="button">Заказать звонок</button>
</div>
</header>

<body <?php body_class();?>>
<main>
<div id="page" class="site">
	<div class="site-inner">


