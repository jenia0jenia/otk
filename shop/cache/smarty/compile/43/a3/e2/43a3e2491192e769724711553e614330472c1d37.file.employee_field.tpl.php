<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 03:19:44
         compiled from "C:\xampp\htdocs\shop\admin342hwnbab\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30854560341a088ba11-89158545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a3e2491192e769724711553e614330472c1d37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin342hwnbab\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1440045812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30854560341a088ba11-89158545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560341a0897599_61595221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560341a0897599_61595221')) {function content_560341a0897599_61595221($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
