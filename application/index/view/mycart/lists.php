{extend name="base" /}
{block name="center-content"}

<div id="j-cartPage">
    <div class="g-bd">
        <div class="g-row">


<?php if($da['goods'] !=null ): ?>
            <div class="m-cart" id="app">
                <div id="j-cart-body" class="all-cart">
                    <blockquote class="layui-elem-quote layui-quote-nm">购物车</blockquote>
                    <div style="display:block;">
                        <div class="tt">
                            <div class="w w1 left">
                                <div class="w-chkbox">
<!--                                    <input type="checkbox">-->
                                    <span class="all"></span>
                                </div>
                            </div>
                            <div class="w w2 left">商品信息</div>
                            <div class="w w3">单价</div>
                            <div class="w w4">数量</div>
                            <div class="w w-2 w5">小计</div>
                            <div class="w w-1 w6">操作</div>
                        </div>
                    </div>
                    <div style="display:block;">
                        <div class="cart-group">

<!--商品循环开始 ///////////////////////////////////////////////////////  -->

                            <?php foreach ($data as $k => $info):?>
                                <div class="cart-item f-cb">
                                    <div class="item w7">
                                        <div class="ck">
                                            <div class="w-chkbox">
<!--                                                <input type="checkbox" class="" title="" checked="">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item w8">
                                        <div class="pic">
                                            <a href="/content/{$info['id']}" target="_blank">
                                                <img src="<?php if(isset($info['main_image'])){echo $info['main_image'];}else{echo '';} ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="nameCon f-word-break f-text-overflow">
                                            <a class="pname f-word-break f-text-overflow" href="" target="_blank">{$info['name']}</a>
                                            <div class="spec">
                                                <a href="javascript:void(0);" class="f-text-overflow">
                                                    <span>{$info['options']['attr']}</span>
                                                    <i class="w-icon-arrow arrow-down-hollow-gray-s"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
<!--                                    单价-->
                                    <div class="item item-1 w3">
                                        <p class="price">
                                        <span class="aprice">
                                            <span>¥</span>
                                            <span id="price">{$info['price']}</span>
                                        </span>
                                        </p>
                                    </div>
<!--                                    数量-->
                                    <div class="item item-2 w4">
                                        <div class="def" id="{$info['id']}">
                                            <div class="u-selnum u-selnum-cart"  sid="{$k}">
                                                <span class="j-reduce less">
                                                    <i class="hx"></i>
                                                </span>
                                                <input class="j-input" type="text" value="{$info['num']}">
                                                 <span class="j-add more">
                                                    <i class="hx"></i>
                                                    <i class="sx"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
<!--                                    小计-->
                                    <div class="item item-3 w5">
                                        <p class="price sprice">
                                            <span>¥</span>
                                            <span class="total">{$info['total']}</span>
                                        </p>
                                    </div>
                                    <div class="item item-5 w6">
<!--                                        <div class="operate">-->
<!--                                            <a href="javascript:void(0);">移入收藏夹</a>-->
<!--                                        </div>-->
                                        <div class="operate">
                                            <a class="del" cid="{$k}" href="javascript:void(0);">删除</a>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="hr hr-1"></div>
                                </div>
                            <?php endforeach; ?>
<!--//////////////////////////////////商品循环结束/////////////////////////////////////////-->
                        </div>
                    </div>
                </div>
<!--                如果想要在底部固定， 在<div class="cart-total" style="display:block;">中加上cart-total-fixed这个类-->
                <div class="cart-total" style="display:block;">
                    <div class="w-chkbox">
<!--                        <input type="checkbox">-->
                        <span> </span>
                        <a class="mgl30" href="javascript:;"> </a>
                        <a class="mgl30" href="javascript:;"> </a></div>
                    <div class="info f-fr">
                        <button type="button" class="w-button w-button-xl w-button-primary" id="cartorder">下单</button>
                    </div>
                    <div class="info f-fr mgr25">
                        <div class="line"><span class="mgr f-fr">
                                <span class="label f-fl">应付总额：</span>
                                <span class="price f-fl">
                                    <span>¥</span>
                                    <span id="pay">{$da['total']}</span>
                                </span>
                            </span>
                            <div class="tip f-fr">
                                <span class="item">活动优惠&nbsp;:&nbsp;</span>
                                <span class="con">
                                    <span>-¥</span>
                                    <span>0.00</span>
                                </span>
                            </div>
                        </div>
                        <div class="line line-1">
                            <a class="freight-tip" target="_blank" href="">
                                <span> </span>
                                <span> </span>
                                <span> </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
<?php else: ?>
            <div class="m-cart"  id="empty">
                <div id="j-cart-body" class="all-cart">
                    <div style="display: none;">
                        <div class="cart-empty">
                            <div class="warp warp-1">
                                <img src="">
                            </div>
                        </div>
                    </div>
                    <!--                    空购物车-->
                    <div>
                        <div class="cart-empty">
                            <div class="warp">
                                <i class="w-icon-cart cart-emptycart"></i>
                                <p class="text">购物车还是空滴</p>
                                <p class="btnLine">
                                    <a class="w-button w-button-primary <?php echo session('user.username') ? 'f-hide' : '' ?>"  href="/index/login">登录</a>
                                    <a class="w-button w-button-ghost" href="/">继续逛</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--                    空购物车结束-->
                </div>
            </div>
<?php endif;?>

            <script>
                $(function () {
//               删除购物车中的某一条
                    $('.del').click(function () {
                        var id = $(this).attr('cid');
//                        alert(id);
//                        要删除的行
                        tr = $(this).parents('.cart-item');
                        layer.alert('确定删除吗', {
                            skin: 'layui-layer-molv' //样式类名
                            , closeBtn: 0,
                            btn:['确定','取消']
                        }, function () {
                            $.ajax({
                                url: '/mycart/del/' + id,
                                method: 'DELETE',
                                success: function (data) {
//                                    console.log(data);
//                                    去掉这一行
                                    tr.remove();
//                                    修改总价价格
                                    $('#pay').text(data.totalPrice);
                                    if(data.goodsNum == 0){
                                        location.href='/mycart/lists'
                                    }
                                }
                            });
                            layer.msg('删除成功');
                        });
                    })

//                  点击+号，数字跟着变化，价格也跟着一起变化
                    $('.j-add').click(function () {
                        var that = $(this);
//                        点击+,数字值变换
                        var j = $(this).parent('.u-selnum-cart').find('.j-input').attr('value');
                        var i = parseInt(j);
                        i = i + 1;
                        $(this).parent('.u-selnum-cart').find('.j-input').attr('value', i);
//                        获取当前的sid的值
                        var sid = $(this).parent('.u-selnum-cart').attr('sid');
                        var $arr = i + '/' + sid;
                        $.ajax({
                            url:'/mycart/update/' ,
                            data:{'page':$arr},
                            type:'post',
                            success:function (response) {
//                                console.log(response);
//                                给小计设置值
                                that.parents('.cart-item').find('.total').text(response.smallPrice);
//                              给总额设置值,错误写法,这里不可以用$(this),指的是ajax里面的function，
//                              我们需要用的是当前点击的这个按钮，因此需要在外部接收一下var that = $(this);之后，用that寻找
//                                $(this).parents('.all-cart').siblings('.cart-total').find('#pay').text(t);//错误写法
                                that.parents('.all-cart').siblings('.cart-total').find('#pay').text(response.totalPrice);//正确写法

                            }
                        })
                    })
//                    点击-数值变换
                    $('.j-reduce').click(function () {
                        var j = $(this).parent('.u-selnum-cart').find('.j-input').attr('value');
                        if (j == 1) {
//                            console.log(j);
                        } else {
                            var i = parseInt(j);
                            i = i - 1;
                            $(this).parent('.u-selnum-cart').find('.j-input').attr('value', i);
                            //                        获取当前的sid的值
                            var sid = $(this).parent('.u-selnum-cart').attr('sid');
                            var $arr = i + '/' + sid;
                            var that = $(this);
                            $.ajax({
                                url:'/mycart/update/' ,
                                data:{'page':$arr},
                                type:'post',
                                success:function (response) {
//                                console.log(response);
//                                给小计设置值
                                    that.parents('.cart-item').find('.total').text(response.smallPrice);
//                              给总额设置值,错误写法,这里不可以用$(this),指的是ajax里面的function，
//                              我们需要用的是当前点击的这个按钮，因此需要在外部接收一下var that = $(this);之后，用that寻找
//                                $(this).parents('.all-cart').siblings('.cart-total').find('#pay').text(t);//错误写法
                                    that.parents('.all-cart').siblings('.cart-total').find('#pay').text(response.totalPrice);//正确写法

                                }
                            })
                        }
                    })

//                    点击下单，跳转页面
                    $('#cartorder').click(function () {
                        location.href='/index/order/cartorder';
                    })

                })
            </script>


        </div>
    </div>
</div>
{/block}