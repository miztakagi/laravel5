@section('menu')
	<a href="{{ url('/auth/login') }}" class="header-item is-pulled-right "><i class="fa fa-sign-in"></i>ログイン</a>
	<a href="{{ url('/auth/register') }}" class="header-item is-pulled-right "><i class="fa fa-user-plus"></i>メンバー登録</a>
@endsection
