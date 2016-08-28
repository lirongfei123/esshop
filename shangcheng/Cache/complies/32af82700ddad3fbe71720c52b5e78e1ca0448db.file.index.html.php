<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 08:12:42
         compiled from "A:\gitcode\php\esshop\webroot\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2153057c280daeb0d39-97580919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32af82700ddad3fbe71720c52b5e78e1ca0448db' => 
    array (
      0 => 'A:\\gitcode\\php\\esshop\\webroot\\index.html',
      1 => 1439893921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2153057c280daeb0d39-97580919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wantedbuy' => 0,
    'item' => 0,
    'result_array' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c280db262a72_43053973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c280db262a72_43053973')) {function content_57c280db262a72_43053973($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<meta name ="keywords" content="情书, 表白,恋爱技巧,爱情" /> 
<meta name="description" content="想表白但又不知道怎么表白，赶快来吧，收获的的爱情"> 
<meta name="author" content="李荣飞，http://biaobai.sinaapp.com"> 
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