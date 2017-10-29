<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"F:\www\thinkphp\public/../application/index\view\order\order.php";i:1506421315;s:57:"F:\www\thinkphp\public/../application/index\view\base.php";i:1507906367;}*/ ?>
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


<div class="g-bd">
    <div class="g-row">
        <form id="j-orderPayForm" action="" method="post"  target="_blank">
            <div id="j-mobile" class="f-hide" data-value=""></div>
            <div id="j-price" class="f-hide" data-value="1585"></div>
            <div class="g-orderToPayHd">
                <br>
                <br>
                <h2 class="f-fz18 f-lh1 f-wb f-margin-bottom-10">
                    选择付款方式
                </h2>
                <div class="f-clearfix f-lh18">
                    <p class="f-left f-fz16 w-text-muted">
                        订单号：<?php echo $orderId; ?>
                    </p>
                    <p class="f-right f-fz18">应付：<span class="f-txt-red">¥<?php echo $total; ?></span></p>
                </div>
            </div>
            <div class="f-margin-bottom-40">
                <div class="w-panel">
                    <div class="hd">
                        支付方式
                    </div>
                    <div class="bd">
                        <div id="j-payMethods" class="m-payMethods">


                            <div id="j-payMethod-3" class="j-payMethod payMethod" data-pay-method="3">
                                <div class="w-radio radio s-gold">
                                    <input type="radio" name="payMethod" value="3">
                                </div>
                                <i class="w-icon-payMethod payMethod-alipay f-left"></i>
                            </div>


                            <div id="j-payMethod-2" class="j-payMethod payMethod" data-pay-method="2">
                                <div class="w-radio radio s-gold">
                                    <input type="radio" name="payMethod" value="2">
                                </div>
                                <i class="w-icon-payMethod payMethod-weixin f-left"></i>
                            </div>


                            <div class="j-selectBank payMethod" data-tab="debit">
                                <div class="w-radio radio s-gold">
                                    <input type="radio" name="payMethod">
                                </div>
                                <i class="w-icon-payMethod payMethod-savings f-left"></i>
                            </div>

                            <div class="j-selectBank payMethod" data-tab="credit">
                                <div class="w-radio radio s-gold">
                                    <input type="radio" name="payMethod">
                                </div>
                                <i class="w-icon-payMethod payMethod-credit f-left"></i>
                            </div>


                            <div class="bankList j-bankList" id="j-debit" style="display: none;">
                                <div id="j-payMethod-33" class="j-payMethod bank" data-pay-method="33">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="33">
                                    </div>
                                    <div class="w-icon-bank bank-boc"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                    <span class="span"></span>
                                </div>
                                <div id="j-payMethod-32" class="j-payMethod bank" data-pay-method="32">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="32">
                                    </div>
                                    <div class="w-icon-bank bank-abc"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                                <div id="j-payMethod-30" class="j-payMethod bank" data-pay-method="30">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="30">
                                    </div>
                                    <div class="w-icon-bank bank-icbc"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                                <div id="j-payMethod-31" class="j-payMethod bank" data-pay-method="31">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="31">
                                    </div>
                                    <div class="w-icon-bank bank-ccb"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                                <div id="j-payMethod-34" class="j-payMethod bank" data-pay-method="34">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="34">
                                    </div>
                                    <div class="w-icon-bank bank-cmb"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                            </div>
                            <div class="bankList j-bankList credit" id="j-credit" style="display: none;">
                                <div id="j-payMethod-73" class="j-payMethod bank" data-pay-method="73">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="73">
                                    </div>
                                    <div class="w-icon-bank bank-boc"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                    <span class="span"></span>
                                </div>
                                <div id="j-payMethod-72" class="j-payMethod bank" data-pay-method="72">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="72">
                                    </div>
                                    <div class="w-icon-bank bank-abc"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                                <div id="j-payMethod-70" class="j-payMethod bank" data-pay-method="70">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="70">
                                    </div>
                                    <div class="w-icon-bank bank-icbc"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                                <div id="j-payMethod-71" class="j-payMethod bank" data-pay-method="71">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="71">
                                    </div>
                                    <div class="w-icon-bank bank-ccb"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                                <div id="j-payMethod-74" class="j-payMethod bank" data-pay-method="74">
                                    <div class="w-radio radio f-hide">
                                        <input type="radio" name="payMethod" value="74">
                                    </div>
                                    <div class="w-icon-bank bank-cmb"></div>
                                    <i class="icon w-icon-normal icon-normal-spec-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function () {
                    $('.j-selectBank.payMethod').click(function(){
                        var num =$(this).index('.j-selectBank');
                        $('.bankList').eq(num).show().siblings('.bankList').hide();
                    })
                    $('.j-payMethod.payMethod').click(function () {
                        $('.bankList').hide();
                    })
                    $('.j-payMethod.bank').click(function () {
                        $(this).addClass('active').siblings().removeClass('active');
                    })
                })
            </script>
            <div class="m-goPay" style="position: relative">
                <button id="j-goPay" type="button" class="btn w-button w-button-xl w-button-primary" style="float: right;position: relative">
                    立即付款
                </button>
                <br>
                <br>

                <div class="m-orderCancelCountDown countDown" style="float: right;position: relative;top:50% ;">

                </div>
            </div>
            <br>
            <br>
        </form>
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
