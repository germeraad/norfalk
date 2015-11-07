<?php

/* edituser/edituser.twig */
class __TwigTemplate_f1dbfc9eb22e76866a003530ba25a7124312e86625da62a11c46a2598921a78c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "edituser/edituser.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "kind", array()) == "edit")) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-users.title.edit");
            echo "
    ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["context"]) ? $context["context"] : null), "kind", array()) == "profile")) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-users.title.profile");
            echo "
    ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["context"]) ? $context["context"] : null), "kind", array()) == "create")) {
            // line 13
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-users.title.create");
            echo "
    ";
        }
    }

    // line 17
    public function block_page_subtitle($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "kind", array()) == "edit") || ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "kind", array()) == "profile"))) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "displayname", array()), "html", null, true);
            echo "
    ";
        }
    }

    // line 23
    public function block_page_main($context, array $blocks = array())
    {
        // line 24
        echo "
    ";
        // line 25
        $this->env->getExtension('form')->renderer->setTheme($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), array(0 => "form_bolt_layout.twig"));
        // line 26
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 29
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "kind", array()) != "profile")) {
            // line 30
            echo "                <p style=\"max-width: 500px;\">
                    ";
            // line 31
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "kind", array()) == "edit")) {
                // line 32
                echo "                        ";
                echo $this->env->getExtension('Bolt')->trans("page.edit-users.user-edit");
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 33
(isset($context["context"]) ? $context["context"] : null), "kind", array()) == "create")) {
                // line 34
                echo "                        ";
                echo $this->env->getExtension('Bolt')->trans("page.edit-users.user-create");
                echo "
                    ";
            }
            // line 36
            echo "                </p>
            ";
        }
        // line 38
        echo "
            <form method=\"post\" class=\"form-horizontal\" role=\"form\" autocomplete=\"off\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 41
        echo $this->env->getExtension('Bolt')->trans("page.edit-users.button.save");
        echo "\" name=\"submit\" class=\"btn btn-primary\">
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "edituser/edituser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  120 => 40,  116 => 38,  112 => 36,  106 => 34,  104 => 33,  99 => 32,  97 => 31,  94 => 30,  92 => 29,  87 => 26,  85 => 25,  82 => 24,  79 => 23,  71 => 19,  68 => 18,  65 => 17,  57 => 13,  55 => 12,  50 => 11,  48 => 10,  43 => 9,  40 => 8,  37 => 7,  31 => 5,  11 => 3,);
    }
}
/* {# Page: NavPrimary > Username ^ Profile || NavSecondary > Configuration > Users > Edit #}*/
/* */
/* {% extends '_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title %}*/
/*     {% if context.kind == 'edit' %}*/
/*         {{ __('page.edit-users.title.edit') }}*/
/*     {% elseif context.kind == 'profile' %}*/
/*         {{ __('page.edit-users.title.profile') }}*/
/*     {% elseif context.kind == 'create' %}*/
/*         {{ __('page.edit-users.title.create') }}*/
/*     {% endif %}*/
/* {% endblock page_title %}*/
/* */
/* {% block page_subtitle %}*/
/*     {% if context.kind == 'edit' or context.kind == 'profile' %}*/
/*         {{ context.displayname }}*/
/*     {% endif %}*/
/* {% endblock page_subtitle %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% form_theme context.form 'form_bolt_layout.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             {% if context.kind != 'profile' %}*/
/*                 <p style="max-width: 500px;">*/
/*                     {% if context.kind == 'edit' %}*/
/*                         {{ __('page.edit-users.user-edit') }}*/
/*                     {% elseif context.kind == 'create' %}*/
/*                         {{ __('page.edit-users.user-create') }}*/
/*                     {% endif %}*/
/*                 </p>*/
/*             {% endif %}*/
/* */
/*             <form method="post" class="form-horizontal" role="form" autocomplete="off">*/
/*                 {{ form_widget(context.form) }}*/
/*                 <input type="submit" value="{{ __('page.edit-users.button.save') }}" name="submit" class="btn btn-primary">*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
