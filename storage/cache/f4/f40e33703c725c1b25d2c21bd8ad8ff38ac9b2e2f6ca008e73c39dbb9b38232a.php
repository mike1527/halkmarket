<?php

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_e55e6a72e9b582876a66c686e57c2f419a7f14c580e8478df149d49c8cc7825d extends Twig_Template
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
        echo "<!-- Подключение SLICK слайдера -->

  <!-- <div class=\"container__page\"> -->
    <div class=\"slider__wrapper\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            echo "    
        <div class=\"slider__item\">
            ";
            // line 6
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 7
                echo "            <a class=\"slider__item-link\" href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\">
              <img src=\"";
                // line 8
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive slider__item-pic\">
            </a>
            ";
            } else {
                // line 11
                echo "            <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive slider__item-pic\"/>
            ";
            }
            // line 13
            echo "        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
    </div>    
  <!-- </div> -->
</section>

<script>
  \$(function () {
   \$('.slider__wrapper').slick({
    nextArrow: '<button class=\"slick-arrow slick-arrow-transform slick-next\"><img src=\"/image/halkmarket/slider/slider-next-arrow.svg\" alt=\"next arrow\"></button>',
    prevArrow: '<button class=\"slick-arrow slick-arrow-transform slick-prev\"><img src=\"/image/halkmarket/slider/slider-prev-arrow.svg\" alt=\"prev arrow\"></button>'
   });   
});
</script>


<!-- Подключение swiper слайдера -->

<!-- <div class=\"swiper__inner\">
  <div class=\"container__page\">
    <div class=\"swiper-viewport\">
      <div class=\"swiper__box\">
        <div id=\"slideshow";
        // line 35
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
          <div class=\"swiper-wrapper\"> ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 37
            echo "            <div class=\"swiper-slide text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
          </div>
        </div>
    </div>    
    <div class=\"swiper-pagination slideshow";
        // line 42
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
    <div class=\"swiper-pager\">
      <div class=\"right__btn slider__btn\"></div>
      <div class=\"left__btn slider__btn\"></div>
    </div>
  </div>
  
  </div>
    
</div> -->

<!-- <script type=\"text/javascript\">
\$('#slideshow";
        // line 54
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 57
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.right__btn',
    prevButton: '.left__btn',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
</script> -->


";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 57,  136 => 54,  121 => 42,  115 => 38,  92 => 37,  88 => 36,  84 => 35,  61 => 14,  54 => 13,  46 => 11,  38 => 8,  33 => 7,  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <!-- Подключение SLICK слайдера -->*/
/* */
/*   <!-- <div class="container__page"> -->*/
/*     <div class="slider__wrapper">{% for banner in banners %}    */
/*         <div class="slider__item">*/
/*             {% if banner.link %}*/
/*             <a class="slider__item-link" href="{{ banner.link }}">*/
/*               <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive slider__item-pic">*/
/*             </a>*/
/*             {% else %}*/
/*             <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive slider__item-pic"/>*/
/*             {% endif %}*/
/*         </div>*/
/*             {% endfor %} */
/*     </div>    */
/*   <!-- </div> -->*/
/* </section>*/
/* */
/* <script>*/
/*   $(function () {*/
/*    $('.slider__wrapper').slick({*/
/*     nextArrow: '<button class="slick-arrow slick-arrow-transform slick-next"><img src="/image/halkmarket/slider/slider-next-arrow.svg" alt="next arrow"></button>',*/
/*     prevArrow: '<button class="slick-arrow slick-arrow-transform slick-prev"><img src="/image/halkmarket/slider/slider-prev-arrow.svg" alt="prev arrow"></button>'*/
/*    });   */
/* });*/
/* </script>*/
/* */
/* */
/* <!-- Подключение swiper слайдера -->*/
/* */
/* <!-- <div class="swiper__inner">*/
/*   <div class="container__page">*/
/*     <div class="swiper-viewport">*/
/*       <div class="swiper__box">*/
/*         <div id="slideshow{{ module }}" class="swiper-container">*/
/*           <div class="swiper-wrapper"> {% for banner in banners %}*/
/*             <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*             {% endfor %} */
/*           </div>*/
/*         </div>*/
/*     </div>    */
/*     <div class="swiper-pagination slideshow{{ module }}"></div>*/
/*     <div class="swiper-pager">*/
/*       <div class="right__btn slider__btn"></div>*/
/*       <div class="left__btn slider__btn"></div>*/
/*     </div>*/
/*   </div>*/
/*   */
/*   </div>*/
/*     */
/* </div> -->*/
/* */
/* <!-- <script type="text/javascript">*/
/* $('#slideshow{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 1,*/
/* 	pagination: '.slideshow{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '.right__btn',*/
/*     prevButton: '.left__btn',*/
/*     spaceBetween: 30,*/
/* 	autoplay: 2500,*/
/*     autoplayDisableOnInteraction: true,*/
/* 	loop: true*/
/* });*/
/* </script> -->*/
/* */
/* */
/* */
