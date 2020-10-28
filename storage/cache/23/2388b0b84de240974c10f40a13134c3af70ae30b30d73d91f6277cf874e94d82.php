<?php

/* default/template/common/footer.twig */
class __TwigTemplate_66e02b48ddc03a5ac32fbbde784ef75a8f112903aa240e7e22ebf97d1d934f45 extends Twig_Template
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
        echo "<!-- <footer>
  <div class=\"footer__container\">
    <div class=\"container\">
      <div class=\"footer__wrapper\">

        <div class=\"footer__inner\">
          <div class=\"footer__item footer__item-1\">
          <h5 class=\"footer__item-title\">О Компании</h5>
          <a class=\"footer__item-link\" href=\"#\">Вакансии в компании</a>
          <a class=\"footer__item-link\" href=\"";
        // line 10
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a>
        </div>

        <div class=\"footer__item footer__item-2\">
          <h5 class=\"footer__item-title\">Покупателям</h5>
          <a class=\"footer__item-link\" href=\"#\">Доставка и оплата</a>
          <a class=\"footer__item-link\" href=\"#\">Как заказать</a>
          <a class=\"footer__item-link\" href=\"#\">Вопросы и ответы</a>
        </div>
        </div>     

        <div class=\"footer__item footer__item-3\">
          <div class=\"footer__item-link-box\">
            <a class=\"footer__item-link social-link\" href=\"#\"><img src=\"/image/halkmarket/footer/footer-logo-1.png\" alt=\"\"></a>
            <a class=\"footer__item-link social-link\" href=\"#\"><img src=\"/image/halkmarket/footer/footer-logo-2.png\" alt=\"\"></a>
          </div>          
          <p class=\"footer__item-text service-text\">
            Есть вопрос? Напишите нам письмо или воспользуйтесь формой <a class=\"footer__item-text-link\" href=\"";
        // line 27
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">обратной связи</a>
          </p>
        </div>
      </div>

    </div>

      <div class=\"footer__copy\">
        <div class=\"footer__copy-box\">
          <p class=\"footer__copy-text\">
            © Copyright 2020. All rights reserved.
          </p>
        </div>
      

  </div>
</footer> -->
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 45
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>

<!-- <script src=\"catalog/view/javascript/jquery/jquery-3.5.1.min.js\"></script>
<script src=\"catalog/view/javascript/main.js\"></script>
<script src=\"catalog/view/javascript/slick/slick.min.js\"></script> -->
<!-- <script>
  \$(document).ready(function(){
    \$('.catalog-btn').click(function(){
        \$('.catalog-btn__list').toggleClass('active')
    })
})
</script> -->

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 59,  76 => 45,  72 => 44,  52 => 27,  30 => 10,  19 => 1,);
    }
}
/* <!-- <footer>*/
/*   <div class="footer__container">*/
/*     <div class="container">*/
/*       <div class="footer__wrapper">*/
/* */
/*         <div class="footer__inner">*/
/*           <div class="footer__item footer__item-1">*/
/*           <h5 class="footer__item-title">О Компании</h5>*/
/*           <a class="footer__item-link" href="#">Вакансии в компании</a>*/
/*           <a class="footer__item-link" href="{{ contact }}">{{ text_contact }}</a>*/
/*         </div>*/
/* */
/*         <div class="footer__item footer__item-2">*/
/*           <h5 class="footer__item-title">Покупателям</h5>*/
/*           <a class="footer__item-link" href="#">Доставка и оплата</a>*/
/*           <a class="footer__item-link" href="#">Как заказать</a>*/
/*           <a class="footer__item-link" href="#">Вопросы и ответы</a>*/
/*         </div>*/
/*         </div>     */
/* */
/*         <div class="footer__item footer__item-3">*/
/*           <div class="footer__item-link-box">*/
/*             <a class="footer__item-link social-link" href="#"><img src="/image/halkmarket/footer/footer-logo-1.png" alt=""></a>*/
/*             <a class="footer__item-link social-link" href="#"><img src="/image/halkmarket/footer/footer-logo-2.png" alt=""></a>*/
/*           </div>          */
/*           <p class="footer__item-text service-text">*/
/*             Есть вопрос? Напишите нам письмо или воспользуйтесь формой <a class="footer__item-text-link" href="{{ contact }}">обратной связи</a>*/
/*           </p>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </div>*/
/* */
/*       <div class="footer__copy">*/
/*         <div class="footer__copy-box">*/
/*           <p class="footer__copy-text">*/
/*             © Copyright 2020. All rights reserved.*/
/*           </p>*/
/*         </div>*/
/*       */
/* */
/*   </div>*/
/* </footer> -->*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* */
/* <!-- <script src="catalog/view/javascript/jquery/jquery-3.5.1.min.js"></script>*/
/* <script src="catalog/view/javascript/main.js"></script>*/
/* <script src="catalog/view/javascript/slick/slick.min.js"></script> -->*/
/* <!-- <script>*/
/*   $(document).ready(function(){*/
/*     $('.catalog-btn').click(function(){*/
/*         $('.catalog-btn__list').toggleClass('active')*/
/*     })*/
/* })*/
/* </script> -->*/
/* */
/* {% endfor %}*/
/* </body>*/
/* */
/* </html>*/
