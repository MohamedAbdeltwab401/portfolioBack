<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <h1>Projects</h1>

    <a href="createProject" class="btn btn-primary mb-3">Add Project</a>
    <table class="table table-striped table-bordered table-hover">
      <tr>
        <td>Name</td>
        <td>Image</td>
        <td>Url</td>
        <td>Skills</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>

      @foreach ($projects as $project)
        <tr style="vertical-align: middle;">
          <td>{{$project->name}}</td>
          <td>{{$project->image}}</td>
          <td>{{$project->url}}</td>
          <td width = "25%">
            @foreach ($project->skills as $skill)
            <button class="btn btn-success fs-6 my-1">{{ $skill->name }}</button>
            @endforeach
          </td>
          <td><a href="edit/{{ $project->id }}" class="btn btn-primary">edit</a></td>
          <td><a href="delete/{{ $project->id }}" class="btn btn-danger">delete</a></td>
        </tr>
      @endforeach

    </table>

    <h1>Skills</h1>
    <a href="indexSkills">Skills</a>
    </div>
  </body>
</html>