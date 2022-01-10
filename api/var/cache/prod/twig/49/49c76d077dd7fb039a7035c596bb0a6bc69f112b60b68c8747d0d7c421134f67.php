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

/* tailwind_2_layout.html.twig */
class __TwigTemplate_bb4dbd370658d0d05edf55e5cb7b80733701d5038c6f77192849bc05898154e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "tailwind_2_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'form_label' => [$this, 'block_form_label'],
                'form_help' => [$this, 'block_form_help'],
                'form_errors' => [$this, 'block_form_errors'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 8
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        $this->displayBlock('form_help', $context, $blocks);
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 33
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 45
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 61
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 66
        $this->displayBlock('radio_widget', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 4), ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 5
        $this->displayParentBlock("form_row", $context, $blocks);
    }

    // line 8
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 9), ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) . ((($context["disabled"] ?? null)) ? ((" " . ((array_key_exists("widget_disabled_class", $context)) ? (_twig_default_filter(($context["widget_disabled_class"] ?? null), "border-gray-300 text-gray-500")) : ("border-gray-300 text-gray-500")))) : (""))) . ((twig_length_filter($this->env, ($context["errors"] ?? null))) ? ((" " . ((array_key_exists("widget_errors_class", $context)) ? (_twig_default_filter(($context["widget_errors_class"] ?? null), "border-red-700")) : ("border-red-700")))) : ("")))]);
        // line 10
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), ((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800")))) : (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800"))))]);
        // line 15
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 18
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 19), ((array_key_exists("help_class", $context)) ? (_twig_default_filter(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600")))) : (((array_key_exists("help_class", $context)) ? (_twig_default_filter(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600"))))]);
        // line 20
        $this->displayParentBlock("form_help", $context, $blocks);
    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["errors"] ?? null)), 0))) {
            // line 25
            echo "<ul>";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "<li class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("error_item_class", $context)) ? (_twig_default_filter(($context["error_item_class"] ?? null), "text-red-700")) : ("text-red-700")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</ul>";
        }
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "mt-2")) : ("mt-2"))]);
        // line 35
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            echo "            <div class=\"flex items-center\">";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 40
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>";
    }

    // line 45
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 46), ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 47
        $context["widget_attr"] = [];
        // line 48
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 49
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 51
        echo "<div";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 51, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 53
        echo "<div class=\"inline-flex items-center\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 56
        echo "</div>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 58
        echo "</div>";
    }

    // line 61
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 63
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
    }

    // line 66
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 68
        $this->displayParentBlock("radio_widget", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "tailwind_2_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  233 => 68,  231 => 67,  227 => 66,  223 => 63,  221 => 62,  217 => 61,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 53,  201 => 52,  189 => 51,  186 => 49,  184 => 48,  182 => 47,  180 => 46,  176 => 45,  172 => 42,  165 => 40,  163 => 39,  161 => 38,  159 => 37,  155 => 36,  151 => 35,  149 => 34,  145 => 33,  140 => 29,  130 => 27,  126 => 26,  124 => 25,  122 => 24,  118 => 23,  114 => 20,  112 => 19,  108 => 18,  104 => 15,  102 => 14,  98 => 13,  94 => 10,  92 => 9,  88 => 8,  84 => 5,  82 => 4,  78 => 3,  74 => 66,  72 => 61,  70 => 45,  68 => 33,  66 => 23,  64 => 18,  62 => 13,  60 => 8,  58 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tailwind_2_layout.html.twig", "C:\\Users\\Medanosolution\\grufercan\\api\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\tailwind_2_layout.html.twig");
    }
}
