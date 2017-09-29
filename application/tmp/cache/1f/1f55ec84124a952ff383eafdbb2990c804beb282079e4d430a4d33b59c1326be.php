<?php

/* auth/auth.twig */
class __TwigTemplate_95390f303bc3c86d40b68a5e4d4b87bb020ea0ea230c47b88e2267612b0cefbc extends Twig_Template
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
        echo "<form method=\"POST\">
\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
\t<input type=\"password\" name=\"password\" placeholder=\"Пароль\">
\t<input type=\"submit\" name=\"sign_in\" value=\"Вход\">
\t<input type=\"submit\" name=\"register\" value=\"Регистрация\">
</form>";
    }

    public function getTemplateName()
    {
        return "auth/auth.twig";
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
        return new Twig_Source("<form method=\"POST\">
\t<input type=\"text\" name=\"login\" placeholder=\"Логин\">
\t<input type=\"password\" name=\"password\" placeholder=\"Пароль\">
\t<input type=\"submit\" name=\"sign_in\" value=\"Вход\">
\t<input type=\"submit\" name=\"register\" value=\"Регистрация\">
</form>", "auth/auth.twig", "/Applications/MAMP/htdocs/composer/application/views/auth/auth.twig");
    }
}
