<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Address extends Migrator
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
        $table = $this->table( 'address' );
        $table->addColumn( 'users_id', 'integer', array(
            'default' => 0,
            'comment' => '用户id',
            'signed'  => 'unsigned'
        ) )
            ->addColumn( 'province', 'string', array(
                'default' => '',
                'comment' => '省'
            ) )
            ->addColumn( 'city', 'string', array(
                'default' => '',
                'comment' => '市'
            ) )
            ->addColumn( 'country', 'string', array(
                'default' => '',
                'comment' => '区'
            ) )
            ->addColumn( 'address', 'string', array(
                'default' => '',
                'comment' => '详细地址',
            ) )
            ->addColumn( 'name', 'string', array(
                'default' => '',
                'comment' => '收货人',
            ) )
            ->addColumn( 'mobile', 'integer', array(
                'default' => 0,
                'comment' => '收件人手机号',
            ) )
            ->addColumn( 'is_default', 'boolean', array(
                'limit' => 1,
                'default' => 0,
                'comment' => '是否默认地址，1是默认',
            ) )
            ->create();
    }
}
