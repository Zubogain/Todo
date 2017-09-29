<?php

/* task/list.twig */
class __TwigTemplate_82fff0570a426ed84b5ef6ed2c75eb229d3865416254c0932fb509ef4b97ad50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div style=\"display: inline-block; margin-left: 20px;\">
    <form method=\"POST\">
        <label for=\"sort\">Сортировать по:</label>
        <select name=\"sort_by\">
            <option value=\"date_added\">Дате добавления</option>
            <option value=\"is_done\">Статусу</option>
            <option value=\"description\">Описанию</option>
        </select>
        <input type=\"submit\" name=\"sort\" value=\"Отсортировать\">
    </form>
</div>

<div class=\"table\">
\t<table border=\"1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td>Описание задачи</td>
\t\t\t\t<td>Дата добавления</td>
\t\t\t\t<td>Статус</td>
                <td>Ответственный</td>
\t\t\t\t<td></td>
\t\t\t\t<td>Закрепить задачу за пользователем</td>
\t\t\t</tr>
\t\t</thead>
        <tbody>
        ";
        // line 26
        echo twig_escape_filter($this->env, ($context["todo"] ?? null), "html", null, true);
        echo "
<!-- foreach (\$todo as \$row) 
{
    \$todoCopy[] = \$row;
    if (\$row['u_id'] == \$_SESSION['user_id'])
    {
        \$form .= '<tr>';
        \$form .= '<td>'. \$row['description'] .'</td>';
        \$form .= '<td>'. \$row['date_added'] .'</td>';


        // проверка выполнена ли задача
        if (\$row['is_done'] == 1) 
        {
            \$form .= '<td style=\"color: green;\">Выполнено</td>';
        }
        else
        {
            \$form .= '<td style=\"color: red;\">Не выполнено</td>';
        }


        // Вывод всех кто ответственен за задание
        foreach (\$arrayAllUsers as \$key) 
        {
            if (\$row['assigned_user_id'] == \$key['id']) 
            {
                if (\$row['assigned_user_id'] == \$_SESSION['user_id']) 
                {
                    \$form .= '<td>Вы</td>';
                }
                else
                {
                    \$form .= '<td>'. \$key['login'] .'</td>';
                }
            }
        }
            
        \$id = \$row['id'];
        \$form .= \"<td><a href=\\\"?id={\$id}&action=edit\\\">Изменить</a>\";


        // Пороверка если за задание отвечаю я то вывести ссылку на выполнение
        if (\$row['assigned_user_id'] == \$_SESSION['user_id']) 
        {
            \$form .= \" <a href='?id={\$id}&action=done'>Выполнить</a>\";
        }
        \$form .= \" <a href=\\\"?id={\$id}&action=delete\\\">Удалить</a></td>\";
        \$form .= \"<td><form method='POST'><select name='assigned_user_id'>\";


        // Цикл перебора всех пользователей в системе
        foreach (\$arrayAllUsers as \$users)
        {
            \$form .= \"<option value=\\\"{\$users['id']}/{\$row['id']}\\\">{\$users['login']}</option>\";
        }
        \$form .= '</select> <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\"></form></td>';
        
        \$form .= '</tr>';
    }
}


\t\t</tbody>
\t</table>
</div> -->
<!-- ?>
<div>
    <h3>Также, посмотрите, что от Вас требуют другие люди:</h3>
    <table>
        <thead>
            <tr>
                <td class=\"table-head\">Описание задачи</td>
                <td class=\"table-head\">Дата добавления</td>
                <td class=\"table-head\">Статус</td>
                <td class=\"table-head\">Автор</td>
                <td class=\"table-head\"></td>
            </tr>
        </thead>
<?php
// Список дел пользователей которые требуют от тебя
foreach (\$todoCopy as \$row)
{
    if (\$row['assigned_user_id'] == \$_SESSION['user_id'] and \$row['user_id'] != \$_SESSION['user_id']) 
    {
        \$form .= '<tr>';
        \$form .= '<td>'. \$row['description'] .'</td>';
        \$form .= '<td>'. \$row['date_added'] .'</td>';


        // проверка выполнена ли задача
        if (\$row['is_done'] == 1) 
        {
            \$form .= '<td style=\"color: green;\">Выполнено</td>';
        }
        else
        {
            \$form .= '<td style=\"color: red;\">Не выполнено</td>';
        }


        \$form .= '<td>'. \$row['login'] .'</td>';
        \$id = \$row['id'];
        \$form .= \"<td><a href='?id={\$id}&action=edit'>Изменить</a> <a href='?id={\$id}&action=done'>Выполнить</a> <a href='?id={\$id}&action=delete'>Удалить</a></td>\";
    }
}


\$form .= '</table>';
echo \$form; -->";
    }

    public function getTemplateName()
    {
        return "task/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"display: inline-block; margin-left: 20px;\">
    <form method=\"POST\">
        <label for=\"sort\">Сортировать по:</label>
        <select name=\"sort_by\">
            <option value=\"date_added\">Дате добавления</option>
            <option value=\"is_done\">Статусу</option>
            <option value=\"description\">Описанию</option>
        </select>
        <input type=\"submit\" name=\"sort\" value=\"Отсортировать\">
    </form>
</div>

<div class=\"table\">
\t<table border=\"1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td>Описание задачи</td>
\t\t\t\t<td>Дата добавления</td>
\t\t\t\t<td>Статус</td>
                <td>Ответственный</td>
\t\t\t\t<td></td>
\t\t\t\t<td>Закрепить задачу за пользователем</td>
\t\t\t</tr>
\t\t</thead>
        <tbody>
        {{ todo }}
<!-- foreach (\$todo as \$row) 
{
    \$todoCopy[] = \$row;
    if (\$row['u_id'] == \$_SESSION['user_id'])
    {
        \$form .= '<tr>';
        \$form .= '<td>'. \$row['description'] .'</td>';
        \$form .= '<td>'. \$row['date_added'] .'</td>';


        // проверка выполнена ли задача
        if (\$row['is_done'] == 1) 
        {
            \$form .= '<td style=\"color: green;\">Выполнено</td>';
        }
        else
        {
            \$form .= '<td style=\"color: red;\">Не выполнено</td>';
        }


        // Вывод всех кто ответственен за задание
        foreach (\$arrayAllUsers as \$key) 
        {
            if (\$row['assigned_user_id'] == \$key['id']) 
            {
                if (\$row['assigned_user_id'] == \$_SESSION['user_id']) 
                {
                    \$form .= '<td>Вы</td>';
                }
                else
                {
                    \$form .= '<td>'. \$key['login'] .'</td>';
                }
            }
        }
            
        \$id = \$row['id'];
        \$form .= \"<td><a href=\\\"?id={\$id}&action=edit\\\">Изменить</a>\";


        // Пороверка если за задание отвечаю я то вывести ссылку на выполнение
        if (\$row['assigned_user_id'] == \$_SESSION['user_id']) 
        {
            \$form .= \" <a href='?id={\$id}&action=done'>Выполнить</a>\";
        }
        \$form .= \" <a href=\\\"?id={\$id}&action=delete\\\">Удалить</a></td>\";
        \$form .= \"<td><form method='POST'><select name='assigned_user_id'>\";


        // Цикл перебора всех пользователей в системе
        foreach (\$arrayAllUsers as \$users)
        {
            \$form .= \"<option value=\\\"{\$users['id']}/{\$row['id']}\\\">{\$users['login']}</option>\";
        }
        \$form .= '</select> <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\"></form></td>';
        
        \$form .= '</tr>';
    }
}


\t\t</tbody>
\t</table>
</div> -->
<!-- ?>
<div>
    <h3>Также, посмотрите, что от Вас требуют другие люди:</h3>
    <table>
        <thead>
            <tr>
                <td class=\"table-head\">Описание задачи</td>
                <td class=\"table-head\">Дата добавления</td>
                <td class=\"table-head\">Статус</td>
                <td class=\"table-head\">Автор</td>
                <td class=\"table-head\"></td>
            </tr>
        </thead>
<?php
// Список дел пользователей которые требуют от тебя
foreach (\$todoCopy as \$row)
{
    if (\$row['assigned_user_id'] == \$_SESSION['user_id'] and \$row['user_id'] != \$_SESSION['user_id']) 
    {
        \$form .= '<tr>';
        \$form .= '<td>'. \$row['description'] .'</td>';
        \$form .= '<td>'. \$row['date_added'] .'</td>';


        // проверка выполнена ли задача
        if (\$row['is_done'] == 1) 
        {
            \$form .= '<td style=\"color: green;\">Выполнено</td>';
        }
        else
        {
            \$form .= '<td style=\"color: red;\">Не выполнено</td>';
        }


        \$form .= '<td>'. \$row['login'] .'</td>';
        \$id = \$row['id'];
        \$form .= \"<td><a href='?id={\$id}&action=edit'>Изменить</a> <a href='?id={\$id}&action=done'>Выполнить</a> <a href='?id={\$id}&action=delete'>Удалить</a></td>\";
    }
}


\$form .= '</table>';
echo \$form; -->", "task/list.twig", "/Applications/MAMP/htdocs/composer/application/views/task/list.twig");
    }
}
