<nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active':''}}"><a href="/">首頁</a></li>
            <li class="{{Request::is('blog') ? 'active':''}}"><a href="/blog">部落格</a></li>
            <li class="{{Request::is('about') ? 'active':''}}"><a href="/about">關於我</a></li>
            <li class="{{Request::is('contact') ? 'active':''}}"><a href="/contact">聯絡我</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('登入') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('註冊') }}</a></li>
            @else
              <li class="dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('posts.index')}}">所有文章</a></li>
                  <li><a href="{{route('categories.index')}}">文章分類</a></li>
                  <li><a href="{{route('tags.index')}}">文章標籤</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('登出') }}
                      </a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </ul>
              </li>
            @endguest
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>