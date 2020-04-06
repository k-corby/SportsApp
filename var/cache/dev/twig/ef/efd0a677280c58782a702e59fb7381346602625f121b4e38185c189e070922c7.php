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

/* Account/Accounts.twig */
class __TwigTemplate_d36eb286fc9b9e87d66c310723af8bd33eb2d7f859ce00573533b68b56715ee3 extends Template
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
        return "Layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/Accounts.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/Accounts.twig"));

        $this->parent = $this->loadTemplate("Layout.twig", "Account/Accounts.twig", 1);
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
        <div class=\"col-1 col-3-grey\">
        ";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 14, $this->source); })()), 0, [], "array", false, false, false, 14), "Id", [], "any", false, false, false, 14));
        echo "
        ";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 15, $this->source); })()), "FirstName", [], "any", false, false, false, 15));
        echo "
        ";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16), "Address", [], "any", false, false, false, 16), 1, [], "array", false, false, false, 16), "StreetName", [], "any", false, false, false, 16));
        echo "
        ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 17, $this->source); })()), "Address", [], "any", false, false, false, 17), 1, [], "array", false, false, false, 17), "StreetName", [], "any", false, false, false, 17));
        echo "
        ";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 18, $this->source); })()), "Address", [], "any", false, false, false, 18), 0, [], "array", false, false, false, 18), "StreetName", [], "any", false, false, false, 18));
        echo "
        </div>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 21
            echo "            <div class=\"col-1 col-3-grey\">
            <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "Id", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
            <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "Email", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["account"], "Address", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 25
                echo "                    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "Number", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "StreetName", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "Suburb", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "State", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "AddressType", [], "any", false, false, false, 25), "Type", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
    <script>
        var model = ";
        // line 31
        echo json_encode((isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 31, $this->source); })()));
        echo "
    </script>
    <script src=\"/js/consolelog.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/Accounts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 31,  144 => 29,  137 => 27,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  105 => 21,  101 => 20,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Layout.twig' %}

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
        <div class=\"col-1 col-3-grey\">
        {{ dump(Model[0].Id) }}
        {{ dump(Model.FirstName) }}
        {{ dump(Model[0].Address[1].StreetName) }}
        {{ dump(Model.Address[1].StreetName) }}
        {{ dump(Model.Address[0].StreetName) }}
        </div>
        {% for account in Model %}
            <div class=\"col-1 col-3-grey\">
            <p>{{ account.Id }}</p>
            <p>{{ account.Email }}</p>
                {% for address in account.Address %}
                    <p>{{address.Number}} {{ address.StreetName }} {{ address.Suburb }} {{ address.State }} {{ address.AddressType.Type }}</p>
                {% endfor %}
            </div>
        {% endfor %}
    </div>
    <script>
        var model = {{ Model|json_encode|raw }}
    </script>
    <script src=\"/js/consolelog.js\"></script>
{% endblock %}", "Account/Accounts.twig", "/Applications/MAMP/htdocs/Projects/QLDGovSportsSym/src/Views/Account/Accounts.twig");
    }
}
