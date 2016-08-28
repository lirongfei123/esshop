<?php /* Smarty version Smarty-3.1.11, created on 2013-03-30 11:43:35
         compiled from "D:\AppServ\www\pl\webroot\index.html" */ ?>
<?php /*%%SmartyHeaderCode:268565129897b05cd68-60736741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1c4898975619202aaa2d47d015108cd7c5edda' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\index.html',
      1 => 1364643705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268565129897b05cd68-60736741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5129897b18c1b8_72198585',
  'variables' => 
  array (
    'wantedbuy' => 0,
    'item' => 0,
    'result_array' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5129897b18c1b8_72198585')) {function content_5129897b18c1b8_72198585($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name ="keywords" content="情书, 表白,恋爱技巧,爱情" /> 
<meta name="description" content="想表白但又不知道怎么表白，赶快来吧，收获的的爱情"> 
<meta name="author" content="李荣飞，http://biaobai.sinaapp.com"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/index.css" />
<title>成都信息工程学院二手商城</title>
<script type="text/javascript">
	import_script(["public/javascript/liedit.js",
	               "public/javascript/printr.js",
	               "public/javascript/index.js"]);
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div id="chatroom">
		<div class="title">
			<span class="caption" onclick="read_info()">聊天室</span>
		</div>
		<div class="content">
			<ul id="info_content" class="info_content"></ul>
			<ul class="split">
				<li class="edit_item">
					<img src="public/images/index_biaoqing_icon.png" />
					<div class="face_content" onclick="chooose_face(event)">
						<ul class="face_title">
							<li class="face_item" lang="ali">阿狸</li>
							<li class="face_item" lang="jianyutu">监狱兔</li>
							<li class="face_item" lang="xiduoduo">喜多多</li>
							<div class="clear"></div>
						</ul>
						<div id="face_img_content"></div>
					</div>
				</li>
			</ul>
			<div class="info_edit">
				<iframe src="webroot/editable.html" name="liedit_iframe" onload="frame_editable()" id="liedit_iframe" frameborder="0"></iframe>
				<button onclick="send_info('liedit_iframe')">发送</button>
			</div>
		</div>
	</div>
	<div class="classify_title">
		<span class="sanjiao"></span>求购市场
	</div>
	<dl class="ui_list">
		<dt class="list_title">
			<span class="caption inline_block">最新求购</span>
			<a class="list_more" href="?wantedbuySearch!index_more.html">更多>></a>
		</dt>
		<dd>
			<ul class="list_content clearfix">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wantedbuy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li class="list_item">
					<a href="?wantedbuy!wantedbuy_detail?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_id'];?>
" class="qiugou_title inline_block addDian"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_name'];?>
</a>
					<span class="time inline_block">2010-2-12</span>
				</li>
				<?php } ?>
			</ul>
		</dd>
	</dl>
	<div class="classify_title">
		<span class="sanjiao"></span>跳骚市场
	</div>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<dl class="ui_list">
		<dt class="list_title">
			<span class="caption inline_block"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
			<a class="list_more" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['more_href'];?>
">更多>></a>
		</dt>
		<dd>
			<ul class="list_content clearfix">
				<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['detail_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
				<li class="list_item tiaosao_item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['good']->value['create_time'];?>
" />
					<ul class="detail_info">
						<li><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
" class="name addDian inline_block"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></li>
						<li class="price"><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</li>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</dd>
	</dl>
	<?php } ?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>