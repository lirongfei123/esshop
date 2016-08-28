<?php /* Smarty version Smarty-3.1.11, created on 2013-03-23 02:50:05
         compiled from "D:\AppServ\www\pl\webroot\goods_classify.html" */ ?>
<?php /*%%SmartyHeaderCode:997451486e5e384448-42969368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3764f1ef8640be919c87b392ee1bc87cc6f523c' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\goods_classify.html',
      1 => 1364006648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997451486e5e384448-42969368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51486e5e3cbfc9_30571598',
  'variables' => 
  array (
    'fenlei_in' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51486e5e3cbfc9_30571598')) {function content_51486e5e3cbfc9_30571598($_smarty_tpl) {?><script type="text/javascript">
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