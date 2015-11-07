<?php

/* editcontent/_aside-live-editor.twig */
class __TwigTemplate_2c5f8a17f6f153c713d6a2aa29080a8a1364df2f9aaae7968de3222c509ea95f extends Twig_Template
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
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-tertiary\" id=\"sidebar-live-editor-button\">
        <i class=\"fa fa-pencil\"></i> ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("Live Edit");
            echo "
    </button>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}{# don't show for viewless contenttypes. #}*/
/* <div class="btn-group">*/
/*     <button type="button" class="btn btn-tertiary" id="sidebar-live-editor-button">*/
/*         <i class="fa fa-pencil"></i> {{ __('Live Edit') }}*/
/*     </button>*/
/* </div>*/
/* {% endif %}*/
/* */
