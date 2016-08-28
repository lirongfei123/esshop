<?php /* Smarty version Smarty-3.1.11, created on 2013-03-29 14:20:47
         compiled from "D:\AppServ\www\pl\webroot\goodslike_page.html" */ ?>
<?php /*%%SmartyHeaderCode:140715155a33f292e60-56759468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6cd2e0edc52befddd85664f5cf796fc50b848d' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\goodslike_page.html',
      1 => 1364566543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140715155a33f292e60-56759468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'like_goods' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5155a33f2fe102_68068400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5155a33f2fe102_68068400')) {function content_5155a33f2fe102_68068400($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['like_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
	<li class="inline_block">
		<img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" />
		<div class="detail_name"><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" class="black"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></div>
	</li>
<?php } ?><?php }} ?>