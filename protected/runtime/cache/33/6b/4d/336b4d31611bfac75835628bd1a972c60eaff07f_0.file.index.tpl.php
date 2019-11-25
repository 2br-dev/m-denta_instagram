<?php
/* Smarty version 3.1.32, created on 2019-10-29 11:31:15
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\app\core\admin-template\view\structure\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5db7f8d3d4b455_24926678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336b4d31611bfac75835628bd1a972c60eaff07f' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\view\\structure\\index\\index.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7f8d3d4b455_24926678 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dd-tree"><?php $_smarty_tpl->_assignInScope('structure_item', $_smarty_tpl->tpl_vars['tv_struct']->value);
if (!empty($_smarty_tpl->tpl_vars['structure_item']->value)) {?><div class="dd nestable-tree" data-path="structure" data-group="0"><ol class="dd-list"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/structure_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('a_tree'=>$_smarty_tpl->tpl_vars['structure_item']->value), 0, true);
?></ol></div><?php }?></div>

<?php }
}
