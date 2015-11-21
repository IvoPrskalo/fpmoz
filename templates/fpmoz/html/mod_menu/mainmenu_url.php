<?php

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
// $class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';

$class = '';
$class .= $item->anchor_css ? ' ' . $item->anchor_css : '';
$class .= $item->deeper ? ' dropdown-toggle' : '';

if (!empty($class))
    $class = 'class="' . trim($class) . '" ';

if ($item->menu_image)
{
    $item->params->get('menu_text', 1) ?
        $linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
        $linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
    $linktype = $item->title;
}

$dropdown_data = $item->deeper ? 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ' : '';

$flink = $item->flink;
$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));

switch($item->browserNav) :
    default:
    case 0:
        echo '<a ' . $class . $title . $dropdown_data . 'href="' . $flink . '" ' . '>' . $linktype . '</a>';
        break;
    case 1:
        // _blank
        echo '<a ' . $class . $title . $dropdown_data . 'href="' . $flink . '" target="_blank"' . '>' . $linktype . '</a>';
        break;
    case 2:
        // Use JavaScript "window.open"
        $options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,' . $params->get('window_open');
        echo '<a ' . $class . $title . $dropdown_data . 'href="' . $flink . '" onclick="window.open(this.href, \'targetWindow\', \'' . $options . '\'); return false;">' . $linktype . '</a>';
        break;
endswitch;
