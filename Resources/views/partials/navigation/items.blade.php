
<li class="dropdown-header">Profile</li>
<li> <a href="{{ route('profile.index') }}"> Profile Settings</a></li>

<li class="dropdown-header">Company</li>
<li> <a href="{{ route('company.index') }}"> My company </a></li>
<li> <a href="{{ route('company.index') }}"> Joined companies  </a></li>
<li> <a href="{{ route('company.index') }}"> Join requests </a></li>

<li role="separator" class="divider"></li>
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
