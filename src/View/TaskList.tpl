{include file='Header.tpl'}

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
    {foreach from=$items item=$item}
    <tr>
        <td>{$item.id}</td>
        <td>{$item.username}</td>
        <td>{$item.email}</td>
        <td>{$item.text}</td>
        <td>{($item.status=='1')?"отредактировано администратором":""}</td>
    </tr>
    {/foreach}

</tbody>

<table>

{for $page=1 to $pages}
<a href='/TaskList/{$page}' class="{($page==$active_page)?'active':''}">{$page}</a>
{/for}

</div>

{include file='Footer.tpl'}