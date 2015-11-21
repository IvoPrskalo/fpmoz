<?php

defined('_JEXEC') or die;

function modChrome_basic($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = ($params->get('moduleclass_sfx') ? ' class="' . htmlspecialchars($params->get('moduleclass_sfx')) . '"' : '');
    $headerClass = ($params->get('header_class') ? ' class="' . htmlspecialchars($params->get('header_class')) . '"' : '');

    if ($module->content)
    {
        echo '<' . $moduleTag . $moduleClass . '>';

        if ($module->showtitle)
            echo '<' . $headerTag . $headerClass . '>' . $module->title . '</' . $headerTag . '>';

        echo $module->content;

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_panel($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('panel panel-default ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = trim('panel-title ' . htmlspecialchars($params->get('header_class')));

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<div class="panel-heading">' . '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>' . '</div>';

        echo '<div class="panel-body">' . $module->content . '</div>';

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_panel_primary($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('panel panel-primary ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = trim('panel-title ' . htmlspecialchars($params->get('header_class')));

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<div class="panel-heading">' . '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>' . '</div>';

        echo '<div class="panel-body">' . $module->content . '</div>';

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_panel_success($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('panel panel-success ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = trim('panel-title ' . htmlspecialchars($params->get('header_class')));

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<div class="panel-heading">' . '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>' . '</div>';

        echo '<div class="panel-body">' . $module->content . '</div>';

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_panel_info($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('panel panel-info ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = trim('panel-title ' . htmlspecialchars($params->get('header_class')));

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<div class="panel-heading">' . '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>' . '</div>';

        echo '<div class="panel-body">' . $module->content . '</div>';

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_panel_warning($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('panel panel-warning ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = trim('panel-title ' . htmlspecialchars($params->get('header_class')));

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<div class="panel-heading">' . '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>' . '</div>';

        echo '<div class="panel-body">' . $module->content . '</div>';

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_panel_danger($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('panel panel-danger ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = trim('panel-title ' . htmlspecialchars($params->get('header_class')));

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<div class="panel-heading">' . '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>' . '</div>';

        echo '<div class="panel-body">' . $module->content . '</div>';

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_well($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('well ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = ($params->get('header_class') ? ' class="' . htmlspecialchars($params->get('header_class')) . '"' : '');

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<' . $headerTag . $headerClass . '>' . $module->title . '</' . $headerTag . '>';

        echo $module->content;

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_well_lg($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('well well-lg ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = ($params->get('header_class') ? ' class="' . htmlspecialchars($params->get('header_class')) . '"' : '');

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<' . $headerTag . $headerClass . '>' . $module->title . '</' . $headerTag . '>';

        echo $module->content;

        echo '</' . $moduleTag . '>';
    }
}

function modChrome_well_sm($module, &$params, &$attribs)
{
    $moduleTag = $params->get('module_tag', 'div');
    $headerTag = $params->get('header_tag', 'h3');
    $moduleClass = trim('well well-sm ' . htmlspecialchars($params->get('moduleclass_sfx')));
    $headerClass = ($params->get('header_class') ? ' class="' . htmlspecialchars($params->get('header_class')) . '"' : '');

    if ($module->content)
    {
        echo '<' . $moduleTag . ' class="' . $moduleClass . '">';

        if ($module->showtitle)
            echo '<' . $headerTag . $headerClass . '>' . $module->title . '</' . $headerTag . '>';

        echo $module->content;

        echo '</' . $moduleTag . '>';
    }
}
