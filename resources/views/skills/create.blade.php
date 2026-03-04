<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title></title>
  </head>
  <body>
    <form action="store" method="post">
      @csrf
      <input type="text" name="name" placeholder="name">
      <input type="text" name="icon" placeholder="icon">
      <input type="submit">
    </form>
  </body>
</html>
