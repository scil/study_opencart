<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/payment/wechat_pay.twig */
class __TwigTemplate_d889e5d2371b6e732e331e676f5f28e2cf0c608388821b85a86f3675ae5323d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"tab-content\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-app-id\">";
        // line 30
        echo ($context["entry_app_id"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_app_id\" value=\"";
        // line 32
        echo ($context["payment_wechat_pay_app_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_app_id"] ?? null);
        echo "\" id=\"entry-app-id\" class=\"form-control\"/>
                ";
        // line 33
        if (($context["error_app_id"] ?? null)) {
            // line 34
            echo "                <div class=\"text-danger\">";
            echo ($context["error_app_id"] ?? null);
            echo "</div>
                ";
        }
        // line 36
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-app-secret\">";
        // line 39
        echo ($context["entry_app_secret"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_app_secret\" value=\"";
        // line 41
        echo ($context["payment_wechat_pay_app_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_app_secret"] ?? null);
        echo "\" id=\"entry-app-secret\" class=\"form-control\"/>
                ";
        // line 42
        if (($context["error_app_secret"] ?? null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_app_secret"] ?? null);
            echo "</div>
                ";
        }
        // line 45
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-mch-id\">";
        // line 48
        echo ($context["entry_mch_id"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_mch_id\" value=\"";
        // line 50
        echo ($context["payment_wechat_pay_mch_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mch_id"] ?? null);
        echo "\" id=\"entry-mch-id\" class=\"form-control\"/>
                ";
        // line 51
        if (($context["error_mch_id"] ?? null)) {
            // line 52
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_mch_id"] ?? null);
            echo "</div>
                ";
        }
        // line 54
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-api-secret\">";
        // line 57
        echo ($context["entry_api_secret"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_api_secret\" value=\"";
        // line 59
        echo ($context["payment_wechat_pay_api_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_api_secret"] ?? null);
        echo "\" id=\"entry-api-secret\" class=\"form-control\"/>
                ";
        // line 60
        if (($context["error_api_secret"] ?? null)) {
            // line 61
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_api_secret"] ?? null);
            echo "</div>
                ";
        }
        // line 63
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_total\" value=\"";
        // line 68
        echo ($context["payment_wechat_pay_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 72
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_currency\" value=\"";
        // line 74
        echo ($context["payment_wechat_pay_currency"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_currency"] ?? null);
        echo "\" id=\"input-currency\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 78
        echo ($context["entry_completed_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_wechat_pay_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">
                  ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 82
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 82) == ($context["payment_wechat_pay_completed_status_id"] ?? null))) {
                // line 83
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 83);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 83);
                echo "</option>
                    ";
            } else {
                // line 85
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 85);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 85);
                echo "</option>
                    ";
            }
            // line 87
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 92
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_wechat_pay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                  <option value=\"0\">";
        // line 95
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 97
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 97) == ($context["payment_wechat_pay_geo_zone_id"] ?? null))) {
                // line 98
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 98);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 98);
                echo "</option>
                  ";
            } else {
                // line 100
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 100);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 100);
                echo "</option>
                  ";
            }
            // line 102
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 107
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_wechat_pay_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 110
        if (($context["payment_wechat_pay_status"] ?? null)) {
            // line 111
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 112
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 114
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 117
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 121
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_sort_order\" value=\"";
        // line 123
        echo ($context["payment_wechat_pay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </div>
        </form>
        <div class=\"alert alert-info\">";
        // line 128
        echo ($context["help_wechat_pay_setup"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 133
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/wechat_pay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 133,  371 => 128,  361 => 123,  356 => 121,  350 => 117,  345 => 115,  340 => 114,  335 => 112,  330 => 111,  328 => 110,  322 => 107,  316 => 103,  310 => 102,  302 => 100,  294 => 98,  291 => 97,  287 => 96,  283 => 95,  277 => 92,  271 => 88,  265 => 87,  257 => 85,  249 => 83,  246 => 82,  242 => 81,  236 => 78,  227 => 74,  220 => 72,  211 => 68,  204 => 66,  199 => 63,  193 => 61,  191 => 60,  185 => 59,  180 => 57,  175 => 54,  169 => 52,  167 => 51,  161 => 50,  156 => 48,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/wechat_pay.twig", "");
    }
}
