<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Add Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Show Blog</a>
          </li>
        </ul>

       <div class="d-flex gap-2">
        <a href="{{ route('register') }}" class="btn btn btn-info" type="submit">Registation</a>
        <a href="{{ route('login') }}" class="btn  btn btn-primary" type="submit">Login</a>
        {{-- <a href="{{ route('logout') }}" class="btn  btn btn-warning" type="submit">Logout</a> --}}
       </div>


      </div>
    </div>
  </nav>
