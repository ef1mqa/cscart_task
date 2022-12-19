<?php
/* Smarty version 4.1.0, created on 2022-12-03 19:33:04
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638b7a408716f4_26635066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bc877f328a8dc93c313817ecc8b5f4b9696a6f1' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b7a408716f4_26635066 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }
}
