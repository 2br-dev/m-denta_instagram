<?php
/* Smarty version 3.1.32, created on 2019-12-08 21:05:31
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\modules\implantaciyapageprice\tpl\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ded3b6b298389_75734112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f247f6dcb7030f235357004d49758bf98f44e8' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\modules\\implantaciyapageprice\\tpl\\block.tpl',
      1 => 1572337731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded3b6b298389_75734112 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['price']->value) {?>
    <div class="price-block" style="margin-bottom: 45px;">
        <h2>Стоимтость имплантации зубов</h2>
        <div class="price-block__title">
            <p>Код услуги</p>
            <p>Описание</p>
            <p>Цена</p>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="price-block__item">
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</p>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
