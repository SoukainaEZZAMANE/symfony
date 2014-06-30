<?php

/* PlayListBundle:PlayList:add.html.php */
class __TwigTemplate_4550e02b46bc1c030da596febbc62152665608ef01f54cced0acb009b032c913 extends Twig_Template
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

<?php \$view['slots']->set('title', 'PlayListBundle:PlayList:add') ?>

<?php \$view['slots']->start('body') ?>
    <h1>Welcome to the PlayList:add page</h1>
<?php \$view['slots']->stop() ?>
";
    }

    public function getTemplateName()
    {
        return "PlayListBundle:PlayList:add.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
