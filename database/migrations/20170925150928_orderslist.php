<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Orderslist extends Migrator
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
        $table = $this->table( 'orderslist' );
            $table->addColumn( 'order_id', 'integer', array(
                'default' => 0,
                'comment' => '所属订单id',
                'signed'  => 'unsigned'
            ) )
            ->addColumn( 'number', 'integer', array(
                'default' => 0,
                'comment' => '购买数量'
            ) )
            ->addColumn( 'subtotal', 'integer', array(
                'default' => 0,
                'comment' => '价格小计'
            ) )
            ->addColumn( 'remark', 'string', array(
                'default' => '',
                'comment' => '备注',
            ) )
            ->addColumn( 'goods_id', 'integer', array(
                'default' => 0,
                'comment' => '商品id',
            ) )
            ->addColumn( 'goods_attr', 'string', array(
                'default' => '',
                'comment' => '商品属性',
            ) )
            ->addColumn( 'logistics', 'string', array(
                'default' => '',
                'comment' => '物流信息',
            ) )
            ->addTimestamps()
            ->create();
    }
}
