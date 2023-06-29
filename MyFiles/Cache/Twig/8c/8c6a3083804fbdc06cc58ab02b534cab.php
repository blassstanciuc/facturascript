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

/* AdminPlugins.html.twig */
class __TwigTemplate_bcf97aa42b530146da048db32a796a59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 22)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null)], "method", false, false, false, 22));
        // line 23
        $context["allPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAllPlugins", [], "method", false, false, false, 23);
        // line 24
        $context["installedPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPlugins", [], "method", false, false, false, 24);
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
        echo "\"
                       title=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 33), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 36
        if (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 36)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 36), "homepage", [], "any", false, false, false, 36))) {
            // line 37
            echo "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 37), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 38), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 42
            echo "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 42), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 43), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 47
        echo "                </div>
                ";
        // line 48
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 49
            echo "                    <button class=\"btn btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 52), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 55
        echo "                <div class=\"btn-group\">
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 56), "html", null, true);
        echo "?action=rebuild\" class=\"btn btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "rebuild"], "method", false, false, false, 58), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 64)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed-plugins"], "method", false, false, false, 72), "html", null, true);
        echo "
                ";
        // line 73
        if ((twig_length_filter($this->env, ($context["installedPlugins"] ?? null)) > 0)) {
            // line 74
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["installedPlugins"] ?? null)), "html", null, true);
            echo "</span>
                ";
        }
        // line 76
        echo "            </a>
        </li>
        ";
        // line 78
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 79
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more-plugins"], "method", false, false, false, 82), "html", null, true);
            echo "</span>
                    ";
            // line 83
            if ((twig_length_filter($this->env, ($context["allPlugins"] ?? null)) > 0)) {
                // line 84
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["allPlugins"] ?? null)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 86
            echo "                </a>
            </li>
        ";
        }
        // line 89
        echo "    </ul>
";
    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 96
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["installedPlugins"] ?? null)], 96, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 98
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 99
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 100
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["allPlugins"] ?? null)], 100, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 103
        echo "    </div>

    ";
        // line 106
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 107
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 107), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 109), "newToken", [], "method", false, false, false, 109), "html", null, true);
            echo "\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add-new-plugin"], "method", false, false, false, 114), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 116), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 120) < 99)) {
                // line 121
                echo "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 122)]], "method", false, false, false, 122), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 125
            echo "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-plugin-zip-file"], "method", false, false, false, 127), "html", null, true);
            echo "
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required=\"\"/>
                                ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 129) >= 99)) {
                // line 130
                echo "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 131)]], "method", false, false, false, 131), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 134
            echo "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-secondary\"
                                        data-dismiss=\"modal\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 137), "html", null, true);
            echo "</button>
                                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 138), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 150
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 151
            echo "        <script>
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 154
            echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 154);
            echo "\",
                    message: \"";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 155), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 159), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 162), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            animateSpinner('add');
                            window.location = \"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 169), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName;
                        }
                    }
                });
            }
        </script>
    ";
        }
    }

    // line 178
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 179
            echo "    ";
            if ((($context["value"] ?? null) < 1)) {
                // line 180
                echo "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 185
($context["value"] ?? null) < 2)) {
                // line 186
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 191
($context["value"] ?? null) < 3)) {
                // line 192
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 197
($context["value"] ?? null) < 4)) {
                // line 198
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 203
($context["value"] ?? null) < 5)) {
                // line 204
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 210
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 218
    public function macro_showAllPlugins($__fsc__ = null, $__i18n__ = null, $__allPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "allPlugins" => $__allPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 219
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th width=\"140\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "health"], "method", false, false, false, 223), "html", null, true);
            echo "</th>
                <th>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 224), "html", null, true);
            echo "</th>
                <th>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 225), "html", null, true);
            echo "</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 231
                echo "                ";
                $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 231) > 2)) ? ("table-success") : ((((twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 231) == 0)) ? ("table-danger") : ("table-warning"))));
                // line 232
                echo "                <tr class=\"clickableRow ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 232), "html", null, true);
                echo "\" data-target=\"_blank\">
                    <td>";
                // line 233
                echo twig_call_macro($macros["_self"], "macro_healthStatus", [twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 233)], 233, $context, $this->getSourceContext());
                echo "</td>
                    <td>";
                // line 234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 234), "html", null, true);
                echo "</td>
                    <td>";
                // line 235
                echo twig_nl2br(twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 235), 0, 300), "html", null, true));
                echo "</td>
                    <td class=\"text-center\">
                        ";
                // line 237
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "installed", [], "any", false, false, false, 237)) {
                    // line 238
                    echo "                            <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed"], "method", false, false, false, 238), "html", null, true);
                    echo "
                        ";
                }
                // line 240
                echo "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 243
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 244), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 252
    public function macro_showInstalledPlugins($__fsc__ = null, $__i18n__ = null, $__installedPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "installedPlugins" => $__installedPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 253
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 257), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "version"], "method", false, false, false, 258), "html", null, true);
            echo "</th>
                <th>";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 259), "html", null, true);
            echo "</th>
                <th class=\"text-right pr-3\">";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actions"], "method", false, false, false, 260), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installedPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 265
                echo "                ";
                $context["trClass"] = " class=\"table-danger\"";
                // line 266
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 266)) {
                    // line 267
                    echo "                    ";
                    $context["trClass"] = " class=\"table-success\"";
                    // line 268
                    echo "                ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 268)) {
                    // line 269
                    echo "                    ";
                    $context["trClass"] = "";
                    // line 270
                    echo "                ";
                }
                // line 271
                echo "                <tr";
                echo ($context["trClass"] ?? null);
                echo ">
                    <td>";
                // line 272
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 272), "html", null, true);
                echo "</td>
                    ";
                // line 273
                if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 273) == 0)) {
                    // line 274
                    echo "                        <td class=\"text-right text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 274), "html", null, true);
                    echo "</td>
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 275
$context["plugin"], "version", [], "any", false, false, false, 275) < 1)) {
                    // line 276
                    echo "                        <td class=\"text-right text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 276), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 278
                    echo "                        <td class=\"text-right\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 278), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 280
                echo "                    <td>";
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 280), "html", null, true));
                echo "</td>
                    ";
                // line 281
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 281)) {
                    // line 282
                    echo "                        <td class=\"text-right\">
                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 284
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 284), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 284), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 286
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "disable"], "method", false, false, false, 286), "html", null, true);
                    echo "</span>
                            </a>
                        </td>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 289
$context["plugin"], "compatible", [], "any", false, false, false, 289)) {
                    // line 290
                    echo "                        <td class=\"text-right text-nowrap\">
                            ";
                    // line 291
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 292
                        echo "                                <a class=\"btn btn-sm btn-danger mr-1 btn-spin-action\" href=\"#\"
                                   onclick=\"deletePlugin('";
                        // line 293
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 293), "html", null, true);
                        echo "');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 295
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 295), "html", null, true);
                        echo "</span>
                                </a>
                            ";
                    }
                    // line 298
                    echo "                            <a class=\"btn btn-sm btn-success btn-spin-action\"onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 299
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 299), "html", null, true);
                    echo "?action=enable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 299), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 301
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "enable"], "method", false, false, false, 301), "html", null, true);
                    echo "</span>
                            </a>
                        </td>
                    ";
                } else {
                    // line 305
                    echo "                        <td></td>
                    ";
                }
                // line 307
                echo "                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 309
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 310), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  720 => 313,  711 => 310,  708 => 309,  702 => 307,  698 => 305,  691 => 301,  684 => 299,  681 => 298,  675 => 295,  670 => 293,  667 => 292,  665 => 291,  662 => 290,  660 => 289,  654 => 286,  647 => 284,  643 => 282,  641 => 281,  636 => 280,  630 => 278,  624 => 276,  622 => 275,  617 => 274,  615 => 273,  611 => 272,  606 => 271,  603 => 270,  600 => 269,  597 => 268,  594 => 267,  591 => 266,  588 => 265,  583 => 264,  576 => 260,  572 => 259,  568 => 258,  564 => 257,  558 => 253,  543 => 252,  531 => 247,  522 => 244,  519 => 243,  512 => 240,  506 => 238,  504 => 237,  499 => 235,  495 => 234,  491 => 233,  484 => 232,  481 => 231,  476 => 230,  468 => 225,  464 => 224,  460 => 223,  454 => 219,  439 => 218,  424 => 210,  416 => 204,  414 => 203,  407 => 198,  405 => 197,  398 => 192,  396 => 191,  389 => 186,  387 => 185,  380 => 180,  377 => 179,  364 => 178,  352 => 169,  342 => 162,  336 => 159,  329 => 155,  325 => 154,  320 => 151,  318 => 150,  313 => 149,  309 => 148,  296 => 138,  292 => 137,  287 => 134,  281 => 131,  278 => 130,  276 => 129,  271 => 127,  267 => 125,  261 => 122,  258 => 121,  256 => 120,  249 => 116,  244 => 114,  236 => 109,  230 => 107,  227 => 106,  223 => 103,  217 => 100,  214 => 99,  212 => 98,  207 => 96,  200 => 93,  196 => 92,  191 => 89,  186 => 86,  180 => 84,  178 => 83,  174 => 82,  169 => 79,  167 => 78,  163 => 76,  157 => 74,  155 => 73,  151 => 72,  138 => 64,  129 => 58,  124 => 56,  121 => 55,  115 => 52,  110 => 49,  108 => 48,  105 => 47,  98 => 43,  93 => 42,  86 => 38,  81 => 37,  79 => 36,  73 => 33,  69 => 32,  60 => 27,  56 => 26,  51 => 20,  49 => 24,  47 => 23,  45 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "/var/www/html/facturascripts/Dinamic/View/AdminPlugins.html.twig");
    }
}
