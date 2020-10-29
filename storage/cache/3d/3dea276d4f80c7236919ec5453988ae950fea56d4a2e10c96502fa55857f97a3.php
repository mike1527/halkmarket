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
        <div class=\"featured__info-wrapper\">
            <div class=\"featured__info-box\">
                <h4 class=\"featured__info-box-title\">Наши спецпредложения</h4>
                <a class=\"featured__info-box-link\" href=\"#\">Показать все</a>
                <div class=\"featured__info-box-img\"><img src=\"/image/halkmarket/slider/feautered-icon.png\" alt=\"\"></div>
            </div>
        </div>
        <div class=\"featured__wrapper\">            
            <div class=\"featured__slider\">

              <div class=\"featured__item\">
                  <div class=\"featured__item-img\">
                      <!-- <a href=\"";
        // line 68
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                      <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                  </div>
                  <div class=\"rating\">";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 72
                echo "                       <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                  </div>
                  <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 74
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                  <div class=\"featured__item-box\">
                      <div class=\"featured__item-box-price\">
                          <div class=\"featured__item-box-old\">18.60 TMT</div>
                          <div class=\"featured__item-box-new\">17.00 TMT</div>
                          ";
        // line 79
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 80
            echo "                          <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                          ";
        }
        // line 82
        echo "
                      </div>
                      <div class=\"featured__item-box-cart\">
                          <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                      </div>
                  </div>
              </div>

              <div class=\"featured__item\">
                <div class=\"featured__item-img\">
                    <!-- <a href=\"";
        // line 92
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                    <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                </div>
                <div class=\"rating\">";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 96
                echo "                     <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </div>
                <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 98
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                <div class=\"featured__item-box\">
                    <div class=\"featured__item-box-price\">
                        <div class=\"featured__item-box-old\">18.60 TMT</div>
                        <div class=\"featured__item-box-new\">17.00 TMT</div>
                        ";
        // line 103
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 104
            echo "                        <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                        ";
        }
        // line 106
        echo "
                    </div>
                    <div class=\"featured__item-box-cart\">
                        <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                    </div>
                </div>
            </div>

            <div class=\"featured__item\">
                <div class=\"featured__item-img\">
                    <!-- <a href=\"";
        // line 116
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                    <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                </div>
                <div class=\"rating\">";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 120
                echo "                     <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </div>
                <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 122
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                <div class=\"featured__item-box\">
                    <div class=\"featured__item-box-price\">
                        <div class=\"featured__item-box-old\">18.60 TMT</div>
                        <div class=\"featured__item-box-new\">17.00 TMT</div>
                        ";
        // line 127
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 128
            echo "                        <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                        ";
        }
        // line 130
        echo "
                    </div>
                    <div class=\"featured__item-box-cart\">
                        <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                    </div>
                </div>
            </div>

            <div class=\"featured__item\">
                <div class=\"featured__item-img\">
                    <!-- <a href=\"";
        // line 140
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                    <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                </div>
                <div class=\"rating\">";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 144
                echo "                     <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                </div>
                <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 146
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                <div class=\"featured__item-box\">
                    <div class=\"featured__item-box-price\">
                        <div class=\"featured__item-box-old\">18.60 TMT</div>
                        <div class=\"featured__item-box-new\">17.00 TMT</div>
                        ";
        // line 151
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 152
            echo "                        <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                        ";
        }
        // line 154
        echo "
                    </div>
                    <div class=\"featured__item-box-cart\">
                        <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                    </div>
                </div>
            </div>

            <div class=\"featured__item\">
                <div class=\"featured__item-img\">
                    <!-- <a href=\"";
        // line 164
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                    <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                </div>
                <div class=\"rating\">";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 168
                echo "                     <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                </div>
                <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 170
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                <div class=\"featured__item-box\">
                    <div class=\"featured__item-box-price\">
                        <div class=\"featured__item-box-old\">18.60 TMT</div>
                        <div class=\"featured__item-box-new\">17.00 TMT</div>
                        ";
        // line 175
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 176
            echo "                        <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                        ";
        }
        // line 178
        echo "
                    </div>
                    <div class=\"featured__item-box-cart\">
                        <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                    </div>
                </div>
            </div>

            <div class=\"featured__item\">
                <div class=\"featured__item-img\">
                    <!-- <a href=\"";
        // line 188
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                    <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                </div>
                <div class=\"rating\">";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 192
                echo "                     <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                </div>
                <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 194
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                <div class=\"featured__item-box\">
                    <div class=\"featured__item-box-price\">
                        <div class=\"featured__item-box-old\">18.60 TMT</div>
                        <div class=\"featured__item-box-new\">17.00 TMT</div>
                        ";
        // line 199
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 200
            echo "                        <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                        ";
        }
        // line 202
        echo "
                    </div>
                    <div class=\"featured__item-box-cart\">
                        <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                    </div>
                </div>
            </div>

            <div class=\"featured__item\">
                <div class=\"featured__item-img\">
                    <!-- <a href=\"";
        // line 212
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo "\" class=\"img-responsive\" /></a> -->
                    <a href=\"#\"><img src=\"image/halkmarket/slider/featured-item-1.jpg\" alt=\"\"></a>
                </div>
                <div class=\"rating\">";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array()) < $context["i"])) {
                // line 216
                echo "                     <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            } else {
                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                </div>
                <h4 class=\"featured__item-title\"><a href=\"#\"><!-- ";
        // line 218
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
        echo " -->Холодный чай черный Lipton Лимон 1 л</a></h4>
                <div class=\"featured__item-box\">
                    <div class=\"featured__item-box-price\">
                        <div class=\"featured__item-box-old\">18.60 TMT</div>
                        <div class=\"featured__item-box-new\">17.00 TMT</div>
                        ";
        // line 223
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())) {
            // line 224
            echo "                        <p class=\"price\"> ";
            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo " ";
            } else {
                echo " <span class=\"price-new\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
                echo "</span> ";
            }
            echo " ";
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array())) {
                echo " <span class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "tax", array());
                echo "</span>                                ";
            }
            echo " </p>
                        ";
        }
        // line 226
        echo "
                    </div>
                    <div class=\"featured__item-box-cart\">
                        <button class=\"slider__cut-btn\" type=\"button\" onclick=\"cart.add('22','2');\"></button>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>

<section class=\"banner\">
    <div class=\"container\">
        <div class=\"banner__wrapper\">
            <a class=\"banner__box\" href=\"#\">
                <div class=\"banner__box-item banner__item\">
                    <h4 class=\"banner__box-item-title1\">Баннер для рекламы</h4>
                    <h4 class=\"banner__box-item-title2\">Баннер для рекламы</h4>
                </div>
            </a>                
        </div>
    </div>
</section>



<script>
    \$(function () {
     \$('.featured__slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        /* arrows: false */  
        responsive: [
\t    {
\t      breakpoint: 768,
\t      settings: {
\t        slidesToShow: 2,
\t      }
\t    },
\t    {
\t      breakpoint: 480,
\t      settings: {
\t        slidesToShow: 1,
\t      }
\t    }
    ]    
     });   
  });
  </script>

";
        // line 279
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
        return array (  707 => 279,  652 => 226,  628 => 224,  626 => 223,  618 => 218,  615 => 217,  605 => 216,  599 => 215,  587 => 212,  575 => 202,  551 => 200,  549 => 199,  541 => 194,  538 => 193,  528 => 192,  522 => 191,  510 => 188,  498 => 178,  474 => 176,  472 => 175,  464 => 170,  461 => 169,  451 => 168,  445 => 167,  433 => 164,  421 => 154,  397 => 152,  395 => 151,  387 => 146,  384 => 145,  374 => 144,  368 => 143,  356 => 140,  344 => 130,  320 => 128,  318 => 127,  310 => 122,  307 => 121,  297 => 120,  291 => 119,  279 => 116,  267 => 106,  243 => 104,  241 => 103,  233 => 98,  230 => 97,  220 => 96,  214 => 95,  202 => 92,  190 => 82,  166 => 80,  164 => 79,  156 => 74,  153 => 73,  143 => 72,  137 => 71,  125 => 68,  107 => 53,  65 => 14,  58 => 13,  55 => 12,  50 => 11,  47 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <!-- <div id="common-home" class="container"> -->*/
/* <!-- <div class="row"> -->*/
/* */
/* <!-- {{ column_left }} -->*/
/* <!-- {% if column_left and column_right %} -->*/
/* <!-- {% set class = 'col-sm-6' %} -->*/
/* <!-- {% elseif column_left or column_right %} -->*/
/* <!-- {% set class = 'col-sm-9' %} -->*/
/* <!-- {% else %} -->*/
/* <!-- {% set class = 'col-sm-12' %} -->*/
/* <!-- {% endif %} -->*/
/* <!-- <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {{ column_right }} -->*/
/* <!-- </div> -->*/
/* */
/* */
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
/* <div class="featured">*/
/*     <div class="container">*/
/*         <div class="featured__info-wrapper">*/
/*             <div class="featured__info-box">*/
/*                 <h4 class="featured__info-box-title">Наши спецпредложения</h4>*/
/*                 <a class="featured__info-box-link" href="#">Показать все</a>*/
/*                 <div class="featured__info-box-img"><img src="/image/halkmarket/slider/feautered-icon.png" alt=""></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="featured__wrapper">            */
/*             <div class="featured__slider">*/
/* */
/*               <div class="featured__item">*/
/*                   <div class="featured__item-img">*/
/*                       <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                       <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                   </div>*/
/*                   <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                   </div>*/
/*                   <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                   <div class="featured__item-box">*/
/*                       <div class="featured__item-box-price">*/
/*                           <div class="featured__item-box-old">18.60 TMT</div>*/
/*                           <div class="featured__item-box-new">17.00 TMT</div>*/
/*                           {% if product.price %}*/
/*                           <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                           {% endif %}*/
/* */
/*                       </div>*/
/*                       <div class="featured__item-box-cart">*/
/*                           <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                       </div>*/
/*                   </div>*/
/*               </div>*/
/* */
/*               <div class="featured__item">*/
/*                 <div class="featured__item-img">*/
/*                     <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                     <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                 </div>*/
/*                 <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                 </div>*/
/*                 <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                 <div class="featured__item-box">*/
/*                     <div class="featured__item-box-price">*/
/*                         <div class="featured__item-box-old">18.60 TMT</div>*/
/*                         <div class="featured__item-box-new">17.00 TMT</div>*/
/*                         {% if product.price %}*/
/*                         <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <div class="featured__item-box-cart">*/
/*                         <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="featured__item">*/
/*                 <div class="featured__item-img">*/
/*                     <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                     <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                 </div>*/
/*                 <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                 </div>*/
/*                 <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                 <div class="featured__item-box">*/
/*                     <div class="featured__item-box-price">*/
/*                         <div class="featured__item-box-old">18.60 TMT</div>*/
/*                         <div class="featured__item-box-new">17.00 TMT</div>*/
/*                         {% if product.price %}*/
/*                         <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <div class="featured__item-box-cart">*/
/*                         <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="featured__item">*/
/*                 <div class="featured__item-img">*/
/*                     <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                     <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                 </div>*/
/*                 <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                 </div>*/
/*                 <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                 <div class="featured__item-box">*/
/*                     <div class="featured__item-box-price">*/
/*                         <div class="featured__item-box-old">18.60 TMT</div>*/
/*                         <div class="featured__item-box-new">17.00 TMT</div>*/
/*                         {% if product.price %}*/
/*                         <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <div class="featured__item-box-cart">*/
/*                         <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="featured__item">*/
/*                 <div class="featured__item-img">*/
/*                     <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                     <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                 </div>*/
/*                 <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                 </div>*/
/*                 <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                 <div class="featured__item-box">*/
/*                     <div class="featured__item-box-price">*/
/*                         <div class="featured__item-box-old">18.60 TMT</div>*/
/*                         <div class="featured__item-box-new">17.00 TMT</div>*/
/*                         {% if product.price %}*/
/*                         <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <div class="featured__item-box-cart">*/
/*                         <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="featured__item">*/
/*                 <div class="featured__item-img">*/
/*                     <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                     <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                 </div>*/
/*                 <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                 </div>*/
/*                 <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                 <div class="featured__item-box">*/
/*                     <div class="featured__item-box-price">*/
/*                         <div class="featured__item-box-old">18.60 TMT</div>*/
/*                         <div class="featured__item-box-new">17.00 TMT</div>*/
/*                         {% if product.price %}*/
/*                         <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <div class="featured__item-box-cart">*/
/*                         <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="featured__item">*/
/*                 <div class="featured__item-img">*/
/*                     <!-- <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> -->*/
/*                     <a href="#"><img src="image/halkmarket/slider/featured-item-1.jpg" alt=""></a>*/
/*                 </div>*/
/*                 <div class="rating">{% for i in 1..5 %} {% if product.rating < i %}*/
/*                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %} {% endfor %}*/
/*                 </div>*/
/*                 <h4 class="featured__item-title"><a href="#"><!-- {{ product.name }} -->Холодный чай черный Lipton Лимон 1 л</a></h4>*/
/*                 <div class="featured__item-box">*/
/*                     <div class="featured__item-box-price">*/
/*                         <div class="featured__item-box-old">18.60 TMT</div>*/
/*                         <div class="featured__item-box-new">17.00 TMT</div>*/
/*                         {% if product.price %}*/
/*                         <p class="price"> {% if not product.special %} {{ product.price }} {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %} {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>                                {% endif %} </p>*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/*                     <div class="featured__item-box-cart">*/
/*                         <button class="slider__cut-btn" type="button" onclick="cart.add('22','2');"></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <section class="banner">*/
/*     <div class="container">*/
/*         <div class="banner__wrapper">*/
/*             <a class="banner__box" href="#">*/
/*                 <div class="banner__box-item banner__item">*/
/*                     <h4 class="banner__box-item-title1">Баннер для рекламы</h4>*/
/*                     <h4 class="banner__box-item-title2">Баннер для рекламы</h4>*/
/*                 </div>*/
/*             </a>                */
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* */
/* <script>*/
/*     $(function () {*/
/*      $('.featured__slider').slick({*/
/*         infinite: true,*/
/*         slidesToShow: 5,*/
/*         slidesToScroll: 5,*/
/*         /* arrows: false *//*   */
/*         responsive: [*/
/* 	    {*/
/* 	      breakpoint: 768,*/
/* 	      settings: {*/
/* 	        slidesToShow: 2,*/
/* 	      }*/
/* 	    },*/
/* 	    {*/
/* 	      breakpoint: 480,*/
/* 	      settings: {*/
/* 	        slidesToShow: 1,*/
/* 	      }*/
/* 	    }*/
/*     ]    */
/*      });   */
/*   });*/
/*   </script>*/
/* */
/* {{ footer }}*/
