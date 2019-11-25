<?php
/* Smarty version 3.1.32, created on 2019-10-29 11:43:26
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\app\core\admin-template\fields\datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5db7fbaef03261_44354594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee3d9d161a106ced8fa95be42338d8f7cd26a88' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\app\\core\\admin-template\\fields\\datetime.tpl',
      1 => 1541677088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7fbaef03261_44354594 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="calendar calendar_datetime"><input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="calendar__field js-datetimepicker" data-date-format="dd.mm.yyyy hh:ii" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" readonly><span class="calendar__icon add-on"><i class="zmdi zmdi-calendar"></i></span></div>
<?php }
}
