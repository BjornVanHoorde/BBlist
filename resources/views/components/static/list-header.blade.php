<header class="{{ $gender ? $gender : '' }}">
    <img id="menu-btn" src="{{ URL::asset('assets/userbaby.png') }}" alt="menu.png">
    <h2 class="text-center">{{ __($title) }}</h2>
    <a href="{{ route('list.edit', $slug) }}"><i class="fa-solid fa-pen-to-square fa-3x"></i></a>
</header>
