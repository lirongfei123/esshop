<?php /* Smarty version Smarty-3.1.11, created on 2014-11-16 08:26:03
         compiled from "E:\gitcode\php\esshop\webroot\goods.html" */ ?>
<?php /*%%SmartyHeaderCode:43905468518b4e3ea0-90402741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9e558e0d727b72545e57d86d785b6e0a94f82b' => 
    array (
      0 => 'E:\\gitcode\\php\\esshop\\webroot\\goods.html',
      1 => 1410704468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43905468518b4e3ea0-90402741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recentScan' => 0,
    'recent' => 0,
    'goods' => 0,
    'good' => 0,
    'top_goods' => 0,
    'like_goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5468518b53dc35_41129113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468518b53dc35_41129113')) {function content_5468518b53dc35_41129113($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>跳骚市场</title>
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/lr_common.css","public/css/goods.css"]);
	import_script(["public/javascript/goods.js"]);
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
<div class="content_title">
	跳骚街
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
		<div class="load_more"><span nums="10" class="inline_block" onclick="load_more_goods(this)">加载更多...</span></div>
		<dl class="tuijian_content">
			<dt class="title">高访问量</dt>
			<dd>
				<ul class="detail_content" id="lunbo_img">
					<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
					<li class="inline_block">
						<img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" />
						<div class="detail_name"><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" class="black"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></div>
					</li>
					<?php } ?>
				</ul>
			</dd>
			<dt class="title title2">猜你喜欢</dt>
			<dd class="dd2">
				<ul class="detail_content" id="goodslike_content">
					<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['like_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
					<li class="inline_block">
						<img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" />
						<div class="detail_name"><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" class="black"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></div>
					</li>
					<?php } ?>
				</ul>
				<div class="huanyizu">
					<a href="javascript:otherlike()">换一组</a>
				</div>
			</dd>
		</dl>
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>