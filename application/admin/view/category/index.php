{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 栏目管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>栏目管理</li>
                <li><i class="fa fa-file-text-o"></i>栏目列表</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    栏目列表
                </header>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>编号</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $v): ?>
                            <tr>
                                <td key="{$v['id']}">{$v['id']}</td>
                                <td>{$v['_name']}</td>
                                <td>{$v['order']}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/admin/category/{$v['id']}/edit"
                                           class="btn btn-default btn-xs btn-primary">编辑</a>
                                        <a cid="{$v['id']}" href="javascript:;"
                                           class="btn btn-default btn-xs btn-danger delcate">删除</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>


                    <script>
//                        直接删除，不出现弹框
//                        $('.delcate').click(function () {
//                            var id = $(this).attr('cid');
//                            //将来要删除的tr
//                            tr = $(this).parents('tr');
//                            $.ajax({
//                                url: '/admin/category/' + id,
//                                method:'DELETE',
//                                success: function (response) {
//                                    tr.remove();
////                                    刷新
////                                    location.reload();
//                                }
//                            })
//                        })

//删除，有弹框
                        $('.delcate').click(function () {
                            var id = $(this).attr('cid');
//                        alert(id);
//                        要删除的行
                            tr = $(this).parents('tr');
                            layer.alert('确定删除吗', {
                                skin: 'layui-layer-molv' //样式类名
                                , closeBtn: 0,
                                btn: ['确定', '取消']
                            }, function () {
                                $.ajax({
                                    url: '/admin/category/' + id,
                                    method: 'DELETE',
                                    success: function (response) {
                                        if(response.data==0){
                                            layer.msg(response.msg);
                                        }else{
                                            layer.msg('删除成功');
                                            tr.remove();

                                        }
//                                        console.log(response.msg);
//                                    刷新
//                                    location.reload();
//                                    location.href = '/admin/goods';

                                    }
                                });

                            });
                        })

                    </script>

                </div>
            </section>

        </div>
    </div>

</section>

{/block}