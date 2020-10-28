<?php

/* default/template/common/menu.twig */
class __TwigTemplate_aeccbc62d8e0f60b63a1dd63b944a049f887bd1b5c7d91a892a53665059ac50a extends Twig_Template
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
        echo "<section class=\"category\">
    <div class=\"container__page-grey\">
        <div class=\"container\">
            ";
        // line 4
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 5
            echo "            <nav id=\"menu\" class=\"navbar\">
                <!-- <div class=\"container\"> -->
                <h4 class=\"category__title\">Категории</h4>
                <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs navbar-header-span\">";
            // line 8
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
                    <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                </div>
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav list__category\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 14
                    echo "                        <li class=\"dropdown list__item\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle list__item-link\" data-toggle=\"dropdown\"><h4 class=\"list__item-link-title\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</h4></a>
                            <div class=\"dropdown-menu\">
                                <div class=\"dropdown-inner\"> ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 17
                        echo "                                    <ul class=\"list-unstyled\">
                                        ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
                            echo "                                        <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 21
                        echo "                                    </ul>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "</div>
                                <a href=\"";
                    // line 23
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " <h4 class=\"list__item-link-title\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</h4></a> </div>
                        </li>
                        ";
                } else {
                    // line 26
                    echo "                        <li class=\"list__item\"><a class=\"list__item-link\" href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo " \"><h4 class=\"list__item-link-title\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</h4></a></li>
                        ";
                }
                // line 27
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </ul>
                </div>
                <!-- </div> -->
            </nav>

            ";
        }
        // line 34
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  109 => 28,  103 => 27,  95 => 26,  85 => 23,  82 => 22,  75 => 21,  64 => 19,  60 => 18,  57 => 17,  53 => 16,  45 => 14,  39 => 13,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <section class="category">*/
/*     <div class="container__page-grey">*/
/*         <div class="container">*/
/*             {% if categories %}*/
/*             <nav id="menu" class="navbar">*/
/*                 <!-- <div class="container"> -->*/
/*                 <h4 class="category__title">Категории</h4>*/
/*                 <div class="navbar-header"><span id="category" class="visible-xs navbar-header-span">{{ text_category }}</span>*/
/*                     <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                     <ul class="nav navbar-nav list__category">*/
/*                         {% for category in categories %} {% if category.children %}*/
/*                         <li class="dropdown list__item"><a href="{{ category.href }}" class="dropdown-toggle list__item-link" data-toggle="dropdown"><h4 class="list__item-link-title">{{ category.name }}</h4></a>*/
/*                             <div class="dropdown-menu">*/
/*                                 <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                                     <ul class="list-unstyled">*/
/*                                         {% for child in children %}*/
/*                                         <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                     {% endfor %}</div>*/
/*                                 <a href="{{ category.href }}" class="see-all">{{ text_all }} <h4 class="list__item-link-title">{{ category.name }}</h4></a> </div>*/
/*                         </li>*/
/*                         {% else %}*/
/*                         <li class="list__item"><a class="list__item-link" href="{{ category.href }} "><h4 class="list__item-link-title">{{ category.name }}</h4></a></li>*/
/*                         {% endif %} {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- </div> -->*/
/*             </nav>*/
/* */
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
