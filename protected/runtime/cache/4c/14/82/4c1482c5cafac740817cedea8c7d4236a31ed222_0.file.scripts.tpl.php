<?php
/* Smarty version 3.1.32, created on 2019-11-25 11:04:11
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\themes\base\smarty\components\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddb8afbea1120_61145366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1482c5cafac740817cedea8c7d4236a31ed222' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\components\\scripts.tpl',
      1 => 1570443168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb8afbea1120_61145366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\app\\libs\\smarty.plugins\\function.compress.php','function'=>'smarty_function_compress',),));
?><!-- <?php echo '<script'; ?>
 src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"><?php echo '</script'; ?>
> --><?php echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'))),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['suggestions']->value)) {?><!--[if lt IE 10]><?php echo '<script'; ?>
 type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"><?php echo '</script'; ?>
><![endif]--><?php echo '<script'; ?>
 src="https://dadata.ru/static/js/lib/jquery.suggestions-15.12.min.js"><?php echo '</script'; ?>
><?php }?><!-- Dependencies --><?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/apps/libs/jquery.maskedinput-master/src/jquery.maskedinput.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/apps/libs/lightbox/dist/js/lightbox.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/static/js/libs/simple-lightbox.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/slick/slick.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/apps/libs/WOW-master/dist/wow.min.js"><?php echo '</script'; ?>
><!-- Main JavaScript File --><?php echo '<script'; ?>
 src="/static/js/script.js"><?php echo '</script'; ?>
></body></html><?php }
}
