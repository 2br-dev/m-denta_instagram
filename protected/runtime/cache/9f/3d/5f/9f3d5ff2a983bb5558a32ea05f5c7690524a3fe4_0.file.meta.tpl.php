<?php
/* Smarty version 3.1.32, created on 2019-12-08 20:21:43
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\themes\base\smarty\components\meta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ded3127d458d3_79592472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f3d5ff2a983bb5558a32ea05f5c7690524a3fe4' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\meta.tpl',
      1 => 1570800067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded3127d458d3_79592472 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/<?php if (!isset($_smarty_tpl->tpl_vars['uri']->value[1])) {?>WebPage<?php } else { ?>ItemPage<?php }?>" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
">
<head>
	<title itemprop="name"><?php echo $_smarty_tpl->tpl_vars['_meta']->value['title'];?>
</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="/css/normalize.css" >
	<link type="text/css" rel="stylesheet" href="/css/style.css" >
	<link type="text/css" rel="stylesheet" href="/css/1024.css" >
	<link type="text/css" rel="stylesheet" href="/css/768.css" >
	<link type="text/css" rel="stylesheet" href="/css/640.css" >
	<link type="text/css" rel="stylesheet" href="/css/480.css" >
	<link type="text/css" rel="stylesheet" href="/css/320.css" >
    <link type="text/css" rel="stylesheet" href="/static/css/simplelightbox.min.css" >
    
    <meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['robots'];?>
" name="robots">
    <meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['keywords'];?>
" name="keywords">
    <meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['description'];?>
" name="description">
	
	<meta content="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
" itemprop="inLanguage">

	
	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value['prev']) && $_smarty_tpl->tpl_vars['pagination']->value['prev'] !== '') {?>
		<link rel="prev" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['prev'];?>
">
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value['next']) && $_smarty_tpl->tpl_vars['pagination']->value['next'] !== '') {?>
		<link rel="next" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
">
	<?php }?>

	<link rel="home" href="/">
	
	<!-- SLICK.jS -->
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link href="/apps/libs/lightbox/dist/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="/apps/libs/WOW-master/css/libs/animate.css">
	<!-- END -->
	<link rel="icon" href="/img/new/header-icon.png" type="image/x-icon" />

	<?php echo '<script'; ?>
>(function(d) { d.className = d.className.replace(/\bno-js/, ''); })(document.documentElement);<?php echo '</script'; ?>
>

	<meta name="yandex-verification" content="f55a0705b41cd2fe" />

	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>
<body class="page-<?php echo $_smarty_tpl->tpl_vars['_page']->value['system'];?>
">
    <div class="loader loader_show">
    	<img src="/img_new/loader.gif" />
    </div>
    <div class="modal__wrapper">
        <div class="appointment" id="appointment">
            <div class="form__content">
                <div class="appointment__close">
                    <a>
                        <i class="material-icons">
                            close
                        </i>
                    </a>
                </div>
                <div class="appointment__fields">
                    <input type="text" id="name" name="name" placeholder="Ваше имя">
                    <input type="text" name="phone" id="phone" placeholder="Телефон">
                    <input type="text" name="comment" id="comment" placeholder="Комментарий...">
                </div>
                <div class="appointment__buttons">
                    <a>Записаться</a>
                </div>
            </div>
        </div>
        <div class="success">
            <div class="form__content">
                <p>Благодарим Вас за доверие!</p>
                <p>В течении 10 минут с Вами свяжется наш администратор для потверждения записи</p>
                <div class="appointment__close">
                    <a>
                        <i class="material-icons">
                            close
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Yandex.Metrika counter -->
	<?php echo '<script'; ?>
>
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter47938892 = new Ya.Metrika2({
	                    id:47938892,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/tag.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks2");
	<?php echo '</script'; ?>
>
	<noscript><div><img src="https://mc.yandex.ru/watch/47938892" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php }
}
