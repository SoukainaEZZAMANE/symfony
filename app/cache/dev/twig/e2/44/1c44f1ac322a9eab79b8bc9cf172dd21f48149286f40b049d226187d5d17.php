<?php

/* PlayListBundle:PlayList:edit.html.php */
class __TwigTemplate_e2441c44f1ac322a9eab79b8bc9cf172dd21f48149286f40b049d226187d5d17 extends Twig_Template
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

<?php \$view['slots']->set('title', 'PlayListBundle:PlayList:edit') ?>

<?php \$view['slots']->start('body') ?>
    <h1>Welcome to the PlayList:edit page id =<?= \$id; ?></h1>
<?php \$view['slots']->stop() ?>
";
    }

    public function getTemplateName()
    {
        return "PlayListBundle:PlayList:edit.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
