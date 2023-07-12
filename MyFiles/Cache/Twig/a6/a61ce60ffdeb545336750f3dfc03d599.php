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

/* EditPermisosFamilia.html.twig */
class __TwigTemplate_be9da784f830b77d2bab30fe5df75845 extends Template
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
        // line 1
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "EditPermisosFamilia.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 4);
        // line 5
        echo "    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-1\">
            </div>
            <div class=\"col-11 text-right\">
                <h1 class=\"h4\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "
                    <i class=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 12), "html", null, true);
        echo " fa-fw\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <!-- Macros Template Imports -->
    ";
        // line 20
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPermisosFamilia.html.twig", 20)->unwrap();
        // line 21
        echo "    <div class=\"container\">
        <div class=\"card shadow\">
            <div class=\"card-body\">
                <h1 class=\"h3\">
                    <i class=\"fas fa-user\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "Permisos Familia"], "method", false, false, false, 25), "html", null, true);
        echo "
                </h1>
                <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "En esta venta podras asignarle al usuario seleccionado las familias con las que podra trabajar."], "method", false, false, false, 27), "html", null, true);
        echo "</p>
                <hr/>
                <form method=\"post\" class=\"form\" id=\"formPermisosFamilias\">
                    <input type=\"hidden\" name=\"action\" value=\"savePermisosFamilia\"/>
                    ";
        // line 31
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
                    <div class=\"form-row\">
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 35
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpermiso", "codpermiso", ($context["permisosfacmilias"] ?? null), "serial", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "id"], "method", false, false, false, 35), "fas fa-user-cog", ["maxlength" => "100"]], 35, $context, $this->getSourceContext());
        // line 36
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 41
        echo twig_call_macro($macros["forms"], "macro_userSelect", ["nick", "nick", ($context["nick"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "User", 1 => false], "method", false, false, false, 41), twig_get_attribute($this->env, $this->source,         // line 42
($context["i18n"] ?? null), "trans", [0 => "Usuario"], "method", false, false, false, 42), "fas fa-users"], 41, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>                     
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 47
        echo twig_call_macro($macros["forms"], "macro_multiSelect", ["codfamilia", "codfamilia", ($context["codfamilia"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Familia", 1 => false, 2 => "descripcion"], "method", false, false, false, 47), twig_get_attribute($this->env, $this->source,         // line 48
($context["i18n"] ?? null), "trans", [0 => "Familia"], "method", false, false, false, 48), "fas fa-laptop-house"], 47, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-between\">
                        <div class=\"col-4\">
                            <a class=\"btn btn-danger\" href=\"/ListPermisosMarca\" role=\"button\">Volver</a>
                        </div>
                        <div class=\"col-auto\">
                            <button type=\"submit\" class=\"btn btn-primary text-right\" id=\"btnPermisoUsuario\">
                                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 58), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EditPermisosFamilia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 58,  129 => 48,  128 => 47,  120 => 42,  119 => 41,  112 => 36,  110 => 35,  103 => 31,  96 => 27,  91 => 25,  85 => 21,  83 => 20,  80 => 19,  76 => 18,  66 => 12,  62 => 11,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditPermisosFamilia.html.twig", "/var/www/html/facturascripts/Dinamic/View/EditPermisosFamilia.html.twig");
    }
}
