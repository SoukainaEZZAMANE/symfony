<?php

/* AlbumBundle:Album:index.html.twig */
class __TwigTemplate_7b1c5b49bdfa88c3babfe1654fe8d760d5bd94169539ea3144e264a034c749f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AlbumBundle:Album:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>My playlist</h2>

    <table class=\"table\">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Artiste</th>
            <th>Actions</th>
        </tr>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums")));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "titre"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artiste"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("album_index"), "html", null, true);
            echo "\">Edit</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/"), "html", null, true);
            echo "\">Delete</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "AlbumBundle:Album:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  49 => 15,  38 => 6,  35 => 5,  29 => 3,);
    }
}
