<?php /*%%SmartyHeaderCode:119235603288b2162d0-26974738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b136024cd3cdbff39ca74149b90360dccb59ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1440045812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119235603288b2162d0-26974738',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5603429594f012_59018764',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603429594f012_59018764')) {function content_5603429594f012_59018764($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 clearfix"><form id="searchbox" method="get" action="//localhost/shop/search" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" /> <button type="submit" name="submit_search" class="btn btn-default button-search"> <span>Поиск</span> </button></form></div><?php }} ?>
