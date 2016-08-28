<?php /* Smarty version Smarty-3.1.11, created on 2013-03-29 13:23:04
         compiled from "D:\AppServ\www\pl\webroot\evaluate.html" */ ?>
<?php /*%%SmartyHeaderCode:1523051490f8f06d038-74356483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05decab4a87e83db54af7dbd922108f85b5a2114' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\evaluate.html',
      1 => 1364563383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523051490f8f06d038-74356483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51490f8f06f594_21628264',
  'variables' => 
  array (
    'result' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51490f8f06f594_21628264')) {function content_51490f8f06f594_21628264($_smarty_tpl) {?><script type="text/javascript">
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