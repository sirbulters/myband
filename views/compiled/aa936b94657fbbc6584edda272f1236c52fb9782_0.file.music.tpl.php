<?php /* Smarty version 3.1.27, created on 2015-10-09 10:52:07
         compiled from "views/music.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30771774156178037ad3c10_22168732%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa936b94657fbbc6584edda272f1236c52fb9782' => 
    array (
      0 => 'views/music.tpl',
      1 => 1444380726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30771774156178037ad3c10_22168732',
  'variables' => 
  array (
    'result' => 0,
    'musicitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56178037b73513_62430316',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56178037b73513_62430316')) {
function content_56178037b73513_62430316 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30771774156178037ad3c10_22168732';
?>
<div id="music">

    <?php echo $_smarty_tpl->getSubTemplate ('pagination3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <h1>Music</h1>

    <?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
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
</content><br>
            <p>Lyrics</p>
            <content><?php echo $_smarty_tpl->tpl_vars['musicitem']->value['musiclyric'];?>
</content>
            <hr>
        </article>


    <?php
$_smarty_tpl->tpl_vars['musicitem'] = $foreach_musicitem_Sav;
}
?>


</div><?php }
}
?>