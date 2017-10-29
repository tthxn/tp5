<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"F:\www\thinkphp\public/../application/index\view\index\index.php";i:1507806390;s:57:"F:\www\thinkphp\public/../application/index\view\base.php";i:1507906367;}*/ ?>
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

<!--    轮播图片-->
<!--flash-->
<link rel="stylesheet" href="/static/home/css/swiper.min.css">
<style>
    .swiper-container {
        width: 100%;
    }
</style>
<div id="flash">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="width:100%;height: 420px;background:url(/static/home/image/1.jpg) center ">
                <a href="/lists/2"  style="width: 100%; height: 100%;display: block">
<!--                    <img src="/static/home/image/1.jpg" alt=""/>-->
                </a>
            </div>
            <div class="swiper-slide"  style="width:100%;height: 420px;background:url(/static/home/image/2.jpg) center">
                <a href="/lists/5" style="width: 100%; height: 100%;display: block">
<!--                    <img src="/static/home/image/2.jpg" alt=""/>-->
                </a>
            </div>
            <div class="swiper-slide" style="width:100%;height: 420px;background:url(/static/home/image/3.jpg) center">
                <a href="/lists/6" style="width: 100%; height: 100%;display: block">
<!--                    <img src="/static/home/image/3.jpg" alt=""/>-->
                </a>
            </div>
            <div class="swiper-slide"  style="width:100%;height: 420px;background:url(/static/home/image/4.jpg) center">
                <a href="/lists/4" style="width: 100%; height: 100%;display: block">
<!--                    <img src="/static/home/image/4.jpg" alt=""/>-->
                </a>
            </div>
            <div class="swiper-slide" style="width:100%;height: 420px;background:url(/static/home/image/5.jpg) center">
<!--                将a链接设置的和父级一样大小，就可以点击跳转了-->
                <a href="/lists/4" style="width: 100%; height: 100%;display: block">
<!--                    图片放在这里面，样式会乱掉，因此当作背景图片记得设置宽度和高度-->
<!--                    <img src="/static/home/image/5.jpg" alt="" />-->
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev swiper-button-white swiper-button-disabled"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>

    <script src="/static/home/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true,//循环无缝切换
            autoplay: 2000,//自定切换，间隔时间为2000毫秒
            speed: 300,//切换速度
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            parallax: true,
        });
    </script>
</div>
<!--flash结束-->

<!--新品首发-->
<div class="m-newItem j-newItem">
    <div class="g-row">
        <div class="m-cate">
            <header class="hd">
                <div class="left">
                    <a data-yxstat='' href="javascript:;">
                        <h3 class="name">新品首发</h3>
                    </a>
                    <small class="frontName">每周上新，为你寻觅世间好物</small>
                </div>
                <div class="right">
                    <a class="f-fz14" href="javascript:;">更多新品 ></a>
                </div>
            </header>
            <div class="bd">
                <ul class="itemList">
                    <div id="js-newItemSlick" class="js-newItemslick m-newItemSlick">
                        <?php foreach ($news as $v):?>
                        <li class="item">
                            <div class="m-product j-product">
                                <div class="hd">
                                    <a href="/content/<?php echo $v['id']; ?>" title="<?php echo $v['name']; ?>" target="_blank">
                                        <img src="<?php echo $v['list_image']; ?>" alt="<?php echo $v['name']; ?>" class="img-lazyload img j-img1 white">
                                    </a>
                                </div>
                                <div class="bd">
                                    <div class="prdtTags">
                                    </div>
                                    <h4 class="name">
                                        <a href="/content/<?php echo $v['id']; ?>" title="<?php echo $v['name']; ?>" target="_blank">
                                            <?php echo $v['name']; ?>
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span>&yen;<?php echo $v['price']; ?></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--人气推荐-->
<div class="m-indexPopularItem j-indexPopularItem">
    <div class="g-row">
        <header class="hd">
            <div class="left">
                <a href="javascript:;">
                    <h3 class="name">人气推荐</h3>
                </a>
            </div>


            <div class="right">
                <a href="javascript:;">更多推荐 &gt;</a>
            </div>
        </header>
        <div class="j-showContainer showContainer ">
            <?php foreach ($commend as $v):?>
            <div class="m-product ">
                <div class="hd">
                    <a href="/content/<?php echo $v['id']; ?>" title="<?php echo $v['name']; ?>" target="_blank">
                        <img src="<?php echo $v['list_image']; ?>" alt="<?php echo $v['name']; ?>" class="j-lazyload img-lazyload img white img-lazyloaded">
                    </a>
<!--                    <div class="colorNum">-->
<!--                        5色可选-->
<!--                    </div>-->
                </div>
                <div class="bd">
                    <div class="prdtTags">
<!--                        <span class="itemTag">爆品</span>-->
                    </div>
                    <h4 class="name">
                        <a class="name" href="/content/<?php echo $v['id']; ?>" title="<?php echo $v['name']; ?>" target="_blank">
                            <span class="name"><?php echo $v['name']; ?></span>
                        </a>
                    </h4>
                    <p class="price">
                        <span>¥<?php echo $v['price']; ?></span>
                    </p>
                </div>
            </div>
            <?php endforeach;?>
<!--            人气推荐下半部分-->
            <?php foreach ($commend1 as $item):?>
            <div class="m-product down">
                <div class="hd">
                    <a href="/content/<?php echo $item['id']; ?>" title="<?php echo $item['name']; ?>" target="_blank">
                        <img src="<?php echo $item['list_image']; ?>" alt="<?php echo $item['name']; ?>" class="j-lazyload img-lazyload img white img-lazyloaded">
                    </a>
<!--                    <div class="colorNum">-->
<!--                        5色可选-->
<!--                    </div>-->
                </div>
                <div class="bd">
                    <div class="prdtTags">
<!--                        <span class="itemTag hot">爆品</span>-->
<!--                        <span class="itemTag">满赠</span>-->
                    </div>
                    <h4 class="name">
                        <a class="name" href="/content/<?php echo $item['id']; ?>" title="<?php echo $item['name']; ?>" target="_blank">
                            <span class="name"><?php echo $item['name']; ?></span>
                        </a>
                    </h4>
                    <p class="price">
                        <span>¥<?php echo $item['price']; ?></span>
                    </p>
                </div>
            </div>
            <?php endforeach;?>

        </div>

    </div>
</div>


<div class="g-bd">

    <div class="m-newCates j-newCates">
        <div class="g-row">
            <div class="m-newCate">
                <header class="hd">
                    <div class="left">
                        <a href="javascript:;" target="_blank"><h3 class="name">更多商品</h3></a>
                    </div>
<!--                    <div class="right">-->
<!--                        <a class="getMore" href="" target="_blank">查看更多 ></a>-->
<!--                    </div>-->
                </header>

                <div class="bd">
                    <ul class="itemList">
                        <?php foreach ($more as $value):?>
                        <li class="item">
                            <div class="m-product j-product">
                                <div class="hd">
                                    <a href="/content/<?php echo $value['id']; ?>" title="<?php echo $value['name']; ?>" target="_blank">
                                        <img src="<?php echo $value['list_image']; ?>" alt="<?php echo $value['name']; ?>" class="j-lazyload img-lazyload img">
                                    </a>
<!--                                    <div class="colorNum">-->
<!--                                        8色可选-->
<!--                                    </div>-->
                                </div>
                                <div class="bd">
                                    <div class="prdtTags">
                                    </div>
                                    <h4 class="name">
                                        <a class="name" href="/content/<?php echo $value['id']; ?>" title="<?php echo $value['name']; ?>" target="_blank">
                                            <span class="name"><?php echo $value['name']; ?></span>
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span>&yen;<?php echo $value['price']; ?></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>

            </div>
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
