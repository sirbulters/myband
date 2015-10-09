<?php /* Smarty version 3.1.27, created on 2015-10-03 21:55:52
         compiled from "views/search_result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15717604561032c83aef46_40240680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417ff168ebed9aabc0849e8a2a0c2a0028a9c681' => 
    array (
      0 => 'views/search_result.tpl',
      1 => 1443899808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15717604561032c83aef46_40240680',
  'variables' => 
  array (
    'articles_result' => 0,
    'newsitem' => 0,
    'tourdata_result' => 0,
    'touritem' => 0,
    'musicdata_result' => 0,
    'musicitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561032c846a832_15672184',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561032c846a832_15672184')) {
function content_561032c846a832_15672184 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15717604561032c83aef46_40240680';
?>
<section>
<!--als er niks gevonden niet. niet showen-->
    <?php if ($_smarty_tpl->tpl_vars['articles_result']->value->num_rows > 0) {?>

    <h1>News</h1>

    <?php }?>

    <?php
$_from = $_smarty_tpl->tpl_vars['articles_result']->value;
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
            <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
            <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
            <hr>
        </article>

    <?php
$_smarty_tpl->tpl_vars['newsitem'] = $foreach_newsitem_Sav;
}
?>
    <!--als er niks gevonden niet. niet showen-->
    <?php if ($_smarty_tpl->tpl_vars['tourdata_result']->value->num_rows > 0) {?>

    <h1>Tour</h1>

    <?php }?>

    <?php
$_from = $_smarty_tpl->tpl_vars['tourdata_result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['touritem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['touritem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['touritem']->value) {
$_smarty_tpl->tpl_vars['touritem']->_loop = true;
$foreach_touritem_Sav = $_smarty_tpl->tpl_vars['touritem'];
?>

        <article>
            <h1><?php echo $_smarty_tpl->tpl_vars['touritem']->value['nametour'];?>
  </h1>
            <content><?php echo $_smarty_tpl->tpl_vars['touritem']->value['city'];?>
 (<?php echo $_smarty_tpl->tpl_vars['touritem']->value['adres'];?>
 <?php echo $_smarty_tpl->tpl_vars['touritem']->value['country'];?>
)</content>
            <hr>
        </article>

    <?php
$_smarty_tpl->tpl_vars['touritem'] = $foreach_touritem_Sav;
}
?>
    <!--als er niks gevonden niet. niet showen-->
    <?php if ($_smarty_tpl->tpl_vars['musicdata_result']->value->num_rows > 0) {?>

    <h1>Music</h1>

    <?php }?>

    <?php
$_from = $_smarty_tpl->tpl_vars['musicdata_result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['musicitem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['musicitem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['musicitem']->value) {
$_smarty_tpl->tpl_vars['musicitem']->_loop = true;
$foreach_musicitem_Sav = $_smarty_tpl->tpl_vars['musicitem'];
?>

    <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['musicitem']->value['musictitle'];?>
</h1>
        <content><?php echo $_smarty_tpl->tpl_vars['musicitem']->value['musicembed'];?>
</content>
        <hr>
    </article>

    <?php
$_smarty_tpl->tpl_vars['musicitem'] = $foreach_musicitem_Sav;
}
?>


</section><?php }
}
?>