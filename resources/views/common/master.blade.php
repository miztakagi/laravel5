<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{{isset($title) ? $title : 'ののべる.jp | デジタル書籍出版サービス'}}}</title>
    <!-- CSS -->
    <!--<link href="{{asset('/css/normalize.css')}}" rel="stylesheet" type="text/css">-->
    <!--<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">-->
    <!--<link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">-->
    <link href="{{asset('/css/bulma.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!--<link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">-->
    <link href="{{asset('/css/nonovel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/tmp.css')}}" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @yield('addCss')
    <!-- JS -->
    <script type="text/javascript" src="{{asset('/js/jquery-1.12.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jQuery.cssAssist-1.7.5.min.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script> -->
    <!--<script type="text/javascript" src="{{asset('/js/less.min.js')}}"></script> -->
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

<section id="newsletter" class="hero is-primary">
  <div class="hero-content">
    <div class="container">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup" class="columns is-vcentered">
        <div class="column is-third is-left">
          <p class="title">ののべる <strong>ニュースレター</strong></p>
          <p class="subtitle">メールで最新情報をお届けします</p>
        </div>

        <div class="column">
          <form action="https://bbxdesign.us3.list-manage.com/subscribe/post?u=b43b93fe633f0560b2a72a69c&amp;id=52585e8803" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
            <div id="mc_embed_signup_scroll">
              <div class="control has-icon is-grouped">
                <input aria-required="true" value="" name="EMAIL" class="input is-flat required email" id="mce-EMAIL" placeholder="メールアドレス" required="" type="email">
                <i class="fa fa-envelope"></i>
                <input value="登録" name="subscribe" id="mc-embedded-subscribe" class="button is-primary is-outlined is-inverted" type="submit">
              </div>
              <div id="mce-responses">
                <div class="notification is-danger response" id="mce-error-response" style="display:none"></div>
                <div class="notification is-success response" id="mce-success-response" style="display:none"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input name="b_b43b93fe633f0560b2a72a69c_52585e8803" tabindex="-1" value="" type="text">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="content is-text-centered">
      <p>&copy; 2016 nonovel.jp - produced by [creative mews LLC] All Right Reserverd.</p>
      <ul class="navigation">
        <li><a href="https://laravel.com/" target="_blank">Laravel 5.2</a></li>
        <li><a href="http://bulma.io/" target="_blank">Bulma v0.0.17</a></li>
        <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a></li>
        <li><a href="http://www.colorhexa.com" target="_blank">Colors</a></li>
      </ul>
    </div>
  </div>
</footer>

<section class="hero is-success">
  <div id="footerMenu">
    <div class="content-wrap">
        <div class="container">
          <ul class="columns">
            <li class="column"><a href="https://laravel.com/" target="_blank">Laravel 5.2</a></li>
            <li class="column"><a href="http://bulma.io/" target="_blank">Bulma v0.0.17</a></li>
            <li class="column"><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome Icons</a></li>
            <li class="column"><a href="http://www.colorhexa.com" target="_blank">Colors</a></li>
          </ul>
        </div>
    </div>
  </div>
</section>

</body>
</html>
