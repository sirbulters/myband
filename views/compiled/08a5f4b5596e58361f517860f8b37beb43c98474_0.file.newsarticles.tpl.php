<?php /* Smarty version 3.1.27, created on 2015-10-08 22:38:48
         compiled from "views/newsarticles.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1137435425616d458f31ba1_91622874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1444336727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1137435425616d458f31ba1_91622874',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5616d459027f03_84312079',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5616d459027f03_84312079')) {
function content_5616d459027f03_84312079 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1137435425616d458f31ba1_91622874';
?>
<div id="news">

    <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section>

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
        <div id="newsh1">
        <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['date_created'];?>
</h1>
</div>
       <div id="newsimage">
           <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>

       </div>
        <div id="newscontent">
        <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
        <hr>
        </div>
    </article>

<?php
$_smarty_tpl->tpl_vars['newsitem'] = $foreach_newsitem_Sav;
}
?>

<!--</div>-->

</section>

<?php }
}
?>