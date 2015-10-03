<?php /*%%SmartyHeaderCode:26158560fa3df904103-52415511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b136024cd3cdbff39ca74149b90360dccb59ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1443436447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26158560fa3df904103-52415511',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560fa3df956199_77826754',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560fa3df956199_77826754')) {function content_560fa3df956199_77826754($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 clearfix"><form id="searchbox" method="get" action="//localhost/shop/search" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" /> <button type="submit" name="submit_search" class="btn btn-default button-search"> <span>Поиск</span> </button></form></div><?php }} ?>
