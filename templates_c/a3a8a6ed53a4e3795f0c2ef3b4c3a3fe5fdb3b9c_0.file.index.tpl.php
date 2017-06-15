<?php
/* Smarty version 3.1.30, created on 2017-06-15 09:32:11
  from "C:\wamp64\www\klas1a\adminblog1b\template\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5942541b4ecbc2_49932371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3a8a6ed53a4e3795f0c2ef3b4c3a3fe5fdb3b9c' => 
    array (
      0 => 'C:\\wamp64\\www\\klas1a\\adminblog1b\\template\\index.tpl',
      1 => 1497519128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5942541b4ecbc2_49932371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
echo $_smarty_tpl->tpl_vars['blog']->value['titel'];?>
<br><?php echo $_smarty_tpl->tpl_vars['blog']->value['body'];?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html>
<?php }
}
