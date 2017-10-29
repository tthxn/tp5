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
                    <form class="form-horizontal" action="/admin/category/{$oldData['id']}" method="post">
<!--                        加上这句话，update的请求类型是PUT，模拟了put请求-->
                        <input type="hidden" name="_method" value="PUT" >


                        <div class="form-group">
                            <label class="col-sm-2 control-label">栏目名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{$oldData['name']}">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属栏目</label>
                            <div class="col-sm-10">
                                <select name="pid" id="inputID" class="form-control">
                                    <option value="0"> -- 顶级栏目 --</option>
                                    <?php foreach($data as $v): ?>
                                        <option value="{$v['id']}" style="display: {$v['_disabled'] ? 'none':''};" {$oldData['pid']==$v['id'] ? 'selected' : ''} > {$v['_name']} </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">排列顺序</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="order" value="{$oldData['order']}">
                                <span class="help-block"></span>
                            </div>
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