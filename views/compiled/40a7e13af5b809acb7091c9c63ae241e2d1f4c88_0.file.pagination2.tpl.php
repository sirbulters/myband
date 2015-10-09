<?php /* Smarty version 3.1.27, created on 2015-10-02 12:10:19
         compiled from "views/pagination2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:133508314560e580b7ce3b2_92538786%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a7e13af5b809acb7091c9c63ae241e2d1f4c88' => 
    array (
      0 => 'views/pagination2.tpl',
      1 => 1443780618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133508314560e580b7ce3b2_92538786',
  'variables' => 
  array (
    'page_nr' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560e580b822108_83479949',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560e580b822108_83479949')) {
function content_560e580b822108_83479949 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133508314560e580b7ce3b2_92538786';
?>
<ul>

    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != 1) {?>
        <li></li><a href="?page=tour&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value-1;?>
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
            <li><a href="?page=tour&page_nr=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>

        <?php }?>

    <?php }} ?>

    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != $_smarty_tpl->tpl_vars['pages']->value) {?>
        <li></li><a href="?page=tour&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value+1;?>
">&raquo;</a></li>
    <?php }?>
</ul><?php }
}
?>