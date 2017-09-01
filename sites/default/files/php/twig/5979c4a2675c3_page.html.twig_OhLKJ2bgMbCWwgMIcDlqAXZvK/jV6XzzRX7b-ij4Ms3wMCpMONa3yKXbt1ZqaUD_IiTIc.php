<?php

/* themes/dyna_theme/templates/basic/page.html.twig */
class __TwigTemplate_7e8722a799262d1aae4e55bf500fa24d6978bbdac3a4f7a90929d46e52b1606f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'sidebar_left' => array($this, 'block_sidebar_left'),
            'content' => array($this, 'block_content'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("t" => 97);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('t'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 122
            echo "  ";
        }
        // line 123
        echo "
  ";
        // line 125
        echo "  ";
        $this->displayBlock('main', $context, $blocks);
        // line 210
        echo "
    ";
        // line 211
        $this->displayBlock('footer', $context, $blocks);
        // line 221
        echo "
    <div class=\"after-footer\">
      <p>© Dynamotors 2017</p>
      <div class=\"powered-by\">Σχεδιασμός ιστοσελίδας <a href=\"www.appdate.gr\">AppDate</a></div>
    </div>
  </div>";
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")));
        // line 69
        echo "    ";
        // line 70
        echo "      ";
        // line 71
        echo "      <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
        ";
        // line 75
        echo "
        <div class=\"admin-bar\">
        ";
        // line 77
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 78
            echo "          <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
        ";
        }
        // line 80
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "admin_bar", array()), "html", null, true));
        echo "
        ";
        // line 81
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 82
            echo "          </div>
        ";
        }
        // line 84
        echo "        </div>

        <div class=\"navbar-header\">
        ";
        // line 87
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 88
            echo "          <div class=\"container-fluid\">
        ";
        }
        // line 90
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 91
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 92
            echo "          </div>
        ";
        }
        // line 94
        echo "          ";
        // line 95
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 96
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 103
        echo "        </div>

        ";
        // line 106
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 107
            echo "          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 111
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
          ";
            // line 115
            echo "          </div>
        ";
        }
        // line 117
        echo "        ";
        // line 120
        echo "      </header>
    ";
    }

    // line 125
    public function block_main($context, array $blocks = array())
    {
        // line 126
        echo "    <div role=\"main\" class=\"main-container container-fluid js-quickedit-main-content\">
      <div class=\"row\">

        ";
        // line 130
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 131
            echo "          ";
            $this->displayBlock('header', $context, $blocks);
            // line 136
            echo "        ";
        }
        // line 137
        echo "

        ";
        // line 140
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 141
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        
        ";
        // line 148
        echo "        ";
        // line 155
        echo "
        ";
        // line 157
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
            // line 158
            echo "            ";
            $this->displayBlock('sidebar_left', $context, $blocks);
            // line 163
            echo "          ";
        }
        // line 164
        echo "

        <section class=\"main-content\" >
          <div class=\"container-fluid\">

            ";
        // line 170
        echo "            ";
        // line 176
        echo "
            ";
        // line 178
        echo "              ";
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "            ";
        // line 186
        echo "
            ";
        // line 188
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            // line 189
            echo "              ";
            $this->displayBlock('sidebar_right', $context, $blocks);
            // line 194
            echo "            ";
        }
        // line 195
        echo "          </div>
        </section>

        ";
        // line 199
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_footer", array())) {
            // line 200
            echo "            <div class=\"pre-footer col-sm-12\">
              <div class=\"container-fluid\">
                ";
            // line 202
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_footer", array()), "html", null, true));
            echo "
              </div>
            </div>
        ";
        }
        // line 206
        echo "
      </div>
    </div>
  ";
    }

    // line 131
    public function block_header($context, array $blocks = array())
    {
        // line 132
        echo "            <div class=\"col-sm-12 container-fluid\" role=\"heading\">
              ";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
            </div>
          ";
    }

    // line 141
    public function block_highlighted($context, array $blocks = array())
    {
        // line 142
        echo "            <div class=\"highlighted container-fluid\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 158
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 159
        echo "              <aside id=\"sidebar_left\" class=\"col-sm-1\" role=\"complementary\">
                ";
        // line 160
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()), "html", null, true));
        echo "
              </aside>
            ";
    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        // line 179
        echo "                ";
        // line 180
        echo "                  ";
        // line 181
        echo "                    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                  ";
        // line 183
        echo "                ";
        // line 184
        echo "              ";
    }

    // line 189
    public function block_sidebar_right($context, array $blocks = array())
    {
        // line 190
        echo "                <aside id=\"sidebar_right\" class=\"col-sm-4\" role=\"complementary\">
                  ";
        // line 191
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
        echo "
                </aside>
              ";
    }

    // line 211
    public function block_footer($context, array $blocks = array())
    {
        // line 212
        echo "      <footer class=\"footer\" role=\"contentinfo\">
        <div class=\"container-fluid footer-region\">
          <div class=\"footer_1 col-sm-4\"> ";
        // line 214
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col1", array()), "html", null, true));
        echo " </div>
          <div class=\"footer_2 col-sm-4\"> ";
        // line 215
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col2", array()), "html", null, true));
        echo " </div>
          <div class=\"footer_3 col-sm-4\"> ";
        // line 216
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col3", array()), "html", null, true));
        echo " </div>
          ";
        // line 218
        echo "        </div>
      </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/dyna_theme/templates/basic/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 218,  371 => 216,  367 => 215,  363 => 214,  359 => 212,  356 => 211,  349 => 191,  346 => 190,  343 => 189,  339 => 184,  337 => 183,  332 => 181,  330 => 180,  328 => 179,  325 => 178,  318 => 160,  315 => 159,  312 => 158,  305 => 142,  302 => 141,  295 => 133,  292 => 132,  289 => 131,  282 => 206,  275 => 202,  271 => 200,  268 => 199,  263 => 195,  260 => 194,  257 => 189,  254 => 188,  251 => 186,  249 => 185,  246 => 178,  243 => 176,  241 => 170,  234 => 164,  231 => 163,  228 => 158,  225 => 157,  222 => 155,  220 => 148,  216 => 145,  213 => 144,  210 => 141,  207 => 140,  203 => 137,  200 => 136,  197 => 131,  194 => 130,  189 => 126,  186 => 125,  181 => 120,  179 => 117,  175 => 115,  170 => 111,  167 => 107,  164 => 106,  160 => 103,  151 => 97,  148 => 96,  145 => 95,  143 => 94,  139 => 92,  137 => 91,  132 => 90,  128 => 88,  126 => 87,  121 => 84,  117 => 82,  115 => 81,  110 => 80,  104 => 78,  102 => 77,  98 => 75,  93 => 71,  91 => 70,  89 => 69,  87 => 66,  86 => 64,  84 => 63,  81 => 62,  72 => 221,  70 => 211,  67 => 210,  64 => 125,  61 => 123,  58 => 122,  55 => 62,  53 => 61,  51 => 59,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
      ]
    %}
    {# <div class=\"box container-fluid\"> #}
      {# theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container, #}
      <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
        {#{% if not navbar_attributes.hasClass(container) %}
          <div class=\"container-fluid\">
        {% endif %}#}

        <div class=\"admin-bar\">
        {% if not navbar_attributes.hasClass(container) %}
          <div class=\"{{ container }}\">
        {% endif %}
          {{ page.admin_bar }}
        {% if not navbar_attributes.hasClass(container) %}
          </div>
        {% endif %}
        </div>

        <div class=\"navbar-header\">
        {% if not navbar_attributes.hasClass(container) %}
          <div class=\"container-fluid\">
        {% endif %}
          {{ page.navigation }}
        {% if not navbar_attributes.hasClass(container) %}
          </div>
        {% endif %}
          {# .btn-navbar is used as the toggle for collapsed navbar content #}
          {% if page.navigation_collapsible %}
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          {% endif %}
        </div>

        {# Navigation (collapsible) #}
        {% if page.navigation_collapsible %}
          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {# {% if not navbar_attributes.hasClass(container) %}
            <div class=\"container-fluid\">
          {% endif %} #}
            {{ page.navigation_collapsible }}
          {# {% if not navbar_attributes.hasClass(container) %}
            </div>
          {% endif %} #}
          </div>
        {% endif %}
        {#{% if not navbar_attributes.hasClass(container) %}
          </div>
        {% endif %}#}
      </header>
    {% endblock %}
  {% endif %}

  {# Main #}
  {% block main %}
    <div role=\"main\" class=\"main-container container-fluid js-quickedit-main-content\">
      <div class=\"row\">

        {# Header #}
        {% if page.header %}
          {% block header %}
            <div class=\"col-sm-12 container-fluid\" role=\"heading\">
              {{ page.header }}
            </div>
          {% endblock %}
        {% endif %}


        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted container-fluid\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        
        {#Main Content #}
        {#{%
          set main_content_classes = [
            page.sidebar_left ? 'col-sm-11',
            page.sidebar_left is empty ? 'col-sm-12',
            'main-content'
          ]
        %}#}

        {# Left Sidebar #}
          {% if page.sidebar_left %}
            {% block sidebar_left %}
              <aside id=\"sidebar_left\" class=\"col-sm-1\" role=\"complementary\">
                {{ page.sidebar_left }}
              </aside>
            {% endblock %}
          {% endif %}


        <section class=\"main-content\" >
          <div class=\"container-fluid\">

            {# Content #}
            {# {%
              set content_classes = [
                page.sidebar_right ? 'col-sm-8',
                page.sidebar_right is empty ? 'col-sm-12'
              ]
            %} #}

            {#{% if content %}#}
              {% block content %}
                {# <div {{ content_attributes.addClass(content_classes) }}> #}
                  {#<div class=\"container-fluid\">#}
                    {{ page.content }}
                  {#</div>#}
                {# </div> #}
              {% endblock %}
            {#{% endif %}#}

            {# Right Sidebar #}
            {% if page.sidebar_right %}
              {% block sidebar_right %}
                <aside id=\"sidebar_right\" class=\"col-sm-4\" role=\"complementary\">
                  {{ page.sidebar_right }}
                </aside>
              {% endblock %}
            {% endif %}
          </div>
        </section>

        {# Pre Footer #}
        {% if page.pre_footer %}
            <div class=\"pre-footer col-sm-12\">
              <div class=\"container-fluid\">
                {{ page.pre_footer }}
              </div>
            </div>
        {% endif %}

      </div>
    </div>
  {% endblock %}

    {% block footer %}
      <footer class=\"footer\" role=\"contentinfo\">
        <div class=\"container-fluid footer-region\">
          <div class=\"footer_1 col-sm-4\"> {{ page.footer_col1 }} </div>
          <div class=\"footer_2 col-sm-4\"> {{ page.footer_col2 }} </div>
          <div class=\"footer_3 col-sm-4\"> {{ page.footer_col3 }} </div>
          {# <div class=\"footer_4 col-sm-3\"> {{ page.footer_col4 }} </div> #}
        </div>
      </footer>
    {% endblock %}

    <div class=\"after-footer\">
      <p>© Dynamotors 2017</p>
      <div class=\"powered-by\">Σχεδιασμός ιστοσελίδας <a href=\"www.appdate.gr\">AppDate</a></div>
    </div>
  </div>";
    }
}
