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

/* Account/Index.html.twig */
class __TwigTemplate_166b2066d72efb5e590ea3f97717d08feb86f0dc29f4ec5cc91dc5a40f96659a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/Index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Account/Index.html.twig"));

        $this->parent = $this->loadTemplate("Base.html.twig", "Account/Index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-1\">
                <h1 class=\"center\">Account</h1>
                <p class=\"lead\">Below is your account information.</p>
        </div>
    </div>
    <div class=\"row\" id=\"account\">

        <div class=\"col-2\">
            <div class=\"row\">
                <div class=\"col-1 col-3-grey\">
                    <h4>Account Information</h4>
                    <p><b class=\"label\">Account Type: </b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 15, $this->source); })()), "Role", [], "any", false, false, false, 15), "Role", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                    <p><b class=\"label\">Name: </b> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 16, $this->source); })()), "FirstName", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 16, $this->source); })()), "LastName", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                    <p><b class=\"label\">Phone: </b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 17, $this->source); })()), "PhoneNumber", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                    <p><b class=\"label\">Email: </b>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 18, $this->source); })()), "Email", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                    <hr>
                    <h4>Address</h4>
                    <p>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 22, $this->source); })()), "address", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 23
            echo "                            <b class=\"label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "AddressType", [], "any", false, false, false, 23), "Type", [], "any", false, false, false, 23), "html", null, true);
            echo ": </b>
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "Number", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "StreetName", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "Suburb", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "State", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                    </p>
                    <p class=\"ext-mrg-top\"><a class=\"btn\">Update Account</a></p>
                </div>
                <div class=\"col-1 col-3-grey\">
                    <h4>Children</h4>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 32, $this->source); })()), "Child", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "                        <p><label class=\"label\">Name: </label>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "FirstName", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "LastName", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                        <p><label class=\"label\">DOB: </label>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "DOB", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                        <hr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    <p class=\"ext-mrg-top\"><a class=\"btn\">Update Children</a></p>
                </div>

            </div>

        </div>


        <div class=\"col-1 col-3-pad\">
            <h4 class=\"ext-mrg-bottom\">Organisation Features</h4>
            <p><a id=\"target\" class=\"btn light width-100\" href=\"#\">Dashboard</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">Add a child</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">View signed up events</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">Register sport alerts</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">Update sport alerts</a></p>
        </div>


    </div>
    <script>
        \$( \"a\" ).click(function() {
            alert( \"Handler for .click() called.\" );
        });

        function test(){
            //alert(\"adada\");
        }
        function SearchForm(){

            var brand=\$('#brand').val();

            \$.ajax({
                type:'POST',
                url: \"/child/add\",
                success: function(response) {

                    \$('#account .col-2').html(response);
                }});
            return false;
        }
    </script>

    <div id=\"all_data_search\"></div>
    <input type=\"button\" onClick=\"SearchForm()\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Account/Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  145 => 34,  138 => 33,  134 => 32,  126 => 26,  112 => 24,  107 => 23,  103 => 22,  96 => 18,  92 => 17,  86 => 16,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Base.html.twig' %}
{% block contents %}
    <div class=\"row\">
        <div class=\"col-1\">
                <h1 class=\"center\">Account</h1>
                <p class=\"lead\">Below is your account information.</p>
        </div>
    </div>
    <div class=\"row\" id=\"account\">

        <div class=\"col-2\">
            <div class=\"row\">
                <div class=\"col-1 col-3-grey\">
                    <h4>Account Information</h4>
                    <p><b class=\"label\">Account Type: </b> {{ model.Role.Role }}</p>
                    <p><b class=\"label\">Name: </b> {{ model.FirstName }} {{ model.LastName }}</p>
                    <p><b class=\"label\">Phone: </b> {{ model.PhoneNumber }}</p>
                    <p><b class=\"label\">Email: </b>{{ model.Email }}</p>
                    <hr>
                    <h4>Address</h4>
                    <p>
                        {% for address in model.address %}
                            <b class=\"label\">{{address.AddressType.Type}}: </b>
                            {{ address.Number }} {{ address.StreetName }} {{ address.Suburb }} {{ address.State }}
                        {% endfor %}

                    </p>
                    <p class=\"ext-mrg-top\"><a class=\"btn\">Update Account</a></p>
                </div>
                <div class=\"col-1 col-3-grey\">
                    <h4>Children</h4>
                    {% for child in model.Child %}
                        <p><label class=\"label\">Name: </label>{{ child.FirstName }} {{ child.LastName }}</p>
                        <p><label class=\"label\">DOB: </label>{{ child.DOB }}</p>
                        <hr>
                    {% endfor %}
                    <p class=\"ext-mrg-top\"><a class=\"btn\">Update Children</a></p>
                </div>

            </div>

        </div>


        <div class=\"col-1 col-3-pad\">
            <h4 class=\"ext-mrg-bottom\">Organisation Features</h4>
            <p><a id=\"target\" class=\"btn light width-100\" href=\"#\">Dashboard</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">Add a child</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">View signed up events</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">Register sport alerts</a></p>
            <p><a class=\"btn light width-100\" href=\"/event/add\">Update sport alerts</a></p>
        </div>


    </div>
    <script>
        \$( \"a\" ).click(function() {
            alert( \"Handler for .click() called.\" );
        });

        function test(){
            //alert(\"adada\");
        }
        function SearchForm(){

            var brand=\$('#brand').val();

            \$.ajax({
                type:'POST',
                url: \"/child/add\",
                success: function(response) {

                    \$('#account .col-2').html(response);
                }});
            return false;
        }
    </script>

    <div id=\"all_data_search\"></div>
    <input type=\"button\" onClick=\"SearchForm()\">
{% endblock %}
", "Account/Index.html.twig", "/Applications/MAMP/htdocs/Projects/QLDGovSportsSym/src/Views/Account/Index.html.twig");
    }
}
