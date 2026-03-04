<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title></title>
  </head>
  <body>
    <form action="../../update" method="post">
      @csrf
      <input type="text" name="id" placeholder="id" value="{{ $skills->id }}" class="d-none">
      <input type="text" name="name" placeholder="name" value="{{ $skills->name }}">
      <input type="text" name="icon" placeholder="icon" value="{{ $skills->icon }}">
      <input type="submit">
    </form>
  </body>
</html>