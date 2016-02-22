<?php

/* index.html.twig */
class __TwigTemplate_422f77a7458bc499a0ef5cec484585d9ad007ce67d501ffe3ae876b4d67e382e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h1>LastWishes</h1>
            <p class=\"lead\">
                If something happen to you, your feelings won't be lost.
            </p>
        </div>
    </div>

    <div class=\"row\" style=\"margin-bottom: 20px;\">
        <div class=\"col-md-8\">
            <div class=\"tile\">
                <img src=\"/components/flat-ui/images/icons/svg/pencils.svg\" alt=\"Sign up\" class=\"tile-image big-illustration\">
                <h3 class=\"tile-title\">1. Sign In</h3>
                <p>So you would start to make wishes in case something happen to you.</p>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"tile\">
                <img src=\"/components/flat-ui/images/icons/svg/gift-box.svg\" alt=\"Make a wish\" class=\"tile-image big-illustration\">
                <h3 class=\"tile-title\">2. Make a wish</h3>
                <p>Add a message you want to sent in case something happen.</p>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"tile\">
                <img src=\"/components/flat-ui/images/icons/svg/loop.svg\" alt=\"You're Ok!\" class=\"tile-image big-illustration\">
                <h3 class=\"tile-title\">3. Keep in touch</h3>
                <p>Answer our emails or use our App to say you're ok.</p>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"tile\">
                <img src=\"/components/flat-ui/images/icons/svg/retina.svg\" alt=\"Grant your wishes\" class=\"tile-image big-illustration\">
                <h3 class=\"tile-title\">4. Grant wishes</h3>
                <p>In case you're out, we'll deliver your messages and wishes.</p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <h1>LastWishes</h1>*/
/*             <p class="lead">*/
/*                 If something happen to you, your feelings won't be lost.*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row" style="margin-bottom: 20px;">*/
/*         <div class="col-md-8">*/
/*             <div class="tile">*/
/*                 <img src="/components/flat-ui/images/icons/svg/pencils.svg" alt="Sign up" class="tile-image big-illustration">*/
/*                 <h3 class="tile-title">1. Sign In</h3>*/
/*                 <p>So you would start to make wishes in case something happen to you.</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="tile">*/
/*                 <img src="/components/flat-ui/images/icons/svg/gift-box.svg" alt="Make a wish" class="tile-image big-illustration">*/
/*                 <h3 class="tile-title">2. Make a wish</h3>*/
/*                 <p>Add a message you want to sent in case something happen.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <div class="tile">*/
/*                 <img src="/components/flat-ui/images/icons/svg/loop.svg" alt="You're Ok!" class="tile-image big-illustration">*/
/*                 <h3 class="tile-title">3. Keep in touch</h3>*/
/*                 <p>Answer our emails or use our App to say you're ok.</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="tile">*/
/*                 <img src="/components/flat-ui/images/icons/svg/retina.svg" alt="Grant your wishes" class="tile-image big-illustration">*/
/*                 <h3 class="tile-title">4. Grant wishes</h3>*/
/*                 <p>In case you're out, we'll deliver your messages and wishes.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
