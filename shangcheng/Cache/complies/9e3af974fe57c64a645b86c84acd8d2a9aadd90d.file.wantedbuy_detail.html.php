<?php /* Smarty version Smarty-3.1.11, created on 2013-03-31 03:37:51
         compiled from "D:\AppServ\www\pl\webroot\wantedbuy_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1509551486f62c91d38-28228652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e3af974fe57c64a645b86c84acd8d2a9aadd90d' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\wantedbuy_detail.html',
      1 => 1364701059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1509551486f62c91d38-28228652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51486f62d0db95_65360237',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51486f62d0db95_65360237')) {function content_51486f62d0db95_65360237($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/lr_common.css","public/css/wantedbuy_detail.css"]);
	//import_script(["public/javascript/Tweenli.js","public/javascript/evaluate.js"]);
</script>
<title>求购详情</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="content_title">
		求购详情
	</div>
	<div class="ui_content clearfix">
		<div class="ui_content_left">
			<?php echo $_smarty_tpl->getSubTemplate ("goods_classify.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="ui_content_right">
			<div  class="wantedbuy_info">
			<input type="hidden" id="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['wanted_id'];?>
" />
			<table cellspacing="0" cellpadding="0"><tbody>
					<tr>
						<td>
							商品名:
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['result']->value['wanted_name'];?>

						</td>
					</tr>
					<tr>
						<td>
							心愿价:
						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['result']->value['wanted_price']==0){?>面谈<?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['result']->value['wanted_price'];?>
元<?php }?>
						</td>
					</tr>
					<tr>
						<td>
							发布者:
						</td>
						<td>
							<a style="color:#333;" href="?seeuser!seeUser.html?username=<?php echo $_smarty_tpl->tpl_vars['result']->value['wanted_ower'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['wanted_ower'];?>
</a>
						</td>
					</tr>
					<tr>
						<td>
							求购时间:
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['result']->value['wanted_time'];?>

						</td>
					</tr>
					<tr>
						<td>
							联系方式:
						</td>
						<td>
							<ul class="content_way">
								<li>
									<span class="inline_block caption">手机:</span>
									<span class="inline_block detail"><?php echo $_smarty_tpl->tpl_vars['result']->value['user_tel'];?>
</span>
								</li>
								<li>
									<span class="inline_block caption">QQ:</span>
									<span class="inline_block detail"><?php echo $_smarty_tpl->tpl_vars['result']->value['user_qq'];?>
</span>
								</li>
							</ul>
						</td>
					</tr>
			</tbody></table>
			</div>
			<div class="evaluate_content">
				<?php echo $_smarty_tpl->getSubTemplate ("evaluate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>