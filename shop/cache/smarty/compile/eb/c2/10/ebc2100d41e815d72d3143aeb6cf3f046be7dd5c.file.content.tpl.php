<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 03:20:50
         compiled from "C:\xampp\htdocs\shop\admin342hwnbab\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21527560341e246fe94-59126201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc2100d41e815d72d3143aeb6cf3f046be7dd5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin342hwnbab\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1440045812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21527560341e246fe94-59126201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560341e24b63a3_24426217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560341e24b63a3_24426217')) {function content_560341e24b63a3_24426217($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
