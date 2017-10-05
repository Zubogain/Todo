<?php

/* base.html */
class __TwigTemplate_126369c6415275e5935f8d8cb9828673d339d69868901f1f2af3af2b34dc6fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        <div class=\"main\">
        \t";
        // line 10
        $this->displayBlock('main', $context, $blocks);
        // line 11
        echo "        \t";
        if ( !twig_test_empty($this->getAttribute(($context["session"] ?? null), "user_login", array()))) {
            // line 12
            echo "        \t\t<a href=\"?/logout\">Выйти</a>
        \t";
        }
        // line 14
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        ";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  52 => 6,  49 => 5,  43 => 14,  39 => 12,  36 => 11,  34 => 10,  29 => 7,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        {% block head %}
        {% endblock %}
    </head>
    <body>
        <div class=\"main\">
        \t{% block main %}{% endblock %}
        \t{% if not session.user_login is empty %}
        \t\t<a href=\"?/logout\">Выйти</a>
        \t{% endif %}
        </div>
    </body>
</html>", "base.html", "/Applications/MAMP/htdocs/application/views/base.html");
    }
}
