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
        // line 154
        echo "
";
        // line 191
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

    // line 155
    public function macro_userSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
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
            // line 156
            echo "    ";
            if (($context["label"] ?? null)) {
                // line 157
                echo "        <label class=\"mb-1\" for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
    ";
            }
            // line 159
            echo "
    ";
            // line 160
            if (($context["icon"] ?? null)) {
                // line 161
                echo "        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                    <i class=\"";
                // line 164
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                </span>
            </span>
    ";
            }
            // line 168
            echo "
        <select id=\"";
            // line 169
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 170
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 170)) {
                // line 171
                echo "                class=\"form-control\"
                ";
            }
            // line 173
            echo "
                ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 175
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
            // line 176
            echo "> ";
            // line 177
            echo "
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 179
                echo "             ";
                if (($context["option"] != 99)) {
                    // line 180
                    echo "                <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">
                    ";
                    // line 181
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "
                </option>
                ";
                }
                // line 184
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "        </select>
    ";
            // line 186
            if (($context["icon"] ?? null)) {
                // line 187
                echo "        </div>
    ";
            }
            // line 189
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
        return array (  534 => 189,  530 => 187,  528 => 186,  525 => 185,  519 => 184,  513 => 181,  504 => 180,  501 => 179,  497 => 178,  494 => 177,  492 => 176,  481 => 175,  477 => 174,  474 => 173,  470 => 171,  468 => 170,  462 => 169,  459 => 168,  452 => 164,  447 => 161,  445 => 160,  442 => 159,  434 => 157,  431 => 156,  412 => 155,  402 => 152,  398 => 150,  396 => 149,  392 => 147,  383 => 144,  377 => 143,  372 => 142,  368 => 141,  365 => 140,  363 => 139,  352 => 138,  348 => 137,  345 => 136,  341 => 134,  339 => 133,  333 => 132,  330 => 131,  323 => 127,  318 => 124,  316 => 123,  313 => 122,  305 => 120,  302 => 119,  283 => 118,  273 => 115,  269 => 113,  267 => 112,  263 => 110,  254 => 107,  245 => 106,  241 => 105,  238 => 104,  236 => 103,  225 => 102,  221 => 101,  218 => 100,  214 => 98,  212 => 97,  206 => 96,  203 => 95,  196 => 91,  191 => 88,  189 => 87,  186 => 86,  178 => 84,  175 => 83,  156 => 82,  145 => 61,  143 => 60,  140 => 59,  138 => 58,  127 => 57,  123 => 56,  120 => 55,  116 => 53,  114 => 52,  104 => 51,  101 => 50,  94 => 46,  89 => 43,  87 => 42,  84 => 41,  76 => 39,  73 => 38,  54 => 37,  49 => 191,  46 => 154,  43 => 117,  40 => 64,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Forms.html.twig", "/var/www/html/facturascripts/Dinamic/View/Macro/Forms.html.twig");
    }
}
