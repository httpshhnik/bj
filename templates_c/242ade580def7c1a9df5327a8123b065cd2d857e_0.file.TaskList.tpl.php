<?php
/* Smarty version 3.1.33, created on 2019-10-14 15:32:05
  from '/var/www/bjlocal/src/View/TaskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da46ac5922bd6_75634981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242ade580def7c1a9df5327a8123b065cd2d857e' => 
    array (
      0 => '/var/www/bjlocal/src/View/TaskList.tpl',
      1 => 1571056324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5da46ac5922bd6_75634981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table  id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

<thead>
    
    <tr>
        <th class="th-sm">#</th>
        <th class="th-sm">Пользователь</th>
        <th class="th-sm">Email</th>
        <th class="th-sm">Текст</th>
        <th class="th-sm"></th>
    </tr>
</head>

<tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'] == '1' ? "отредактировано администратором" : '';?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</tbody>

<table>

<?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
<a href='/TaskList/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
' class="<?php echo $_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['active_page']->value ? 'active' : '';?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php }
}
?>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
