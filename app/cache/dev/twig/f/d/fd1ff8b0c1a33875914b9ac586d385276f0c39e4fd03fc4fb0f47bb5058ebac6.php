<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fe3e72c9439108dac0bc449794cd11055d7e0b56616705cd589c6c3715ce5b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8066b942f392896bf0f981f780c79952d2aa158bc65396fcfd66340888b27dc = $this->env->getExtension("native_profiler");
        $__internal_f8066b942f392896bf0f981f780c79952d2aa158bc65396fcfd66340888b27dc->enter($__internal_f8066b942f392896bf0f981f780c79952d2aa158bc65396fcfd66340888b27dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8066b942f392896bf0f981f780c79952d2aa158bc65396fcfd66340888b27dc->leave($__internal_f8066b942f392896bf0f981f780c79952d2aa158bc65396fcfd66340888b27dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbc4f85e265186969e53f3136295d56dc503eb54c0492abdf7a7312b0102dee2 = $this->env->getExtension("native_profiler");
        $__internal_fbc4f85e265186969e53f3136295d56dc503eb54c0492abdf7a7312b0102dee2->enter($__internal_fbc4f85e265186969e53f3136295d56dc503eb54c0492abdf7a7312b0102dee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbc4f85e265186969e53f3136295d56dc503eb54c0492abdf7a7312b0102dee2->leave($__internal_fbc4f85e265186969e53f3136295d56dc503eb54c0492abdf7a7312b0102dee2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd5b4443097ecb675a9fe2c1f50f23eeccc30043f3d050ac59396fd204d8769b = $this->env->getExtension("native_profiler");
        $__internal_fd5b4443097ecb675a9fe2c1f50f23eeccc30043f3d050ac59396fd204d8769b->enter($__internal_fd5b4443097ecb675a9fe2c1f50f23eeccc30043f3d050ac59396fd204d8769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd5b4443097ecb675a9fe2c1f50f23eeccc30043f3d050ac59396fd204d8769b->leave($__internal_fd5b4443097ecb675a9fe2c1f50f23eeccc30043f3d050ac59396fd204d8769b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf5df99573c9756545eb67dd79c55bca72a0609ee909534650be24324f00c7b3 = $this->env->getExtension("native_profiler");
        $__internal_bf5df99573c9756545eb67dd79c55bca72a0609ee909534650be24324f00c7b3->enter($__internal_bf5df99573c9756545eb67dd79c55bca72a0609ee909534650be24324f00c7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bf5df99573c9756545eb67dd79c55bca72a0609ee909534650be24324f00c7b3->leave($__internal_bf5df99573c9756545eb67dd79c55bca72a0609ee909534650be24324f00c7b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
