<?php /* Smarty version 3.1.27, created on 2015-10-08 18:18:47
         compiled from "views/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:130136504556169767af7450_39784033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1444321126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130136504556169767af7450_39784033',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56169767b7d9b9_02287158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56169767b7d9b9_02287158')) {
function content_56169767b7d9b9_02287158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '130136504556169767af7450_39784033';
?>
<header>
<div id="header">

<div id="navigatie">
    <nav>
        <div id="logo">
        <a href="?page=home">
            <img src="images/logo.jpg" alt="Triggerfinger">
        </a>
        </div>
        <ul>

            <!--<li>
                <a href="?page=home">TRIGGERFINGER!</p></a>
            </li>-->

            <li<?php if ($_smarty_tpl->tpl_vars['curr_page']->value == 'newsarticles') {?> class = "selected" <?php }?>>
                <a href='?page=newsarticles'><p class="navibar">News</p></a>
                </li>
            <!--<li>
                <a href='?page=about'><p class="navibar">About</p></a>
            </li>-->
            <li<?php if ($_smarty_tpl->tpl_vars['curr_page']->value == 'tour') {?> class = "selected" <?php }?>>
                <a href='?page=tour'><p class="navibar">Tour</p></a>
            </li>
            <li<?php if ($_smarty_tpl->tpl_vars['curr_page']->value == 'music') {?> class = "selected" <?php }?>>
                <a href='?page=music'><p class="navibar">Music</p></a>
            </li>
            <div id="searchbar">
            <!--search-->

            <form method="post" action="?page=search" id="searchform">
                <input type="text" name="search_string">
                <input type="submit" name="submit" value="Search">
            </form>
                </div>
         <!--   <form method="post" action="?page=search_string" id="searchform">
                <input type="text" name="search_string">
                <input type="submit" name="submit" value="Search">
            </form>-->

     <!--       <form method="post" action="#" id="searchform">
                <input type="text" name="name">
                <input type="submit" name="submit" value="Search"

            </form>-->
        </ul>
    </nav>
</div>

</div>
</header><?php }
}
?>