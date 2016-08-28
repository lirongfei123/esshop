<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:29:15
         compiled from "D:\AppServ\www\esshop\webroot\center\message.html" */ ?>
<?php /*%%SmartyHeaderCode:1493515999bb7ce056-89355650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c99839f763e7d84ee0e18585550b5ec21fc956' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\message.html',
      1 => 1364647276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493515999bb7ce056-89355650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515999bb879b86_75359605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515999bb879b86_75359605')) {function content_515999bb879b86_75359605($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>我的个人中心</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center_common.css" />
<link rel="stylesheet" type="text/css" href="public/css/message.css" />
<script src="public/javascript/message.js"></script>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">消息中心</span>
	</div>
	<div class="main_content">
		<div class="handle_title">
			<span class="inline_block button" onclick="reply_message()">回复</span>
			<span class="inline_block button" onclick="del_message()">删除</span>
			<span class="inline_block button" onclick="already_message()">标记为已读</span>
		</div>
		<table cellpadding="0" cellspacing="0">
			<col class="col_zero">
			<col class="col_one">
			<col class="col_two">
			<col class="col_three">
			<col class="col_four">
			<thead>
				<tr>
					<th></th>
					<th>状态</th>
					<th>主题</th>
					<th>发件人</th>
					<th style="border:0;">发送日期</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($_smarty_tpl->tpl_vars['messages']->value)==0){?>
				<tr>
					<td colspan="5">暂时没有消息哦</td>
				</tr>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
				<tr>
					<td><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
" name="message_item" class="message_check" /></td>
					<td><span class="mail_state inline_block<?php if ($_smarty_tpl->tpl_vars['message']->value['state']==1){?> already<?php }?>"></span></td>
					<td><a target="detail_iframe" href="?center-message!message_detail.html?id=<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['subject'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['message']->value['sender'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>
</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
<?php }} ?>