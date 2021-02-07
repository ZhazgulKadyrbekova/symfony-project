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

/* truck_zhazgul/menu.html.twig */
class __TwigTemplate_f50f765d3aed84cf25afee00619c90b4268d313e8eec2fb86ec3e676898cb1c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "truck_zhazgul/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "truck_zhazgul/menu.html.twig"));

        // line 1
        echo " <div class=\"d-flex flex-column\">
<div class=\"profile\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ZhazgulKadyrbekova/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle\">
    <h2 class=\"text-light\" align=center><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zhazgul_kadyrbekova");
        echo "\">Zhazgul Kadyrbekova</a></h2>
</div>
    <ul>
        <li class=\"active\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("zhazgul_kadyrbekova");
        echo "\"><i class=\"bx bx-home\"></i> <span>Student info</span></a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("truck_zhazgul_index");
        echo "\"><i class=\"bx bx-user\"></i> <span>Data base operations</span></a></li>
        <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_form");
        echo "\"><i class=\"bx bx-user\"></i> <span>Search</span></a></li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "truck_zhazgul/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  61 => 8,  57 => 7,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"d-flex flex-column\">
<div class=\"profile\">
    <img src=\"{{ asset(\"ZhazgulKadyrbekova/img/profile-img.jpg\") }}\" alt=\"\" class=\"img-fluid rounded-circle\">
    <h2 class=\"text-light\" align=center><a href=\"{{ path(\"zhazgul_kadyrbekova\") }}\">Zhazgul Kadyrbekova</a></h2>
</div>
    <ul>
        <li class=\"active\"><a href=\"{{ path(\"zhazgul_kadyrbekova\") }}\"><i class=\"bx bx-home\"></i> <span>Student info</span></a></li>
        <li><a href=\"{{ path(\"truck_zhazgul_index\") }}\"><i class=\"bx bx-user\"></i> <span>Data base operations</span></a></li>
        <li><a href=\"{{ path(\"search_form\") }}\"><i class=\"bx bx-user\"></i> <span>Search</span></a></li>
    </ul>
</div>", "truck_zhazgul/menu.html.twig", "/home/zhazgul/Desktop/hw/bil371/bil-371-final/templates/truck_zhazgul/menu.html.twig");
    }
}
