
{extend name="base" /}
{block name="center-content"}

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
                        订单号：{$orderId}
                    </p>
                    <p class="f-right f-fz18">应付：<span class="f-txt-red">¥{$total}</span></p>
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
{/block}