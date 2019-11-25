<?php
/* Smarty version 3.1.32, created on 2019-10-29 11:43:27
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\app\core\admin-template\system\buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5db7fbaf70a568_46270592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04de99f9e1c9aa8ac8f88b6d53db6c28eef0b248' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\system\\buttons.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7fbaf70a568_46270592 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="button-container"><button class="button is-save" name="save" type="submit" onclick="return CheckAndSubmit('form_mdd')"><i class="zmdi zmdi-save"></i><?php echo t('buttons.save.and.close');?>
</button><button class="button is-apply" name="apply" type="submit" onclick="return CheckAndSubmit('form_mdd')"><i class="zmdi zmdi-check-square"></i><?php echo t('buttons.save');?>
</button><span class="button-container__title">или</span><a class="button-link" href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/"><i class="zmdi zmdi-arrow-left"></i><?php echo t('buttons.cancel');?>
</a></div><?php }
}
