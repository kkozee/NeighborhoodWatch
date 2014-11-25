<h1>
    Neighborhood Watch
    <span>
        @if(Auth::check())
            Hello, {{{ User::find(1)->name }}}.
        @else
          <span class="loginsignup"><a href="login">Login</a> | <a href="signup">Signup</a></span>
        @endif
    </span>
</h1>
@include('templates.nav')
<h2>
@yield('subtitle')
</h2>