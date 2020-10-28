<?php

/* default/template/common/home.twig */
class __TwigTemplate_690c728e953287d8c178ab159380c42dedad888050771649fbfc239c789c47bc extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<!-- <div id=\"common-home\" class=\"container\"> -->
  <!-- <div class=\"row\"> -->
    
    <!-- ";
        // line 5
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " -->
    <!-- ";
        // line 6
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " -->
    <!-- ";
            // line 7
            $context["class"] = "col-sm-6";
            echo " -->
    <!-- ";
        } elseif ((        // line 8
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " -->
    <!-- ";
            // line 9
            $context["class"] = "col-sm-9";
            echo " -->
    <!-- ";
        } else {
            // line 10
            echo " -->
    <!-- ";
            // line 11
            $context["class"] = "col-sm-12";
            echo " -->
    <!-- ";
        }
        // line 12
        echo " -->
    <!-- <div id=\"content\" class=\"";
        // line 13
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 14
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo " -->
  <!-- </div> -->

  
<!-- </div> -->

<section class=\"advantages\">
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
</section>



";
        // line 53
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "

<div class=\"featured\">
  <div class=\"container\">
    <div class=\"featured__wrapper\">
      <div class=\"featured__info-box\">
        <h4 class=\"featured__info-box-title\">Наши спецпредложения</h4>
        <a class=\"featured__info-box-link\" href=\"#\">Показать все</a>
        <div class=\"featured__info-box-img\"><img src=\"/image/halkmarket/slider/feautered-icon.png\" alt=\"\"></div>
      </div>
      <div class=\"featured__slider\">

        <div class=\"featured__item\">
          <div class=\"featured__item-img\"><img src=\"/image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></div>
          <div class=\"featured__item-star\"></div>
          <div class=\"featured__item-title\"></div>
          <div class=\"featured__item-box\">
            <div class=\"featured__item-box-price\">
              <div class=\"featured__item-box-old\"></div>
              <div class=\"featured__item-box-new\"></div>
            </div>
            <div class=\"featured__item-box-cart\"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


";
        // line 84
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 84,  107 => 53,  65 => 14,  58 => 13,  55 => 12,  50 => 11,  47 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <!-- <div id="common-home" class="container"> -->*/
/*   <!-- <div class="row"> -->*/
/*     */
/*     <!-- {{ column_left }} -->*/
/*     <!-- {% if column_left and column_right %} -->*/
/*     <!-- {% set class = 'col-sm-6' %} -->*/
/*     <!-- {% elseif column_left or column_right %} -->*/
/*     <!-- {% set class = 'col-sm-9' %} -->*/
/*     <!-- {% else %} -->*/
/*     <!-- {% set class = 'col-sm-12' %} -->*/
/*     <!-- {% endif %} -->*/
/*     <!-- <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {{ column_right }} -->*/
/*   <!-- </div> -->*/
/* */
/*   */
/* <!-- </div> -->*/
/* */
/* <section class="advantages">*/
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
/* </section>*/
/* */
/* */
/* */
/* {{ menu }}*/
/* */
/* <div class="featured">*/
/*   <div class="container">*/
/*     <div class="featured__wrapper">*/
/*       <div class="featured__info-box">*/
/*         <h4 class="featured__info-box-title">Наши спецпредложения</h4>*/
/*         <a class="featured__info-box-link" href="#">Показать все</a>*/
/*         <div class="featured__info-box-img"><img src="/image/halkmarket/slider/feautered-icon.png" alt=""></div>*/
/*       </div>*/
/*       <div class="featured__slider">*/
/* */
/*         <div class="featured__item">*/
/*           <div class="featured__item-img"><img src="/image/halkmarket/slider/featured-item-1.jpg" alt=""></div>*/
/*           <div class="featured__item-star"></div>*/
/*           <div class="featured__item-title"></div>*/
/*           <div class="featured__item-box">*/
/*             <div class="featured__item-box-price">*/
/*               <div class="featured__item-box-old"></div>*/
/*               <div class="featured__item-box-new"></div>*/
/*             </div>*/
/*             <div class="featured__item-box-cart"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {{ footer }}*/
