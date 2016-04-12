@section('nav')

<section class="hero is-colorbar">
<div class="border1"></div>
</section>
<section class="hero is-bold is-left">
  <div class="hero-content head_block">
    <div class="container">
      <div id="menus" class="is-clearfix">
        <div id="title" class="is-pulled-left">
          <a class="header-item" href="/">
            <img src="{{asset('/images/common/nonovel_logo_84.svg')}}" alt="ののべる.jp ロゴ" width="24" height="24" />        
          </a>
          <h1 class="title">ののべる<span>.jp</span></h1>
          <h2 class="subtitle">物語を見つけよう！</h2>
        </div>
        <div id="submenu" class="is-pulled-right">
          <div class="columns is-mobile">
            <div id="menu1" class="column smenu" data-role="見つける">
              <p class="circle modal-button" data-target="#modal_menu1"><i class="fa fa-search f-16"></i></p>
            </div>
            <div id="menu2" class="column smenu" data-role="書く人">
              <p class="circle modal-button" data-target="#modal_menu2"><i class="fa fa-pencil f-16"></i></p>
            </div>
            <div id="menu3" class="column smenu" data-role="使い方">
              <p class="circle modal-button" data-target="#modal_menu3"><i class="fa fa-question f-16"></i></p>
            </div>
            @if (Auth::guest())
            @yield('menu')
            <div id="menu4" class="column smenu" data-role="ログイン">
              <p class="circle modal-button" data-target="#modal_menu4"><i class="fa fa-sign-in f-16"></i></p>
            </div>
            @else
            <div id="menu4" class="column smenu" data-role="マイページ">
              <p class="circle modal-button" data-target="#modal_menu5"><i class="fa fa-user f-16"></i></p>
            </div>
            <div id="menu4" class="column smenu" data-role="ログアウト">
              <a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out"></i></a>
            </div>
            @endif
            <div id="menu5" class="column smenu" data-role="サイト案内">
              <p class="circle modal-button" data-target="#modal_menu7"><i class="fa fa-bars f-16"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<a class="header-item" href="{{ url('top') }}"><i class="fa fa-home"></i>トップ</a>
@if (! Auth::guest())
<a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }}さん</a>
@endif
<section>
<div class="nav-search">
      <form id="search" name="search" method="post" action="{{ url('search') }}">
        <input type="hidden" id="searchtype" name="searchtype" value="">
        <p class="control has-addons">
          <span class="select">
            <select>
              <option>小説</option>
              <option>コミック</option>
              <option>写真・イラスト</option>
              <option>アダルト</option>
              <option>その他</option>
            </select>
          </span>
          <input class="input inputtext" type="text" placeholder="発見！">
          <button class="button clear" type="button">
            <i class="fa fa-undo"></i>
          </button>
          <button class="button subm" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </p>
      </form>
    </div>
  </div>

  <div class="hero-footer">
    <nav class="tabs is-boxed">
      <div class="container">
        <ul>
          <li class="is-active">
            <a href="{{ url('novel') }}">小説</a>
          </li>
          <li class="">
            <a href="{{ url('comic') }}">コミック</a>
          </li>
          <li class="">
            <a href="{{ url('artbook') }}">写真・イラスト</a>
          </li>
          <li class="">
            <a href="{{ url('guidebook') }}">技術・実用</a>
          </li>
          <li class="">
            <a href="{{ url('life') }}">ライフ・思想</a>
          </li>
          <li class="">
            <a href="{{ url('etc') }}">その他</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>
@endsection

<div id="modal_menu1" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="http://placehold.it/128x128" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
            </p>
          </div>
          <nav class="navbar">
            <div class="navbar-left">
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>

<div id="modal_menu2" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-128x128">
            <img src="http://placehold.it/128x128" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p class="author is-bold">すぺあ<p>
            <p class="itemTitle">妹、分裂する<p>
            <p class="itemIntro is-bold">うちの妹が無限に分裂して世界がやばい。</p>
            <p class="itemDeatil">ある朝、花村葵が目覚めると妹である花村藍がふたりに増えていた。その日から藍は毎日二倍に分裂していく。葵は妹を元に戻そうと奮闘するが、うまくいかない。しかも四日目に分裂した十六番目の藍は他の藍とは少し違っていて……。</p>
          </div>
          <nav class="navbar">
            <div class="navbar-right">
              <a class="navbar-item">
                <span class="icon"><i class="fa fa-reply"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>
