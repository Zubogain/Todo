<?php

/* task/list.twig.html */
class __TwigTemplate_0ad86eaab99a2da63c9d34f54d7899a88e18ebc729358aea4b0141b50cc40626 extends Twig_Template
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
    <form method=\"POST\" action=\"?/task\">
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todoArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["todoList"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($context["todoList"], "u_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                // line 28
                echo "                    <tr>
                        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "description", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "date_added", array()), "html", null, true);
                echo "</td>
                        ";
                // line 31
                if (($this->getAttribute($context["todoList"], "is_done", array()) == 1)) {
                    // line 32
                    echo "                            <td style=\"color: green;\">Выполнено</td>
                        ";
                } else {
                    // line 34
                    echo "                            <td style=\"color: red;\">Не выполнено</td>
                        ";
                }
                // line 36
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersArray"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["usersList"]) {
                    // line 37
                    echo "                            ";
                    if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute($context["usersList"], "id", array()))) {
                        // line 38
                        echo "                                ";
                        if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                            // line 39
                            echo "                                    <td>Вы</td>
                                ";
                        } else {
                            // line 41
                            echo "                                    <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "login", array()), "html", null, true);
                            echo "</td>
                                ";
                        }
                        // line 43
                        echo "                            ";
                    }
                    // line 44
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usersList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    <td><a href=\"?/task/action=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/edit\">Изменить</a>
                    ";
                // line 46
                if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                    // line 47
                    echo "                        <a href=\"?/task/action=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                    echo "/done\">Выполнить</a>
                    ";
                }
                // line 49
                echo "                    <a href=\"?/task/action=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/delete\">Удалить</a></td>
                    <td>
                        <form method='POST' action=\"?/task\">
                            <select name=\"assigned_user_id\">
                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersArray"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["usersList"]) {
                    // line 54
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "login", array()), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usersList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                            </select>
                            <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\">
                        </form>
                    </td>
                    </tr>
                ";
            }
            // line 62
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todoList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</tbody>
\t</table>
</div>

<div>
    <h3>Также, посмотрите что от вас требуют другие люди:</h3>
    <table>
        <thead>
            <tr>
                <td>Описание задачи</td>
                <td>Дата добавления</td>
                <td>Статус</td>
                <td>Автор</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todoArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["todoList"]) {
            // line 81
            echo "                ";
            if ((($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array())) && ($this->getAttribute($context["todoList"], "user_id", array()) != $this->getAttribute(($context["session"] ?? null), "user_id", array())))) {
                // line 82
                echo "                    <tr>
                        <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "description", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "date_added", array()), "html", null, true);
                echo "</td>
                        ";
                // line 85
                if (($this->getAttribute($context["todoList"], "is_done", array()) == 1)) {
                    // line 86
                    echo "                            <td style=\"color: green;\">Выполнено</td>
                        ";
                } else {
                    // line 88
                    echo "                            <td style=\"color: red;\">Не выполнено</td>
                        ";
                }
                // line 90
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "login", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"?/task/action=";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/edit\">Изменить</a>
                            <a href=\"?/task/action=";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/done\">Выполнить</a>
                            <a href=\"?/task/action=";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/delete\">Удалить</a>
                        </td>
                    </tr>
                ";
            }
            // line 98
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todoList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </tbody>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "task/list.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 99,  224 => 98,  217 => 94,  213 => 93,  209 => 92,  203 => 90,  199 => 88,  195 => 86,  193 => 85,  189 => 84,  185 => 83,  182 => 82,  179 => 81,  175 => 80,  156 => 63,  150 => 62,  142 => 56,  129 => 54,  125 => 53,  117 => 49,  111 => 47,  109 => 46,  104 => 45,  98 => 44,  95 => 43,  89 => 41,  85 => 39,  82 => 38,  79 => 37,  74 => 36,  70 => 34,  66 => 32,  64 => 31,  60 => 30,  56 => 29,  53 => 28,  50 => 27,  46 => 26,  19 => 1,);
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
    <form method=\"POST\" action=\"?/task\">
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
            {% for todoList in todoArray %}
                {% if todoList.u_id == session.user_id %}
                    <tr>
                        <td>{{ todoList.description }}</td>
                        <td>{{ todoList.date_added }}</td>
                        {% if todoList.is_done == 1 %}
                            <td style=\"color: green;\">Выполнено</td>
                        {% else %}
                            <td style=\"color: red;\">Не выполнено</td>
                        {% endif %}
                        {% for usersList in usersArray %}
                            {% if todoList.assigned_user_id == usersList.id %}
                                {% if todoList.assigned_user_id == session.user_id %}
                                    <td>Вы</td>
                                {% else %}
                                    <td>{{ usersList.login }}</td>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    <td><a href=\"?/task/action={{ todoList.id }}/edit\">Изменить</a>
                    {% if todoList.assigned_user_id == session.user_id %}
                        <a href=\"?/task/action={{ todoList.id }}/done\">Выполнить</a>
                    {% endif %}
                    <a href=\"?/task/action={{ todoList.id }}/delete\">Удалить</a></td>
                    <td>
                        <form method='POST' action=\"?/task\">
                            <select name=\"assigned_user_id\">
                    {% for usersList in usersArray %}
                        <option value=\"{{ usersList.id }}/{{ todoList.id }}\">{{ usersList.login }}</option>
                    {% endfor %}
                            </select>
                            <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\">
                        </form>
                    </td>
                    </tr>
                {% endif %}
            {% endfor %}
\t\t</tbody>
\t</table>
</div>

<div>
    <h3>Также, посмотрите что от вас требуют другие люди:</h3>
    <table>
        <thead>
            <tr>
                <td>Описание задачи</td>
                <td>Дата добавления</td>
                <td>Статус</td>
                <td>Автор</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            {% for todoList in todoArray %}
                {% if todoList.assigned_user_id == session.user_id and todoList.user_id != session.user_id %}
                    <tr>
                        <td>{{ todoList.description }}</td>
                        <td>{{ todoList.date_added }}</td>
                        {% if todoList.is_done == 1 %}
                            <td style=\"color: green;\">Выполнено</td>
                        {% else %}
                            <td style=\"color: red;\">Не выполнено</td>
                        {% endif %}
                        <td>{{ todoList.login }}</td>
                        <td>
                            <a href=\"?/task/action={{ todoList.id }}/edit\">Изменить</a>
                            <a href=\"?/task/action={{ todoList.id }}/done\">Выполнить</a>
                            <a href=\"?/task/action={{ todoList.id }}/delete\">Удалить</a>
                        </td>
                    </tr>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>
</div>", "task/list.twig.html", "/Applications/MAMP/htdocs/application/views/task/list.twig.html");
    }
}
