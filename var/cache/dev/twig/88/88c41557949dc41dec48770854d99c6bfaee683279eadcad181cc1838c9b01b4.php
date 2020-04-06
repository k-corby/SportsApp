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

/* Event/Show.html.twig */
class __TwigTemplate_324d21c3224eb7aabe744cae471bfd516c155d1b7be071b802ee273272266bd4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Show.html.twig"));

        $this->parent = $this->loadTemplate("Base.html.twig", "Event/Show.html.twig", 1);
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
        echo "\t<div class=\"row\">
\t\t<div class=\"col-1\">
\t\t\t<h1 class=\"display-3\">Event: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 6, $this->source); })()), "Name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
\t\t\t<p class=\"lead\">Below is important information about the ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 7, $this->source); })()), "Name", [], "any", false, false, false, 7), "html", null, true);
        echo " event. If you wish to sign up please register.</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-2\">
\t\t\t";
        // line 12
        $context["coords"] = [0 => ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 12, $this->source); })()), "Id", [], "any", false, false, false, 12), "lat" => twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 12, $this->source); })()), "Lat", [], "any", false, false, false, 12), "lng" => twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 12, $this->source); })()), "Lng", [], "any", false, false, false, 12)]];
        // line 13
        echo "\t\t\t<h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 13, $this->source); })()), "Name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"map-single\" id=\"map";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 14, $this->source); })()), "Id", [], "any", false, false, false, 14), "html", null, true);
        echo "\"></div>
\t\t\t<p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 15, $this->source); })()), "Description", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>

\t\t\t<p><a class=\"btn\" href=\"/event/all\">Return to all events</a></p>
\t\t</div>
\t\t<div class=\"col-1 col-3-grey\">
\t\t\t<h2>Event Information</h2>
\t\t\t<p><b class=\"label\">Date:</b> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 21, $this->source); })()), "Lat", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
\t\t\t<p><b class=\"label\">Latitude:</b> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 22, $this->source); })()), "Lat", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
\t\t\t<p><b class=\"label\">Longitude:</b> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 23, $this->source); })()), "Lng", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
\t\t\t<p> <a class=\"btn btn-grey\" href=\"/event/delete/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Model"]) || array_key_exists("Model", $context) ? $context["Model"] : (function () { throw new RuntimeError('Variable "Model" does not exist.', 24, $this->source); })()), "Id", [], "any", false, false, false, 24), "html", null, true);
        echo "\">Delete</a></p>
\t\t</div>
\t</div>
\t<script>
\t\tvar coords = ";
        // line 28
        echo json_encode((isset($context["coords"]) || array_key_exists("coords", $context) ? $context["coords"] : (function () { throw new RuntimeError('Variable "coords" does not exist.', 28, $this->source); })()));
        echo "
\t\tvar zoom = 6
\t</script>
\t<script src=\"/js/maps.js\"></script>
\t<script async defer
\t\t\tsrc=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB78rp2qOD1SQLt_hZFLCe2wVUG0oV6LO0&callback=initMap\">
\t</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Event/Show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 28,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  95 => 15,  91 => 14,  86 => 13,  84 => 12,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Base.html.twig' %}

{% block contents %}
\t<div class=\"row\">
\t\t<div class=\"col-1\">
\t\t\t<h1 class=\"display-3\">Event: {{Model.Name}}</h1>
\t\t\t<p class=\"lead\">Below is important information about the {{ Model.Name }} event. If you wish to sign up please register.</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-2\">
\t\t\t{% set coords = [{'id': Model.Id, 'lat' : Model.Lat, 'lng' : Model.Lng }] %}
\t\t\t<h2>{{Model.Name}}</h2>
\t\t\t<div class=\"map-single\" id=\"map{{ Model.Id }}\"></div>
\t\t\t<p>{{ Model.Description }}</p>

\t\t\t<p><a class=\"btn\" href=\"/event/all\">Return to all events</a></p>
\t\t</div>
\t\t<div class=\"col-1 col-3-grey\">
\t\t\t<h2>Event Information</h2>
\t\t\t<p><b class=\"label\">Date:</b> {{ Model.Lat }}</p>
\t\t\t<p><b class=\"label\">Latitude:</b> {{ Model.Lat }}</p>
\t\t\t<p><b class=\"label\">Longitude:</b> {{ Model.Lng }}</p>
\t\t\t<p> <a class=\"btn btn-grey\" href=\"/event/delete/{{ Model.Id }}\">Delete</a></p>
\t\t</div>
\t</div>
\t<script>
\t\tvar coords = {{ coords|json_encode|raw }}
\t\tvar zoom = 6
\t</script>
\t<script src=\"/js/maps.js\"></script>
\t<script async defer
\t\t\tsrc=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB78rp2qOD1SQLt_hZFLCe2wVUG0oV6LO0&callback=initMap\">
\t</script>


{% endblock %}
", "Event/Show.html.twig", "/Applications/MAMP/htdocs/Projects/QLDGovSportsSym/src/Views/Event/Show.html.twig");
    }
}
