<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
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
//        创建表
        $table = $this->table('users');
//        添加字段
        $table->addColumn('username', 'string', array('limit' => 15, 'default' => '', 'comment' => '用户名，登陆使用'))
            ->addColumn('password', 'string', array(
                'limit' => 32,
                'default' => md5('123456'),
                'comment' => '用户密码'
            ))
            ->addColumn('is_admin', 'boolean', array('limit' => 1, 'default' => 0, 'comment' => '是否是后台，1是后台'))
            ->addColumn('login_time', 'date', array('default' => 0, 'comment' => '登陆时间'))
            ->addIndex(array('username'), array('unique' => true))
            ->create();
    }

}