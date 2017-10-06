<?php

/* task/index.html */
class __TwigTemplate_98f2649a605c51ce3e25b9eec6b449f7c3531b18e51b1c5393aabbbc442c78e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "task/index.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <title>Список дел</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/table.css\">
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Здравствуйте, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "user_login", array()), "html", null, true);
        echo "! Вот ваш список дел:</h1>
    ";
        // line 8
        if (((twig_test_empty(($context["editDesc"] ?? null)) && twig_test_empty($this->getAttribute(($context["editDesc"] ?? null), "id", array()))) && twig_test_empty($this->getAttribute(($context["editDesc"] ?? null), "desc", array())))) {
            // line 9
            echo "        ";
            $this->loadTemplate("task/add.html", "task/index.html", 9)->display($context);
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $this->loadTemplate("task/edit.html", "task/index.html", 11)->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <div style=\"display: inline-block; margin-left: 20px;\">
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todoArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["todoList"]) {
            // line 39
            echo "                    ";
            if (($this->getAttribute($context["todoList"], "u_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                // line 40
                echo "                        <tr>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "date_added", array()), "html", null, true);
                echo "</td>
                            ";
                // line 43
                if (($this->getAttribute($context["todoList"], "is_done", array()) == 1)) {
                    // line 44
                    echo "                                <td style=\"color: green;\">Выполнено</td>
                            ";
                } else {
                    // line 46
                    echo "                                <td style=\"color: red;\">Не выполнено</td>
                            ";
                }
                // line 48
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersArray"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["usersList"]) {
                    // line 49
                    echo "                                ";
                    if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute($context["usersList"], "id", array()))) {
                        // line 50
                        echo "                                    ";
                        if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                            // line 51
                            echo "                                        <td>Вы</td>
                                    ";
                        } else {
                            // line 53
                            echo "                                        <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "login", array()), "html", null, true);
                            echo "</td>
                                    ";
                        }
                        // line 55
                        echo "                                ";
                    }
                    // line 56
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usersList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                        <td><a href=\"?/task/action=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/edit\">Изменить</a>
                        ";
                // line 58
                if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                    // line 59
                    echo "                            <a href=\"?/task/action=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                    echo "/done\">Выполнить</a>
                        ";
                }
                // line 61
                echo "                        <a href=\"?/task/action=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/delete\">Удалить</a></td>
                        <td>
                            <form method='POST' action=\"?/task\">
                                <select name=\"assigned_user_id\">
                        ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersArray"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["usersList"]) {
                    // line 66
                    echo "                            <option value=\"";
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
                // line 68
                echo "                                </select>
                                <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\">
                            </form>
                        </td>
                        </tr>
                    ";
            }
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todoList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    \t\t</tbody>
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todoArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["todoList"]) {
            // line 93
            echo "                    ";
            if ((($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array())) && ($this->getAttribute($context["todoList"], "user_id", array()) != $this->getAttribute(($context["session"] ?? null), "user_id", array())))) {
                // line 94
                echo "                        <tr>
                            <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "date_added", array()), "html", null, true);
                echo "</td>
                            ";
                // line 97
                if (($this->getAttribute($context["todoList"], "is_done", array()) == 1)) {
                    // line 98
                    echo "                                <td style=\"color: green;\">Выполнено</td>
                            ";
                } else {
                    // line 100
                    echo "                                <td style=\"color: red;\">Не выполнено</td>
                            ";
                }
                // line 102
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "login", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"?/task/action=";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/edit\">Изменить</a>
                                <a href=\"?/task/action=";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/done\">Выполнить</a>
                                <a href=\"?/task/action=";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/delete\">Удалить</a>
                            </td>
                        </tr>
                    ";
            }
            // line 110
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todoList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "task/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 111,  265 => 110,  258 => 106,  254 => 105,  250 => 104,  244 => 102,  240 => 100,  236 => 98,  234 => 97,  230 => 96,  226 => 95,  223 => 94,  220 => 93,  216 => 92,  197 => 75,  191 => 74,  183 => 68,  170 => 66,  166 => 65,  158 => 61,  152 => 59,  150 => 58,  145 => 57,  139 => 56,  136 => 55,  130 => 53,  126 => 51,  123 => 50,  120 => 49,  115 => 48,  111 => 46,  107 => 44,  105 => 43,  101 => 42,  97 => 41,  94 => 40,  91 => 39,  87 => 38,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html' %}
{% block head %}
    <title>Список дел</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/table.css\">
{% endblock %}
{% block main %}
    <h1>Здравствуйте, {{ session.user_login }}! Вот ваш список дел:</h1>
    {% if editDesc is empty and editDesc.id is empty and editDesc.desc is empty %}
        {% include 'task/add.html' %}
    {% else %}
        {% include 'task/edit.html' %}
    {% endif %}
    <div style=\"display: inline-block; margin-left: 20px;\">
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
    </div>
{% endblock %}", "task/index.html", "/Applications/MAMP/htdocs/application/views/task/index.html");
    }
}
