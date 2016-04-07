@section('header')
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
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bulma.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @yield('addCss')
</head>
@stop
