<?php

/* default/template/common/search.twig */
class __TwigTemplate_6eeb952e35a2cb6e295062c2200c3904d61699a4be60025ef2ea8472ec0c2924 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group input__header-bottom\">

  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg header-search-btn\"></button>
  </span>
  
  
  <button class=\"button-close\" onclick=\"document.getElementById('myInput').value = ''\"></button>
  
  <input type=\"text\" name=\"search\" value=\"";
        // line 10
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg header__bottom-search\" id=\"myInput\"/>
  

</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
/* <div id="search" class="input-group input__header-bottom">*/
/* */
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-lg header-search-btn"></button>*/
/*   </span>*/
/*   */
/*   */
/*   <button class="button-close" onclick="document.getElementById('myInput').value = ''"></button>*/
/*   */
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg header__bottom-search" id="myInput"/>*/
/*   */
/* */
/* </div>*/
