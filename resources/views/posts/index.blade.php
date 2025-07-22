<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Refay Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/posts">All Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
        <div class="text-center">
            <button type="button" class="btn btn-success">Create Post</button>
            <table class="table table-striped mt-4" >
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">PostedBy</th>
                    <th scope="col">CreatedAt</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    
                  <tr>
                  <th scope="row">{{$post['id']}}</th>
                  <td>{{$post['title']}}</td>
                  <td>{{$post['posted_by']}}</td>
                  <td>{{$post['created_at']}}</td>
                  <td>
                      <a href="/posts/{{$post['id']}}" class="btn btn-info">View</a>
                      <a href="#" class="btn btn-primary">Edit</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        
    </div>

  </body>
</html>