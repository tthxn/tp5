<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"F:\www\thinkphp\public/../application/index\view\index\content.php";i:1506273337;s:57:"F:\www\thinkphp\public/../application/index\view\base.php";i:1507906367;}*/ ?>
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


<div id="j-app">
    <div class="g-bd">
        <div class="m-crumbs ">
            <span>
                <span class="crumb-name ">
                    <a class="crumb-url " href="/">首页</a>
                </span>
                <i class="w-icon-arrow arrow-right-hollow gap"></i>
            </span>
            <span><a class="crumb-url " href=""><?php echo $cate['name']; ?></a>
                <i class="w-icon-arrow arrow-right-hollow gap"></i>
            </span>
            <span>
                <span class="crumb-name "><?php echo $goods['name']; ?></span>
                <span></span>
            </span>
        </div>
        <div class="m-detail">
            <div class="detailHd">

                <!--                图片展示-->
                <div class="m-slide">
                    <div class="view">
                        <img src="<?php echo $goods['list_image']; ?>" id="btn">
                    </div>
                    <div class="list">
                        <ul>
                            <li class="">
                                <a href="javascript:;">
                                    <img src="<?php echo $goods['list_image']; ?>" class="pic">
                                </a>
                            </li>
                            <?php foreach ($arr as $v): ?>
                                <li class="">
                                    <a href="javascript:;">
                                        <img src="<?php echo $v; ?>"  class="pic">
                                    </a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>


                <!--                图片展示结束-->

                <div class="m-info">
                    <div class="intro">
                        <div class="name"><?php echo $goods['name']; ?></div>
                        <div class="desc"><?php echo $goods['desc']; ?></div>
                    </div>
                    <noscript></noscript>
                    <div class="price u-formctr"><a href="javascript:;">
                            <div class="j-commentEntry comment">
                                <span class="f-fz18"><?php echo $goods['click']; ?></span><br>
                                <span class="f-fz13">点击量</span>
                            </div>
                        </a>
                        <div class="field pBox f-cb">
                            <span class="label label-1">售价</span>
                            <span class="rp">
                                <span class="rmb">¥</span>
                                <span class="num"><?php echo $goods['price']; ?></span>
                            </span>
                            <span></span>
                        </div>

                        <!--                        促销-->
                        <!--  <div class="field sale j-sale">
                              <span class="label label-2">促销</span>
                              <div class="saleLine">
                                  <a class="link" href="" target="_blank">
                                      <div class="activityType">出游季</div>
                                      <span>装备每满99-16，满送软木拖</span>
                                  </a>
                                  <div style="clear:both;"></div>
                              </div>
                              <div class="saleLine">
                                  <a class="link" href="" target="_blank">
                                      <div class="activityType">满赠</div>
                                      <span>十一装备满299送拖鞋</span>
                                  </a>
                              </div>
                              <div style="clear:both;"></div>
                          </div>
 -->
                        <!--                        服务-->
                        <!-- <div class="field server">
                             <span class="label">服务</span>
                             <div class="policyBox">
                                 <div class="sItem j-policyPop ">
                                     <span>･&nbsp;</span>
                                     <span>30天无忧退换货</span>
                                     <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                 </div>

                                 <div style="clear:both;"></div>
                             </div>
                         </div>
 -->
                    </div>
                    <div>
                        <div class="m-parampicker" style="margin-top:20px;">
                            <!--                            属性-->
                            <div class="specProp">
                                <span class="type type-1">属性</span>
                                <div class="cont">
                                    <ul class="tabs">

                                        <?php foreach ($goodslist as $v): ?>
                                            <li class="tab-con">
                                                <a href="javascript:;" class="tab tab-txt">
                                                    <span class="txt" key="<?php echo $v['id']; ?>"><?php echo $v['attr']; ?></span>
                                                    <div class="dis"></div>
                                                    <i class="w-icon-normal icon-normal-spec-arrow sel"></i>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                </div>
                            </div>

                            <!--                            库存-->
                            <!--
                            <div class="specProp">
                                <span class="type type-1">属性</span>
                                <div class="cont">
                                    <ul class="tabs">
                                        <li class="tab-con"><a
                                                    href="javascript:;" class="tab tab-txt" data-id="1175038"><span
                                                        class="txt">XS</span>
                                                <div class="dis"></div>
                                                <i class="w-icon-normal icon-normal-spec-arrow sel"></i></a></li>
                                        <li class="tab-con"><a
                                                    href="javascript:;" class="tab tab-txt" data-id="1176052"><span
                                                        class="txt">S</span>
                                                <div class="dis"></div>
                                                <i class="w-icon-normal icon-normal-spec-arrow sel"></i></a></li>
                                        <li class="tab-con"><a
                                                    href="javascript:;" class="tab tab-txt" data-id="1175039"
                                            ><span
                                                        class="txt">M</span>
                                                <div class="dis"></div>
                                                <i class="w-icon-normal icon-normal-spec-arrow sel"></i></a></li>
                                        <li class="tab-con"><a
                                                    href="javascript:;" class="tab tab-txt" data-id="1176053"><span
                                                        class="txt">L</span>
                                                <div class="dis"></div>
                                                <i class="w-icon-normal icon-normal-spec-arrow sel"></i></a></li>
                                        <li class="tab-con">
                                            <a href="javascript:;" class="tab tab-txt" data-id="1175040"><span
                                                        class="txt">XL</span>
                                                <div class="dis"></div>
                                                <i class="w-icon-normal icon-normal-spec-arrow sel"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            -->
                        </div>

                        <!--                        购买数量-->
                        <div class="number u-formctr">
                            <div class="name name-1">数量</div>
                            <div class="field">

                                <div class="u-selnum ">
                                    <span class="less z-dis">
                                       <i class="hx"></i>
                                    </span>
                                    <input type="text" value="1" id="num">
                                    <span class="more">
                                         <i class="hx"></i>
                                         <i class="sx"></i>
                                    </span>
                                </div>
                                <script>
                                    $(function () {
                                        $('.more').click(function () {
//                                            当点击+号的时候，-号移除z-dis属性，使其可以点击
                                            $('.less').removeClass('z-dis');
                                            var j = $('#num').attr('value');
                                            var i= parseInt(j);
                                            i=i+1;
                                            $('#num').attr('value',i);
                                        })
                                        $('.less').click(function () {
                                            var j = $('#num').attr('value');
                                            if(j==1){
                                                $(this).addClass('z-dis')
                                            }else{
                                                var i= parseInt(j);
                                                i=i-1;
                                                $('#num').attr('value',i);
                                            }
                                        })
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <a class="btn w-button w-button-xl w-button-ghost" href="javascript:;">
                            <span>
                                <span>立即购买</span>
                            </span>
                        </a>
                        <script>
                            $(function () {
                                $('.w-button-ghost').click(function () {
//                                    商品数量
                                    var n = $('#num').attr('value');
//                                    商品属性
                                    var attrid = $('.tab-sel span').attr('key');
                                    if(attrid == undefined){
                                        layer.msg('请选择商品属性',{time:1500});
                                        return;
                                    }
                                    $(this).attr('href','/order/<?php echo $goods['id']; ?>/'+n+'/'+attrid);
                                })
                            })
                        </script>
                        <a class="btn w-button w-button-xl w-button-primary add-cart" href="javascript:;">
                            <span>
                                <i class="w-icon-cart cart-detail"></i>
                                <span>加入购物车</span>
                            </span>
                        </a>

<!--                        收藏-->
                        <!--
                        <div class="w-collectZone" title="点击收藏">
                            <div class="top">
                                <span class="w-icon-normal icon-normal-collectEpt icon">

                                </span>
                            </div>
                            <div class="bottom">
                                <p>收藏</p>
                            </div>
                        </div>
                        -->
                    </div>

                    <script>
                        $(function () {
//                            当点击加入购物车的时候，触发click事件
                            $('.add-cart').click(function () {
//                            抓取商品id
                                var id = <?php echo $goods['id']; ?>;
//                                抓取商品属性
                                var attrid = $('.tab-sel span').attr('key');
                                if(attrid == undefined){
                                    layer.msg('请选择商品属性',{time:1500});
                                    return;
                                }
//                                抓取商品数量
                                var n = $('#num').attr('value');

                                var $str = id + '/' + attrid + '/' + n;
//                                console.log($str);
                                $.ajax({
                                    url:'/addcart/',
                                    data:{'page':$str},
                                    type:'get',
                                    success:function (response) {
//                                        console.log(response)
                                      layer.msg('购物车添加成功',{time:1500});
                                    }
                                })

//                            当点击加入立即购买的时候，触发click事件
                                $('.w-button-ghost').click(function () {
//                            抓取商品id
                                    var id = <?php echo $goods['id']; ?>;
//                                抓取商品属性
                                    var attrid = $('.tab-sel span').attr('key');
                                    if(attrid == undefined){
                                        layer.msg('请选择商品属性',{time:1500});
                                        return;
                                    }
//                                抓取商品数量
                                    var n = $('#num').attr('value');

                                    var $str2 = id + '/' + attrid + '/' + n;
//                                console.log($str);
                                    $.ajax({
                                        url:'/order/',
                                        data:{'str':$str2},
                                        type:'get',
                                        success:function (response) {
                                            console.log(response)

                                        }
                                    })
                                })
                            })
                        })

                    </script>



                </div>
            </div>

            <!--            详情、评价、热销-->
            <!--
             <div class="detailBd">
                           <div class="left">
                               <div class="m-detailNavTab j-detailNavTab">
                                   <ul class="nav">
                                       <li class="item item-active">
                                           <a href="javascript:;">
                                               <span>详情</span>
                                           </a>
                                       </li>
                                       <li class="item ">
                                           <a href="javascript:;">
                                               <span>
                                                   <span>评价</span>
                                                   <span class="num">(</span>
                                                   <span>135</span>
                                                   <span>)</span>
                                               </span>

                                           </a>
                                       </li>
                                       <li class="bg"></li>
                                   </ul>
                               </div>
                               <div class="m-detailHtml">
                                   <ul class="m-attrList" style="visibility: visible;">
                                       <li class="item j-item"
                                           style="width: 100%; border-bottom: none;">
                                           <span class="name">面料成分</span>
                                           <span class="value">93%棉 7%氨纶</span>
                                       </li>
                                   </ul>
                                   <div>

                                       <p><img data-original="http://yanxuan.nosdn.127.net/5a90a7aa00b2ba0254acf9afbff9e4e7.jpg"
                                               class="img-lazyload short"
                                               src="./女式极简长绒棉高领打底衫 - 气质秋冬，高领锁住脖颈的温度 - 网易严选_files/3d045b93716ed28dc745e648b3428a26.gif"
                                               _src="http://yanxuan.nosdn.127.net/5a90a7aa00b2ba0254acf9afbff9e4e7.jpg">
                                       </p>


                                       <p><br></p></div>
                                   <div class="other">
                                       <div class="tt">常见问题</div>
                                       <div class="con">
                                           <ul>
                                               <li class="issue">
                                                   <div class="question">购买运费如何收取？</div>
                                                   <div class="answer">
                                                       单笔订单金额（不含运费）满88元免邮费；不满88元，每单收取10元运费。<br>(港澳台地区需满500元免邮费；不满500元，每单收取30元运费)
                                                   </div>
                                               </li>

                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="right">
                               <div>
                                   <div class="m-hotSell">
                                       <header class="hd">24小时热销榜</header>
                                       <div class="bd">
                                           <ul>
                                               <li class="item">
                                                   <a href="" target="_blank">
                                                       <div class="img-wrap">
                                                           <img width="250" height="250" src="">
                                                           <span class="colorNum">
                                                               <span>4</span>
                                                               <span>色可选</span>
                                                           </span>
                                                       </div>
                                                       <div class="content">
                                                           <div class="title">
                                                               <span class=""></span><span
                                                                       class="name">德式轻量保温保冷杯</span>
                                                           </div>
                                                           <div class="price">
                                                               <span>¥</span>
                                                               <span>109</span>
                                                           </div>
                                                       </div>
                                                   </a></li>

                                           </ul>
                                       </div>
                                   </div>
                                   <div class="m-topicRecommendedList">
                                       <header class="hd">专题推荐</header>
                                       <div class="bd">
                                           <ul>
                                               <li class="item">
                                                   <a href="" class="item m-topicRecommended" target="_blank">
                                                       <img width="260" height="140"
                                                            src="">
                                                       <div class="text">新婚之家这样布置最浪漫</div>
                                                   </a>
                                               </li>

                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

        -->
            <!-- 详情、评价、热销  结束-->

        </div>

<!--        属性选中效果-->
        <script>
            $(function () {
                $('.tab').click(function () {
                    $(this).addClass('tab-sel');
                    $(this).parent('li').siblings('li').find('.tab').removeClass('tab-sel');
                })
            })
        </script>

<!--        图片区域，鼠标移动选中效果+图片变换效果-->
        <script>
            $(function () {
                $('.pic').mouseenter(function () {
                    var aaa = $(this).attr('src');
//                            alert(aaa);
                    $('#btn').attr('src', aaa);
                    $(this).parents('li').addClass('z-active');
                    $(this).parents('li').siblings('li').removeClass('z-active');
                })
            })
        </script>
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
