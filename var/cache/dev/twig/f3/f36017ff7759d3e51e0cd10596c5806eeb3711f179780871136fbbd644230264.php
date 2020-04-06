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

/* @EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig */
class __TwigTemplate_e0e35c152ddbf82f07633e76f5b4e6a0dbcb94033856be142fba9e2f9c205acd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ewz_recaptcha_widget' => [$this, 'block_ewz_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig"));

        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 84
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "ewz_recaptcha_enabled", [], "any", false, false, false, 3)) {
            // line 4
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "ewz_recaptcha_ajax", [], "any", false, false, false, 4)) {
                // line 5
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 5, $this->source); })()), "options", [], "any", false, false, false, 5), "size", [], "any", false, false, false, 5), "invisible") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 5), "callback", [], "any", true, true, false, 5))) {
                    // line 6
                    echo "                ";
                    $context["options"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), "options", [], "any", false, false, false, 6), ["callback" => "onReCaptchaSuccess"]);
                    // line 7
                    echo "                ";
                    $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 7, $this->source); })()), ["options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })())]);
                    // line 8
                    echo "
                <script type=\"text/javascript\">
                    var onReCaptchaSuccess = function() {
                        var errorDivs = document.getElementsByClassName('recaptcha-error');
                        if (errorDivs.length) {
                            errorDivs[0].className = '';
                        }

                        var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
                        if (errorMsgs.length) {
                            errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
                        }

                        var forms = document.getElementsByClassName('recaptcha-form');
                        if (forms.length) {
                          var recaptchaSubmitEvent = document.createEvent('Event');
                          recaptchaSubmitEvent.initEvent('submit', true, true);
                          forms[0].addEventListener('submit', function (e) {
                            e.target.submit();
                          }, false);
                          forms[0].dispatchEvent(recaptchaSubmitEvent);
                        }
                    };
                </script>
            ";
                }
                // line 33
                echo "
            <script type=\"text/javascript\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "url_challenge", [], "any", false, false, false, 34), "html", null, true);
                echo "\"";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 35), "defer", [], "any", true, true, false, 35) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), "options", [], "any", false, false, false, 35), "defer", [], "any", false, false, false, 35))) {
                    echo " defer";
                }
                // line 36
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 36), "async", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), "options", [], "any", false, false, false, 36), "async", [], "any", false, false, false, 36))) {
                    echo " async";
                }
                // line 37
                echo "></script>
            <div class=\"g-recaptcha\" data-theme=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "theme", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "type", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "public_key", [], "any", false, false, false, 38), "html", null, true);
                echo "\"";
                // line 39
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 39), "callback", [], "any", true, true, false, 39)) {
                    echo " data-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), "options", [], "any", false, false, false, 39), "callback", [], "any", false, false, false, 39), "html", null, true);
                    echo "\"";
                }
                // line 40
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 40), "expiredCallback", [], "any", true, true, false, 40)) {
                    echo " data-expired-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "options", [], "any", false, false, false, 40), "expiredCallback", [], "any", false, false, false, 40), "html", null, true);
                    echo "\"";
                }
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 41), "bind", [], "any", true, true, false, 41)) {
                    echo " data-bind=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), "options", [], "any", false, false, false, 41), "bind", [], "any", false, false, false, 41), "html", null, true);
                    echo "\"";
                }
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 42), "badge", [], "any", true, true, false, 42)) {
                    echo " data-badge=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })()), "options", [], "any", false, false, false, 42), "badge", [], "any", false, false, false, 42), "html", null, true);
                    echo "\"";
                }
                // line 43
                echo "></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "ewz_recaptcha_apihost", [], "any", false, false, false, 48), "html", null, true);
                echo "/recaptcha/api/fallback?k=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "public_key", [], "any", false, false, false, 48), "html", null, true);
                echo "\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        ";
            } else {
                // line 65
                echo "            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
            (function() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "public_key", [], "any", false, false, false, 72), "html", null, true);
                echo "', 'ewz_recaptcha_div', ";
                echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 72), [])) : ([])));
                echo ");
                };
                script.src = '";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "url_api", [], "any", false, false, false, 74), "html", null, true);
                echo "';
                ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 75), "defer", [], "any", true, true, false, 75) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 75, $this->source); })()), "options", [], "any", false, false, false, 75), "defer", [], "any", false, false, false, 75))) {
                    echo "script.defer = true;";
                }
                // line 76
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 76), "async", [], "any", true, true, false, 76) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 76, $this->source); })()), "options", [], "any", false, false, false, 76), "async", [], "any", false, false, false, 76))) {
                    echo "script.async = true;";
                }
                // line 77
                echo "                document.getElementsByTagName('head')[0].appendChild(script);
            })();
            </script>
        ";
            }
            // line 81
            echo "    ";
        }
        $___internal_0ad662d04fe72c2a156a73bc46c5593524db58a6827f20e0a5e20a40e183a214_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_0ad662d04fe72c2a156a73bc46c5593524db58a6827f20e0a5e20a40e183a214_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 2,  225 => 81,  219 => 77,  214 => 76,  210 => 75,  206 => 74,  199 => 72,  190 => 65,  168 => 48,  161 => 43,  155 => 42,  149 => 41,  143 => 40,  137 => 39,  128 => 38,  125 => 37,  121 => 36,  117 => 35,  114 => 34,  111 => 33,  84 => 8,  81 => 7,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  67 => 2,  57 => 1,  46 => 84,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ewz_recaptcha_widget %}
{% apply spaceless %}
    {% if form.vars.ewz_recaptcha_enabled %}
        {% if not form.vars.ewz_recaptcha_ajax %}
            {% if attr.options.size == 'invisible' and attr.options.callback is not defined %}
                {% set options = attr.options|merge({'callback': 'onReCaptchaSuccess'}) %}
                {% set attr = attr|merge({'options': options}) %}

                <script type=\"text/javascript\">
                    var onReCaptchaSuccess = function() {
                        var errorDivs = document.getElementsByClassName('recaptcha-error');
                        if (errorDivs.length) {
                            errorDivs[0].className = '';
                        }

                        var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
                        if (errorMsgs.length) {
                            errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
                        }

                        var forms = document.getElementsByClassName('recaptcha-form');
                        if (forms.length) {
                          var recaptchaSubmitEvent = document.createEvent('Event');
                          recaptchaSubmitEvent.initEvent('submit', true, true);
                          forms[0].addEventListener('submit', function (e) {
                            e.target.submit();
                          }, false);
                          forms[0].dispatchEvent(recaptchaSubmitEvent);
                        }
                    };
                </script>
            {% endif %}

            <script type=\"text/javascript\" src=\"{{ form.vars.url_challenge }}\"
                {%- if attr.options.defer is defined and attr.options.defer %} defer{% endif -%}
                {%- if attr.options.async is defined and attr.options.async %} async{% endif -%}
            ></script>
            <div class=\"g-recaptcha\" data-theme=\"{{ attr.options.theme }}\" data-size=\"{{ attr.options.size }}\" data-type=\"{{ attr.options.type }}\" data-sitekey=\"{{ form.vars.public_key }}\"
                 {%- if attr.options.callback is defined %} data-callback=\"{{ attr.options.callback }}\"{% endif -%}
                 {%- if attr.options.expiredCallback is defined %} data-expired-callback=\"{{ attr.options.expiredCallback }}\"{% endif -%}
                 {%- if attr.options.bind is defined %} data-bind=\"{{ attr.options.bind }}\"{% endif -%}
                 {%- if attr.options.badge is defined %} data-badge=\"{{ attr.options.badge }}\"{% endif -%}
            ></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://{{ form.vars.ewz_recaptcha_apihost }}/recaptcha/api/fallback?k={{ form.vars.public_key }}\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        {% else %}
            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
            (function() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('{{ form.vars.public_key }}', 'ewz_recaptcha_div', {{ attr.options|default({})|json_encode|raw }});
                };
                script.src = '{{ form.vars.url_api }}';
                {% if attr.options.defer is defined and attr.options.defer %}script.defer = true;{% endif %}
                {% if attr.options.async is defined and attr.options.async %}script.async = true;{% endif %}
                document.getElementsByTagName('head')[0].appendChild(script);
            })();
            </script>
        {% endif %}
    {% endif %}
{% endapply %}
{% endblock ewz_recaptcha_widget %}

", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig", "/Applications/MAMP/htdocs/Projects/QLDGovSportsSym/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.twig");
    }
}
