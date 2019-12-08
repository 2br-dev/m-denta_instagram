<?php
/* Smarty version 3.1.32, created on 2019-12-08 20:21:43
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\themes\base\smarty\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ded3127b9fa52_84778099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8547c2a82473f1425f85e0cf48df9bb019967b' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\index.tpl',
      1 => 1570796121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./components/meta.tpl' => 1,
    'file:./components/modal.tpl' => 1,
    'file:./components/header.tpl' => 1,
    'file:./components/main-menu.tpl' => 1,
    'file:./components/footer.tpl' => 1,
    'file:./components/scripts.tpl' => 1,
  ),
),false)) {
function content_5ded3127b9fa52_84778099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./components/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><?php $_smarty_tpl->_subTemplateRender("file:./components/main-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="main_content"><div class="services-mainPage"><div class="services-mainPage__item lechenie-zubov"><a class="timeout" href="/lechenie-zubov"></a><img src="/img_new/11.png"><p>Лечение зубов</p></div><div class="services-mainPage__item implantacia-zubov"><a href="/implantaciya-zubov"></a><img src="/img_new/12.png"><p>Имплантация зубов</p></div><div class="services-mainPage__item protezirovanie-zubov"><a href="/protezirovanie-zubov"></a><img src="/img_new/13.png"><p>Протезирование зубов</p></div><div class="services-mainPage__item smile-album"><a href="/albom-ulybok"></a><img src="/img_new/14.png"><p>Альбом улыбок</p></div><div class="services-mainPage__item our-works"><a href="/nashi-raboty"></a><img src="/img_new/15.png"><p>Наши работы</p></div><div class="services-mainPage__item about"><a href="/about"></a><img src="/img_new/16.png"><p>О клинике</p></div></div><div class="page-content"><?php echo $_smarty_tpl->tpl_vars['_page']->value['content'];?>
</div></div><?php $_smarty_tpl->_subTemplateRender("file:./components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
