<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{{isset($title) ? $title : 'ののべる.jp | デジタル書籍出版サービス'}}}</title>
    <!-- CSS -->
    <link href="{{asset('/css/normalize.css')}}" rel="stylesheet">
    <!--<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">-->
    <!--<link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet">-->
    <link href="{{asset('/css/bulma.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/nonovel.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @yield('addCss')
    <!-- JS -->
    <script type="text/javascript" src="{{asset('/js/jquery-1.12.3.min.js.css')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/nonovel.js')}}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('addJs')
    <script>
      $(function(){
    	   $('body').footerMenu();
      });
    </script>
</head>
<body>
@yield('nav')
@yield('content')
<section class="hero is-success">
  <div id="footerMenu">
    <div class="content-wrap">
        <div class="container">
          <p>&copy; all right reserverd 2016 nonovel.jp</p>
          <p>
            <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
          </p>
          <p>
            <a class="icon" href="https://github.com/jgthms/bulma">
              <i class="fa fa-github"></i>
            </a>
          </p>
        </div>
    </div>
  </div>
</section>
</body>
</html>
