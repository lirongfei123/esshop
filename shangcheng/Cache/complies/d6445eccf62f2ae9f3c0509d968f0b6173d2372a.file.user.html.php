<?php /* Smarty version Smarty-3.1.11, created on 2013-03-28 00:55:48
         compiled from "D:\AppServ\www\pl\webroot\user.html" */ ?>
<?php /*%%SmartyHeaderCode:147514ac96b9b5fd8-03819792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6445eccf62f2ae9f3c0509d968f0b6173d2372a' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\user.html',
      1 => 1364432133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147514ac96b9b5fd8-03819792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514ac96ba4ea77_97099569',
  'variables' => 
  array (
    'result' => 0,
    'already_sells' => 0,
    'item' => 0,
    'now_sells' => 0,
    'already_buys' => 0,
    'now_buys' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ac96ba4ea77_97099569')) {function content_514ac96ba4ea77_97099569($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title><?php echo $_smarty_tpl->tpl_vars['result']->value['username'];?>
的信息</title>
<script src="public/javascript/common.js"></script> 
<link rel="stylesheet" type="text/css" href="public/javascript/form_check/formCheck.css" />
<link rel="stylesheet" type="text/css" href="public/css/user.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/windows/li_window.css" />
<script type="text/javascript">
	import_script(["public/javascript/kindeditor/kindeditor-min.js",
	               "public/javascript/kindeditor/lang/zh_CN.js",
	               "public/javascript/windows/li_window.js",
	               "public/javascript/user.js"]);
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="user_title">
		lirongfei的信息
	</div>
	<ul class="ui_content">
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				<img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['user_face'];?>
" />
			</div>
			<div id="scan_user" class="ui_item_right person_title">
				<?php echo $_smarty_tpl->tpl_vars['result']->value['username'];?>

			</div>
		</li>
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				注册时间:
			</div>
			<div class="ui_item_right">
				<?php echo $_smarty_tpl->tpl_vars['result']->value['register_time'];?>

			</div>
		</li>
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				卖出商品:
			</div>
			<dl class="ui_item_right">
				<dt class="open_detail">+展开</dt><!--
			 --><div class="detail_content">
			 		<?php if (tpl_count($_smarty_tpl->tpl_vars['already_sells']->value)==0){?>
			 			<font color="red">无</font>
			 		<?php }?>
				 	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['already_sells']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				 	<dd><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></dd>
				 	<?php } ?>
			 	</div>
			</dl>
		</li>
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				正在出售的商品:
			</div>
			<dl class="ui_item_right">
				<dt class="open_detail">+展开</dt><!--
			 --><div class="detail_content">
			 		<?php if (tpl_count($_smarty_tpl->tpl_vars['now_sells']->value)==0){?>
			 			<font color="red">无</font>
			 		<?php }?>
			 		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['now_sells']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			 		<dd><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></dd>
			 		<?php } ?>
			 	</div>
			</dl>
		</li>
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				求购的商品:
			</div>
			<dl class="ui_item_right">
				<dt class="open_detail">+展开</dt>
				<div class="detail_content">
					<?php if (tpl_count($_smarty_tpl->tpl_vars['already_buys']->value)==0){?>
			 			<font color="red">无</font>
			 		<?php }?>
			 		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['already_buys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			 		<dd><a href="?wantedbuy!wantedbuy_detail.html?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_name'];?>
</a></dd>
			 		<?php } ?>
			 	</div>
			</dl>
		</li>
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				正在求购的商品:
			</div>
			<dl class="ui_item_right">
				<dt class="open_detail">+展开</dt><!--
			 --><div class="detail_content">
				 	<?php if (tpl_count($_smarty_tpl->tpl_vars['now_buys']->value)==0){?>
			 			<font color="red">无</font>
			 		<?php }?>
			 		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['now_buys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			 		<dd><a href="?wantedbuy!wantedbuy_detail.html?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_name'];?>
</a></dd>
			 		<?php } ?>
			 	</div>
			</dl>
		</li>
		<li class="ui_item clearfix">
			<div class="ui_item_left">
				发短消息:
			</div>
			<div class="ui_item_right">
				<div>
					<label>消息主题<input id="message_subject" type="text" size="30" name="subject" /></label>
				</div>
				<textarea name="send_message" rows="10" cols="50"></textarea>
			</div>
			<div class="send_btn clear">
				<input type="button" value="发送" onclick="go_send_message()" />
			</div>
		</li>
	</ul>
</div>
<div id="login_content" style="display:none;">
	<form action="#" name="login_form" method="post">
		<p>
			<label>
				<span class="label">用户名</span>
				<input type="text" name="login_username" />
			</label>
		</p>
		<p>
			<label>
				<span class="label">密码</span>
				<input type="password" name="login_password" />
			</label>
		</p>
		<p>
			<input type="submit" value="登录" />
		</p>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>