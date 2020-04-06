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

/* Account/All.html.twig */
class __TwigTemplate_c0ab6071b1c490d878498fcf63aef4ab4c66689478bc334a9bcbc99105b07e65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/All.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/All.html.twig"));

        $this->parent = $this->loadTemplate("Base.html.twig", "Account/All.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col\">
            <div class=\"jumbotron\">
                <h1 class=\"display-3\">Account</h1>
                <p class=\"lead\">Below are the all the accounts in the system.</p>
            </div>
        </div>
    </div>
    <div class=\"row\">

            ";
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 19
            echo "            <div class=\"col-1 col-1-multiple col-3-grey\">
                <h4>Account Information</h4>
                <p><b class=\"label\">Account Type: </b> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["account"], "Role", [], "any", false, false, false, 21), "Role", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                <p><b class=\"label\">Name: </b> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "FirstName", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "LastName", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                <p><b class=\"label\">Phone: </b> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "PhoneNumber", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                <p><b class=\"label\">Email: </b>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "Email", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                <hr>
                <h4>Address</h4>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["account"], "Address", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 28
                echo "                    <p>
                        <b class=\"label\">Address: </b>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "Number", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "StreetName", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "Suburb", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "State", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "AddressType", [], "any", false, false, false, 29), "Type", [], "any", false, false, false, 29), "html", null, true);
                echo "
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/All.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  133 => 32,  116 => 29,  113 => 28,  109 => 27,  103 => 24,  99 => 23,  93 => 22,  89 => 21,  85 => 19,  80 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Base.html.twig' %}

{% block contents %}
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"jumbotron\">
                <h1 class=\"display-3\">Account</h1>
                <p class=\"lead\">Below are the all the accounts in the system.</p>
            </div>
        </div>
    </div>
    <div class=\"row\">

            {#
            {{ dump(Model[0].Id) }}
            {{ dump(Model[0].Address[1].StreetName) }}
            #}
        {% for account in Model %}
            <div class=\"col-1 col-1-multiple col-3-grey\">
                <h4>Account Information</h4>
                <p><b class=\"label\">Account Type: </b> {{ account.Role.Role }}</p>
                <p><b class=\"label\">Name: </b> {{ account.FirstName }} {{ account.LastName }}</p>
                <p><b class=\"label\">Phone: </b> {{ account.PhoneNumber }}</p>
                <p><b class=\"label\">Email: </b>{{ account.Email }}</p>
                <hr>
                <h4>Address</h4>
                {% for address in account.Address %}
                    <p>
                        <b class=\"label\">Address: </b>{{ address.Number }} {{ address.StreetName }} {{ address.Suburb }} {{ address.State }} {{ address.AddressType.Type }}
                    </p>
                {% endfor %}
            </div>
        {% endfor %}
    </div>
{% endblock %}", "Account/All.html.twig", "/Applications/MAMP/htdocs/projects/QLDGovSportsSym/src/Views/Account/All.html.twig");
    }
}
