<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Category extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('category');
        $table->addColumn( 'name', 'string', array( 'limit' => 15, 'default' => '', 'comment' => '栏目名称' ) )
            ->addColumn( 'pid', 'integer', array( 'default' => 0, 'comment' => '父级id' ) )
            ->addColumn( 'order', 'integer', array( 'default' => 0, 'comment' => '排列顺序' ) )
            ->addColumn( 'create_time', 'date', array( 'default' => 0, 'comment' => '创建时间' ) )
            ->addColumn( 'update_time', 'date', array( 'default' => 0, 'comment' => '修改时间' ) )
            ->create();
    }
}
