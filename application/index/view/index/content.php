{extend name="base" /}
{block name="center-content"}

<div id="j-app">
    <div class="g-bd">
        <div class="m-crumbs ">
            <span>
                <span class="crumb-name ">
                    <a class="crumb-url " href="/">首页</a>
                </span>
                <i class="w-icon-arrow arrow-right-hollow gap"></i>
            </span>
            <span><a class="crumb-url " href="">{$cate['name']}</a>
                <i class="w-icon-arrow arrow-right-hollow gap"></i>
            </span>
            <span>
                <span class="crumb-name ">{$goods['name']}</span>
                <span></span>
            </span>
        </div>
        <div class="m-detail">
            <div class="detailHd">

                <!--                图片展示-->
                <div class="m-slide">
                    <div class="view">
                        <img src="{$goods['list_image']}" id="btn">
                    </div>
                    <div class="list">
                        <ul>
                            <li class="">
                                <a href="javascript:;">
                                    <img src="{$goods['list_image']}" class="pic">
                                </a>
                            </li>
                            <?php foreach ($arr as $v): ?>
                                <li class="">
                                    <a href="javascript:;">
                                        <img src="{$v}"  class="pic">
                                    </a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>


                <!--                图片展示结束-->

                <div class="m-info">
                    <div class="intro">
                        <div class="name">{$goods['name']}</div>
                        <div class="desc">{$goods['desc']}</div>
                    </div>
                    <noscript></noscript>
                    <div class="price u-formctr"><a href="javascript:;">
                            <div class="j-commentEntry comment">
                                <span class="f-fz18">{$goods['click']}</span><br>
                                <span class="f-fz13">点击量</span>
                            </div>
                        </a>
                        <div class="field pBox f-cb">
                            <span class="label label-1">售价</span>
                            <span class="rp">
                                <span class="rmb">¥</span>
                                <span class="num">{$goods['price']}</span>
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
                                                    <span class="txt" key="{$v['id']}">{$v['attr']}</span>
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
                                    $(this).attr('href','/order/{$goods[\'id\']}/'+n+'/'+attrid);
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
                                var id = {$goods['id']};
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
                                    var id = {$goods['id']};
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

{/block}


