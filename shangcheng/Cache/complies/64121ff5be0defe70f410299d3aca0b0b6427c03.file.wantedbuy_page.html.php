<?php /* Smarty version Smarty-3.1.11, created on 2013-03-20 12:56:08
         compiled from "D:\AppServ\www\pl\webroot\wantedbuy_page.html" */ ?>
<?php /*%%SmartyHeaderCode:193265149b1e8d8c675-44391112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64121ff5be0defe70f410299d3aca0b0b6427c03' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\wantedbuy_page.html',
      1 => 1363780731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193265149b1e8d8c675-44391112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5149b1e8e113e3_62922333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5149b1e8e113e3_62922333')) {function content_5149b1e8e113e3_62922333($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<tr>
		<td class="td1"><a class="inline_block addDian"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_name'];?>
</a></td>
		<td class="td2"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_price'];?>
元</td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_scans'];?>
次</td>
		<td class="td4"><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_ower'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['wanted_time'];?>
</td>
	</tr>
<?php } ?><?php }} ?>