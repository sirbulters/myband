<?php /* Smarty version 3.1.27, created on 2015-09-28 13:20:15
         compiled from "views/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15909141045609226fd34787_21833040%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570df2431eb6187ff2e8ad8d165d99b600730087' => 
    array (
      0 => 'views/home.tpl',
      1 => 1443173831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15909141045609226fd34787_21833040',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5609226fdc0ac5_73962256',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5609226fdc0ac5_73962256')) {
function content_5609226fdc0ac5_73962256 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15909141045609226fd34787_21833040';
?>
<section id="home">

    <h1>News</h1>

    <?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['newsitem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
$foreach_newsitem_Sav = $_smarty_tpl->tpl_vars['newsitem'];
?>

        <article>
            <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
            <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
            <hr>
        </article>

    <?php
$_smarty_tpl->tpl_vars['newsitem'] = $foreach_newsitem_Sav;
}
?>

</section><?php }
}
?>