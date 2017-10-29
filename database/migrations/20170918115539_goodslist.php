<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Goodslist extends Migrator
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
    public function change() {
        $table = $this->table( 'goodslist' );
        $table->addColumn( 'attr', 'string', array(
            'limit'   => 255,
            'default' => '',
            'comment' => '属性组合，例如：红色|x'
        ) )
            ->addColumn( 'inventory', 'integer', array(
                'default' => 0,
                'comment' => '库存'
            ) )
            ->addColumn( 'goods_id', 'integer', array(
                'default' => 0,
                'comment' => '所属商品',
                'signed'  => 'unsigned'
            ) )
            ->create();
    }
}
