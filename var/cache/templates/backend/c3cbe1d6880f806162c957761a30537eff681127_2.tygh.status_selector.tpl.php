<?php
/* Smarty version 4.1.0, created on 2022-12-03 19:33:04
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/components/context_menu/status_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638b7a40766791_18347036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cbe1d6880f806162c957761a30537eff681127' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/components/context_menu/status_selector.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
  ),
),false)) {
function content_638b7a40766791_18347036 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--check-items">
    <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler"
           type="checkbox"
           checked
           data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]"
           data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
    />
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
        <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
    </span>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['statuses']->value,'is_check_all_shown'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['is_check_all_shown'] ?? null)===null||$tmp==='' ? false ?? null : $tmp),'elms_container'=>$_smarty_tpl->tpl_vars['elms_container']->value), 0, false);
?>
</li><?php }
}
