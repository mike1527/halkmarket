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

<section class=\"slider__slick\">
  <div class=\"container__page\">
    <div class=\"slider__wrapper\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "      <!-- <div class=\"slider__item\">ITEM 1</div>
      <div class=\"slider__item\">ITEM 2</div>
      <div class=\"slider__item\">ITEM 3</div> -->
      <div class=\"slider__item\">
        ";
            // line 10
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 11
                echo "        <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" >
        </a>
        ";
            } else {
                // line 14
                echo "        <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
        ";
            }
            // line 15
            echo "   
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>    
  </div>  
</section>\t
<style>
  .slider__item {
   min-height: 600px;
   background-repeat: no-repeat;
   background-position: top center;
   background-size: cover;
}
</style>

<script>
  \$(function () {
   \$('.slider__wrapper').slick({});
});
</script>


<!-- Подключение swiper слайдера -->

<!-- <div class=\"swiper__inner\">
  <div class=\"container__page\">
    <div class=\"swiper-viewport\">
      <div class=\"swiper__box\">
        <div id=\"slideshow";
        // line 43
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
          <div class=\"swiper-wrapper\"> ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 45
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
        // line 46
        echo " 
          </div>
        </div>
    </div>    
    <div class=\"swiper-pagination slideshow";
        // line 50
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
        // line 62
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 65
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
        return array (  149 => 65,  143 => 62,  128 => 50,  122 => 46,  99 => 45,  95 => 44,  91 => 43,  64 => 18,  56 => 15,  48 => 14,  37 => 11,  35 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!-- Подключение SLICK слайдера -->*/
/* */
/* <section class="slider__slick">*/
/*   <div class="container__page">*/
/*     <div class="slider__wrapper">{% for banner in banners %}*/
/*       <!-- <div class="slider__item">ITEM 1</div>*/
/*       <div class="slider__item">ITEM 2</div>*/
/*       <div class="slider__item">ITEM 3</div> -->*/
/*       <div class="slider__item">*/
/*         {% if banner.link %}*/
/*         <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" >*/
/*         </a>*/
/*         {% else %}*/
/*         <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/*         {% endif %}   */
/*       </div>*/
/*       {% endfor %}*/
/*     </div>    */
/*   </div>  */
/* </section>	*/
/* <style>*/
/*   .slider__item {*/
/*    min-height: 600px;*/
/*    background-repeat: no-repeat;*/
/*    background-position: top center;*/
/*    background-size: cover;*/
/* }*/
/* </style>*/
/* */
/* <script>*/
/*   $(function () {*/
/*    $('.slider__wrapper').slick({});*/
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
