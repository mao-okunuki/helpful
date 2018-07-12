<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                    @if (Auth::check())
                        <a class="navbar-brand" href="{{ route('irais.index', Auth::check()) }}">Helpful</a>
                    @else
                        <a class="navbar-brand" href="/">Helpful</a>
                    @endif
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <a class="navbar-brand" href="/hatsu">初めての方へ</a>
                        <a class="navbar-brand" data-toggle="modal" data-target="#sampleModal"}}"><i class="fa fa-search" id='search'></i></a>
                        <a class="navbar-brand" href="{{ route('irais.index', Auth::user()->id) }}">依頼一覧へ</a>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('users.show', Auth::user()->id) }}">マイページ</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.edit', Auth::user()->id) }}">マイページの編集</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('irais.index', 'ホームに戻る') !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>                                
                            </ul>
                        </li>
                    @else
                        <a class="navbar-brand" href="/hatsu">初めての方へ</a>
                        <li>{!! link_to_route('signup.get', '新規登録') !!}</li>
                        <li>{!! link_to_route('login', 'ログイン') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>


