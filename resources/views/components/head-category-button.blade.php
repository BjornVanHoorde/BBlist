<div class="menu-button category">
    <img src="{{ URL::asset('assets/categories/' . $category->pathname . '.png') }}" alt="{{ $category->pathname }}">
    <a href="{{ route('categories', $category->pathname) }}">{{ $category->name }}</a>
</div>
