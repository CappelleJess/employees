<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* employee/show.html.twig */
class __TwigTemplate_9968d1d8cfad96a2d62ee73e3df678db extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Employee";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Profil</h1>

    <section style=\"width:80%\">
    ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            yield "        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 10, $this->source); })()), "group", [], "any", false, false, false, 10))) {
                // line 11
                yield "        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_join", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
                yield "\" method=\"post\" style=\"float:right\">
            <select name=\"groupId\">
            ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableGroups"]) || array_key_exists("availableGroups", $context) ? $context["availableGroups"] : (function () { throw new RuntimeError('Variable "availableGroups" does not exist.', 13, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 14
                    yield "                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["group"], 0, [], "any", false, false, false, 14), "code", [], "any", false, false, false, 14), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["group"], 0, [], "any", false, false, false, 14), "code", [], "any", false, false, false, 14), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["group"], 0, [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
                    yield "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                yield "            </select>
            <button style=\"background-color:lightgreen; border:2px solid green;\">Rejoindre</button>
        </form>
        ";
            } else {
                // line 20
                yield "        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_leave", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" method=\"post\" style=\"float:right\">
            <button style=\"background-color:silver; border:2px solid gray;\">Quitter</button>
        </form>
        ";
            }
            // line 24
            yield "    ";
        }
        // line 25
        yield "
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Groupe:</th>
                    <td>";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 30, $this->source); })()), "group", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 30, $this->source); })()), "group", [], "any", false, false, false, 30), "code", [], "any", false, false, false, 30), "html", null, true)) : ("<em>Sans groupe</em>"));
        yield "</td>
                </tr>
                <tr>
                    <th>N°:</th>
                    <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td colspan=\"2\"><strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 37, $this->source); })()), "firstName", [], "any", false, false, false, 37), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), "html", null, true);
        yield "</strong></td>
                </tr>
                <tr>
                    <th>Sexe:</th>
                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 41, $this->source); })()), "gender", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
                </tr>                
                <tr>
                    <th>Hire date</th>
                    <td>";
        // line 49
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 49, $this->source); })()), "hireDate", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 49, $this->source); })()), "hireDate", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <th>Birthday:</th>
                    <td>";
        // line 53
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 53, $this->source); })()), "birthDate", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 53, $this->source); })()), "birthDate", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true)) : (""));
        yield "</td>
                </tr> 
                <tr>
                    <th>Projets:<br> <em>en tant que participant</em></th>
                    <td>
                        <ul>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 59, $this->source); })()), "projects", [], "any", false, false, false, 59));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 60
            yield "                            <li><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 60), "html", null, true);
            yield "</strong> - Chef de projet : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "leader", [], "any", false, false, false, 60), "html", null, true);
            yield "
                            
                            ";
            // line 63
            yield "                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63) == CoreExtension::getAttribute($this->env, $this->source, $context["project"], "leader", [], "any", false, false, false, 63)))) {
                // line 64
                yield "                                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_project_leave", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\" method=\"post\">
                                    <button name=\"projectId\" value=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 65), "html", null, true);
                yield "\">Se retirer</button>
                                </form>
                            ";
            }
            // line 68
            yield "
                            ";
            // line 70
            yield "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 71
                yield "                                ";
                // line 72
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72) != CoreExtension::getAttribute($this->env, $this->source, $context["project"], "leader", [], "any", false, false, false, 72)))) {
                    // line 73
                    yield "                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_project_leader", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
                    yield "\" method=\"post\">
                                    <button name=\"projectId\" value=\"";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 74), "html", null, true);
                    yield "\">Nommer chef de projet</button>
                                </form>
                                ";
                }
                // line 77
                yield "                            ";
            }
            // line 78
            yield "                            </li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "                            <li><em>Aucun projet.</em></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Mes projets:<br> <em>en tant que leader</em></th>
                    <td>
                        <ul>
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 89, $this->source); })()), "myProjects", [], "any", false, false, false, 89));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 90
            yield "                            <li><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 90), "html", null, true);
            yield "</strong> - Chef de projet : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "leader", [], "any", false, false, false, 90), "html", null, true);
            yield "</li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            yield "                            <li><em>Aucun projet.</em></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 105
        yield Twig\Extension\CoreExtension::include($this->env, $context, "employee/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  324 => 105,  319 => 103,  314 => 101,  305 => 94,  298 => 92,  288 => 90,  283 => 89,  274 => 82,  267 => 80,  261 => 78,  258 => 77,  252 => 74,  247 => 73,  244 => 72,  242 => 71,  239 => 70,  236 => 68,  230 => 65,  225 => 64,  222 => 63,  214 => 60,  209 => 59,  200 => 53,  193 => 49,  186 => 45,  179 => 41,  170 => 37,  164 => 34,  157 => 30,  150 => 25,  147 => 24,  139 => 20,  133 => 16,  120 => 14,  116 => 13,  110 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Employee{% endblock %}

{% block body %}
    <h1>Profil</h1>

    <section style=\"width:80%\">
    {% if app.user %}
        {% if employee.group is null %}
        <form action=\"{{ path('app_employee_join', {'id': employee.id }) }}\" method=\"post\" style=\"float:right\">
            <select name=\"groupId\">
            {% for group in availableGroups %}
                <option value=\"{{ group.0.code }}\">{{ group.0.code }} - {{ group.0.name }}</option>
            {% endfor %}
            </select>
            <button style=\"background-color:lightgreen; border:2px solid green;\">Rejoindre</button>
        </form>
        {% else %}
        <form action=\"{{ path('app_employee_leave', {'id': employee.id }) }}\" method=\"post\" style=\"float:right\">
            <button style=\"background-color:silver; border:2px solid gray;\">Quitter</button>
        </form>
        {% endif %}
    {% endif %}

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Groupe:</th>
                    <td>{{ employee.group ? employee.group.code : '<em>Sans groupe</em>' }}</td>
                </tr>
                <tr>
                    <th>N°:</th>
                    <td>{{ employee.id }}</td>
                </tr>
                <tr>
                    <td colspan=\"2\"><strong>{{ employee.firstName }} {{ employee.lastName }}</strong></td>
                </tr>
                <tr>
                    <th>Sexe:</th>
                    <td>{{ employee.gender.value }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ employee.email }}</td>
                </tr>                
                <tr>
                    <th>Hire date</th>
                    <td>{{ employee.hireDate ? employee.hireDate|date('d/m/Y') : '' }}</td>
                </tr>
                <tr>
                    <th>Birthday:</th>
                    <td>{{ employee.birthDate ? employee.birthDate|date('d/m/Y') : '' }}</td>
                </tr> 
                <tr>
                    <th>Projets:<br> <em>en tant que participant</em></th>
                    <td>
                        <ul>
                        {% for project in employee.projects %}
                            <li><strong>{{ project.name }}</strong> - Chef de projet : {{ project.leader }}
                            
                            {# Seul l'administrateur ou le chef de projet peut se retirer d'un projet #}
                            {% if is_granted('ROLE_ADMIN') or app.user == project.leader %}
                                <form action=\"{{ path('app_employee_project_leave', {'id': employee.id}) }}\" method=\"post\">
                                    <button name=\"projectId\" value=\"{{ project.id }}\">Se retirer</button>
                                </form>
                            {% endif %}

                            {# Seul l'administrateur peut nommer un chef de projet #}
                            {% if is_granted('ROLE_ADMIN') %}
                                {# On affiche le bouton seulement si on n'est pas déjà chef de ce projet #}
                                {% if app.user and app.user != project.leader %}
                                <form action=\"{{ path('app_employee_project_leader', {'id': employee.id}) }}\" method=\"post\">
                                    <button name=\"projectId\" value=\"{{ project.id }}\">Nommer chef de projet</button>
                                </form>
                                {% endif %}
                            {% endif %}
                            </li>
                        {% else %}
                            <li><em>Aucun projet.</em></li>
                        {% endfor %}
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Mes projets:<br> <em>en tant que leader</em></th>
                    <td>
                        <ul>
                        {% for project in employee.myProjects %}
                            <li><strong>{{ project.name }}</strong> - Chef de projet : {{ project.leader }}</li>
                        {% else %}
                            <li><em>Aucun projet.</em></li>
                        {% endfor %}
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <a href=\"{{ path('app_employee_index') }}\">back to list</a>

    <a href=\"{{ path('app_employee_edit', {'id': employee.id}) }}\">edit</a>

    {{ include('employee/_delete_form.html.twig') }}
{% endblock %}
", "employee/show.html.twig", "C:\\Users\\cappe\\Downloads\\employeesSymfony7\\templates\\employee\\show.html.twig");
    }
}
