{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> 商品管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">首页</a></li>
                <li><i class="icon_document_alt"></i>商品管理</li>
                <li><i class="fa fa-file-text-o"></i>商品添加</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <form action="/admin/goods" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

                <header class="panel-heading">
                    商品添加
                </header>
                <div class="panel-body">
                
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">商品名称:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="inputID" class="form-control" value="" title=""
                                       required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">所属栏目:</label>
                            <div class="col-sm-10">
                                <select name="category_id" id="inputID" class="form-control">
                                    <?php foreach ($category as $v): ?>
                                    <option value="{$v['id']}">{$v['_name']}</option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">商品价格:</label>
                            <div class="col-sm-10">
                                <input type="text" name="price" id="inputID" class="form-control" value="" title=""
                                       required="required">
                            </div>
                        </div>

<!--                    主图-->
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">主图/列表页图片:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="list_image" readonly="">
                                    <div class="input-group-btn">
                                        <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                                    </div>
                                </div>
                                <div class="input-group" style="margin-top:5px;">
                                    <img src="/static/admin/img/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                                    <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片"
                                        onclick="removeImg(this)">×</em>
                                </div>
                            </div>
                            <script>
                                //上传图片
                                function upImage(obj) {
                                    require(['util'], function (util) {
                                        options = {
                                            multiple: false,//是否允许多图上传
                                        };
                                        util.image(function (images) {          //上传成功的图片，数组类型
                                            $("[name='list_image']").val(images[0]);
                                            $(".img-thumbnail").attr('src', images[0]);
                                        }, options)
                                    });
                                }

                                //移除图片
                                function removeImg(obj) {
                                    $(obj).prev('img').attr('src', '/static/admin/img/nopic.jpg');
                                    $(obj).parent().prev().find('input').val('');
                                }
                            </script>
                        </div>
                        <!--主图结束-->

<!--                    辅图-->
                        <div class="form-group" id="pict">
                            <label for="inputID" class="col-sm-2 control-label">辅图/详情页图片:</label>
                            <div class="col-sm-8" >
                                <div class="box">
                                    <input type="file"  id="inputID" name='content_images[]' class="form-control" required="required">
                                </div>
                            </div>
                            <button  type="button" class="btn btn-primary add " >增加一项</button>
                            <script>
                                $(function () {
                                    //增加一项
                                    $('.add').click(function () {
                                         var obj = '<div class="boxx "><hr><input type="file" name="content_images[]" class="form-control"> <button class="btn btn-danger btn-xs remove">删除一项</button></div>'
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
                            <label for="inputID" class="col-sm-2 control-label">查看次数:</label>
                            <div class="col-sm-10">
                                <input type="text" name="click" id="inputID" class="form-control" value="" title=""
                                       required="required">
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">商品描述:</label>
                        <div class="col-sm-10">
                            <input type="text" name="desc" id="inputID" class="form-control" value="" title="">
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">商品详情:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control ckeditor" name="content" rows="6"></textarea>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">是否新品:</label>
                        <div class="col-sm-10">
                            <input type="radio" name="isnew" id="inputID" value="1">是
                            <input type="radio" name="isnew" id="inputID" value="0" checked>否
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">是否热门:</label>
                        <div class="col-sm-10">
                            <input type="radio" name="ishot" id="inputID" value="1">是
                            <input type="radio" name="ishot" id="inputID" value="0" checked>否
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-2 control-label">是否推荐:</label>
                        <div class="col-sm-10">
                            <input type="radio" name="iscommend" id="inputID" value="1">是
                            <input type="radio" name="iscommend" id="inputID" value="0" checked>否
                        </div>
                    </div>
                </div>


<!--                    货品列表，vue影响区域-->
                    <div class="panel panel-default" id="app">
                        <div class="panel-heading">
                            <h3 class="panel-title">货品列表</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-default" v-for="(v,k) in goodslist">
                                <div class="panel-heading">
                                    <h3 class="panel-title">商品{{k+1}}</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="inputID" class="col-sm-2 control-label">综合属性:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="inputID" class="form-control" value=""
                                                   v-model="v.attr" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputID" class="col-sm-2 control-label">库存:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="inputID" class="form-control" value=""
                                                   v-model="v.inventory" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-footer">
                                        <button class="btn btn-danger btn-xs" @click.prevent="del(k)">删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--隐藏域，查看提交的内容，注意这部分应该放在vue影响的区域，否则会不起效果-->
                        <textarea name="goodslist" hidden cols="30" rows="10">{{goodslist}}</textarea>

                        <div class="panel-footer">
                            <button class="btn btn-primary btn-xs" @click.prevent="add">添加货品</button>
                        </div>
                    </div>

<!--货品列表结束,vue影响区域结束-->


                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <label class="col-sm-4"></label>
                            <button type="submit" class="btn btn-primary col-sm-3" >提交</button>
                        </div>
                    </div>

                    <script>
                        new Vue({
                            el:"#app",
                            data:{
                                goodslist:[]
                            },
                            methods:{
                                add(){
                                    var field = {attr:'',inventory:''};
                                    this.goodslist.push(field);
                                },
                                del(k){
                                    this.goodslist.splice(k,1);
                                }

                            }
                        })
                    </script>
                </form>
            </section>

        </div>
    </div>

</section>

{/block}