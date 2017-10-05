<?php

/* task/edit.html */
class __TwigTemplate_9a4fd45d947deb89c068f8e99226f760f03ae9057b6754ab942cb849049548e2 extends Twig_Template
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
        echo "<div style=\"display: inline-block; margin-bottom: 1rem;\">
\t<form method=\"POST\" action=\"?/task\" class=\"form-edit\">
\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["editDesc"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t<input type=\"text\" name=\"edit_task\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["editDesc"] ?? null), "desc", array()), "html", null, true);
        echo "\">
\t\t<input type=\"submit\" name=\"do_task\" value=\"Сохранить\">
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "task/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"display: inline-block; margin-bottom: 1rem;\">
\t<form method=\"POST\" action=\"?/task\" class=\"form-edit\">
\t\t<input type=\"hidden\" name=\"id\" value=\"{{ editDesc.id }}\">
\t\t<input type=\"text\" name=\"edit_task\" value=\"{{ editDesc.desc }}\">
\t\t<input type=\"submit\" name=\"do_task\" value=\"Сохранить\">
\t</form>
</div>", "task/edit.html", "/Applications/MAMP/htdocs/application/views/task/edit.html");
    }
}
