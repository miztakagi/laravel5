@extends('common.master')
@extends('common.nav')
@extends('common.submenu')
@section('content')
  <div class="container">
    <h1>Sampleページです</h1>
    <div>{{$first_name}} {{$last_name}}</div>
    <h2>Password</h2>
    <div>{{$pass}}</div>
  </div>
@stop
