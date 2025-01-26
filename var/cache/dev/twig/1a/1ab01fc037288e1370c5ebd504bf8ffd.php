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

/* mission/index.html.twig */
class __TwigTemplate_037259b7bdb1852f1f8df57175884c20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mission/index.html.twig", 1);
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

        yield "Mission index";
        
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
        yield "    <h1>Mission index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Due_date</th>
                <th>Status</th>
                <th>Assigned to</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "dueDate", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "dueDate", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>
                    <ul>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "employees", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 29
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "firstName", [], "any", false, false, false, 29), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "lastName", [], "any", false, false, false, 29), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['employee'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                    </ul>
                </td>
                <td>
                    <form action=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" method=\"post\">
                    ";
            // line 35
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 35) != "done"))) {
                // line 36
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "status", [], "any", false, false, false, 36) == "ongoing") && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "employees", [], "any", false, false, false, 36)))) {
                    // line 37
                    yield "                        <button name=\"action\" style=\"background-color:lightgreen\" value=\"btTerminer\">Terminer</button>
                        ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 38
$context["mission"], "status", [], "any", false, false, false, 38) == "ongoing") && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "employees", [], "any", false, false, false, 38)))) {
                    // line 39
                    yield "                        <button name=\"action\" style=\"background-color:orange\" value=\"btRejoindre\">Rejoindre</button>
                        ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["mission"], "status", [], "any", false, false, false, 40) == "not taken") && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "employees", [], "any", false, false, false, 40)))) {
                    // line 41
                    yield "                        <button name=\"action\" style=\"background-color:lightblue\" value=\"btAccepter\">Accepter</button>
                        ";
                }
                // line 43
                yield "                    ";
            }
            // line 44
            yield "                    </form>
                </td>
                <td>
                    <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mission'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mission_new");
        yield "\">Create new</a>
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
        return "mission/index.html.twig";
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
        return array (  220 => 59,  215 => 56,  206 => 52,  197 => 48,  193 => 47,  188 => 44,  185 => 43,  181 => 41,  179 => 40,  176 => 39,  174 => 38,  171 => 37,  168 => 36,  166 => 35,  162 => 34,  157 => 31,  146 => 29,  142 => 28,  136 => 25,  132 => 24,  128 => 23,  124 => 22,  121 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mission index{% endblock %}

{% block body %}
    <h1>Mission index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Due_date</th>
                <th>Status</th>
                <th>Assigned to</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for mission in missions %}
            <tr>
                <td>{{ mission.id }}</td>
                <td>{{ mission.description }}</td>
                <td>{{ mission.dueDate ? mission.dueDate|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ mission.status }}</td>
                <td>
                    <ul>
                    {% for employee in mission.employees %}
                        <li>{{ employee.firstName }} {{ employee.lastName }}</li>
                    {% endfor %}
                    </ul>
                </td>
                <td>
                    <form action=\"{{ path('app_mission_update', {'id': mission.id}) }}\" method=\"post\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') and mission.status!='done' %}
                        {% if mission.status=='ongoing' and app.user in mission.employees %}
                        <button name=\"action\" style=\"background-color:lightgreen\" value=\"btTerminer\">Terminer</button>
                        {% elseif mission.status=='ongoing' and app.user not in mission.employees  %}
                        <button name=\"action\" style=\"background-color:orange\" value=\"btRejoindre\">Rejoindre</button>
                        {% elseif mission.status=='not taken' and app.user not in mission.employees  %}
                        <button name=\"action\" style=\"background-color:lightblue\" value=\"btAccepter\">Accepter</button>
                        {% endif %}
                    {% endif %}
                    </form>
                </td>
                <td>
                    <a href=\"{{ path('app_mission_show', {'id': mission.id}) }}\">show</a>
                    <a href=\"{{ path('app_mission_edit', {'id': mission.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_mission_new') }}\">Create new</a>
{% endblock %}
", "mission/index.html.twig", "C:\\Users\\cappe\\Downloads\\employeesSymfony7\\templates\\mission\\index.html.twig");
    }
}
