<div class="list-group-item">
  <img class="me-3" src="/avatar/summer@example.com.jpg" alt="{{ $user->name }}" width=32>
  <a href="{{ route('users.show', $user) }}">
    {{ $user->name }}
  </a>
</div>
