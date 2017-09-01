<?php

/* themes/dyna_theme/templates/blocks/block--bundle--parallax-block.html.twig */
class __TwigTemplate_678d4826523cde4e6a8b3fc98a9f7bb8545d16311015488a09f914ea9230da2b extends Twig_Template
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
        $tags = array();
        $filters = array("raw" => 5);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"parallax parallax--";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), "#id", array(), "array"), "html", null, true));
        echo "\">
  <div class=\"parallax__bg\"></div>
  <div class=\"parallax__content\">
      ";
        // line 5
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array(), "array"), "0", array(), "array"), "#text", array(), "array")));
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/dyna_theme/templates/blocks/block--bundle--parallax-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"parallax parallax--{{ elements['#id'] }}\">
  <div class=\"parallax__bg\"></div>
  <div class=\"parallax__content\">
      {#<h2{{ title_attributes }}>{{ label }}</h2>  {{ content['field_parallax_background_image']['0'] | raw}} #}
      {{ content['body']['0']['#text'] | raw}}
  </div>
</div>";
    }
}
