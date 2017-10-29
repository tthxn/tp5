<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Orders extends Migrator
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

        $table = $this->table( 'orders' );
        $table->addColumn( 'users_id', 'integer', array(
            'default' => 0,
            'comment' => '用户id',
            'signed'  => 'unsigned'
        ) )
            ->addColumn( 'order_number', 'string', array(
                'default' => '',
                'comment' => '订单号'
            ) )
            ->addColumn( 'total', 'decimal', array(
                'signed'    => 'unsigned',
                'precision' => 7,
                'scale'     => 2,
                'default'   => 0,
                'comment'   => '总价'
            ) )
            ->addColumn( 'order_time', 'date', array(
                'default' => 0,
                'comment' => '下单时间'
            ) )
            ->addColumn( 'receive_name', 'string', array(
                'limit' => 20,
                'default' => '',
                'comment' => '收货人'
            ) )
            ->addColumn( 'receive_tel', 'string', array(
                'default' => '',
                'comment' => '收货电话',
            ) )
            ->addColumn( 'receive_address', 'string', array(
                'default' => '',
                'comment' => '收货地址',
            ) )
            ->addColumn( 'address_id', 'integer', array(
                'default' => 0,
                'comment' => '收货地址id',
            ) )
            ->addColumn( 'order_status', 'string', array(
                'default' => '',
                'comment' => '订单状态',
            ) )
            ->addColumn( 'logistics', 'string', array(
                'default' => '',
                'comment' => '物流信息',
            ) )
            ->addTimestamps()
            ->create();
    }
}
