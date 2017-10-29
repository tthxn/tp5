<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\www\thinkphp\public/../application/admin\view\login\index.php";i:1505652291;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="这是一个商城项目">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="商城">
    <link rel="shortcut icon" href="/static/admin/img/favicon.png">

    <title>管理人员登录</title>

    <!-- Bootstrap CSS -->    
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/static/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/static/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/static/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="/static/admin/js/html5shiv.js"></script>
    <script src="/static/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="用户名" name="username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="密码">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="remember"> 记住我
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
        </div>
      </form>

    </div>


  </body>
</html>
