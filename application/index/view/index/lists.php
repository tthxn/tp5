
{extend name="base" /}
{block name="center-content"}

<div class="g-bd-list">
    <div class="g-row">
        <!--面包屑-->
        <div class="m-crumbs ">
            <a href="/">首页</a>
            <span class="w-icon-arrow arrow-right-hollow"></span>
            <span class="z-cur">{$name['name']}</span>
        </div>

        <!--商品展示区域-->
        <div id="j-goodsAreaWrap">
            <div class="m-goodsArea">

                <div class="m-content">

                    <div class="m-Level2Category">

                        <ul class="m-itemList m-itemList-level2Category">

                            <?php foreach($goodsInfo as $v):?>
                            <li class="item">
                                <div class="m-product j-product ">
                                    <span></span>
                                    <div class="hd">
                                        <a href="/content/{$v['id']}" title="{$v['name']}" target="_blank">
                                            <img src="{$v['list_image']}" alt="{$v['name']}" class="img img-lazyload j-lazyload ">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="bd">
                                        <div class="prdtTags">
<!--                                            <span class="itemTag new">新品</span>-->
                                        </div>
                                        <h4 class="name">
                                            <a href="/content/{$v['id']}" title="{$v['name']}" target="_blank">
                                                <span></span>
                                                <span>{$v['name']}</span>
                                            </a>
                                        </h4>
                                        <p class="price">
                                            <span>
                                                <span>¥</span>
                                                <span>{$v['price']}</span>
                                            </span>
                                            <span></span>
                                            <span></span>
                                        </p>
                                        <div>
                                            <hr>
                                            <p class="desc">{$v['content']}</p>
                                        </div>
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
</div>

{/block}

