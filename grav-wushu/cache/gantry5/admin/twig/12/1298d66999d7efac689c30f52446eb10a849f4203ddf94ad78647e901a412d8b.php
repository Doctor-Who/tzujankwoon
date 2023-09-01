<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @gantry-admin/pages/about/about.html.twig */
class __TwigTemplate_7aee0b7075abff780ac3ea044431f312e5430fd12c0e43a9b780e070110fdfa7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/about/about.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"g-grid overview-header\">
        <div class=\"g-block\">
            <h2 class=\"theme-title\">
                ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "icon", [])) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "icon", []), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "title", []), "html", null, true);
        echo "
            </h2>
            <span class=\"theme-version\">v";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "version", []), "html", null, true);
        echo "</span>
            <div>By <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "author", []), "link", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "author", []), "name", []), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"g-block\">
            <span class=\"float-right\">
                <button class=\"button button-back-to-conf\"><i class=\"fa fa-fw fa-arrow-left\" aria-hidden=\"true\"></i> <span>Back to Setup</span></button>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "support", []), "link", []), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-support\" aria-hidden=\"true\"></i> <span>Support</span></a>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "documentation", []), "link", []), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> <span>Documentation</span></a>
            </span>
        </div>
    </div>

    <div class=\"g-grid overview-details\">
        <div class=\"g-block size-35\">
             <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["info"] ?? null), "thumbnail", [])), "html", null, true);
        echo "\" class=\"preview-image\" alt=\"\">
        </div>

        <div class=\"g-block\">
            <p>Helium is a beautiful, free theme made by the RocketTheme team in appreciation of the incredible Gantry community.</p>
            <ul class=\"overview-list\">
                <li><i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i>OwlCarousel</li>
                <li><i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i>Content Cubes</li>
                <li><i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i>Content Tabs</li>
            </ul>
        </div>
    </div>

    ";
        // line 36
        $this->loadTemplate("@gantry-admin/partials/gantry-details.html.twig", "@gantry-admin/pages/about/about.html.twig", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  85 => 23,  75 => 16,  71 => 15,  61 => 10,  57 => 9,  46 => 7,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/about/about.html.twig", "/home/badwolf/Website/tzujankwoon/grav-wushu/user/themes/g5_helium/admin/templates/pages/about/about.html.twig");
    }
}
