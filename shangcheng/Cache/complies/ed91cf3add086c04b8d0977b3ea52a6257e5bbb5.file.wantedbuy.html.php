<?php /* Smarty version Smarty-3.1.11, created on 2014-11-16 08:26:27
         compiled from "E:\gitcode\php\esshop\webroot\wantedbuy.html" */ ?>
<?php /*%%SmartyHeaderCode:12221546851a368f2d9-49428836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed91cf3add086c04b8d0977b3ea52a6257e5bbb5' => 
    array (
      0 => 'E:\\gitcode\\php\\esshop\\webroot\\wantedbuy.html',
      1 => 1410704469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12221546851a368f2d9-49428836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'results' => 0,
    'index' => 0,
    'result' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_546851a36f4be9_28305020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546851a36f4be9_28305020')) {function content_546851a36f4be9_28305020($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>求购市场</title>
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/lr_common.css","public/css/wantedbuy.css"]);
	import_script(["public/javascript/wantedbuy.js"]);
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
		<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
$_smarty_tpl->tpl_vars['result']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
		<dt>
			<?php if ($_smarty_tpl->tpl_vars['index']->value=='zero'){?>
			其他
			<?php }elseif($_smarty_tpl->tpl_vars['index']->value=='one'){?>
			书籍
			<?php }elseif($_smarty_tpl->tpl_vars['index']->value=='two'){?>
			数码
			<?php }elseif($_smarty_tpl->tpl_vars['index']->value=='three'){?>
			生活
			<?php }?>
		</dt>
		<dd class="content_detail">
			<table cellspacing="0" cellpadding="0"><thead>
					<th class="th1">商品名</th>
					<th>心愿价</th>
					<th>浏览次数</th>
					<th>用户</th>
					<th>发布时间</th>
				</thead><tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			</table><div class="page_manager" type=<?php if ($_smarty_tpl->tpl_vars['index']->value=='zero'){?>0<?php }elseif($_smarty_tpl->tpl_vars['index']->value=='one'){?>1<?php }elseif($_smarty_tpl->tpl_vars['index']->value=='two'){?>2<?php }elseif($_smarty_tpl->tpl_vars['index']->value=='three'){?>3<?php }?> currentPage="0" pages="<?php echo $_smarty_tpl->tpl_vars['result']->value[0];?>
">
				<a href="javascript:;" onclick="go_page(this,'prev')">上一页</a>
				<a href="javascript:;" onclick="go_page(this,'next')">下一页</a>
			</div>
		</dd>
		<?php } ?>
	</dl>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>