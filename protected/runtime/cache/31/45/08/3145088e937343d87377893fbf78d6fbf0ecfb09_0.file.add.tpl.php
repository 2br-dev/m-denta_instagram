<?php
/* Smarty version 3.1.32, created on 2019-10-12 18:23:42
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\app\core\admin-template\view\structure\index\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5da1effe83a3a6_62492677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3145088e937343d87377893fbf78d6fbf0ecfb09' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\view\\structure\\index\\add.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5da1effe83a3a6_62492677 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" id="form_stc"><input type="hidden" name="action" value="add">	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_og.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_structure.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></form>


<?php }
}
