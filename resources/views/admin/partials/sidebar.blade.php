<aside class="admin-sidebar">
    <div class="d-flex flex-column">
        <a class="nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">Posts</a>
        <a class="nav-link {{ request()->routeIs('admin.topics.*') ? 'active' : '' }}" href="{{ route('admin.topics.index') }}">Topics</a>
        <a class="nav-link {{ request()->routeIs('admin.authors.*') ? 'active' : '' }}" href="{{ route('admin.authors.index') }}">Authors</a>
        <a class="nav-link {{ request()->routeIs('admin.industries.*') ? 'active' : '' }}" href="{{ route('admin.industries.index') }}">Industries</a>
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="nav-link w-100 text-start">Logout</button>
        </form>
    </div>
</aside>
