<?php

namespace DevPandi\NodeIcons\Listener;

use XF\MvC\Entity\Entity;
use XF\Mvc\Entity\Manager;
use XF\Mvc\Entity\Structure;

class Listener
{
    public static function nodeEntityStructure(Manager $em, Structure &$structure)
    {
        $structure->columns['pandi_own_icon'] = ['type' => Entity::BOOL, 'default' => false, 'nullable' => false];
        $structure->columns['pandi_icon'] = ['type' => Entity::STR, 'default' => 'far fa-paw', 'nullable' => false];
        $structure->columns['pandi_icon_new'] = ['type' => Entity::STR, 'default' => 'fas fa-paw', 'nullable' => false];
    }
}
