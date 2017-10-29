{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 商品管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>商品管理</li>
                <li><i class="fa fa-file-text-o"></i>商品列表</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    商品列表
                </header>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>商品id</th>
                            <th>商品名称</th>
                            <th>图片</th>
                            <th>所属栏目</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($goods as $v): ?>
                            <tr cid="{$v['id']}">
                                <td>{$v['id']}</td>
                                <td><?php echo $v['name']; ?></td>
                                <td>
                                    <img src="<?php echo $v['list_image']; ?>" alt="" style="width: 100px;">
                                </td>
                                <td>{$v->category->name}</td>
                                <td>
                                    <a href="/admin/goods/{$v['id']}/edit" class="btn btn-primary btn-sm">编辑</a>
                                    <a href="javascript:;" cid="{$v['id']}" class="btn btn-danger btn-sm aa">删除</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
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
                                url: '/admin/goods/' + id,
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

                    </script>

                </div>
            </section>
        </div>
    </div>

</section>

{/block}