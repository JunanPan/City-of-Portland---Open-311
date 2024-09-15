<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/dkan/modules/metastore/templates/node--data.html.twig */
class __TwigTemplate_5e52f867608b0bcac1519d36e963ed5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 95, $this->source), "html", null, true);
        echo ">
    ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 96, $this->source), "html", null, true);
        echo "
    ";
        // line 97
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 98
            echo "        <h1";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 98, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 99, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 99, $this->source), "html", null, true);
            echo "</a>
        </h1>
    ";
        }
        // line 102
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 102, $this->source), "html", null, true);
        echo "
    <div";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 103, $this->source), "html", null, true);
        echo ">
    ";
        // line 104
        if ( !($context["page"] ?? null)) {
            // line 105
            echo "        <p>Last updated: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "modified", [], "any", false, false, true, 105), 105, $this->source), "m/d/Y"), "html", null, true);
            echo "</p>
        ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "description", [], "any", false, false, true, 106), 106, $this->source)));
            echo "
    ";
        }
        // line 108
        echo "    ";
        if ((($context["page"] ?? null) || (($context["view_mode"] ?? null) == "full"))) {
            // line 109
            echo "        <p>Last updated: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "modified", [], "any", false, false, true, 109), 109, $this->source), "m/d/Y"), "html", null, true);
            echo "</p>
        ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "description", [], "any", false, false, true, 110), 110, $this->source)));
            echo "
        ";
            // line 111
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "distributions", [], "any", false, false, true, 111)) > 0)) {
                // line 112
                echo "            <h2>Downloads</h2>
            <ul>
            ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "distributions", [], "any", false, false, true, 114));
                foreach ($context['_seq'] as $context["_key"] => $context["distribution"]) {
                    // line 115
                    echo "                <li><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["distribution"], "downloadURL", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["distribution"], "title", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                    echo " (";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["distribution"], "format", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                    echo ")</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distribution'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "            </ul>
        ";
            }
            // line 119
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "themes", [], "any", false, false, true, 119)) > 1)) {
                // line 120
                echo "            <h2>Themes</h2>
        ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 121
($context["dataset"] ?? null), "themes", [], "any", false, false, true, 121)) == 1)) {
                // line 122
                echo "             <h2>Theme</h2>
        ";
            }
            // line 124
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "themes", [], "any", false, false, true, 124)) > 0)) {
                // line 125
                echo "            <ul>
            ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "themes", [], "any", false, false, true, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 127
                    echo "                <li>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["theme"], 127, $this->source), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "</ul>
        ";
            }
            // line 130
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "keywords", [], "any", false, false, true, 130)) > 1)) {
                // line 131
                echo "            <h2>Keywords</h2>
        ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 132
($context["dataset"] ?? null), "keywords", [], "any", false, false, true, 132)) == 1)) {
                // line 133
                echo "             <h2>Keyword</h2>
        ";
            }
            // line 135
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "keywords", [], "any", false, false, true, 135)) > 0)) {
                // line 136
                echo "            <ul>
            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "keywords", [], "any", false, false, true, 137));
                foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                    // line 138
                    echo "                <li>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["keyword"], 138, $this->source), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "</ul>
        ";
            }
            // line 141
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dataset"] ?? null), "metadata_table", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 143
        echo "    </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "content_attributes", "dataset", "view_mode"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/dkan/modules/metastore/templates/node--data.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  199 => 143,  193 => 141,  189 => 139,  180 => 138,  176 => 137,  173 => 136,  170 => 135,  166 => 133,  164 => 132,  161 => 131,  158 => 130,  154 => 128,  145 => 127,  141 => 126,  138 => 125,  135 => 124,  131 => 122,  129 => 121,  126 => 120,  123 => 119,  119 => 117,  106 => 115,  102 => 114,  98 => 112,  96 => 111,  92 => 110,  87 => 109,  84 => 108,  79 => 106,  74 => 105,  72 => 104,  68 => 103,  63 => 102,  55 => 99,  50 => 98,  48 => 97,  44 => 96,  39 => 95,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/dkan/modules/metastore/templates/node--data.html.twig", "/var/www/html/docroot/modules/contrib/dkan/modules/metastore/templates/node--data.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 97, "for" => 114);
        static $filters = array("escape" => 95, "date" => 105, "drupal_escape" => 106, "length" => 111);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date', 'drupal_escape', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
