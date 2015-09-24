<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 01:35:07
         compiled from "C:\xampp\htdocs\shop\admin342hwnbab\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252195603291b055da6-62082452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49c8bbcdbcbdae41603f2768e5085af06eeba408' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin342hwnbab\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1440045812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252195603291b055da6-62082452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5603291b069633_63339112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603291b069633_63339112')) {function content_5603291b069633_63339112($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
