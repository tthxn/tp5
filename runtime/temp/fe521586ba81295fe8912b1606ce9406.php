<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"F:\www\thinkphp\public/../application/admin\view\index\index.php";i:1506542835;s:57:"F:\www\thinkphp\public/../application/admin\view\base.php";i:1506445971;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="/static/admin/img/favicon.png">

    <title>后台管理</title>
    <!-- javascripts -->
    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/static/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/static/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/static/admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="/static/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="/static/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="/static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="/static/admin/css/owl.carousel.css" type="text/css">
    <link href="/static/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="/static/admin/css/fullcalendar.css">
    <link href="/static/admin/css/widgets.css" rel="stylesheet">
    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="/static/admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="/static/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script type="text/javascript" src="/static/admin/assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/static/admin/js/vue.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <link rel="stylesheet" href="/static/admin/css/layer.css">
    <script src="/static/admin/js/layer.js"></script>
    <!--[if lt IE 9]>
    <script src="/static/admin/js/html5shiv.js"></script>
    <script src="/static/admin/js/respond.min.js"></script>
    <script src="/static/admin/js/lte-ie7.js"></script>



    <![endif]-->

    <!--hdjs-->
    <script>
        //HDJS组件需要的配置
        hdjs = {
            'base': '/node_modules/hdjs',
            'uploader': '/admin/common/upload',
            'filesLists': '/admin/common/filelists',
            'removeImage': '/admin/common/removeImage&siteid=11',
            'ossSign': '?s=component/oss/sign&siteid=11',
        };
        window.system = {
            attachment: "/attachment",
            root: "",
            url: "/?s=site/entry/home&siteid=11",
            siteid: "11",
            module: "",
            //用于上传等组件使用标识当前是后台用户
            user_type: 'user'
        }
    </script>

    <script src="/node_modules/hdjs/app/util.js"></script>
    <script src="/node_modules/hdjs/require.js"></script>
    <script src="/node_modules/hdjs/config.js"></script>
    <link href="/static/admin/css/hdcms.css" rel="stylesheet">
    <script>
        //放在require.js下面
        require(['jquery'],function($){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>


</head>

<body>
<!-- container section start -->
<section id="container" class="">

    <!--    顶部导航-->
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
        </div>

        <!--logo start-->
        <a href="/admin/index" class="logo">后台 <span class="lite">管理</span></a>
        <!--logo end-->

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/static/admin/img/avatar1_small.jpg">
                            </span>
                        <span class="username">
                            <?php echo \think\Session::get( 'user.username' ) ?>
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="/admin/pwd"><i class="icon_profile"></i> 修改密码</a>
                        </li>

                        <li>
                            <a href="/admin/logout"><i class="icon_key_alt"></i> 退出</a>
                        </li>

                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--顶部导航结束-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="/admin/index">
                        <i class="icon_house_alt"></i>
                        <span>首页</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="icon_document_alt"></i>
                        <span>栏目管理</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="/admin/category">栏目列表</a></li>
                        <li><a class="" href="/admin/category/create">栏目添加</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="icon_table"></i>
                        <span>商品管理</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="/admin/goods">商品列表</a></li>
                        <li><a class="" href="/admin/goods/create">商品添加</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="icon_table"></i>
                        <span>订单管理</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="/admin/orders">订单列表</a></li>
<!--                        <li><a class="" href="/admin/goods/create">商品添加</a></li>-->
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        
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
                <div class="count"><?php echo $oc; ?></div>
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
                <div class="count"><?php echo $olc; ?></div>
                <div class="title">订单列表</div>
            </div><!--/.info-box-->
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count"><?php echo $uc; ?></div>
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
                        <td><?php echo $v['username']; ?></td>
                        <td><?php echo $orderslist[$v['id']]; ?></td>
                    </tr>
                    <?php endforeach;?>

                    </tbody>
                </table>
            </section>
            <!--Project Activity end-->
        </div>
    </div><br><br>



</section>

    </section>
    <!--main content end-->
</section>
<!-- container section start -->


<script src="/static/admin/js/jquery-ui-1.10.4.min.js"></script>

<!-- bootstrap -->
<script src="/static/admin/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="/static/admin/js/jquery.scrollTo.min.js"></script>
<script src="/static/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="/static/admin/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="/static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/static/admin/js/owl.carousel.js" ></script>

<!--script for this page only-->
<script src="/static/admin/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="/static/admin/js/jquery.customSelect.min.js" ></script>
<script src="/static/admin/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="/static/admin/js/scripts.js"></script>
<!-- custom script for this page-->
<!--<script src="/static/admin/js/sparkline-chart.js"></script>-->
<script src="/static/admin/js/easy-pie-chart.js"></script>
<script src="/static/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/static/admin/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="/static/admin/js/jquery.autosize.min.js"></script>
<script src="/static/admin/js/jquery.placeholder.min.js"></script>
<script src="/static/admin/js/gdp-data.js"></script>
<script src="/static/admin/js/morris.min.js"></script>
<!--<script src="/static/admin/js/charts.js"></script>-->

<script src="/static/admin/js/jquery.slimscroll.min.js"></script>
<script>

    //knob
    $(function() {
        $(".knob").knob({
            'draw' : function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function(){
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
            }
        });
    });



</script>

</body>
</html>
