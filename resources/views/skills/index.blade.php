<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <a href="../../index">Home</a>
      <h1>Skills</h1>

    <a href="createProject" class="btn btn-primary mb-3">Add Skill</a>
    <table class="table table-striped table-bordered table-hover">
      <tr>
        <td>Name</td>
        <td>Icon</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>

      @foreach ($skills as $skill)
        <tr style="vertical-align: middle;">
          <td>{{$skill->name}}</td>
          <td>{{$skill->icon}}</td>
          <td><a href="editSkill/{{ $skill->id }}" class="btn btn-primary">edit</a></td>
          <td><a href="deleteSkill/{{ $skill->id }}" class="btn btn-danger">delete</a></td>
        </tr>
      @endforeach

    </table>
    </div>
  </body>
</html>