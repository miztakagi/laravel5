@extends('common.master')
@extends('common.nav')
@extends('common.nomenu')
@section('content')
<div class="container is-fluid content">
	<form class="form-horizontal" id="login" name="login" role="form" method="POST" action="{{ url('/auth/login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		@if (count($errors) > 0)
			<div class="notification is-warning">
				<strong>入力に間違いがあります。再度ご記入下さい。</strong><br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<nav class="panel">
		  <p class="panel-heading">
		    <i class="fa fa-login"></i>ログイン
		  </p>
		  <div class="panel-block">
		    <div class="control columns is-mobile">
		  		<div class="column is-3 input_label"><i class="fa fa-envelope"></i>メールアドレス</div>
				  <div class="column"><input class="input" type="email" name="email" value="{{ old('email') }}"></div>
				  <div class="column is-1">&nbsp;</div>
				</div>
		  </div>
		  <div class="panel-block">
		    <div class="control columns is-mobile">
					<div class="column is-3 input_label"><i class="fa fa-lock"></i>パスワード</div>
				  <div class="column"><input class="input" type="password" name="password"></div>
				  <div class="column is-1">&nbsp;</div>
				</div>
		  </div>
		  <div class="panel-block">
		  	<div class="control is-pulled-right remind">
			    <label class="panel-checkbox is-pulled-left">
				    <input type="checkbox" name="remind"><i class="fa fa-bell-o"></i>記憶しておく
				  </label>
				  <a class="btn btn-link" href="{{ url('/password/email') }}"><i class="fa fa-question"></i>パスワードを忘れてしまったら…</a>
				</div>
		    <button type="submit" class="button">
		      ログイン
		    </button>
		  </div>
		</nav>
	</form>
</div>

@endsection
