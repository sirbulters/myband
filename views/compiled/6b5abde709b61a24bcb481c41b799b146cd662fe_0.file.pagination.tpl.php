<?php /* Smarty version 3.1.27, created on 2015-10-06 10:01:17
         compiled from "views/pagination.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19209184256137fcd673790_83271923%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5abde709b61a24bcb481c41b799b146cd662fe' => 
    array (
      0 => 'views/pagination.tpl',
      1 => 1444118406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19209184256137fcd673790_83271923',
  'variables' => 
  array (
    'page_nr' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56137fcd6e3907_98219033',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56137fcd6e3907_98219033')) {
function content_56137fcd6e3907_98219033 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19209184256137fcd673790_83271923';
?>
<ul>

    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != 1) {?>
        <li><a href="?page=newsarticles&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value-1;?>
">&laquo;</a></li>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['page_nr']->value) {?>
            <li style="font-size: 120%;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</li>

        <?php } else { ?>
            <li><a href="?page=newsarticles&page_nr=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php }?>

    <?php }} ?>

    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != $_smarty_tpl->tpl_vars['pages']->value) {?>
        <li><a href="?page=newsarticles&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value+1;?>
">&raquo;</a></li>
    <?php }?>
</ul><?php }
}
?>