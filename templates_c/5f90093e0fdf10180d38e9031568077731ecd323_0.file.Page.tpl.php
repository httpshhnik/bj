<?php
/* Smarty version 3.1.33, created on 2019-10-14 12:07:09
  from '/var/www/bjlocal/src/View/Page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da43abd01a502_66247425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f90093e0fdf10180d38e9031568077731ecd323' => 
    array (
      0 => '/var/www/bjlocal/src/View/Page.tpl',
      1 => 1571043042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_header.tpl' => 1,
    'file:page_footer.tpl' => 1,
  ),
),false)) {
function content_5da43abd01a502_66247425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:page_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo var_dump($_smarty_tpl->tpl_vars['items']->value);?>

<?php $_smarty_tpl->_subTemplateRender('file:page_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
