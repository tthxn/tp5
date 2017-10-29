{extend name="base" /}
{block name="center-content"}
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
                                    <a href="/content/{$v['id']}" title="{$v['name']}" target="_blank">
                                        <img src="{$v['list_image']}" alt="{$v['name']}" class="img-lazyload img j-img1 white">
                                    </a>
                                </div>
                                <div class="bd">
                                    <div class="prdtTags">
                                    </div>
                                    <h4 class="name">
                                        <a href="/content/{$v['id']}" title="{$v['name']}" target="_blank">
                                            {$v['name']}
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span>&yen;{$v['price']}</span>
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
                    <a href="/content/{$v['id']}" title="{$v['name']}" target="_blank">
                        <img src="{$v['list_image']}" alt="{$v['name']}" class="j-lazyload img-lazyload img white img-lazyloaded">
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
                        <a class="name" href="/content/{$v['id']}" title="{$v['name']}" target="_blank">
                            <span class="name">{$v['name']}</span>
                        </a>
                    </h4>
                    <p class="price">
                        <span>¥{$v['price']}</span>
                    </p>
                </div>
            </div>
            <?php endforeach;?>
<!--            人气推荐下半部分-->
            <?php foreach ($commend1 as $item):?>
            <div class="m-product down">
                <div class="hd">
                    <a href="/content/{$item['id']}" title="{$item['name']}" target="_blank">
                        <img src="{$item['list_image']}" alt="{$item['name']}" class="j-lazyload img-lazyload img white img-lazyloaded">
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
                        <a class="name" href="/content/{$item['id']}" title="{$item['name']}" target="_blank">
                            <span class="name">{$item['name']}</span>
                        </a>
                    </h4>
                    <p class="price">
                        <span>¥{$item['price']}</span>
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
                                    <a href="/content/{$value['id']}" title="{$value['name']}" target="_blank">
                                        <img src="{$value['list_image']}" alt="{$value['name']}" class="j-lazyload img-lazyload img">
                                    </a>
<!--                                    <div class="colorNum">-->
<!--                                        8色可选-->
<!--                                    </div>-->
                                </div>
                                <div class="bd">
                                    <div class="prdtTags">
                                    </div>
                                    <h4 class="name">
                                        <a class="name" href="/content/{$value['id']}" title="{$value['name']}" target="_blank">
                                            <span class="name">{$value['name']}</span>
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span>&yen;{$value['price']}</span>
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
{/block}

