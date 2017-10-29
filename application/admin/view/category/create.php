{extend name="base" /}
{block name="content"}
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> 栏目管理</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                    <li><i class="icon_document_alt"></i>栏目管理</li>
                    <li><i class="fa fa-file-text-o"></i>栏目添加</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        栏目添加
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" action="/admin/category" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属栏目</label>
                                <div class="col-sm-10">
                                    <select name="pid" id="inputID" class="form-control">
                                        <option value="0"> -- 顶级栏目 --</option>
                                        <?php foreach($data as $v): ?>

                                        <option value="{$v['id']}"> {$v['_name']}</option>

                                        <?php endforeach ?>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group" id="pict">
                                <label for="inputID" class="col-sm-2 control-label">栏目名称</label>
                                <div class="col-sm-8" >
                                    <div class="box">
                                        <input type="text"  id="inputID" name='name[]' class="form-control" required="required">
                                    </div>
                                </div>
                                <button  type="button" class="btn btn-primary add " >批量添加</button>
                                <script>
                                    $(function () {
                                        //增加一项
                                        $('.add').click(function () {
                                            var obj = '<div class="boxx "><hr><input type="text" name="name[]" class="form-control"> <button class="btn btn-danger btn-xs remove">删除一项</button></div>'
                                            $('.box').append(obj);
                                        })
                                        //删除一项
                                        $('.box').delegate('.remove', 'click', function () {
                                            $(this).parent('.boxx').remove();
                                        });
                                    })
                                </script>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-10">
                                    <br><br>
                                    <button type="submit" class="btn btn-primary" style="float: right">提交</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>

            </div>
        </div>

    </section>

{/block}




