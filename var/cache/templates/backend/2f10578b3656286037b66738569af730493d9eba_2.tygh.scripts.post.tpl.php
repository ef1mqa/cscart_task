<?php
/* Smarty version 4.1.0, created on 2022-11-30 00:44:36
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63867d4412d3d6_21318705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f10578b3656286037b66738569af730493d9eba' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63867d4412d3d6_21318705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>

<?php }
}