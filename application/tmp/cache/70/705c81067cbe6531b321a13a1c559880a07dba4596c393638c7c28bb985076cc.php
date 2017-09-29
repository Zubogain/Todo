<?php

/* task/edit.twig */
class __TwigTemplate_a894b92894c92bd504375df496bf5fef52aeb6439995ceb7ac86b92b3b8af210 extends Twig_Template
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
\t<form method=\"POST\" class=\"form-edit\">
\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["descriptionId"] ?? null), "html", null, true);
        echo "\">
\t\t<input type=\"text\" name=\"edit_task\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["descriptionEdit"] ?? null), "html", null, true);
        echo "\">
\t\t<input type=\"submit\" name=\"do_task\" value=\"Сохранить\">
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "task/edit.twig";
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
\t<form method=\"POST\" class=\"form-edit\">
\t\t<input type=\"hidden\" name=\"id\" value=\"{{ descriptionId }}\">
\t\t<input type=\"text\" name=\"edit_task\" value=\"{{ descriptionEdit }}\">
\t\t<input type=\"submit\" name=\"do_task\" value=\"Сохранить\">
\t</form>
</div>", "task/edit.twig", "/Applications/MAMP/htdocs/composer/application/views/task/edit.twig");
    }
}
