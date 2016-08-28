<?php /* Smarty version Smarty-3.1.11, created on 2013-03-23 03:49:00
         compiled from "D:\AppServ\www\pl\webroot\goods_search.html" */ ?>
<?php /*%%SmartyHeaderCode:17745514d1dc2ba1958-25631527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f5a068fd3445088e270f889bc1b24ff81d2005' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\goods_search.html',
      1 => 1364009754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17745514d1dc2ba1958-25631527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514d1dc2d09c16_86950474',
  'variables' => 
  array (
    'recentScan' => 0,
    'recent' => 0,
    'goods' => 0,
    'good' => 0,
    'good_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514d1dc2d09c16_86950474')) {function content_514d1dc2d09c16_86950474($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>跳骚市场</title>
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/lr_common.css","public/css/goods.css"]);
	import_script(["public/javascript/search_common.js",
	               "public/javascript/goods_search.js"]);
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
<div class="content_title">
	搜索页
</div>
<div class="ui_content clearfix">
	<div class="ui_content_left">
		<?php echo $_smarty_tpl->getSubTemplate ("goods_classify.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<dl class="recent_scan">
			<dt>最近浏览</dt>
			<?php  $_smarty_tpl->tpl_vars['recent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentScan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent']->key => $_smarty_tpl->tpl_vars['recent']->value){
$_smarty_tpl->tpl_vars['recent']->_loop = true;
?>
			<dd><a class="inline_block addDian" href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['recent']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['recent']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['recent']->value['name'];?>
</a></dd>
			<?php } ?>
		</dl>
	</div>
	<div class="ui_content_right">
		<div style="color:#CC3300;font-family:'微软雅黑';font-weight:bold;font-size:15px;">
			为你找到以下符合条件的商品
		</div>
		<ul class="clearfix goods_list" id="goods_list">
			<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
				<li>
					<dl class="item">
						<dt class="item_title"><img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" /></dt>
						<dd><a class="goods_href" target="_blank" href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></dd>
						<dd class="xiushi"><span class="caption">跳骚价:</span><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
元<span class="caption">浏览量:</span><?php echo $_smarty_tpl->tpl_vars['good']->value['scan_num'];?>
次</dd>
					</dl>
				</li>
			<?php } ?>
		</ul>
		<div class="load_more"><span nums="10" type="<?php echo $_smarty_tpl->tpl_vars['good_type']->value;?>
" class="inline_block" id="load_more_goods">正在加载...</span></div>
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>