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

/* Macro/Forms.html.twig */
class __TwigTemplate_84bc2288cd3cb7a68d26bb42b2502058 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 64
        echo "
";
        // line 117
        echo "
";
    }

    // line 37
    public function macro_simpleInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 38
            echo "        ";
            if (($context["label"] ?? null)) {
                // line 39
                echo "            <label class=\"mb-1\" for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (($context["icon"] ?? null)) {
                // line 43
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 46
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
        ";
            }
            // line 50
            echo "
                <input type=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
                        ";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 52)) {
                // line 53
                echo "                            class=\"form-control\"
                        ";
            }
            // line 55
            echo "
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 57
                echo "                            ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " /> ";
            // line 59
            echo "
        ";
            // line 60
            if (($context["icon"] ?? null)) {
                // line 61
                echo "            </div>
        ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_simpleSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 83
            echo "    ";
            if (($context["label"] ?? null)) {
                // line 84
                echo "        <label class=\"mb-1\" for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
    ";
            }
            // line 86
            echo "
    ";
            // line 87
            if (($context["icon"] ?? null)) {
                // line 88
                echo "        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                    <i class=\"";
                // line 91
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                </span>
            </span>
    ";
            }
            // line 95
            echo "
        <select id=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 97
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 97)) {
                // line 98
                echo "                class=\"form-control\"
                ";
            }
            // line 100
            echo "
                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 102
                echo "                    ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "> ";
            // line 104
            echo "
            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 106
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if ((($context["value"] ?? null) == $context["key"])) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 107
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "        </select>

    ";
            // line 112
            if (($context["icon"] ?? null)) {
                // line 113
                echo "        </div>
    ";
            }
            // line 115
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 118
    public function macro_multiSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 119
            echo "    ";
            if (($context["label"] ?? null)) {
                // line 120
                echo "        <label class=\"mb-1\" for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
    ";
            }
            // line 122
            echo "
    ";
            // line 123
            if (($context["icon"] ?? null)) {
                // line 124
                echo "        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                    <i class=\"";
                // line 127
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                </span>
            </span>
    ";
            }
            // line 131
            echo "
    <select id=\"";
            // line 132
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[]\" multiple
            ";
            // line 133
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 133)) {
                // line 134
                echo "                class=\"form-control\"
            ";
            }
            // line 136
            echo "
            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 138
                echo "                ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "> ";
            // line 140
            echo "
        ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 142
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                ";
                // line 143
                if ((twig_test_iterable(($context["value"] ?? null)) && twig_in_filter($context["key"], ($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                ";
                // line 144
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "    </select>

    ";
            // line 149
            if (($context["icon"] ?? null)) {
                // line 150
                echo "        </div>
    ";
            }
            // line 152
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 152,  392 => 150,  390 => 149,  386 => 147,  377 => 144,  371 => 143,  366 => 142,  362 => 141,  359 => 140,  357 => 139,  346 => 138,  342 => 137,  339 => 136,  335 => 134,  333 => 133,  327 => 132,  324 => 131,  317 => 127,  312 => 124,  310 => 123,  307 => 122,  299 => 120,  296 => 119,  277 => 118,  267 => 115,  263 => 113,  261 => 112,  257 => 110,  248 => 107,  239 => 106,  235 => 105,  232 => 104,  230 => 103,  219 => 102,  215 => 101,  212 => 100,  208 => 98,  206 => 97,  200 => 96,  197 => 95,  190 => 91,  185 => 88,  183 => 87,  180 => 86,  172 => 84,  169 => 83,  150 => 82,  139 => 61,  137 => 60,  134 => 59,  132 => 58,  121 => 57,  117 => 56,  114 => 55,  110 => 53,  108 => 52,  98 => 51,  95 => 50,  88 => 46,  83 => 43,  81 => 42,  78 => 41,  70 => 39,  67 => 38,  48 => 37,  43 => 117,  40 => 64,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Forms.html.twig", "/var/www/html/facturascripts/Dinamic/View/Macro/Forms.html.twig");
    }
}
