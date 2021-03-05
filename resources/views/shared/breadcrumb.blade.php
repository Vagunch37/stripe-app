<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
    @if (request()->is('admin/categories') || request()->is('admin/categories/*'))
      <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
    @endif
    @if (request()->is('admin/languages') || request()->is('admin/languages/*'))
      <li class="breadcrumb-item"><a href="{{ route('languages.index') }}">Languages</a></li>
    @endif
    @if (request()->is('admin/events') || request()->is('admin/events/*'))
      <li class="breadcrumb-item"><a href="{{ route('events.index') }}">Events</a></li>
    @endif
    @if (request()->is('admin/users') || request()->is('admin/users/*'))
      <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
    @endif
  </ol>
</nav>

