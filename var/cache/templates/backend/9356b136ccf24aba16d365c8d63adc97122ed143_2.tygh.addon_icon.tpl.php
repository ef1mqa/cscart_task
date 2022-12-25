<?php
/* Smarty version 4.1.0, created on 2022-12-03 19:55:02
  from '/Applications/MAMP/htdocs/cscart/design/backend/templates/views/addons/components/addons/addon_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638b7f66c3e921_83646166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9356b136ccf24aba16d365c8d63adc97122ed143' => 
    array (
      0 => '/Applications/MAMP/htdocs/cscart/design/backend/templates/views/addons/components/addons/addon_icon.tpl',
      1 => 1665485680,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638b7f66c3e921_83646166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cscart/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<?php $_smarty_tpl->_assignInScope('LABEL_LENGTH', 2);
$_smarty_tpl->_assignInScope('ICON_SIZE_MEDIUM', 60);
$_smarty_tpl->_assignInScope('ICON_SIZE_LARGE', 192);?>

<?php $_smarty_tpl->_assignInScope('size', $_smarty_tpl->tpl_vars['icon_large']->value ? "large" : "medium");
$_smarty_tpl->_assignInScope('icon_width', $_smarty_tpl->tpl_vars['icon_large']->value ? $_smarty_tpl->tpl_vars['ICON_SIZE_LARGE']->value : $_smarty_tpl->tpl_vars['ICON_SIZE_MEDIUM']->value);?>

<?php $_smarty_tpl->_assignInScope('wrapper_class', "addons-addon-icon__wrapper addons-addon-icon__wrapper--".((string)(mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['status'], 'UTF-8')))." addons-addon-icon__wrapper--".((string)$_smarty_tpl->tpl_vars['size']->value));
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['show_description']->value ? $_smarty_tpl->tpl_vars['addon_full_description']->value : '');?>

<?php if ($_smarty_tpl->tpl_vars['href']->value === true && fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('href', fn_link_attach(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])),"storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value)));
} elseif ($_smarty_tpl->tpl_vars['href']->value === true) {?>
    <?php $_smarty_tpl->_assignInScope('href', fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])));
}?>

<?php $_smarty_tpl->_assignInScope('image_dir_path', ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/addons/".((string)$_smarty_tpl->tpl_vars['addon']->value['addon']));
$_smarty_tpl->_assignInScope('icon_class', "addons-addon-icon__image addons-addon-icon__image--".((string)(mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['status'], 'UTF-8')))." addons-addon-icon__image--".((string)$_smarty_tpl->tpl_vars['size']->value));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
        <picture>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_svg_icon']) {?>
                <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.svg" type="image/svg+xml">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_avif_icon']) {?>
                <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.avif" type="image/avif">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_webp_icon']) {?>
                <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.webp" type="image/webp">
            <?php }?>
            <source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.png" type="image/png"> 
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_dir_path']->value, ENT_QUOTES, 'UTF-8');?>
/icon.png"
                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_width']->value, ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_width']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
        </picture>
    <?php } else { ?>
        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class']->value, ENT_QUOTES, 'UTF-8');?>
 addons-addon-icon__image--label">
            <?php echo htmlspecialchars(smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['addon']->value['name'], 'UTF-8'),$_smarty_tpl->tpl_vars['LABEL_LENGTH']->value,''), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['href']->value) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 addons-addon-icon__wrapper--link"
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    >
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon');?>

    </a>
<?php } else { ?>
    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    >
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon');?>

    </div>
<?php }
}
}
