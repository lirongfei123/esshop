<?php /* Smarty version Smarty-3.1.11, created on 2013-04-02 11:43:39
         compiled from "D:\AppServ\www\esshop\webroot\center\message_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:14083515ac46b819f77-53793470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd3e3fbb46fd7ba9c96cf8ee73e00c205feeed8' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\message_detail.html',
      1 => 1364437771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14083515ac46b819f77-53793470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515ac46b9b4506_35992695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515ac46b9b4506_35992695')) {function content_515ac46b9b4506_35992695($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>我的个人中心</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" href="public/css/center_common.css" type="text/css" />
<link rel="stylesheet" href="public/css/message_detail.css" />
<script src="public/javascript/message_detail.js"></script>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">消息详情</span>
	</div>
	<div class="main_content">
		<div class="message_detail_content">
			<div class="handle_title" onclick="handle_message(event)">
				<button class="back">返回</button>
				<button class="reply">回复</button>
				<button class="del">删除</button>
			</div>
			<div class="message_detail">
				<input value="<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
" id="message_id" type="hidden" />
				<div class="detail_title">
					来自<?php echo $_smarty_tpl->tpl_vars['message']->value['receiver'];?>
的消息
				</div>
				<div class="detail_content">
					<?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>