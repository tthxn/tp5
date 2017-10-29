{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 订单管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>订单管理</li>
                <li><i class="fa fa-file-text-o"></i>订单编辑</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <section class="panel">


                <header class="panel-heading">
                    订单编辑
                </header>
                <div class="panel-body">
                <form action="/admin/orders/{$oldData['id']}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
<!--                        加上这句话，update的请求类型是PUT，模拟了put请求-->
                    <input type="hidden" name="_method" value="PUT" >



                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">订单编号:</label>
                        <div class="col-sm-10">
                            <input type="text" name="order_number" id="inputID" class="form-control" value="{$oldData['order_number']}" readonly
                                   required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">收件人:</label>
                        <div class="col-sm-10">
                            <input type="text" name="receive_name" id="inputID" class="form-control" value="{$oldData['receive_name']}"
                                   required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">收件电话:</label>
                        <div class="col-sm-10">
                            <input type="text" name="receive_tel" id="inputID" class="form-control" value="{$oldData['receive_tel']}"
                                   required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">收件地址:</label>
                        <div class="col-sm-10">
                            <input type="text" name="receive_address" id="inputID" class="form-control" value="{$oldData['receive_address']}"
                                   required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">订单状态:</label>
                        <div class="col-sm-10">
                            <input type="radio" name="order_status" id="inputID" value="未支付" <?php if($oldData['order_status']=="未支付") echo 'checked'?>>未支付
                            <input type="radio" name="order_status" id="inputID" value="已支付" <?php if($oldData['order_status']=="已支付") echo 'checked'?>>已支付
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <label class="col-sm-3"></label>
                            <button type="submit" class="btn btn-primary col-sm-2" >提交</button>
                            <label class="col-sm-1"></label>
                            <a href="/admin/orders" type="submit" class="btn btn-primary col-sm-2" >返回</a>
                        </div>
                    </div>



                </form>
        </div>
            </section>

        </div>
    </div>

</section>

{/block}