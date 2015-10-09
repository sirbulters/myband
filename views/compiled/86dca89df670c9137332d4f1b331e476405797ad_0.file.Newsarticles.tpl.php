<?php /* Smarty version 3.1.27, created on 2015-09-23 08:44:32
         compiled from "views/Newsarticles.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134745682556024a50a754d5_84021944%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86dca89df670c9137332d4f1b331e476405797ad' => 
    array (
      0 => 'views/Newsarticles.tpl',
      1 => 1442390852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134745682556024a50a754d5_84021944',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56024a50b9bee8_82763906',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56024a50b9bee8_82763906')) {
function content_56024a50b9bee8_82763906 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134745682556024a50a754d5_84021944';
?>
<section>

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
    </article>

<?php
$_smarty_tpl->tpl_vars['newsitem'] = $foreach_newsitem_Sav;
}
?>

</section><?php }
}
?>