<?php /* Smarty version 3.1.27, created on 2015-10-08 18:33:48
         compiled from "views/tour.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76432850556169aec402ae3_66858261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaeac39d7a8e5e51f2ee2a05b127cb781869f513' => 
    array (
      0 => 'views/tour.tpl',
      1 => 1444322027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76432850556169aec402ae3_66858261',
  'variables' => 
  array (
    'result' => 0,
    'touritem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56169aec438d27_34365847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56169aec438d27_34365847')) {
function content_56169aec438d27_34365847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76432850556169aec402ae3_66858261';
?>
<div id="tour">

    <?php echo $_smarty_tpl->getSubTemplate ('pagination2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <h1>Tour</h1>


<div id="tourtable"></div>
    <article>
    <table style="width:100%">
        <tr>
            <th>TOUR</td>
            <th>ADDRESS</td>
            <th>COUNTRY</td>
            <th>DATE</td>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['touritem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['touritem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['touritem']->value) {
$_smarty_tpl->tpl_vars['touritem']->_loop = true;
$foreach_touritem_Sav = $_smarty_tpl->tpl_vars['touritem'];
?>
        <tr>
            <td style="font-size:14px"><?php echo $_smarty_tpl->tpl_vars['touritem']->value['nametour'];?>
</td>
            <td style="font-size:14px"><?php echo $_smarty_tpl->tpl_vars['touritem']->value['adres'];?>
</td>
            <td style="font-size:14px"><?php echo $_smarty_tpl->tpl_vars['touritem']->value['country'];?>
</td>
            <td style="font-size:14px"><?php echo $_smarty_tpl->tpl_vars['touritem']->value['date'];?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['touritem'] = $foreach_touritem_Sav;
}
?>
    </table>
    </article>

</div>

</div><?php }
}
?>