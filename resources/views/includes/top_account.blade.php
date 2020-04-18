@if (Auth::check())
    <a href="{{ route('logout') }}" onclick="event.preventDefault();                                              document.getElementById('logout-form').submit();">
        登出
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <a href="{{ url('/login') }}"><i class="icon-line2-user"></i></a>
@endif

