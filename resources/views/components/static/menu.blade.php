<div id="menu" class="hide">
    <div class="menu-button">
        <a href="{{ route('dashboard') }}">{{ __('Home') }}</a>
    </div>
    <div class="menu-button">
        <a href="{{ route('categories') }}">{{ __('Categories') }}</a>
    </div>
    <div class="menu-button">
        <a href="{{ route('list.new') }}">{{ __('New list') }}</a>
    </div>
    <div class="menu-button">
        <a href="{{ route('profile.edit')}}">{{ __('Edit profile') }}</a>
    </div>
    <div class="menu-button">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
    <div class="menu-button">
        <button id="close-menu-button">X</button>
    </div>
</div>


<div id="outside-menu" class="hide">
</div>
