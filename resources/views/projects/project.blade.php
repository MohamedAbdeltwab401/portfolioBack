<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
  </head>
  <body>
    <form action="../../storeProject" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" name="name" placeholder="name">
      <input type="file" name="image">
      <input type="url" name="url">
      @foreach ( $skills as $value )
        <label for="">
          {{ $value->name }}
          <input type="checkbox" name="skills[]" value="{{ $value->id }}">
        </label>
      @endforeach

      <input type="submit">
    </form>
  </body>
</html>