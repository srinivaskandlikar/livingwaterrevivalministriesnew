<?php

/* themes/mbase/templates/layout/page.html.twig */
class __TwigTemplate_db00c9192cf426627376dcf7bcbe1f3aab999f1147f720a9483dc6c12e20ca45 extends Twig_Template
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
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 65, "block" => 66, "set" => 133);
        $filters = array("t" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 65
        if (((($this->getAttribute(($context["page"] ?? null), "branding", array()) || $this->getAttribute(($context["page"] ?? null), "navigation", array())) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 66
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
";
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 166
        echo "<div class=\"social-icons\">
       <ul>
        <li><a class=\"rss\" href=\"/livingwaterrevivalministriesold/rss.xml\"><i class=\"fa fa-rss\"></i></a></li>
        <li style=\"display: none;\"><a class=\"fb\" href=\"\" target=\"_blank\" rel=\"me\"><i class=\"fa fa-facebook\"></i></a></li>
        <li style=\"display: none;\"><a class=\"twitter\" href=\"\" target=\"_blank\" rel=\"me\"><i class=\"fa fa-twitter\"></i></a></li>
        <li><a class=\"gplus\" href=\"https://plus.google.com/u/1/+ZymphoniesTechnologies/\" target=\"_blank\" rel=\"me\"><i class=\"fa fa-google-plus\"></i></a></li>
        <li><a class=\"linkedin\" href=\"https://www.linkedin.com/company/zymphonies\" target=\"_blank\" rel=\"me\"><i class=\"fa fa-linkedin\"></i></a></li>
        <li><a class=\"pinterest\" href=\"http://www.pinterest.com/zymphonies/\" target=\"_blank\" rel=\"me\"><i class=\"fa fa-pinterest\"></i></a></li>
        <li><a class=\"youtube\" href=\"http://www.youtube.com\" target=\"_blank\" rel=\"me\"><i class=\"fa fa-youtube\"></i></a></li>
       </ul>
      </div>
";
        // line 177
        if (($this->getAttribute(($context["page"] ?? null), "footer", array()) || ($context["theme_credit"] ?? null))) {
            // line 178
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 66
    public function block_navbar($context, array $blocks = array())
    {
        // line 67
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
    ";
        // line 68
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 69
            echo "      <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
    ";
        }
        // line 71
        echo "      <div class=\"navbar-header\">
        ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", array()), "html", null, true));
        echo "
        ";
        // line 74
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
        echo "</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
      </div>

      ";
        // line 83
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", array()) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 84
            echo "        <div class=\"navbar-collapse collapse\">
          <nav role=\"navigation\">
          ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
          ";
            // line 87
            if (($context["secondary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_nav"] ?? null), "html", null, true));
                echo " ";
            }
            // line 88
            echo "          ";
            if (($context["primary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary_nav"] ?? null), "html", null, true));
                echo " ";
            }
            // line 89
            echo "          </nav>
        </div>
      ";
        }
        // line 92
        echo "      ";
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 93
            echo "        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    // line 100
    public function block_main($context, array $blocks = array())
    {
        // line 101
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 105
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 106
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 111
            echo "      ";
        }
        // line 112
        echo "
      ";
        // line 114
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 115
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 124
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "
      ";
        // line 132
        echo "      ";
        // line 133
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_first", array()) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-9") : ("")), 2 => (((twig_test_empty($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 139
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 142
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 143
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 146
            echo "        ";
        }
        // line 147
        echo "
        ";
        // line 149
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 153
        echo "      </section>

      ";
        // line 156
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 157
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 162
            echo "      ";
        }
        // line 163
        echo "    </div>
  </div>
";
    }

    // line 106
    public function block_header($context, array $blocks = array())
    {
        // line 107
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 115
    public function block_highlighted($context, array $blocks = array())
    {
        // line 116
        echo "          <div class=\"highlighted col-sm-12\">
            ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 124
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 125
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 143
    public function block_help($context, array $blocks = array())
    {
        // line 144
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 149
    public function block_content($context, array $blocks = array())
    {
        // line 150
        echo "          <a id=\"main-content\"></a>
          ";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 157
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 158
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 159
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 178
    public function block_footer($context, array $blocks = array())
    {
        // line 179
        echo "    <footer class=\"footer\" role=\"contentinfo\" id = \"footer\">
      <center><div id = \"footer-inner\" class = \"";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 181
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
      </div></center>
    ";
        // line 183
        if (($context["theme_credit"] ?? null)) {
            // line 184
            echo "      <div class = \"theme-credit text-center\">
        ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_credit"] ?? null), "html", null, true));
            echo "
      </div>
    </footer>
    ";
        }
        // line 189
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 189,  348 => 185,  345 => 184,  343 => 183,  338 => 181,  334 => 180,  331 => 179,  328 => 178,  321 => 159,  318 => 158,  315 => 157,  309 => 151,  306 => 150,  303 => 149,  296 => 144,  293 => 143,  286 => 126,  283 => 125,  280 => 124,  273 => 117,  270 => 116,  267 => 115,  260 => 108,  257 => 107,  254 => 106,  248 => 163,  245 => 162,  242 => 157,  239 => 156,  235 => 153,  232 => 149,  229 => 147,  226 => 146,  223 => 143,  220 => 142,  214 => 139,  212 => 136,  211 => 135,  210 => 134,  209 => 133,  207 => 132,  204 => 130,  201 => 129,  198 => 124,  195 => 123,  192 => 121,  189 => 120,  186 => 115,  183 => 114,  180 => 112,  177 => 111,  174 => 106,  171 => 105,  164 => 101,  161 => 100,  156 => 95,  152 => 93,  149 => 92,  144 => 89,  137 => 88,  131 => 87,  127 => 86,  123 => 84,  120 => 83,  110 => 75,  107 => 74,  103 => 72,  100 => 71,  94 => 69,  92 => 68,  87 => 67,  84 => 66,  78 => 178,  76 => 177,  63 => 166,  61 => 100,  58 => 98,  54 => 66,  52 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mbase/templates/layout/page.html.twig", "C:\\wamp64\\www\\livingwaterrevivalministriesnew\\themes\\mbase\\templates\\layout\\page.html.twig");
    }
}
