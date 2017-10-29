{extend name="base" /}
{block name="content"}
<section class="wrapper">
    <!--overview start-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header" style="line-height: 18px"><i class="fa fa-laptop"></i> 后台首页</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/index">后台首页</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
                <i class="fa fa-cloud-download"></i>
                <div class="count">{$oc}</div>
                <div class="title">订单数量</div>
            </div><!--/.info-box-->
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
                <i class="fa fa-shopping-cart"></i>
                <div class="count">7</div>
                <div class="title">购物车</div>
            </div><!--/.info-box-->
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
                <i class="fa fa-thumbs-o-up"></i>
                <div class="count">{$olc}</div>
                <div class="title">订单列表</div>
            </div><!--/.info-box-->
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count">{$uc}</div>
                <div class="title">用户总数</div>
            </div><!--/.info-box-->
        </div><!--/.col-->


    </div><!--/.row-->





    <!-- project team & activity start -->
    <div class="row">


        <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="row">
                        <div class="col-lg-8 task-progress pull-left">
                            <h1>记录</h1>
                        </div>
                        <div class="col-lg-4">
                                <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="/static/admin/img/avatar1_small.jpg">

                                </span>
                        </div>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>用户</td>
                        <td>
                            订单统计
                        </td>

                    </tr>
                    <?php foreach ($users as $v):?>
                    <tr>
                        <td>{$v['username']}</td>
                        <td>{$orderslist[$v['id']]}</td>
                    </tr>
                    <?php endforeach;?>

                    </tbody>
                </table>
            </section>
            <!--Project Activity end-->
        </div>
    </div><br><br>



</section>
{/block}