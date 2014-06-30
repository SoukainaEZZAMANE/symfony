<?php

/* ::base.html.twig */
class __TwigTemplate_41ded33ec51ca4037a8353b748edd1032c8b802c63634ae7b680a5f42b2973a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('navigation', $context, $blocks);
        // line 56
        echo "
        <div class=\"container\">
            ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
            <hr>
            <footer>
                <p>&copy; MIT 2014</p>
            </footer>
        </div>

        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/angular.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 18
    public function block_navigation($context, array $blocks = array())
    {
        // line 19
        echo "            <div class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"navbar-inner\">
                    <div class=\"container\">
                        <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"brand\" href=\"#\">Symfony Demo</a>
                        <div class=\"nav-collapse collapse\">
                            <ul class=\"nav\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li><a href=\"#about\">About</a></li>
                                <li><a href=\"#contact\">Contact</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Action</a></li>
                                        <li><a href=\"#\">Another action</a></li>
                                        <li><a href=\"#\">Something else here</a></li>
                                        <li class=\"divider\"></li>
                                        <li class=\"nav-header\">Nav header</li>
                                        <li><a href=\"#\">Separated link</a></li>
                                        <li><a href=\"#\">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class=\"navbar-form pull-right\">
                                <input class=\"span2\" type=\"text\" placeholder=\"Email\">
                                <input class=\"span2\" type=\"password\" placeholder=\"Password\">
                                <button type=\"submit\" class=\"btn\">Sign in</button>
                            </form>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  149 => 58,  109 => 19,  106 => 18,  101 => 6,  95 => 5,  89 => 70,  87 => 69,  83 => 68,  79 => 67,  75 => 66,  66 => 59,  64 => 58,  60 => 56,  58 => 18,  52 => 15,  48 => 14,  44 => 13,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
