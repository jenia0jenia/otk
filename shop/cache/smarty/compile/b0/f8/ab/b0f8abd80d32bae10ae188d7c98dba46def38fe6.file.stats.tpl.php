<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 03:15:31
         compiled from "C:\xampp\htdocs\shop\admin342hwnbab\themes\default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11184560340a30b5c59-06075704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f8abd80d32bae10ae188d7c98dba46def38fe6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin342hwnbab\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1440045812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11184560340a30b5c59-06075704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560340a30c5651_74914710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560340a30c5651_74914710')) {function content_560340a30c5651_74914710($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
