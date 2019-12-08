<?php
/* Smarty version 3.1.32, created on 2019-12-08 21:05:31
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\themes\base\smarty\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ded3b6b3765a9_72636507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b308a0f9f926e14317a8378488a4d82c9ee980a' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\base.tpl',
      1 => 1570435424,
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
function content_5ded3b6b3765a9_72636507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./components/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/main-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="page-content"><?php echo $_smarty_tpl->tpl_vars['_page']->value['content'];?>
</div></div><?php $_smarty_tpl->_subTemplateRender("file:./components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
