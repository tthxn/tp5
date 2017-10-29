{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 修改密码</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>修改密码</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    修改密码
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" action="/admin/pwd/changePwd" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">旧密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="old_password" >
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">新密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">确认密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <br><br>
                                <button type="password" class="btn btn-primary" style="float: right">提交</button>
                            </div>
                        </div>

                    </form>


                </div>
            </section>

        </div>
    </div>

</section>

{/block}