<?php
/* Smarty version 4.1.0, created on 2022-12-03 19:33:19
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/buttons/clone_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638b7a4f8ed291_91618873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99a00815cd7039502e9653e72202f6fa5a04db2' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/buttons/clone_item.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b7a4f8ed291_91618873 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="btn btn-clone" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("clone");?>
</a>&nbsp;<?php }
}
