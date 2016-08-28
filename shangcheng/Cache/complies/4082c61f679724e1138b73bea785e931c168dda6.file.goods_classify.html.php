<?php /* Smarty version Smarty-3.1.11, created on 2014-11-16 08:24:54
         compiled from "E:\gitcode\php\esshop\webroot\goods_classify.html" */ ?>
<?php /*%%SmartyHeaderCode:508954685146188b22-07642185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4082c61f679724e1138b73bea785e931c168dda6' => 
    array (
      0 => 'E:\\gitcode\\php\\esshop\\webroot\\goods_classify.html',
      1 => 1410704468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508954685146188b22-07642185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fenlei_in' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54685146190838_31061602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54685146190838_31061602')) {function content_54685146190838_31061602($_smarty_tpl) {?><script type="text/javascript">
	require_style("public/css/goods_classify.css");
</script>
<dl class="goods_classify">
	<dt>商品类别</dt>
	<div class="content_detail">
		<dd><a href="<?php echo $_smarty_tpl->tpl_vars['fenlei_in']->value;?>
?type=1">书籍</a></dd>
		<dd><a href="<?php echo $_smarty_tpl->tpl_vars['fenlei_in']->value;?>
?type=2">数码</a></dd>
		<dd><a href="<?php echo $_smarty_tpl->tpl_vars['fenlei_in']->value;?>
?type=3">生活</a></dd>
		<dd><a href="<?php echo $_smarty_tpl->tpl_vars['fenlei_in']->value;?>
?type=0">其他</a></dd>
	</div>
</dl><?php }} ?>