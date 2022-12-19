<?php
/* Smarty version 4.1.0, created on 2022-11-30 00:44:34
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63867d42d79d69_36544990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3797ecfa39715ac86a556f60b162dc6f8b08f0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63867d42d79d69_36544990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
