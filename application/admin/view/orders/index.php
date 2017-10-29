{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 订单管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>订单管理</li>
                <li><i class="fa fa-file-text-o"></i>订单列表</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    订单列表
                </header>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>订单id</th>
                            <th>订单编号</th>
                            <th>订单状态</th>
                            <th>物流状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $v):?>
                            <tr>
                                <td>{$v['id']}</td>
                                <td>{$v['order_number']}</td>
                                <td>{$v['order_status']}</td>
                                <td class="status">{$v['logistics']}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="javascript:;" sid="{$v['id']}" class="btn btn-danger btn-sm send">发货</a>
                                        <a href="/admin/orders/{$v['id']}" class="btn btn-success btn-sm">查看</a>
                                        <a href="/admin/orders/{$v['id']}/edit" class="btn btn-primary btn-sm">编辑</a>
                                        <a href="javascript:;" cid="{$v['id']}" class="btn btn-danger btn-sm aa">删除</a>
                                    </div>


                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                    <script>
                    $('.aa').click(function () {
                        var id = $(this).attr('cid');
//                        alert(id);
//                        要删除的行
                        tr = $(this).parents('tr');
                        layer.alert('确定删除吗', {
                            skin: 'layui-layer-molv' //样式类名
                            , closeBtn: 0,
                            btn:['确定','取消']
                        }, function () {
                            $.ajax({
                                url: '/admin/orders/' + id,
                                method: 'DELETE',
                                success: function (response) {
//                                    刷新
//                                    location.reload();
//                                    location.href = '/admin/goods';
                                    tr.remove();
                                }
                            });
                            layer.msg('删除成功');
                        });
                    })

                    $('.send').click(function () {
                        var id = $(this).attr('sid');
//                        alert(id);
//                        要删除的行
                        tr = $(this).parents('tr');
                        layer.alert('确定要发货吗', {
                            skin: 'layui-layer-molv' //样式类名
                            , closeBtn: 0,
                            btn:['确定','取消']
                        }, function () {
                            $.ajax({
                                url: '/admin/orders/sen/',
                                data:{id:id},
                                method: 'post',
                                success: function (response) {
//                                    console.log(response);
                                    if(response.code==200){
                                        layer.msg('发货成功');
                                        tr.find('.status').text('已发货')
                                    }
                                    if(response.code==0){
                                        layer.msg('还未支付订单，不能发货');
                                    }
//
                                }
                            });
//                            layer.msg('');
                        });
                    })

                    </script>

                </div>
            </section>
        </div>
    </div>

</section>

{/block}