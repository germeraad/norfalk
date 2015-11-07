<?php

/* _sub/_csrf_token.twig */
class __TwigTemplate_f6960b060f936c5022288f9edc52e001fc44cc29189379daf2224c0648039f7f extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->token(), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "_sub/_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <input type="hidden" name="bolt_csrf_token" value="{{ token() }}">*/
/* */
