<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:33:43
         compiled from "D:\AppServ\www\esshop\webroot\goods_classify.html" */ ?>
<?php /*%%SmartyHeaderCode:679751599ac719a338-31228914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99ac6b035b30edd5af3f0cb02b5b9e51d5ec806' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\goods_classify.html',
      1 => 1364006648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679751599ac719a338-31228914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fenlei_in' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599ac71b1466_83628178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599ac71b1466_83628178')) {function content_51599ac71b1466_83628178($_smarty_tpl) {?><script type="text/javascript">
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