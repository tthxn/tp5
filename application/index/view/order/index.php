{extend name="base" /}
{block name="center-content"}

<div class="g-bd f-margin-top-50">
    <div class="g-row">
        <div id="confirmRoot">
            <div>
                <div class="m-panel">
                    <div class="w-panel g-panel">
                        <div class="hd f-fz14"><span>收货信息</span></div>
                        <div class="bd">
                            <!--                            地址显示列表-->
                            <?php if($address): ?>
                                <div class="m-orderAddress m-orderAddress2">
                                    <div>
                                        <div>
                                            <div class="left m-address" key="{$address['id']}">
                                                <p class="line pine-1" >
                                                    <i class="w-icon-normal icon-normal-address-default"></i>
                                                    <button class="w-button w-button-ghost modifyBtn" type="button">收货信息</button>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货人:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info1">{$address['name']}</span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>联系方式:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info2">{$address['mobile']}</span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货地址:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info3"><?php echo $address['province'].$address['city'].$address['country'].$address['address']?></span>
                                                </p>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="right">
                                                <p class="changeAddress">
                                                    <a href="javascript:;" class="w-link" style="background-color: #">地址切换</a></p>
                                                <button class="w-button new-build" type="button">
                                                    新建地址
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
<!--                                新建地址，地址填写表单-->
                                <div class="m-orderAddress1 m-orderAddress">
                                    <div class="m-addressAdd">
                                        <form class="m-form-addr j-form button-form">
                                            <div class="w-row-addr addrFirst">
                                                <div class="w-col-4">
                                                <span class="w-label">
                                                    <span>所在地区</span>
                                                    <span>:</span></span>
                                                    <div style="display:inline-block;">
                                                        <div style="display:inline-block;">
                                                            <div class="info">
                                                                <div>
                                                                    <select id="s_province" name="province"></select>  
                                                                    <select id="s_city" name="city"></select>  
                                                                    <select id="s_county" name="country"></select>
                                                                    <script class="resources library"
                                                                            src="/static/home/js/area.js"
                                                                            type="text/javascript"></script>
                                                                    <script type="text/javascript">_init_area();</script>
                                                                </div>
                                                                <div id="show"></div>
                                                            </div>
                                                            <script type="text/javascript">
                                                                var Gid = document.getElementById;
                                                                var showArea = function () {
                                                                    Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                                                                        Gid('s_city').value + " - 县/区" +
                                                                        Gid('s_county').value + "</h3>"
                                                                }
                                                                Gid('s_county').setAttribute('onchange', 'showArea()');
                                                            </script>
                                                        </div>
                                                        <div style="clear:both;"></div>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-4">
                                                <span class="w-label" style="margin-top:6px;vertical-align:top;">
                                                    <span>详细地址</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap w-textarea">
                                                    <textarea placeholder="详细地址，街道、门牌号等" name="address" id="" cols="30"
                                                              rows="10" tabindex="6" class="w-textarea"></textarea>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-2 errorTip mgr43">
                                                <span class="w-label">
                                                    <span>收货人</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="name" tabindex="1">
                                                    </div>
                                                </div>
                                                <div class="w-col-2 zoneTipsInner errorTip">
                                                <span class="w-label">
                                                    <span>手机号码</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="mobile" tabindex="2">
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <input type="text" name="users_id" value="<?php echo session('user.id'); ?>" hidden>
                                        </form>

                                        <div class="m-operateButtons f-left">
                                            <div class="w-row-addr w-row-addr-1">
                                                <div class="w-col-1">
                                                    <div class="w-chkbox">
                                                        <input type="checkbox" name="is_default" value="" class="j-checkbox  setdefault">
                                                        <span>设为默认</span>
                                                    </div>
                                                </div>
                                                <div class="w-col-1 mgr24">
                                                    <button type="button" class="w-button w-button-primary j-submits">保存地址
                                                    </button>
                                                    <a class="j-cancel w-button w-button-ghost quxiao">取消</a>
                                                    <span></span>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php else: ?>
                                <!--                           地址填写表单 -->
                                <div class="m-orderAddress1 m-orderAddress" style="display:block;">
                                    <div class="m-addressAdd">
                                        <form class="m-form-addr j-form button-form">
                                            <div class="w-row-addr addrFirst">
                                                <div class="w-col-4">
                                                <span class="w-label">
                                                    <span>所在地区</span>
                                                    <span>:</span></span>
                                                    <div style="display:inline-block;">
                                                        <div style="display:inline-block;">
                                                            <div class="info">
                                                                <div>
                                                                    <select id="s_province" name="province"></select>  
                                                                    <select id="s_city" name="city"></select>  
                                                                    <select id="s_county" name="country"></select>
                                                                    <script class="resources library"
                                                                            src="/static/home/js/area.js"
                                                                            type="text/javascript"></script>
                                                                    <script type="text/javascript">_init_area();</script>
                                                                </div>
                                                                <div id="show"></div>
                                                            </div>
                                                            <script type="text/javascript">
                                                                var Gid = document.getElementById;
                                                                var showArea = function () {
                                                                    Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                                                                        Gid('s_city').value + " - 县/区" +
                                                                        Gid('s_county').value + "</h3>"
                                                                }
                                                                Gid('s_county').setAttribute('onchange', 'showArea()');
                                                            </script>
                                                        </div>
                                                        <div style="clear:both;"></div>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-4">
                                                <span class="w-label" style="margin-top:6px;vertical-align:top;">
                                                    <span>详细地址</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap w-textarea">
                                                    <textarea placeholder="详细地址，街道、门牌号等" name="address" id="" cols="30"
                                                              rows="10" tabindex="6" class="w-textarea"></textarea>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-2 errorTip mgr43">
                                                <span class="w-label">
                                                    <span>收货人</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="name" tabindex="1">
                                                    </div>
                                                </div>
                                                <div class="w-col-2 zoneTipsInner errorTip">
                                                <span class="w-label">
                                                    <span>手机号码</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="mobile" tabindex="2">
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <input type="text" name="users_id" value="<?php echo session('user.id'); ?>" hidden>
                                        </form>

                                        <div class="m-operateButtons f-left">
                                            <div class="w-row-addr w-row-addr-1">
                                                <div class="w-col-1">
                                                    <div class="w-chkbox">
                                                        <input type="checkbox" name="dft" value='' class="j-checkbox setdefault">
                                                        <span>设为默认</span>
                                                    </div>
                                                </div>
                                                <div class="w-col-1 mgr24">
                                                    <button type="button" class="w-button w-button-primary j-submits">保存地址
                                                    </button>
                                                    <a class="j-cancel w-button w-button-ghost">取消</a>
                                                    <span></span>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="m-orderAddress m-orderAddress2" style="display:none;">
                                    <div>
                                        <div>
                                            <div class="left m-address" key="{$address['id']}">
                                                <p class="line pine-1" >
                                                    <i class="w-icon-normal icon-normal-address-default"></i>
                                                    <button class="w-button w-button-ghost modifyBtn" type="button">收货信息</button>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货人:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info1" >{$address['name']}</span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>联系方式:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info2">{$address['mobile']}</span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货地址:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info3"><?php echo $address['province'].$address['city'].$address['country'].$address['address']?></span>
                                                </p>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="right">
                                                <p class="changeAddress">
                                                    <a href="javascript:;" class="w-link" style="background-color: #">地址切换</a></p>
                                                <button class="w-button new-build" type="button">
                                                    新建地址
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <noscript></noscript>
                <form action="/confirm/{$gInfo['gid']}/{$gInfo['aid']}" method="post">

                    <div class="g-itemInfo">
                    <div>
                        <div class="m-table">
                            <div class="theadBg"></div>
                            <table>
                                <thead class="hd">
                                <tr>
                                    <td class="f-txtleft" style="width:360px;">商品信息
                                    </td>
                                    <td class="" style="width:165px;">单价</td>
                                    <td class="" style="width:171px;">数量</td>
                                    <td class="" style="width:191px;">小计</td>
                                    <td class="" style="width:191px;">备注</td>
                                </tr>
                                </thead>
                                <tbody class="m-tbody tbody">

                                <tr class="tr">
                                    <td class="m-itemInfoTd">
                                        <div class="imgWrap f-left">
                                            <img src="{$gInfo['image']}" alt="">
                                        </div>
                                        <div class="infoWrap f-txtleft">
                                            <div class="name f-text-overflow">
                                                <span>{$gInfo['title']}</span>
                                            </div>
                                            <p class="line line1 f-text-overflow">
                                                <span class="spec ">
                                                    <span>{$gInfo['attr']} </span>
                                                </span>
                                            </p></div>
                                    </td>
                                    <td class="m-itemPriceTd">
                                        <div class="tdWrap">
                                            <div class="priceWrap">
                                                <p class="retailPrice">
                                                    <span>¥</span>
                                                    <span>{$gInfo['price']}</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="m-itemCountTd">
                                        <div class="tdWrap">{$gInfo['number']}</div>
                                    </td>
                                    <td>
                                        <div class="tdWrap">{$gInfo['totalPrice']}</div>
                                    </td>
                                    <td>
                                        <textarea id="" name="remarks" style="border: 1px solid #CCCCCC;height:100px"></textarea>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="m-itemInfoFt">
                        <div class="left">
                            <div>
                                <div>
                                    <div class="tt">
                                        <label>
                                            <span>商品合计</span>
                                            <span>:</span>
                                        </label>
                                        <span class="amount">¥</span>
                                        <span>{$gInfo['totalPrice']}</span>
                                    </div>
                                    <br>
                                    <div class="tt">
                                        <label>
                                            <span>商品数量</span>
                                            <span>:</span>
                                        </label>
                                        <span>{$gInfo['number']}</span>
                                        <span>件</span>
                                    </div>
                                    <br>
                                    <div class="tt">
                                        <label>
                                            <span>运费</span>
                                            <span>:</span>
                                        </label>
                                        <span class="amount">¥</span>
                                        <span>0.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="m-confirmPayInfo">
                            <div class="m-payItemsInfo">

                                <div class="line4">
                                    <label>
                                        <span>应付总额</span>
                                        <span>:</span>
                                    </label>
                                    <span class="amount">
                                        <span>¥</span>
                                        <span>{$gInfo['totalPrice']}</span>
                                    </span>
                                </div>
                            </div>
                            <div class="line5">
                                <input class="w-button w-button-primary w-button-xl submit pay" type="submit" value="去付款">
                            </div>
                            <div id="j-addressTip" class="w-tipMsg w-tipMsg-success msg" style="display:none;">

                                <i class="icon"></i>
                                <span class="text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="m-agreement">
                        <a class="w-linkss agreement" href="">同意《严选平台服务协议》</a>
                        <div class="w-chkbox checkbox">
                            <input type="checkbox" checked="">
                        </div>
                    </div>
                </div>
                    <input type="text " hidden value="" class="add_class" name="address_id">
                    <input type="text" hidden value="{$gInfo['number']}" name="num">
                    <textarea name="addarr" id="addarr" hidden cols="30" rows="10"></textarea>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.submit.pay').click(function () {
            var info1 = $('#info1').text();
            var info2 = $('#info2').text();
            var info3 = $('#info3').text();
            $('#addarr').text(info1+'/'+info2+'/'+info3);
            var kk = $('.left.m-address').attr('key');
            $('.add_class').attr('value',kk);
        })
    })
</script>

<!--模态-->
<div id="widgetDialogContainer" style="display:none; z-index: 3000;">
    <div class="m-overlay m-overlay-ani" style="z-index: 1190;">
        <div class="w-mask w-mask-ani j-mask f-ani-mask"></div>
        <div class="contentWrap">
            <div class="m-pop f-scroll-y overlay-container-ani f-tlbr j-overlay-container m-pop-changeAddr f-ani-bouncein"
                 style="display: block;">
                <div class="j-w-dialog-body" style="left: 395.5px; top: 502.5px;">
                    <div class="j-w-dialog-head">
                        <div class="w-close j-close-pop"></div>
                    </div>
                    <div class="popwin-bd j-w-dialog-content">
                        <div id="j-address-change-1506314764862">
                            <div>
                                <div class="w-tit-addr">选择地址</div>
                                <div class="w-body-addr">
                                    <?php foreach ($changeAdd as $k=>$v):?>

                                        <div class="w-addr-warp j-addr" key="{$v['id']}">
                                            <div class="m-address">
                                                <p class="line">
                                                    <label class="label">
                                                        <span class="textLeft">收</span>
                                                        <span>货</span>
                                                        <span class="textRight">人:&nbsp;&nbsp;</span>
                                                    </label>
                                                    <span class="text modal1">{$v['name']}</span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">联系方式：</label>
                                                    <span class="text modal2">{$v['mobile']}</span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">收货地址：</label>
                                                    <span class="text f-breakall modal3"><?php echo $v['province'].$v['city'].$v['country'].$v['address']?></span>
                                                </p>
                                            </div>
                                            <i class="icon w-icon-normal icon-normal-spec-arrow"></i></div>
                                    <?php endforeach;?>
                                </div>
                                <div style="margin:31px 0 0 80px;">
                                    <button type="button" class="w-button w-button-primary w-button-l j-ok w-button-forbid confirm"
                                            style="margin-left:45px;">确定
                                    </button>
                                    <button type="button" class="w-button w-button-l j-cancel" style="margin-left:5px;">取消
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
//        判断复选框是否被选中,选中为1，没选中为0
        $('.setdefault').click(function () {
            if($(this).is(':checked')){
                $(this).attr('value',1);
            }else{
                $(this).attr('value',0);
            }
        })

        <?php if($address){ ?>
        $(".m-orderAddress1").hide();
        <?php } ?>
//        点击新建地址
        $('.new-build').click(function () {
//            alert(1)
            $(".m-orderAddress1").show();
            $('.m-orderAddress2').hide();
        })
        $('.quxiao').click(function () {
//            alert(1);
            $(".m-orderAddress2").show();
            $('.m-orderAddress1').hide();
        })
//            地址添加
            $(".j-submits").click(function () {
//               //异步添加
                //抓取form表单中所有的值
                var formData = $('form.button-form').serialize();
//              console.log(formData);
                var setDefault = $('.setdefault').attr('value');
                $.ajax({
                    url: '/index/address/index',
                    type: 'post',
                    //序列化的数据不用使用json格式传输
                    data: formData+'&is_default='+setDefault,
                    //服务器返回的数据类型,返回类型是json格式，可以有phpData.code，html格式phpData.code会报错
                    dataType: 'json',
                    success: function (phpData) {
                       console.log(phpData);
//                       console.log(phpData.code);
                        if(phpData.code == '200'){
//                                                    alert(1);
                            $(".m-orderAddress1").css('display','none');
                            $('.m-orderAddress2').css('display','block');
                        }
                        $('.m-orderAddress2').find('#info1').text(phpData.msg.name);
                        $('.m-orderAddress2').find('#info2').text(phpData.msg.mobile);
                        var addre = phpData.msg.province+phpData.msg.city+phpData.msg.country+phpData.msg.address;
                        $('.m-orderAddress2').find('#info3').text(addre);
                    }
                })
                $('.new-build').click(function () {
//                    alert(1);
                    $('.m-orderAddress2').hide();
                    $('.m-orderAddress1').show();
                })

            })



//            地址切换
//        注意：事件里面不可以套事件
        $('.w-link').click(function () {
            $('#widgetDialogContainer').css('display','block');
        })
        $('.w-addr-warp').click(function () {
            $(this).addClass('active').siblings('.w-addr-warp').removeClass('active');
            $('.confirm').removeClass('w-button-forbid');
        })
        $(".confirm").click(function () {
            var count = $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active').length;
            if(count==0){
                layer.msg('还没有选择地址');
                return false;
            }else{
                var key = $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active').attr('key');
//                alert(key);
                $('.left.m-address').attr('key',key);
               var value1 =  $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active .modal1').text();
               var value2 =  $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active .modal2').text();
               var value3 =  $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active .modal3').text();
                $('.m-orderAddress2').find('#info1').text(value1);
                $('.m-orderAddress2').find('#info2').text(value2);
                $('.m-orderAddress2').find('#info3').text(value3);
                $('#widgetDialogContainer').css('display','none');
            }

        })

        $('.j-cancel').click(function () {
            $('#widgetDialogContainer').css('display','none');
        })
        $('.j-close-pop.w-close').click(function () {
            $('#widgetDialogContainer').css('display','none');
        })

    })
</script>
{/block}