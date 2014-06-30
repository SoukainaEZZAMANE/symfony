<?php

/* PlayListBundle:PlayList:index.html.php */
class __TwigTemplate_f7a7df7c4080b970fa46a13f81d2e26e8868b18c58bda9e692fecff1e19e4eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php \$view->extend('::base.html.twig') ?>

<?php \$view['slots']->set('title', 'PlayListBundle:PlayList:index') ?>

<?php \$view['slots']->start('body') ?>
    <h1>Welcome to the PlayList:index page </h1>

<?php \$view['slots']->stop() ?>
";
    }

    public function getTemplateName()
    {
        return "PlayListBundle:PlayList:index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
