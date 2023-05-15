<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieNerds</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Movie Nerds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/articles">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/discussion">Discussion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tier">Tierlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tags">Tag</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
          </li>
          </ul>
        </div>
        <div class="row justify-content-center mb-3">
          <div class="col-md-6">
              <form action="/articles">
                  @if (request('tag'))
                      <input type="hidden" name="tag" value="{{ request('tag') }}">
                  @endif
                  @if (request('author'))
                      <input type="hidden" name="author" value="{{ request('author') }}">
                  @endif  
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                      <button class="btn btn-danger" type="submit" >Search</button>
                  </div>
              </form>
          </div>
      </div>
      </nav>


    <div class="container">
        @yield('container')
    </div>
</body>
</html>