@extends('common.master')
@extends('common.nav1')
@section('content')
  <div class="container">
    <h1>Sampleページです</h1>
    <div>{{$first_name}} {{$last_name}}</div>
  </div>
@stop
