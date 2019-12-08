<?php
/* Smarty version 3.1.32, created on 2019-11-25 11:55:28
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\modules\smile\tpl\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddb9700572355_06980316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39dda041c1bc50fa3ba9d10a452bbba3bbd67172' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\modules\\smile\\tpl\\block.tpl',
      1 => 1570783510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb9700572355_06980316 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['smile']->value) {?>
    <div class="smile__wrapper">
        <h1>Открытые улыбки</h1>
        <p class="smile__desc">В клинике М-Дента мы создаем для людей здоровые открытые улыбки. После лечения в нашей стоматологии Вы
            сможете улыбаться смело и быть уверенным в красоте и здоровье Ваших зубов.</p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smile']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="smile__item">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['image_file'], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['sm']['file'];?>
">
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
