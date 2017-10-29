<?php

use think\migration\Migrator;
use think\migration\db\Column;
use Phinx\Db\Adapter\PostgresAdapter;
class Goods extends Migrator
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
        //decimal，precision是数据长度，scale是数据的小数点长度
        //例如decimal(7,2)那么就是precision是7，scale是2
        //addTimestamps 添加创建时间和更新时间字段
        //使用PostgresAdapter别忘记 use Phinx\Db\Adapter\PostgresAdapter;
        $table = $this->table( 'goods' );
        $table->addColumn( 'name', 'string', array( 'limit' => 150, 'default' => '', 'comment' => '商品名称' ) )
            ->addColumn( 'price', 'decimal', array(
                'signed'    => 'unsigned',
                'precision' => 7,
                'scale'     => 2,
                'default'   => 0,
                'comment'   => '价格'
            ) )
            ->addColumn( 'old_price', 'decimal', array(
                'signed'    => 'unsigned',
                'precision' => 7,
                'scale'     => 2,
                'default'   => 0,
                'comment'   => '价格'
            ) )
            ->addColumn( 'uptime', 'datetime', array( 'default' => 0, 'comment' => '上架时间' ) )
            ->addColumn( 'content_images', 'string', array(
                'limit'   => '1000',
                'default' => '',
                'comment' => '商品内容页图册，用|线隔开多张图片'
            ) )
            ->addColumn( 'list_image', 'string', array( 'limit' => '500', 'default' => '', 'comment' => '商品列表页图' ) )
            ->addColumn( 'desc', 'string', array( 'limit' => 150, 'default' => '', 'comment' => '商品描述' ) )
            ->addColumn( 'content', 'text', array( 'comment' => '商品详情' ) )
            ->addColumn( 'click', 'integer', array( 'limit'   => PostgresAdapter::INT_SMALL,
                'signed'  => 'unsigned',
                'default' => 0,
                'comment' => '查看次数'
            ) )
            ->addColumn( 'isnew', 'boolean', array(
                'limit' => 1,
                'default' => 1,
                'comment' => '是否首发，1是默认：是',
            ) )
            ->addColumn( 'ishot', 'boolean', array(
                'limit' => 1,
                'default' => 0,
                'comment' => '是否热门，0是默认：否',
            ) )
            ->addColumn( 'iscommend', 'boolean', array(
                'limit' => 1,
                'default' => 0,
                'comment' => '是否推荐，0是默认：否',
            ) )
            ->addColumn( 'category_id', 'integer', array( 'default' => 0, 'comment' => '所属栏目' ) )
            ->addTimestamps()
            ->create();
    }
}
