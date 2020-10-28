<?php

/* default/template/common/header.twig */
class __TwigTemplate_f5cdffc2eb932df5e5a6a249defcfe2619596e23d85bf2ad949d28adf555f0dd extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
";
        // line 13
        if ((isset($context["robots"]) ? $context["robots"] : null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo (isset($context["robots"]) ? $context["robots"] : null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 20
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo (isset($context["og_url"]) ? $context["og_url"] : null);
        echo "\" />
";
        // line 26
        if ((isset($context["og_image"]) ? $context["og_image"] : null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-3.5.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/global.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/slick/slick.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/slick/slick.min.js\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/fonts.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/header.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/home.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/default/stylesheet/footer.css\" rel=\"stylesheet\">
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 44
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 47
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 51
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 54
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"header__top\">
    <div class=\"container__page\">
      <div class=\"header__top-tel\">
        <a class=\"header__top-tel__link\" href=\"tel:+99312351212\" >";
        // line 62
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</a>
      </div>
  </div>
  </div>  
</nav>
<header>
  <div class=\"header__bottom\">
    <div class=\"container__page\">
      <div class=\"header__bottom-wrapper\">

        <div id=\"logo\" class=\"header__bottom-logo\">
          <a href=\"#\">
            ";
        // line 74
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 75
            echo "              ";
            if (((isset($context["home"]) ? $context["home"] : null) == (isset($context["og_url"]) ? $context["og_url"] : null))) {
                // line 76
                echo "                <img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" />
              ";
            } else {
                // line 78
                echo "                <a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\"><img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" /></a>
              ";
            }
            // line 80
            echo "            ";
        } else {
            // line 81
            echo "              <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
            ";
        }
        // line 83
        echo "          </a>            
        </div>

        <div class=\"header__bottom-catalog\">
          <button class=\"catalog-btn\">
            
          </button>
        </div>

        <div class=\"header__bottom-search\">
          ";
        // line 93
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        </div>

        <div class=\"header__bottom-percent\">

        </div>

        <div class=\"header__bottom-account\"><a href=\"";
        // line 100
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle bottom-account__arrow\" data-toggle=\"dropdown\"><span class=\"account-caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 102
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 103
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 104
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 105
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 106
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 107
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 109
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 110
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 112
        echo "          </ul>
        </div>

        

      </div>
    </div>
  </div>


  
  
</header>
";
        // line 125
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 125,  318 => 112,  311 => 110,  304 => 109,  297 => 107,  291 => 106,  285 => 105,  279 => 104,  272 => 103,  270 => 102,  263 => 100,  253 => 93,  241 => 83,  233 => 81,  230 => 80,  218 => 78,  208 => 76,  205 => 75,  203 => 74,  188 => 62,  180 => 56,  172 => 54,  168 => 53,  157 => 51,  153 => 50,  150 => 49,  141 => 47,  137 => 46,  124 => 44,  120 => 43,  104 => 31,  98 => 29,  92 => 27,  90 => 26,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  66 => 18,  64 => 17,  59 => 16,  53 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* {% if robots %}*/
/* <meta name="robots" content="{{ robots }}" />*/
/* {% endif %}*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta property="og:title" content="{{ title }}" />*/
/* <meta property="og:type" content="website" />*/
/* <meta property="og:url" content="{{ og_url }}" />*/
/* {% if og_image %}*/
/* <meta property="og:image" content="{{ og_image }}" />*/
/* {% else %}*/
/* <meta property="og:image" content="{{ logo }}" />*/
/* {% endif %}*/
/* <meta property="og:site_name" content="{{ name }}" />*/
/* <script src="catalog/view/javascript/jquery/jquery-3.5.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/global.css" rel="stylesheet">*/
/* <link href="catalog/view/javascript/slick/slick.css" rel="stylesheet">*/
/* <link href="catalog/view/javascript/slick/slick.min.js" rel="stylesheet">*/
/* <link href="catalog/view/theme/default/stylesheet/fonts.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/default/stylesheet/header.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/default/stylesheet/home.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/default/stylesheet/footer.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="header__top">*/
/*     <div class="container__page">*/
/*       <div class="header__top-tel">*/
/*         <a class="header__top-tel__link" href="tel:+99312351212" >{{ telephone }}</a>*/
/*       </div>*/
/*   </div>*/
/*   </div>  */
/* </nav>*/
/* <header>*/
/*   <div class="header__bottom">*/
/*     <div class="container__page">*/
/*       <div class="header__bottom-wrapper">*/
/* */
/*         <div id="logo" class="header__bottom-logo">*/
/*           <a href="#">*/
/*             {% if logo %}*/
/*               {% if home == og_url %}*/
/*                 <img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" />*/
/*               {% else %}*/
/*                 <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*               {% endif %}*/
/*             {% else %}*/
/*               <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*             {% endif %}*/
/*           </a>            */
/*         </div>*/
/* */
/*         <div class="header__bottom-catalog">*/
/*           <button class="catalog-btn">*/
/*             */
/*           </button>*/
/*         </div>*/
/* */
/*         <div class="header__bottom-search">*/
/*           {{ search }}*/
/*         </div>*/
/* */
/*         <div class="header__bottom-percent">*/
/* */
/*         </div>*/
/* */
/*         <div class="header__bottom-account"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle bottom-account__arrow" data-toggle="dropdown"><span class="account-caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/* */
/*         */
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   */
/*   */
/* </header>*/
/* {{ menu }}*/
/* */
