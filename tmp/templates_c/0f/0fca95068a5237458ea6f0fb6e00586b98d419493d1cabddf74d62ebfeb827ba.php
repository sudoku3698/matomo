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

/* @SitesManager/siteWithoutData.twig */
class __TwigTemplate_4c64412f331cb8ccb502d859a05bdb1111c0d8dea2d646f221a06184b7ab7884 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'notification' => [$this, 'block_notification'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("dashboard.twig", "@SitesManager/siteWithoutData.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SitesManager/siteWithoutData.twig", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function () {
            \$('<div />').insertAfter('.site-without-data').liveWidget({
                interval: 1000,
                onUpdate: function () {
                    // reload page as soon as a visit was detected
                    broadcast.propagateNewPage('date=today');
                },
                dataUrlParams: {
                    module: 'Live',
                    action: 'getLastVisitsStart'
                }
            });
        });
    </script>

    <div class=\"site-without-data\">
        <div piwik-content-block content-title=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataTitle"), "html_attr");
        echo " 🚀\">

            <p>&nbsp;</p>
            <p>";
        // line 31
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDescription", (((("<a href=\"mailto:?subject=" . \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter($this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSubject")), "html_attr")) . "&body=") . \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 31, $this->source); })())), "html_attr")) . "\">"), "</a>");
        echo "</p>
            <p>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMessageDisappears"), "html", null, true);
        echo "</p>

            <h3>";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataChoosePreferredWay"), "html", null, true);
        echo "</h3>

            <div piwik-widget-loader='{\"module\":\"SitesManager\",\"action\":\"siteWithoutDataTabs\"}' loading-message=\"";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_DetectingYourSite"), "html_attr");
        echo "...\"></div>

            <hr>

            <a class=\"btn\" id=\"emailTrackingCodeBtn\"
                href=\"mailto:?subject=";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter($this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSubject")), "html_attr");
        echo "&body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 41, $this->source); })())), "html_attr");
        echo "\"
            >";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsButton"), "html", null, true);
        echo "</a>

            ";
        // line 44
        echo $this->env->getFunction('postEvent')->getCallable()("Template.siteWithoutData.afterIntro");
        echo "
            <br />
            <br />
            <a href=\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "SitesManager", "action" => "ignoreNoDataMessage"]), "html", null, true);
        echo "\"
               class=\"btn ignoreSitesWithoutData\"
            >
                ";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataIgnoreMessage"), "html", null, true);
        echo "
            </a>
        </div>

        ";
        // line 54
        echo $this->env->getFunction('postEvent')->getCallable()("Template.siteWithoutData.afterTrackingHelp");
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/siteWithoutData.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  138 => 50,  132 => 47,  126 => 44,  121 => 42,  115 => 41,  107 => 36,  102 => 34,  97 => 32,  93 => 31,  87 => 28,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}

{% block notification %}{% endblock %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
{% endblock %}

{% block content %}

    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function () {
            \$('<div />').insertAfter('.site-without-data').liveWidget({
                interval: 1000,
                onUpdate: function () {
                    // reload page as soon as a visit was detected
                    broadcast.propagateNewPage('date=today');
                },
                dataUrlParams: {
                    module: 'Live',
                    action: 'getLastVisitsStart'
                }
            });
        });
    </script>

    <div class=\"site-without-data\">
        <div piwik-content-block content-title=\"{{ 'SitesManager_SiteWithoutDataTitle'|translate|e('html_attr') }} 🚀\">

            <p>&nbsp;</p>
            <p>{{ 'SitesManager_SiteWithoutDataDescription'|translate('<a href=\"mailto:?subject=' ~ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') ~ '&body=' ~ emailBody|url_encode|e('html_attr') ~ '\">', '</a>')|raw }}</p>
            <p>{{ 'SitesManager_SiteWithoutDataMessageDisappears'|translate }}</p>

            <h3>{{ 'SitesManager_SiteWithoutDataChoosePreferredWay'|translate }}</h3>

            <div piwik-widget-loader='{\"module\":\"SitesManager\",\"action\":\"siteWithoutDataTabs\"}' loading-message=\"{{ 'SitesManager_DetectingYourSite'|translate|e('html_attr') }}...\"></div>

            <hr>

            <a class=\"btn\" id=\"emailTrackingCodeBtn\"
                href=\"mailto:?subject={{ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') }}&body={{ emailBody|url_encode|e('html_attr') }}\"
            >{{ 'SitesManager_EmailInstructionsButton'|translate }}</a>

            {{ postEvent('Template.siteWithoutData.afterIntro') }}
            <br />
            <br />
            <a href=\"{{ linkTo({module: 'SitesManager', action: 'ignoreNoDataMessage'}) }}\"
               class=\"btn ignoreSitesWithoutData\"
            >
                {{ 'SitesManager_SiteWithoutDataIgnoreMessage'|translate }}
            </a>
        </div>

        {{ postEvent('Template.siteWithoutData.afterTrackingHelp') }}
    </div>

{% endblock %}
", "@SitesManager/siteWithoutData.twig", "D:\\xampp7.3\\htdocs\\matomo\\plugins\\SitesManager\\templates\\siteWithoutData.twig");
    }
}
