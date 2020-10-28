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
        echo "<!-- <section class=\"advantages\">
    <div class=\"container__page-grey\">
        <div class=\"container\">
            <div class=\"advantages__wrapper\">

                <div class=\"advantages__item advantages__item-1\">
                    <h4 class=\"advantages__item-title\">И все на каждый день</h4>
                    <p class=\"advantages__item-text\">
                        Выбирайте из 40 000 товаров: у нас есть фрукты и овощи, мясо и рыба, все для дома и товары для животных
                    </p>
                </div>

                <div class=\"advantages__item advantages__item-2\">
                    <h4 class=\"advantages__item-title\">И свежесть и качество</h4>
                    <p class=\"advantages__item-text\">
                        Будьте уверены: мы тщательно следим за свежестью и качеством продуктов на складе и на всех этапах доставки
                    </p>
                </div>

                <div class=\"advantages__item advantages__item-3\">
                    <h4 class=\"advantages__item-title\">И WOW-удобно</h4>
                    <p class=\"advantages__item-text\">
                        Планируйте и экономьте время: оформляйте и получайте заказы где и когда удобно
                    </p>
                </div>

            </div>
        </div>
    </div>
</section> -->

<section class=\"category\">
    <div class=\"container__page-grey\">
        <div class=\"container\">
            ";
        // line 35
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 36
            echo "            <nav id=\"menu\" class=\"navbar\">
                <!-- <div class=\"container\"> -->
                <h4 class=\"category__title\">Категории</h4>
                <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs navbar-header-span\">";
            // line 39
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
                    <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                </div>
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav list__category\">
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 45
                    echo "                        <li class=\"dropdown list__item\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle list__item-link\" data-toggle=\"dropdown\"><h4 class=\"list__item-link-title\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</h4></a>
                            <div class=\"dropdown-menu\">
                                <div class=\"dropdown-inner\"> ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 48
                        echo "                                    <ul class=\"list-unstyled\">
                                        ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 50
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
                        // line 52
                        echo "                                    </ul>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "</div>
                                <a href=\"";
                    // line 54
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " <h4 class=\"list__item-link-title\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</h4></a> </div>
                        </li>
                        ";
                } else {
                    // line 57
                    echo "                        <li class=\"list__item\"><a class=\"list__item-link\" href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo " \"><h4 class=\"list__item-link-title\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</h4></a></li>
                        ";
                }
                // line 58
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    </ul>
                </div>
                <!-- </div> -->
            </nav>

            ";
        }
        // line 65
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
        return array (  148 => 65,  140 => 59,  134 => 58,  126 => 57,  116 => 54,  113 => 53,  106 => 52,  95 => 50,  91 => 49,  88 => 48,  84 => 47,  76 => 45,  70 => 44,  62 => 39,  57 => 36,  55 => 35,  19 => 1,);
    }
}
/* <!-- <section class="advantages">*/
/*     <div class="container__page-grey">*/
/*         <div class="container">*/
/*             <div class="advantages__wrapper">*/
/* */
/*                 <div class="advantages__item advantages__item-1">*/
/*                     <h4 class="advantages__item-title">И все на каждый день</h4>*/
/*                     <p class="advantages__item-text">*/
/*                         Выбирайте из 40 000 товаров: у нас есть фрукты и овощи, мясо и рыба, все для дома и товары для животных*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="advantages__item advantages__item-2">*/
/*                     <h4 class="advantages__item-title">И свежесть и качество</h4>*/
/*                     <p class="advantages__item-text">*/
/*                         Будьте уверены: мы тщательно следим за свежестью и качеством продуктов на складе и на всех этапах доставки*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="advantages__item advantages__item-3">*/
/*                     <h4 class="advantages__item-title">И WOW-удобно</h4>*/
/*                     <p class="advantages__item-text">*/
/*                         Планируйте и экономьте время: оформляйте и получайте заказы где и когда удобно*/
/*                     </p>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section> -->*/
/* */
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
