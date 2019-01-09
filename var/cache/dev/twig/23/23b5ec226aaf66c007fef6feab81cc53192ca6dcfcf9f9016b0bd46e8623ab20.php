<?php

/* partidas/listar-por-time.html.twig */
class __TwigTemplate_9b492ccf5859eb72b21062e3cb1baa7605e705de3766aef3cf524fcd6f3f990c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partidas/listar-por-time.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidas/listar-por-time.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partidas/listar-por-time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "\tListando partidas de Time
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<h1 class=\"display-3\">Partidas de \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 8, $this->source); })()), "nome", array()), "html", null, true);
        echo "\"</h1>
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Campeonato</th>
\t\t\t\t<th>Adversário</th>
\t\t\t\t<th>Placar</th>
\t\t\t\t<th>Local</th>
\t\t\t\t<th>Data</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidas"]) || array_key_exists("partidas", $context) ? $context["partidas"] : (function () { throw new Twig_Error_Runtime('Variable "partidas" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partida"]) {
            // line 21
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partida"], "campeonato", array()), "nome", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 24, $this->source); })()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partida"], "timeCasa", array()), "id", array()))) {
                // line 25
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partida"], "timeVisitante", array()), "nome", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 27
                echo "                \t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partida"], "timeCasa", array()), "nome", array()), "html", null, true);
                echo "
                ";
            }
            // line 29
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 31, $this->source); })()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partida"], "timeCasa", array()), "id", array()))) {
                // line 32
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partida"], "placarCasa", array()), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partida"], "placarVisitante", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 34
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partida"], "placarVisitante", array()), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partida"], "placarCasa", array()), "html", null, true);
                echo "
                ";
            }
            // line 36
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 38, $this->source); })()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partida"], "timeCasa", array()), "id", array()))) {
                // line 39
                echo "                    Time da Casa
                ";
            } else {
                // line 41
                echo "                    Time visitante
                ";
            }
            // line 43
            echo "\t\t\t\t</td>
\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partida"], "dataPartida", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</tbody>
\t</table>
\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partidas/listar-por-time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 47,  156 => 44,  153 => 43,  149 => 41,  145 => 39,  143 => 38,  139 => 36,  131 => 34,  123 => 32,  121 => 31,  117 => 29,  111 => 27,  105 => 25,  103 => 24,  98 => 22,  95 => 21,  91 => 20,  76 => 8,  73 => 7,  64 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}\tListando partidas de Time
{% endblock %}

{% block body %}

\t<h1 class=\"display-3\">Partidas de \"{{ time.nome }}\"</h1>
\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Campeonato</th>
\t\t\t\t<th>Adversário</th>
\t\t\t\t<th>Placar</th>
\t\t\t\t<th>Local</th>
\t\t\t\t<th>Data</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t{% for partida in partidas %}
\t\t\t<tr>
\t\t\t\t<td>{{ partida.campeonato.nome }}</td>
\t\t\t\t<td>
\t\t\t\t{% if time.id == partida.timeCasa.id %}
                    {{ partida.timeVisitante.nome }}
                {% else %}
                \t{{ partida.timeCasa.nome }}
                {% endif %}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t{% if time.id == partida.timeCasa.id %}
                    {{ partida.placarCasa }} x {{ partida.placarVisitante }}
                {% else %}
                    {{ partida.placarVisitante }} x {{ partida.placarCasa }}
                {% endif %}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t{% if time.id == partida.timeCasa.id %}
                    Time da Casa
                {% else %}
                    Time visitante
                {% endif %}
\t\t\t\t</td>
\t\t\t\t<td>{{ partida.dataPartida|date(\"d/m/Y H:i\") }}</td>\t\t\t\t
\t\t\t</tr>
\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t

{% endblock %}
", "partidas/listar-por-time.html.twig", "/var/www/templates/partidas/listar-por-time.html.twig");
    }
}
