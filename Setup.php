<?php

namespace DevPandi\NodeIcons;

use XF\AddOn\AbstractSetup;
use XF\Db\Schema\Alter;

class Setup extends AbstractSetup
{
    public function install(array $stepParams = [])
    {
        $this->schemaManager()->alterTable(
            'xf_node',
            function (Alter $node_table) {
                $node_table->addColumn('pandi_own_icon', 'tinyint')->setDefault(0);
                $node_table->addColumn('pandi_icon', 'varchar')->length(255)->setDefault('far fa-paw');
                $node_table->addColumn('pandi_icon_new', 'varchar')->length(255)->setDefault('fas fa-paw');
            }
        );
    }

    public function upgrade(array $stepParams = [])
    {
    }

    public function uninstall(array $stepParams = [])
    {
        $this->schemaManager()->alterTable(
            'xf_node',
            function (Alter $node_table) {
                $node_table->dropColumns(['pandi_own_icon', 'pandi_icon_new', 'pandi_icon']);
            }
        );
    }
}