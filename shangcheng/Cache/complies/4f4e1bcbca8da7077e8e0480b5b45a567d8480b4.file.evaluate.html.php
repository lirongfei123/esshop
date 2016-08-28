<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:34:18
         compiled from "D:\AppServ\www\esshop\webroot\evaluate.html" */ ?>
<?php /*%%SmartyHeaderCode:1953951599aeac88fa1-17862581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4e1bcbca8da7077e8e0480b5b45a567d8480b4' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\evaluate.html',
      1 => 1364563383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1953951599aeac88fa1-17862581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599aeacc2b50_27630145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599aeacc2b50_27630145')) {function content_51599aeacc2b50_27630145($_smarty_tpl) {?><script type="text/javascript">
import_style(["public/css/evaluate.css"]);
import_script(["public/javascript/Tweenli.js","public/javascript/evaluate.js"]);
</script>
<ul id="evaluate_menu_content" class="clearfix">
	<li class="focus_menu" onclick="tab_switch('goods_detail_display','evaluate_detail_display')">详细说明</li>
	<li id="evaluate_button" onclick="tab_switch('evaluate_detail_display','goods_detail_display')">网友评论</li>
	<div class="focus_elem"></div>
</ul>
<div class="goods_detail_display_content">
	<div id="goods_detail_display">
		<?php echo $_smarty_tpl->tpl_vars['result']->value['miaoshu'];?>

	</div>
	<div id="evaluate_detail_display">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['comment']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
 $_smarty_tpl->tpl_vars['comment']->index++;
?>
			<li class="clearfix evaluate_item">
				<div class="caption">
					<a href="a_img"><img src="<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_face'];?>
" /></a>
				</div>
				<div class="detail">
					<div class="person_info">
						<?php echo $_smarty_tpl->tpl_vars['comment']->index;?>
楼:<span class="person_name"><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_id'];?>
</span>发表于<span class="time"><?php echo $_smarty_tpl->tpl_vars['comment']->value['time'];?>
</span><a href="javascript:;" onclick="reply_evaluate(this)">回复此评论</a>
					</div>
					<div class="evaluate_detail">
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['detail'];?>

					</div>
				</div>
			</li>
		<?php } ?>
		</ul>
		<div id="reply_evaluate_content">
			<textarea cols="70" rows="5" id="release_replay_evaluate_value"></textarea>
			<br />
			<button onclick="newevaluate('reply')">发表评论</button>
			<button onclick="this.parentNode.style.display='none';">关闭</button>
		</div>
		<div>
			<textarea cols="70" rows="5" id="release_evaluate_value"></textarea>
			<br />
			<button onclick="newevaluate('new')">发表评论</button>
		</div>
	</div>
</div>

<?php }} ?>