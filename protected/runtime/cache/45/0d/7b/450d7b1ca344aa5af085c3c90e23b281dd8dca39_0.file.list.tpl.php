<?php
/* Smarty version 3.1.32, created on 2019-11-25 11:55:42
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\modules\ourworks\tpl\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddb970e35fca2_77078289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450d7b1ca344aa5af085c3c90e23b281dd8dca39' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\modules\\ourworks\\tpl\\list.tpl',
      1 => 1570793298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb970e35fca2_77078289 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ourworks">
  <h1>Наши работы</h1>
    <?php if ($_smarty_tpl->tpl_vars['ourworks']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ourworks']->value, 'works');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['works']->value) {
?>
            <div class="works__item">
                <p class="works-item__title" data-id="<?php echo $_smarty_tpl->tpl_vars['works']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['works']->value['name'];?>
</p>
                <div class="works-item__img" id="<?php echo $_smarty_tpl->tpl_vars['works']->value['id'];?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['works']->value['image_file'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['sm']['file'];?>
"/>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

</div>

<?php }
}
