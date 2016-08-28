<?php /* Smarty version Smarty-3.1.11, created on 2013-03-31 03:37:28
         compiled from "D:\AppServ\www\pl\webroot\goods_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:32676514bb09ae27ec1-69720412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f237b56b53d7a666c899286ded5677656e53109' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\goods_detail.html',
      1 => 1364701047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32676514bb09ae27ec1-69720412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514bb09b097e09_91227187',
  'variables' => 
  array (
    'recentScan' => 0,
    'recent' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514bb09b097e09_91227187')) {function content_514bb09b097e09_91227187($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>商品详情</title>
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/lr_common.css","public/css/goods_detail.css"]);
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
		<div class="goods_info clearfix">
			<dl>
				<input type="hidden" id="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['goods_id'];?>
" />
				<dt><img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['face'];?>
" /></dt>
				<dd class="caption"><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</dd>
				<dd class="basicinfo">商品价:<?php if ($_smarty_tpl->tpl_vars['result']->value['price']==0){?>面谈 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['result']->value['price'];?>
 元<?php }?></dd>
				<dd class="basicinfo">发布者:<a class="black" href="?seeuser!seeUser.html?username=<?php echo $_smarty_tpl->tpl_vars['result']->value['create_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['create_user'];?>
</a></dd>
				<dd class="basicinfo">一句话描述:<?php echo $_smarty_tpl->tpl_vars['result']->value['onesay'];?>
</dd>
				<dd class="basicinfo">浏览量:<?php echo $_smarty_tpl->tpl_vars['result']->value['scan_num'];?>
次</dd>
				<dd class="basicinfo">发布时间:<?php echo $_smarty_tpl->tpl_vars['result']->value['create_time'];?>
</dd>
				<dd class="lianxi"><span class="caption inline_block">电话:</span><?php echo $_smarty_tpl->tpl_vars['result']->value['user_tel'];?>
</dd>
				<dd class="lianxi"><span class="caption inline_block">QQ:</span><?php echo $_smarty_tpl->tpl_vars['result']->value['user_qq'];?>
</dd>
				<dd class="lianxi"><span class="caption inline_block">邮箱:</span><?php echo $_smarty_tpl->tpl_vars['result']->value['user_mail'];?>
</dd>
			</dl>
		</div>
		<div class="goods_evaluate">
			<?php echo $_smarty_tpl->getSubTemplate ("evaluate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>