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

/* ReportTaxes.html.twig */
class __TwigTemplate_557ab03453e94c2b336b13874b385fc3 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "ReportTaxes.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <br/>
    <br/>
    <br/>
";
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <form method=\"post\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"container\" style=\"margin-top: -60px;\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card shadow mb-3\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                <i class=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 37), "icon", [], "any", false, false, false, 37), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "
                            </h1>
                            <div class=\"form-row\">
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company"], "method", false, false, false, 42), "html", null, true);
        echo "
                                        <select name=\"idempresa\" class=\"form-control\">
                                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 44), "all", [], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 45
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "idempresa", [], "any", false, false, false, 45))) {
                // line 46
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 46), "html", null, true);
                echo "\"
                                                            selected=\"\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["empresa"], "nombrecorto", [], "any", false, false, false, 47);
                echo "</option>
                                                ";
            } else {
                // line 49
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "idempresa", [], "any", false, false, false, 49), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["empresa"], "nombrecorto", [], "any", false, false, false, 49);
                echo "</option>
                                                ";
            }
            // line 51
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "invoices"], "method", false, false, false, 57), "html", null, true);
        echo "
                                        <select name=\"source\" class=\"form-control\">
                                            ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "source", [], "any", false, false, false, 59) == "purchases")) {
            // line 60
            echo "                                                <option value=\"sales\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sales"], "method", false, false, false, 60), "html", null, true);
            echo "</option>
                                                <option value=\"purchases\"
                                                        selected=\"\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "purchases"], "method", false, false, false, 62), "html", null, true);
            echo "</option>
                                            ";
        } else {
            // line 64
            echo "                                                <option value=\"sales\" selected=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sales"], "method", false, false, false, 64), "html", null, true);
            echo "</option>
                                                <option value=\"purchases\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "purchases"], "method", false, false, false, 65), "html", null, true);
            echo "</option>
                                            ";
        }
        // line 67
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "from-date"], "method", false, false, false, 72), "html", null, true);
        echo "
                                        <input type=\"date\" name=\"datefrom\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "datefrom", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
                                               class=\"form-control\" required=\"\"/>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "until-date"], "method", false, false, false, 79), "html", null, true);
        echo "
                                        <input type=\"date\" name=\"dateto\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "dateto", [], "any", false, false, false, 80), "html", null, true);
        echo "\" class=\"form-control\"
                                               required=\"\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-row align-items-end\">
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "serie"], "method", false, false, false, 88), "html", null, true);
        echo "
                                        <select name=\"codserie\" class=\"form-control\">
                                            <option value=\"\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 90), "html", null, true);
        echo "</option>
                                            <option value=\"\">------</option>
                                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "serie", [], "any", false, false, false, 92), "all", [0 => [], 1 => ["descripcion" => "ASC"], 2 => 0, 3 => 0], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 93
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 93) == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codserie", [], "any", false, false, false, 93))) {
                // line 94
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 94), "html", null, true);
                echo "\"
                                                            selected=\"\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 95);
                echo "</option>
                                                ";
            } else {
                // line 97
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 97), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 97);
                echo "</option>
                                                ";
            }
            // line 99
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 105), "html", null, true);
        echo "
                                        <select name=\"codpais\" class=\"form-control\">
                                            <option value=\"\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 107), "html", null, true);
        echo "</option>
                                            <option value=\"\">------</option>
                                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pais", [], "any", false, false, false, 109), "all", [0 => [], 1 => ["nombre" => "ASC"], 2 => 0, 3 => 0], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["pais"]) {
            // line 110
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["pais"], "codpais", [], "any", false, false, false, 110) == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "codpais", [], "any", false, false, false, 110))) {
                // line 111
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pais"], "codpais", [], "any", false, false, false, 111), "html", null, true);
                echo "\"
                                                            selected=\"\">";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["pais"], "nombre", [], "any", false, false, false, 112);
                echo "</option>
                                                ";
            } else {
                // line 114
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pais"], "codpais", [], "any", false, false, false, 114), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["pais"], "nombre", [], "any", false, false, false, 114);
                echo "</option>
                                                ";
            }
            // line 116
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "format"], "method", false, false, false, 122), "html", null, true);
        echo "
                                        <select name=\"format\" class=\"form-control\">
                                            <option value=\"PDF\">PDF</option>
                                            <option value=\"CSV\">CSV</option>
                                            <option value=\"XLS\">Excel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "generate"], "method", false, false, false, 133), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "ReportTaxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 133,  284 => 122,  277 => 117,  271 => 116,  263 => 114,  258 => 112,  253 => 111,  250 => 110,  246 => 109,  241 => 107,  236 => 105,  229 => 100,  223 => 99,  215 => 97,  210 => 95,  205 => 94,  202 => 93,  198 => 92,  193 => 90,  188 => 88,  177 => 80,  173 => 79,  164 => 73,  160 => 72,  153 => 67,  148 => 65,  143 => 64,  138 => 62,  132 => 60,  130 => 59,  125 => 57,  118 => 52,  112 => 51,  104 => 49,  99 => 47,  94 => 46,  91 => 45,  87 => 44,  82 => 42,  72 => 37,  62 => 29,  58 => 28,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "ReportTaxes.html.twig", "/var/www/html/facturascripts/Dinamic/View/ReportTaxes.html.twig");
    }
}
