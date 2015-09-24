<?php /*%%SmartyHeaderCode:299145603288bda7483-94594503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c10d3810712df640cb219a65ebbf90d9eaaea8a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1440045812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299145603288bda7483-94594503',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5603288be0cda3_21287037',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603288be0cda3_21287037')) {function content_5603288be0cda3_21287037($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/shop/my-account" title="Управление моей учетной записью" rel="nofollow">Моя учетная запись</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/shop/order-history" title="Мои заказы" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://localhost/shop/order-slip" title="Мои платёжные квитанции" rel="nofollow">Мои платёжные квитанции</a></li>
			<li><a href="http://localhost/shop/addresses" title="Мои адреса" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://localhost/shop/identity" title="Управление моими персональными данными" rel="nofollow">Моя личная информация</a></li>
						
            <li><a href="http://localhost/shop/?mylogout" title="Выход" rel="nofollow">Выход</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
