{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 订单管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>订单详情</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    订单详情
                    <span style="float: right;margin-right: 100px">
                        总价：<b>{$total['total']}</b>
                    </span>
                </header>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>图片</th>
                            <th>订单数量</th>
                            <th>小计</th>
                            <th>商品名称</th>
                            <th>属性</th>
                            <th>备注</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lists as $v):?>
                        <tr>
                            <td>{$v['id']}</td>
                            <td>
                                <img src="<?php echo $goods[$v['id']][0]['list_image']; ?>" width="100" height="100">

                            </td>
                            <td>{$v['number']}</td>
                            <td>{$v['subtotal']}</td>
                            <td><?php echo $goods[$v['id']][0]['name']; ?></td>
                            <td>{$v['goods_attr']}</td>
                            <td>{$v['remark']}</td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>


                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <label class="col-sm-3"></label>
                            <label class="col-sm-1"></label>
                            <a href="/admin/orders" type="submit" class="btn btn-primary col-sm-2" >返回</a>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

</section>

{/block}