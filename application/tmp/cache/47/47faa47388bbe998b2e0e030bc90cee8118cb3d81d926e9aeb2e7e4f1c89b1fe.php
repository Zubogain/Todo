<?php

/* auth/auth.twig.html */
class __TwigTemplate_80dbc5524723056dc3fcfca9fa223d402a48964d21ab580821d690d880e24d57 extends Twig_Template
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
        echo "<form method=\"POST\" action=\"?/auth\">
\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
\t<input type=\"password\" name=\"password\" placeholder=\"Пароль\">
\t<input type=\"submit\" name=\"sign_in\" value=\"Вход\">
\t<input type=\"submit\" name=\"register\" value=\"Регистрация\">
</form>";
    }

    public function getTemplateName()
    {
        return "auth/auth.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"POST\" action=\"?/auth\">
\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
\t<input type=\"password\" name=\"password\" placeholder=\"Пароль\">
\t<input type=\"submit\" name=\"sign_in\" value=\"Вход\">
\t<input type=\"submit\" name=\"register\" value=\"Регистрация\">
</form>", "auth/auth.twig.html", "/Applications/MAMP/htdocs/application/views/auth/auth.twig.html");
    }
}
