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

/* Base.html.twig */
class __TwigTemplate_1984cefaceaffd33bddf39f5a46fd8e4b7d10c636882a9ed88e222ff580198a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/img/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <script type=\"text/javascript\" src=\"/js/jquery-3.4.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/main.js\"></script>
    <title></title>
</head>

<body>

<nav>
    <div class=\"navbar\" id=\"nav\">
        <div class=\"row nav-row-top\">
            <div class=\"row nav-row-cent\">
                <div class=\"col-1\">
                    <a class=\"brand\" href=\"/\"><img width=\"280\" src=\"/img/qldgovlogo.jpg\"></a>
                </div>
                <div class=\"col-1 col-right search\">
                    <form class=\"form-inline\" action=\"/search/index\" method=\"get\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-grey\" type=\"submit\">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"row nav-row-bottom\">
            <div class=\"row nav-row-cent\">
                <div class=\"col-1\">
                    <ul>
                        <li><a href=\"/\" class=\"active\">Home</a></li>
                        <!--<li>
                            <a href=\"/Event/Index\">Events</a>
                        </li>-->
                        <li>
                            <div class=\"dropdown-toggle\">
                                <a class=\"nav-link\" href=\"#\">
                                    Events
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"/event/all\">View Events</a>

                                </div>
                            </div>
                        </li>
                        <li>
                        <div class=\"dropdown-toggle\">
                            <a class=\"nav-link\" href=\"#\">
                                Organisations
                            </a>
                            <div class=\"dropdown-menu\">
                                <a href=\"/organisation/add\">View Organisations</a>

                            </div>
                        </div>
                        </li>
                        <li><a href=\"/news/index\">News</a></li>
                        <li>
                            <div class=\"dropdown-toggle\">
                                <a class=\"nav-link\" href=\"#\">
                                    Account
                                </a>
                                <div class=\"dropdown-menu\">


                                    ";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 78
            echo "                                        <a href=\"/account\">View Account</a>
                                        <a href=\"/organisation/add\">Add Organisation</a>
                                        <a href=\"/event/add\">Add Event</a>
                                        <a class=\"dropdown-item\" href=\"/account/all\">View all accounts</a>
                                        <a href=\"/logout\">Logout</a>
                                    ";
        } else {
            // line 84
            echo "                                        <a class=\"dropdown-item\" href=\"/account/register\">Register</a>
                                        <a class=\"dropdown-item\" href=\"/login\">Login</a>
                                    ";
        }
        // line 87
        echo "                                </div>
                            </div>
                    </ul>
                    <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\"><i class=\"fa fa-bars\"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<main>
    <div class=\"container\">
        <div id=\"app\"></div>
        ";
        // line 99
        $this->displayBlock('contents', $context, $blocks);
        // line 101
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    </div>
</main>

<!-- Footer -->
<footer>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-1\">
                    <h5>Queensland Government</h5>
                    <p><b class=\"label\">Address: </b>12 Brisbane Street, QLD, 4121</p>
                    <p><b class=\"label\">Phone: </b>07 3453 2132</p>
                    <p><b class=\"label\">Email: </b>info@govsports.qld.gov.au</p>
                </div>
                <div class=\"col-1\">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a class=\"footer-link\" href=\"#\">Register an account</a></li>
                        <li><a class=\"footer-link\" href=\"#\">Find out the latest news</a></li>
                        <li><a class=\"footer-link\" href=\"#\">Recent events</a></li>
                    </ul>
                </div>
                <div class=\"col-1\">
                    <h5>Discover New Sports</h5>
                    <p>Welcome to a place where being active in sport matters. On Queensland Government Sport you can register for a variety of sports around the state.<br>
                        <a style=\"color: white; font-weight: 700\" href=\"\">Find out more</a></p>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-1\">
                    <h6>Get connected with us on social networks!</h6>
                </div>
                <div class=\"col-1 col-right\">
                    <a href=\"#\" class=\"fa fa-facebook\"></a>
                    <a href=\"#\" class=\"fa fa-twitter\"></a>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-1 copyright text-center\">© 2020 Copyright - Queensland Government</a>
                </div>
            </div>
        </div>
</footer>
<!-- Footer -->


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        <!-- Renders a link tag (if your module requires any CSS)
             <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 100
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 100,  246 => 99,  230 => 11,  228 => 10,  218 => 9,  151 => 101,  149 => 99,  135 => 87,  130 => 84,  122 => 78,  120 => 77,  57 => 16,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/img/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    {% block stylesheets %}
        {# 'app' must match the first argument to addEntry() in webpack.config.js #}
        {{ encore_entry_link_tags('app') }}

        <!-- Renders a link tag (if your module requires any CSS)
             <link rel=\"stylesheet\" href=\"/build/app.css\"> -->
    {% endblock %}
    <script type=\"text/javascript\" src=\"/js/jquery-3.4.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/main.js\"></script>
    <title></title>
</head>

<body>

<nav>
    <div class=\"navbar\" id=\"nav\">
        <div class=\"row nav-row-top\">
            <div class=\"row nav-row-cent\">
                <div class=\"col-1\">
                    <a class=\"brand\" href=\"/\"><img width=\"280\" src=\"/img/qldgovlogo.jpg\"></a>
                </div>
                <div class=\"col-1 col-right search\">
                    <form class=\"form-inline\" action=\"/search/index\" method=\"get\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-grey\" type=\"submit\">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"row nav-row-bottom\">
            <div class=\"row nav-row-cent\">
                <div class=\"col-1\">
                    <ul>
                        <li><a href=\"/\" class=\"active\">Home</a></li>
                        <!--<li>
                            <a href=\"/Event/Index\">Events</a>
                        </li>-->
                        <li>
                            <div class=\"dropdown-toggle\">
                                <a class=\"nav-link\" href=\"#\">
                                    Events
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"/event/all\">View Events</a>

                                </div>
                            </div>
                        </li>
                        <li>
                        <div class=\"dropdown-toggle\">
                            <a class=\"nav-link\" href=\"#\">
                                Organisations
                            </a>
                            <div class=\"dropdown-menu\">
                                <a href=\"/organisation/add\">View Organisations</a>

                            </div>
                        </div>
                        </li>
                        <li><a href=\"/news/index\">News</a></li>
                        <li>
                            <div class=\"dropdown-toggle\">
                                <a class=\"nav-link\" href=\"#\">
                                    Account
                                </a>
                                <div class=\"dropdown-menu\">


                                    {%  if is_granted('IS_AUTHENTICATED_FULLY')  %}
                                        <a href=\"/account\">View Account</a>
                                        <a href=\"/organisation/add\">Add Organisation</a>
                                        <a href=\"/event/add\">Add Event</a>
                                        <a class=\"dropdown-item\" href=\"/account/all\">View all accounts</a>
                                        <a href=\"/logout\">Logout</a>
                                    {% else %}
                                        <a class=\"dropdown-item\" href=\"/account/register\">Register</a>
                                        <a class=\"dropdown-item\" href=\"/login\">Login</a>
                                    {% endif %}
                                </div>
                            </div>
                    </ul>
                    <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\"><i class=\"fa fa-bars\"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<main>
    <div class=\"container\">
        <div id=\"app\"></div>
        {% block contents %}
        {% endblock %}
        {{ encore_entry_script_tags('app') }}
    </div>
</main>

<!-- Footer -->
<footer>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-1\">
                    <h5>Queensland Government</h5>
                    <p><b class=\"label\">Address: </b>12 Brisbane Street, QLD, 4121</p>
                    <p><b class=\"label\">Phone: </b>07 3453 2132</p>
                    <p><b class=\"label\">Email: </b>info@govsports.qld.gov.au</p>
                </div>
                <div class=\"col-1\">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a class=\"footer-link\" href=\"#\">Register an account</a></li>
                        <li><a class=\"footer-link\" href=\"#\">Find out the latest news</a></li>
                        <li><a class=\"footer-link\" href=\"#\">Recent events</a></li>
                    </ul>
                </div>
                <div class=\"col-1\">
                    <h5>Discover New Sports</h5>
                    <p>Welcome to a place where being active in sport matters. On Queensland Government Sport you can register for a variety of sports around the state.<br>
                        <a style=\"color: white; font-weight: 700\" href=\"\">Find out more</a></p>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-1\">
                    <h6>Get connected with us on social networks!</h6>
                </div>
                <div class=\"col-1 col-right\">
                    <a href=\"#\" class=\"fa fa-facebook\"></a>
                    <a href=\"#\" class=\"fa fa-twitter\"></a>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-1 copyright text-center\">© 2020 Copyright - Queensland Government</a>
                </div>
            </div>
        </div>
</footer>
<!-- Footer -->


</body>
</html>
", "Base.html.twig", "/Applications/MAMP/htdocs/Projects/QLDGovSportsSym/src/Views/Base.html.twig");
    }
}
