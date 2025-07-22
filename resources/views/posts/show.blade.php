<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show</title>
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
        <div class="card">
          <div class="card-header">
            Post info
          </div>
          <div class="card-body">
            <h5 class="card-title">Title: {{$post['title']}}</h5>
            <p class="card-text">Description: {{ $post['description'] }}</p>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            Post Creator info
          </div>
          <div class="card-body">
            <h5 class="card-title">Name: {{ $post['posted_by'] }}</h5>
            <p class="card-text">Email: {{ $post['email'] }}</p>
            <p class="card-text">Created at: {{$post['created_at']}}</p>
          </div>
        </div>
        
    </div>

  </body>
</html>