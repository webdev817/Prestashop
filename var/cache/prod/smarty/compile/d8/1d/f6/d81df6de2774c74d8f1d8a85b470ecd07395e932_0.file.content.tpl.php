<?php
/* Smarty version 3.1.33, created on 2020-10-01 15:24:07
  from 'C:\xampp\htdocs\myshop\admin278xhcyjr\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f762cd7c21594_12097799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81df6de2774c74d8f1d8a85b470ecd07395e932' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop\\admin278xhcyjr\\themes\\default\\template\\content.tpl',
      1 => 1601574786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f762cd7c21594_12097799 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
