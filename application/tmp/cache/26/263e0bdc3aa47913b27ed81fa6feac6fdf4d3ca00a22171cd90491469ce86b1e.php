<?php

/* main/index.html */
class __TwigTemplate_9f950360809adf113cf8fe0dc8888bee4ccfbe312d4b1af720a9411c1a46e15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "main/index.html", 1);
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
        echo "\t<title>Вы не авторизованы</title>
";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "\t<a href=\"?/auth\">Войдите на сайт</a>
";
    }

    public function getTemplateName()
    {
        return "main/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
\t<title>Вы не авторизованы</title>
{% endblock %}
{% block main %}
\t<a href=\"?/auth\">Войдите на сайт</a>
{% endblock %}", "main/index.html", "/Applications/MAMP/htdocs/application/views/main/index.html");
    }
}
