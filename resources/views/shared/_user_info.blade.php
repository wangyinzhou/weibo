<a href="{{ route('users.show', $user->id) }}">
  <img src="/avatar/summer@example.com.jpg" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>
