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
                <div class="w-nickname" title="<?php echo session('user.username') ?>"
                     id="j-sideNickname"><?php echo session('user.username') ?></div>
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
                            <li class="j-tabsItem item">
                                <a href="/myorder">全部订单</a>
                            </li>
                            <li class="j-tabsItem item active">
                                <a href="javascript:;">订单详情</a>
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
                                <?php foreach ($lists as $k=>$v): ?>
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
                                                <span>商品：</span>
                                                <span>{$k+1}</span>
                                            </span>
                                                <span class="number">
                                                <span>名称：</span>
                                                <span><?php echo $goods[$v['id']][0]['name']; ?></span>
                                            </span>
                                            </th>
                                        </tr>
                                        <tr class="body">
                                            <td>
                                                <div>
                                                    <span></span>
                                                    <div class="packageItem">
                                                        <div class="good">
                                                            <a class="link" href="/content/<?php echo $goods[$v['id']][0]['id']; ?>"
                                                               target="_blank">
                                                                <img src="<?php echo $goods[$v['id']][0]['list_image']; ?>"
                                                                     width="100px"
                                                                     height="100px">
                                                            </a>

                                                            <div class="info">

                                                                <a class="f-fz14"
                                                                   href="/content/<?php echo $goods[$v['id']][0]['id']; ?>"
                                                                   target="_blank" title="">
                                                                    {$v['goods_attr']}
                                                                </a>

                                                            </div>


                                                        </div>
                                                        <div class="express">
                                                            <div class="cell">
                                                                <div class="f-txt-assist">
                                                                    <span>数量</span>
                                                                    <span>{$v['number']}</span>
                                                                </div>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="status">
                                                            <div class="cell">
                                                                <div class="w-link w-rebuyBtn">备注</div>
                                                                <span>{$v['remark']}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cost">

                                                    <p class="price">
                                                        <span>¥</span>
                                                        <span>{$v['subtotal']}</span>
                                                    </p>
                                                    <p class="fee">
                                                        <span>小计</span>
                                                    </p>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="f-txtcenter">
                                                    <span></span>
                                                    <a class="w-link" href="/content/<?php echo $goods[$v['id']][0]['id']; ?>">查看商品</a>
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

{/block}