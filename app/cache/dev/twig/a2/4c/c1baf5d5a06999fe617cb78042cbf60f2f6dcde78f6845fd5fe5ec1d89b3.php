<?php

/* PlayListBundle:PlayList:delete.html.php */
class __TwigTemplate_a24cc1baf5d5a06999fe617cb78042cbf60f2f6dcde78f6845fd5fe5ec1d89b3 extends Twig_Template
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

<?php \$view['slots']->set('title', 'PlayListBundle:PlayList:delete') ?>

<?php \$view['slots']->start('body') ?>
    <h1>Welcome to the PlayList:delete page</h1>
<?php echo \"Hello \".\$id;?>
<?php \$view['slots']->stop() ?>
";
    }

    public function getTemplateName()
    {
        return "PlayListBundle:PlayList:delete.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
