<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"F:\www\thinkphp\public/../application/index\view\mycart\lists.php";i:1506694484;s:57:"F:\www\thinkphp\public/../application/index\view\base.php";i:1507906367;}*/ ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico?r=gold" type="image/x-icon" />
    <meta property="qc:admins" content="365774662561636375" />
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/style/css/style-12909ab9ae.css" type="text/css" />
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/dist/index-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/style/css/page/index-6e488077c1.css">
    <link rel="stylesheet" type="text/css" href="/static/home/yanxuan.nosdn.127.nethxm/yanxuan-component/p/20170601/js/dist/yxComponent.all.min.css-v=1505963072142.css" >
    <!--[if lt IE 9]>
    <script src="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/ie-23e126e677.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="1;url=error/lowVersionBrowser.htm" tppabs="http://you.163.com/error/lowVersionBrowser" />
    <script>top.window.location.href='error/lowVersionBrowser.htm'/*tpa=http://you.163.com/error/lowVersionBrowser*/;</script>
    <![endif]-->
    <script src="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/vender-c1479496a3.js"></script>


<!--    列表页、内容页、购物车引入文件-->
    <link rel="stylesheet" href="/static/home/css/index-0f4fca60a4.page.css">
    <link rel="stylesheet" href="/static/home/css/list-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/list-0239afde78.css">
    <link rel="stylesheet" href="/static/home/css/list-10a91bd2e4.css">
<!--    <link rel="stylesheet" type="text/css" href="/static/home/css/yxComponent.all.min.css">-->
    <link rel="stylesheet" href="/static/home/css/cart-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/cart-7dce11bf5a.css">
    <link rel="stylesheet" href="/static/home/css/index-b49af0d5e0.page.css">
<!--列表页、内容页、购物车、引入文件结束-->

    <script src="/static/home/js/jquery.js"></script>
    <script src="/static/home/js/vue.js"></script>

    <link rel="stylesheet" href="/static/home/css/layer.css">
    <script src="/static/home/js/layer.js"></script>

    <link rel="stylesheet" href="/static/home/layui/css/layui.css">
    <script src="/static/home/layui/layui.js"></script>

<!--    选择付款方式-->
    <link rel="stylesheet" href="/static/home/css/toPay-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/toPay-7cbe21654f.css">
    <link rel="stylesheet" type="text/css" href="/static/home/css/yxComponent.all.min.css">
</head>
<body>
<!-- 头部 -->
<header class="g-hd" id="gTopbar">
    <div id="j-siteNav" class="m-siteNav">
        <div class="g-row">
            <a class="declare" href="javascript:;">生活的品质，源于您的选择</a>

            <div class="right">
<!--                判断用户是否登陆-->
                <?php if(session('user')): ?>
                    <div id="loginInfoWrap" style="float: left">
                        <div class="js-userCenter userCenter w-dropdown w-dropdown-text">
                            <a href="javascript:;" class="js-userCenterToggle toggle" data-jq-dropdown="#js-userCenterDropdown1">
                                <span class="text j-nickname"><?php echo session('user.username'); ?></span>
                                <i class="w-icon-arrow arrow-up-hollow"></i>
                            </a>
                            <div id="js-userCenterDropdown1" class="jq-dropdown jq-dropdown-relative jq-dropdown-anchor-right" style="display: none; left: -7px; top: 36px;">
                                <nav class="jq-dropdown-menu dropdownMenu">
                                    <a class="item couponLink" href="/myorder">我的订单</a>
                                    <a class="item" href="/index/login/logout">退出登录</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                <?php else: ?>


<!--                    如果没有登陆就显示登陆注册-->
                <a class="login j-topLogin" href="/index/login" title="登录">登录</a>
                    <div class="split"></div>
                <a class="register j-topRegister" href="/index/register">注册</a>
                <?php endif ?>


<!--                <a class="attitude" href="/myorder">我的订单</a>-->
<!--                <div class="split"></div>-->

            </div>
        </div>
    </div>
    <div id="js-funcTabWrap">
        <div id="js-funcTab" class="m-funcTab">
            <div class="g-row">
<!--                <a class="tab-logo" href="/" title="" target="_top"></a>-->
            <a class="tab-logo" style="position: absolute;top: 50px;left: 455px;z-index: 2;background: url(/static/home/image/title.jpg) center;"></a>
               <!--  <a class="tab-logo-fixed" href="/" title="" target="_top"></a> -->
                <div class="tab-inner">
                    <div class="m-search">
<!--                        我的购物车-->
                        <a class="w-button-cart j-button-cart" href="/mycart/lists">
                            <i class="w-icon-cart cart-blackcart"></i>

                        </a>
                        <span id="span-cart-number"></span>
<!--                        搜索-->
                        <div class="m-searchInput" id="j-search">
                            <div class="w-button-search j-searchButton">
                                <i class="layui-icon header-search" style="color: #B1A074;font-size: 24px">&#xe615;</i>
                            </div>
                            <div class="j-showDefaultWord showDefaultWord">
                                中秋礼物买一送一
                            </div>
                            <input type="text" maxlength="100" class="w-searchInput j-searchInput" value="">
                            <div class="m-ppnl f-hide j-searchSuggest">
                                <div class="j-ssContent"></div>
                            </div>
                        </div>
                        <script>
                            $(function () {
                                var a = $('.w-searchInput').val();
                                if(a){
                                    $('.j-showDefaultWord').hide();
                                }
                                $("input.w-searchInput").focus(function(){
                                    $('.j-showDefaultWord').hide();
                                });

                                $('.layui-icon.header-search').click(function () {
//                                    alert(a);
                                    var a = $('.w-searchInput').val();
//                                    alert(a);
                                    if(a){
                                        location.href = '/lis/'+a;
                                    }
                                })
                            })
                       </script>

                    </div>
<!--                    导航-->
                    <ul class="tab-nav">
                        <?php
//                        p(request()->path());
                        if(substr(request()->path(),0,5)=='lists'){
                            $aum = ltrim(strrchr(request()->path(),'/'),'/');
                        }else{
                            $aum = '';
                        }
                        if(substr(request()->path(),0,7)=='content'){
                            $act = ltrim(strrchr(request()->path(),'/'),'/');
                            foreach($goo as $go){
                                if($go['id']==$act){
                                    $cid = $go['category_id'];
                                }
                            }
                        }else{
                            $cid = '';
                        }

                        ?>
                        <li class='nav-item first <?php if(!$aum && !$cid){?>active<?php } ?>'>
                            <a class="topLevel" title="首页" href="/">首页</a>
                        </li>

                        <?php foreach($category as $v):?>
                            <li class='j-nav-item nav-item <?php if($aum==$v['id'] || $v['id']==$cid){?>active<?php } ?>'>
                                <a class="topLevel" title="<?php echo $v['name']; ?>" href="/lists/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <script>
                        $(function () {
                            $('.j-nav-item').click(function () {
                                $(this).addClass('active');
                                $(this).siblings('li').removeClass('active');
                            })
                        })
                    </script>
                    <a class="w-cart j-cart" href="/mycart/lists">
                        <i class="w-icon-cart cart-blackcart"></i>
                        <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-num2">0</i>
                    </a>
                    <div class="j-mini-cart m-mini-cart j-newMiniCart">
                        <div id="newMiniCart"></div>
                    </div>
                </div>
                <div class="notLogin">
                    <a class="login j-topLogin" href="/index/login" title="登录">登录</a>
                    <a class="register j-topRegister" href="">注册</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<!--中间部分-->


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
                                            <a href="/content/<?php echo $info['id']; ?>" target="_blank">
                                                <img src="<?php if(isset($info['main_image'])){echo $info['main_image'];}else{echo '';} ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="nameCon f-word-break f-text-overflow">
                                            <a class="pname f-word-break f-text-overflow" href="" target="_blank"><?php echo $info['name']; ?></a>
                                            <div class="spec">
                                                <a href="javascript:void(0);" class="f-text-overflow">
                                                    <span><?php echo $info['options']['attr']; ?></span>
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
                                            <span id="price"><?php echo $info['price']; ?></span>
                                        </span>
                                        </p>
                                    </div>
<!--                                    数量-->
                                    <div class="item item-2 w4">
                                        <div class="def" id="<?php echo $info['id']; ?>">
                                            <div class="u-selnum u-selnum-cart"  sid="<?php echo $k; ?>">
                                                <span class="j-reduce less">
                                                    <i class="hx"></i>
                                                </span>
                                                <input class="j-input" type="text" value="<?php echo $info['num']; ?>">
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
                                            <span class="total"><?php echo $info['total']; ?></span>
                                        </p>
                                    </div>
                                    <div class="item item-5 w6">
<!--                                        <div class="operate">-->
<!--                                            <a href="javascript:void(0);">移入收藏夹</a>-->
<!--                                        </div>-->
                                        <div class="operate">
                                            <a class="del" cid="<?php echo $k; ?>" href="javascript:void(0);">删除</a>
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
                                    <span id="pay"><?php echo $da['total']; ?></span>
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

<!--中间部分结束-->




<footer class="g-fttta">
    <div class="m-ft2">
        <div class="g-row">
            <ul class="m-siteEnsure">
                <li class="item">
                    <div class="inner"><i class="icon w-icon-foot foot-ft1"></i><p class="text">品质保证</p></div>
                </li>
                <li class="item">
                    <div class="inner"><i class="icon w-icon-foot foot-ft2"></i><p class="text">赠送运费险</p></div>
                </li>
                <li class="item">
                    <div class="inner"><i class="layui-icon" style="position:relative;right: 155px;top:3px;font-size: 60px; color: #ffffff;">&#xe610;</i><p class="text">无忧退换货</p></div>
                </li>
            </ul>
            <hr>
            <div class="m-siteInfo">
                <nav class="nav">
                    <a class="text" href="/">首页</a>
                    <?php foreach ($category as $c):?>
                    <b class="split">|</b>
                    <a class="text" href="/lists/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a>
                    <?php endforeach;?>
                </nav>
                <p class="copyright">
                  Shop by Sun  © 1997-2017 &nbsp; 陇ICP备15000343号-1
                </p>

            </div>
        </div>
    </div>
</footer>

</body>
</html>
