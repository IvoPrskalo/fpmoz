<?php

defined('_JEXEC') or die;

?>
<nav class="navbar pull-right <?php echo $class_sfx;?>"<?php if($params->get('tag_id') != null) echo ' id="' . $params->get('tag_id') . '"'; ?>>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Prikaži ili sakrij izbornik</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="mainmenu-navbar-collapse">
            <ul class="nav navbar-nav">

                <?php

                foreach ($list as $i => &$item)
                {
                    $class = '';

                    if (($item->id == $active_id) || ($item->type == 'alias' && $item->params->get('aliasoptions') == $active_id))
                    {
                        $class .= ' current';
                    }

                    if (in_array($item->id, $path))
                    {
                        $class .= ' active';
                    }
                    elseif ($item->type == 'alias')
                    {
                        $aliasToId = $item->params->get('aliasoptions');

                        if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
                        {
                            $class .= ' active';
                        }
                        elseif (in_array($aliasToId, $path))
                        {
                            $class .= ' alias-parent-active';
                        }
                    }

                    if ($item->type == 'separator')
                    {
                        $class .= ' divider';
                    }

                    if ($item->deeper)
                    {
                        $class .= ' dropdown';
                    }

                    if ($item->parent)
                    {
                        $class .= ' parent';
                    }

                    if (!empty($class))
                    {
                        $class = ' class="' . trim($class) . '"';
                    }

                    echo '<li' . $class . '>';

                    // Render the menu item.
                    switch ($item->type) :
                        case 'separator':
                        case 'url':
                        case 'component':
                        case 'heading':
                            require JModuleHelper::getLayoutPath('mod_menu', 'mainmenu_' . $item->type);
                            break;

                        default:
                            require JModuleHelper::getLayoutPath('mod_menu', 'mainmenu_url');
                            break;
                    endswitch;

                    // The next item is deeper.
                    if($item->deeper)
                    {
                        echo '<ul class="dropdown-menu">';
                    }
                    elseif($item->shallower)
                    {
                        // The next item is shallower.
                        echo '</li>';
                        echo str_repeat('</ul></li>', $item->level_diff);
                    }
                    else
                    {
                        // The next item is on the same level.
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
