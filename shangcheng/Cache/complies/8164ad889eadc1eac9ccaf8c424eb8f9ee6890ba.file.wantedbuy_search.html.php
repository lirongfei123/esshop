<?php /* Smarty version Smarty-3.1.11, created on 2014-11-16 08:26:20
         compiled from "E:\gitcode\php\esshop\webroot\wantedbuy_search.html" */ ?>
<?php /*%%SmartyHeaderCode:10975468519cbae2f6-33891306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8164ad889eadc1eac9ccaf8c424eb8f9ee6890ba' => 
    array (
      0 => 'E:\\gitcode\\php\\esshop\\webroot\\wantedbuy_search.html',
      1 => 1410704469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10975468519cbae2f6-33891306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5468519cbecb00_13882178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5468519cbecb00_13882178')) {function content_5468519cbecb00_13882178($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>求购市场</title>
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/lr_common.css","public/css/wantedbuy.css","public/css/goods.css"]);
	import_script(["public/javascript/search_common.js","public/javascript/wantedbuy_search.js"]);
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
<div class="content_title">
	求购市场
</div>
<div class="ui_content clearfix">
	<div class="ui_content_left">
		<?php echo $_smarty_tpl->getSubTemplate ("goods_classify.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<dl class="ui_content_right">
		<dt style="width:250px;">
			为你找到以下符合条件的商品
		</dt>
		<dd class="content_detail">
			<table cellspacing="0" cellpadding="0"><thead>
					<th class="th1">商品名</th>
					<th>心愿价</th>
					<th>浏览次数</th>
					<th>用户</th>
					<th>发布时间</th>
				</thead><tbody id="wantedbuy_list">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr>
						<td class="td1"><a href="?wantedbuy!wantedbuy_detail.html?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_id'];?>
" class="inline_block addDian"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_name'];?>
</a></td>
						<td class="td2"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_price'];?>
元</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_scans'];?>
次</td>
						<td class="td4"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_ower'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_time'];?>
</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<div class="load_more"><span nums="15" class="inline_block" id="load_more_goods">正在加载...</span></div>
		</dd>
	</dl>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>