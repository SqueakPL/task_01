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

/* @JMSSerializer/Collector/script/jms.js.twig */
class __TwigTemplate_c1d5e62d89fcaa466bb2b4bef1eb50830787bf980307ae17052361c23a2e66fe extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/script/jms.js.twig"));

        // line 1
        echo "/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('jms-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('jms-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('jms-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.jms-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.jms-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JMSSerializer/Collector/script/jms.js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('jms-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('jms-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('jms-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.jms-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.jms-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
", "@JMSSerializer/Collector/script/jms.js.twig", "C:\\Projekty\\Symfony\\task_01\\vendor\\jms\\serializer-bundle\\Resources\\views\\Collector\\script\\jms.js.twig");
    }
}
