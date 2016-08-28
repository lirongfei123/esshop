<?php /* Smarty version Smarty-3.1.11, created on 2013-03-30 13:33:43
         compiled from "D:\AppServ\www\pl\webroot\top_logo.html" */ ?>
<?php /*%%SmartyHeaderCode:14223512b2cfaefe9a5-00465938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a5b1179df3dec3ae282dc66b9a5ebb1734d09e' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\top_logo.html',
      1 => 1364650421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14223512b2cfaefe9a5-00465938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_512b2cfb041c34_75988713',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512b2cfb041c34_75988713')) {function content_512b2cfb041c34_75988713($_smarty_tpl) {?><div id="top_daohang">
	<span class="title">
		欢迎来到成都信息工程学院二手商城,
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('auto_login', array()); $_block_repeat=true; echo index_login(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a target="_blank" href="?login!login.html">请登录</a>?<a target="_blank" href="?login!register.html">立即注册</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo index_login(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<a href="?center-center!person_center.html&frame=?center-center!newbuy.html">发布求购信息</a>
		<a href="?center-center!newproduce.html&frame=?center-center!newproduce.html">发布二手商品</a>
	</span>
	
</div>
<ul id="search" class="clearfix">
	<li>
		<a class="a_img inline_block" href="?index!index.html"></a>
	</li>
	<li class="btn">
		<a href="?wantedbuy!wantedbuy.html"></a>
		<a href="?goods!goods.html"></a>
	</li>
	<li class="search">
		<form onsubmit="top_search(this,event)">
			<input type="text" autocomplete="off" name="q" />
			<div class="radio">
				<label><input type="radio" value="good" name="search_type" checked />搜跳骚市场</label>
				<label><input type="radio" value="wanted" name="search_type" />搜求购市场</label>
			</div>
			<input type="submit" value="搜索" />
		</form>
	</li>
</ul><?php }} ?>