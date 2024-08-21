<?php

namespace DevPandi\NodeIcons\Admin\Controller;

use XF\Entity\Node;

class ForumController extends XFCP_ForumController {
    protected function nodeSaveProcess(Node $node)
    {
        $icons = $this->filter(['node' => [
            'pandi_icon' => 'str',
            'pandi_icon_new' => 'str',
        ]]);

        file_put_contents('test.txt', print_r($icons, true));

        $node->set('pandi_icon', $icons['node']['pandi_icon']);
        $node->set('pandi_icon_new', $icons['node']['pandi_icon_new']);

        return parent::nodeSaveProcess($node);
    }
}
