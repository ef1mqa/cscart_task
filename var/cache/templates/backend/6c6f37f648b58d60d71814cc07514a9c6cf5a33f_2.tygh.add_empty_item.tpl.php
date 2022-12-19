<?php
/* Smarty version 4.1.0, created on 2022-12-03 19:33:19
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/buttons/add_empty_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638b7a4f8ea088_48526572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c6f37f648b58d60d71814cc07514a9c6cf5a33f' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b7a4f8ea088_48526572 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }
}
