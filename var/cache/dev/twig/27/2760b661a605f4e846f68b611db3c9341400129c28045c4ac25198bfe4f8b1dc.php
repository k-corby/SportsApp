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

/* Event/All.html.twig */
class __TwigTemplate_b66a32a4d3ba093dfbff86c1d0306ee248452ab66878a3846b3d14806d11e61e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/All.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/All.html.twig"));

        $this->parent = $this->loadTemplate("Base.html.twig", "Event/All.html.twig", 1);
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
        <div class=\"col-1\">
            <div class=\"jumbotron\">
                <h1 class=\"display-3\">Events</h1>
                <p class=\"lead\">Below are the latest events offered by Queensland Sporting Organisations.</p>
            </div>
        </div>
    </div>
    ";
        // line 12
        $context["coords"] = [];
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 13, $this->source); })()), "Event", [], "array", false, false, false, 13), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 14
            echo "        <div class=\"row\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["event"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "                <div class=\"col-1 col-3-grey\">
                    <h4>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 17), "html", null, true);
                echo "</h4>
                    <div class=\"map\" id=\"map";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Id", [], "any", false, false, false, 18), "html", null, true);
                echo "\"></div>
                    <p><b class=\"label\">Date: </b>ADD DATE</p>
                    <p><b class=\"label\">Location:</b> ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Lat", [], "any", false, false, false, 20), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Lng", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
                    <p><b class=\"label\">Information: </b>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Description", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                    <p><a class=\"btn btn-grey\" href=\"/event/show/";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">More information</a></p>
                    ";
                // line 23
                $context["coords"] = twig_array_merge((isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 23, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "Id", [], "any", false, false, false, 23), "lat" => twig_get_attribute($this->env, $this->source, $context["item"], "Lat", [], "any", false, false, false, 23), "lng" => twig_get_attribute($this->env, $this->source, $context["item"], "Lng", [], "any", false, false, false, 23)]]);
                // line 24
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    <div class=\"row\">
        <div class=\"col-1\">
            <div class=\"text-center\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 31, $this->source); })()), "Count", [], "array", false, false, false, 31)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "                <a class=\"btn btn-grey\" href=\"/event/all/";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
    </div>

    <script>
        var coords = ";
        // line 39
        echo json_encode((isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 39, $this->source); })()));
        echo "
        var zoom = 1
    </script>
    <script src=\"/js/maps.js\"></script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB78rp2qOD1SQLt_hZFLCe2wVUG0oV6LO0&callback=initMap\">
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Event/All.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 39,  154 => 34,  143 => 32,  139 => 31,  134 => 28,  127 => 26,  120 => 24,  118 => 23,  114 => 22,  110 => 21,  104 => 20,  99 => 18,  95 => 17,  92 => 16,  88 => 15,  85 => 14,  80 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Base.html.twig' %}

{% block contents %}
    <div class=\"row\">
        <div class=\"col-1\">
            <div class=\"jumbotron\">
                <h1 class=\"display-3\">Events</h1>
                <p class=\"lead\">Below are the latest events offered by Queensland Sporting Organisations.</p>
            </div>
        </div>
    </div>
    {% set coords = [] %}
    {% for event in Model[\"Event\"]|batch(2) %}
        <div class=\"row\">
            {% for item in event %}
                <div class=\"col-1 col-3-grey\">
                    <h4>{{ item.Name }}</h4>
                    <div class=\"map\" id=\"map{{ item.Id }}\"></div>
                    <p><b class=\"label\">Date: </b>ADD DATE</p>
                    <p><b class=\"label\">Location:</b> {{ item.Lat }}, {{ item.Lng }}</p>
                    <p><b class=\"label\">Information: </b>{{ item.Description }}</p>
                    <p><a class=\"btn btn-grey\" href=\"/event/show/{{ item.id }}\">More information</a></p>
                    {% set coords = coords|merge([{'id': item.Id, 'lat' : item.Lat, 'lng' : item.Lng }]) %}
                </div>
            {% endfor %}
        </div>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-1\">
            <div class=\"text-center\">
            {% for i in 1..Model[\"Count\"] %}
                <a class=\"btn btn-grey\" href=\"/event/all/{{i}}\">{{i}}</a>
            {% endfor %}
            </div>
        </div>
    </div>

    <script>
        var coords = {{ coords|json_encode|raw }}
        var zoom = 1
    </script>
    <script src=\"/js/maps.js\"></script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB78rp2qOD1SQLt_hZFLCe2wVUG0oV6LO0&callback=initMap\">
    </script>
{% endblock %}", "Event/All.html.twig", "/Applications/MAMP/htdocs/Projects/QLDGovSportsSym/src/Views/Event/All.html.twig");
    }
}
