{extend name="base" /}
{block name="center-content"}

<div class="g-bd">
    <div class="g-row">
        <div class="g-sub">
            <div class="m-userinfo">
                <div class="w-avatar" id="j-sideAvatarWarp">
                    <img src="//yanxuan.nosdn.127.net/c3a03895c73694d922310c76e4915cdb.png?imageView&amp;quality=95"
                         alt="头像" width="100px" height="100px" id="j-sideAvatar">
                    <div class="modifyAvatar w-icon-normal icon-normal-camera"></div>
                    <div class="mask"></div>
                </div>
                <div class="w-nickname" title="<?php echo session('user.username')?>" id="j-sideNickname"><?php echo session('user.username')?></div>
                <a class="w-levelname" href="#" target="_blank">
                    <div id="j-identityIcons"></div>
                    <span class="w-icon-member member-top-vip0" title="普通用户"></span>
                    <span class="levelname level-0">普通用户</span>
                </a>

            </div>
            <script>
                var membershipOn = false;
                membershipOn = true;
            </script>
            <div class="m-menu">
                <a href="/myorder" class="w-menu-item active ">订单管理</a>
<!--                <a href="#" class="w-menu-item " target="_blank">地址管理</a>-->
            </div>
        </div>
        <div class="g-main">
            <div id="j-orderListContainer">
                <div class="m-orderList" data-reactid=".0">
                    <div class="m-filter" data-reactid=".0.0">
                        <ul id="j-orderFilter" class="w-tabs">
                            <li class="j-tabsItem item active">
                                <a href="javascript:;">全部订单</a>
                            </li>
                            <!--                            <li class="j-tabsItem item">-->
                            <!--                                <a href="javascript:;">待付款&nbsp;-->
                            <!--                                    <span class="orderItemNum"></span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->

                        </ul>

                    </div>
                    <span></span>
                    <div class="m-panels">
                        <div class="m-panel" id="j-allOrderPanel" style="display: block;">
                            <div>
                                <?php foreach ($arr as $v): ?>
                                    <table class="m-orderItem" cellpadding="0">
                                        <colgroup>
                                            <col class="w1">
                                            <col class="w2">
                                            <col class="w3">
                                        </colgroup>
                                        <tbody>
                                        <tr class="head">
                                            <th colspan="3">
                                            <span class="dealtime">
                                                <span>下单时间：</span>
                                                <span>{$v['create_time']}</span>
                                            </span>
                                                <span class="number">
                                                <span>订单号：</span>
                                                <span>{$v['order_number']}</span>
                                            </span>
                                                <a href="javascript:;" cid="{$v['id']}"
                                                   class="w-icon-normal icon-normal-delete-l delete"></a>
                                            </th>
                                        </tr>
                                        <tr class="body">
                                            <td>
                                                <div>
                                                    <span></span>
                                                    <div class="packageItem">
                                                        <div class="good">
                                                            <?php foreach ($aa as $value):if ($value['id'] == $v['id']): ?>
                                                                <a class="link" href="/content/{$value['gid']}"
                                                                   target="_blank">
                                                                    <img src="{$value['list_image']}" width="100px"
                                                                         height="100px">
                                                                </a>

                                                            <?php endif;endforeach; ?>


                                                            <?php if (count($orderslist[$v['id']]) == 1): ?>
                                                                <div class="info">
                                                                    <?php foreach ($goods as $gvalue) {
                                                                        if ($gvalue['id'] == $orderslist[$v['id']][0]['goods_id']) { ?>
                                                                            <a class="f-fz14"
                                                                               href="/content/{$gvalue['id']}"
                                                                               target="_blank" title="">
                                                                                <?php echo $gvalue['name']; ?>
                                                                            </a>
                                                                        <?php }
                                                                    } ?>
                                                                </div>
                                                            <?php endif; ?>

                                                        </div>
                                                        <div class="express">
                                                            <div class="cell">
                                                                <div class="f-txt-assist">
                                                                    <span>包裹</span>
                                                                    <span><?php echo count($orderslist[$v['id']]); ?></span>
                                                                </div>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="status">
                                                            <div class="cell">
                                                                <div>{$v['order_status']}</div>
                                                                <span></span>
                                                                <span></span>
                                                                <div class="w-link w-rebuyBtn"></div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cost">

                                                    <p class="price">
                                                        <span>¥</span>
                                                        <span>{$v['total']}</span>
                                                    </p>
                                                    <p class="fee">
                                                        <span>付款金额</span>
                                                    </p>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="f-txtcenter">
                                                    <span></span>
                                                    <a class="w-link" href="/myorder/{$v['id']}">查看详情</a>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                <?php endforeach; ?>
                                <div class="m-pager j-pager"></div>
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
        $('.icon-normal-delete-l.delete').click(function () {

            var id = $(this).attr('cid');
//                        alert(id);
//                        要删除的行
            tr = $(this).parents('table');

            layer.msg('<br><h2>删除的订单无法申请售后和评论<br>是否继续？</h2><br>', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    $.ajax({
                        url: '/myorder/' + id,
                        method: 'DELETE',
                        success: function (response) {
//                            console.log(response);
                            tr.remove();
                        }
                    });
                    layer.msg('删除成功');
                }
            });

        })
    })


</script>
{/block}