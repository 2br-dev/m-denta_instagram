<?php
/* Smarty version 3.1.32, created on 2019-11-25 11:04:11
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\themes\base\smarty\components\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddb8afbb8c300_53621125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a342c2af671e370f633f8b5c68b7e1f5ad291e8' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\modal.tpl',
      1 => 1541677089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb8afbb8c300_53621125 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal-first-touch wow fadeIn" data-wow-delay=".5s">
	<a href="#" class="modal-close"></a>
	<form id="form-modal" method="post" action='send.php'>
		<p class="black-centre-24">Введите ваш номер телефона,
и мы вам перезвоним</p>
		<input id="submit-modal" type="text" name="phone" class="modal-input" required>
		<input type="hidden" name="field" value="Всплывающая форма">
		<button class="modal-button btn">Отправить</button>
	</form>
</div>

<div class="modal-wrapper wow fadeIn"></div>

<div class="modal modal-reaction wow flip">
	<a href="#" class="modal-close"></a>
		<p class="black-centre-24">Спасибо!</p>
		<p class="black-centre-24">Мы перезвоним вам в ближайшее время</p>
		<img src="/img/calback.png" alt="перезвоните нам">
		<img class="callback" src="/img/callback-circle.png" alt="перезвоните нам">
</div><?php }
}
