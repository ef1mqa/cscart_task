<?php
/* Smarty version 4.1.0, created on 2022-12-03 19:33:04
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/common/select_vendor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638b7a40867602_78339504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79419379e11a3f58418bd01dd78bc4f366da84d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/common/select_vendor.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/ajax_select_object.tpl' => 1,
  ),
),false)) {
function content_638b7a40867602_78339504 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('search_by_vendor','search_by_owner','all_vendors'));
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['name']->value ?? null)===null||$tmp==='' ? "company_id" ?? null : $tmp));?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_assignInScope('lang_search_by_vendor', $_smarty_tpl->__("search_by_vendor"));
} elseif (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('lang_search_by_vendor', $_smarty_tpl->__("search_by_owner"));
}?>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

<div class="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? "control-group" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['search']->value['company_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <label class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_search_by_vendor']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_url'=>"companies.get_companies_list?show_all=Y&search=Y",'text'=>(($tmp = fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['company_id']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") ?? null : $tmp),'result_elm'=>$_smarty_tpl->tpl_vars['id']->value,'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector",'relative_dropdown'=>$_smarty_tpl->tpl_vars['relative_dropdown']->value), 0, false);
?>
    </div>
</div>

<?php }
}
}
