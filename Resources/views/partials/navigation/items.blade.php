<li> <a href="{{ route('profile.index') }}"> Profile Settings</a></li>
<li> <a href='#'> Worsk</a> </li>

<li class='seperator'></li>

<li>
    <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>
