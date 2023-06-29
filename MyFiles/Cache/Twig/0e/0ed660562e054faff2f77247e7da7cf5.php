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

/* Error/AccessDenied.html.twig */
class __TwigTemplate_e219c421215641b0b67bd487a8149b1f extends Template
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
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Error/AccessDenied.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <div class=\"container\" style=\"margin-top: -60px;\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <h1 class=\"h2\">
                            <i class=\"fas fa-lock\" aria-hidden=\"true\"></i>
                            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "access-denied"], "method", false, false, false, 19), "html", null, true);
        echo "
                        </h1>
                        ";
        // line 21
        echo twig_escape_filter($this->env, ($context["controllerName"] ?? null), "html", null, true);
        echo "
                        <hr/>
                        <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "access-denied-p"], "method", false, false, false, 23), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Error/AccessDenied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  78 => 21,  73 => 19,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Error/AccessDenied.html.twig", "/var/www/html/facturascripts/Dinamic/View/Error/AccessDenied.html.twig");
    }
}
