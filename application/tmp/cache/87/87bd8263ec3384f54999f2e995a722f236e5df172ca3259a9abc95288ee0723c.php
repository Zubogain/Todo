<?php

/* auth/index.html */
class __TwigTemplate_58c3227b30b0d6ec26395d720436ff06a2b80f1ff461ecf3437a665760397840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "auth/index.html", 1);
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
        echo "\t<title>Регистрация/Вход</title>
";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if ( !twig_test_empty(($context["notice"] ?? null))) {
            // line 7
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, ($context["notice"] ?? null), "html", null, true);
            echo "</p>
\t";
        }
        // line 9
        echo "\t<form method=\"POST\" action=\"?/auth\">
\t\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
\t\t<input type=\"password\" name=\"password\" placeholder=\"Пароль\">
\t\t<input type=\"submit\" name=\"sign_in\" value=\"Вход\">
\t\t<input type=\"submit\" name=\"register\" value=\"Регистрация\">
\t</form>
";
    }

    public function getTemplateName()
    {
        return "auth/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
\t<title>Регистрация/Вход</title>
{% endblock %}
{% block main %}
\t{% if not notice is empty %}
\t\t<p>{{ notice }}</p>
\t{% endif %}
\t<form method=\"POST\" action=\"?/auth\">
\t\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
\t\t<input type=\"password\" name=\"password\" placeholder=\"Пароль\">
\t\t<input type=\"submit\" name=\"sign_in\" value=\"Вход\">
\t\t<input type=\"submit\" name=\"register\" value=\"Регистрация\">
\t</form>
{% endblock %}", "auth/index.html", "/Applications/MAMP/htdocs/application/views/auth/index.html");
    }
}
