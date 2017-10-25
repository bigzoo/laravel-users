<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users app</title>
  </head>
  <body>
    <h1>All Users</h1>
    @foreach($users as $user)
    <li>{{ $user->name }}</li>
    @endforeach

    <h3>Add a user.</h3>
    <form action="/users" method="post">
      {{ csrf_field() }}
      <p>
        <input type="text" name="name" placeholder="Name" required>
      </p>

      <p>
        <input type="email" name="email" placeholder="Your email" required>
      </p>

      <p>
        <input type="password" name="password" placeholder="Your password" required>
      </p>

      <p>
        <button type="submit" name="button">Add User</button>
      </p>

    </form>

  </body>
</html>
