<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item {{ set_active_route('root_path') }}">
            <a class="nav-link" aria-current="page" href="{{ route('root_path') }}">Home</a>
          </li>
          <li class="nav-item {{ set_active_route('about_path') }}">
            <a class="nav-link" href="{{ route('about_path') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" 
            data-bs-toggle="dropdown" aria-expanded="false">Planéte</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="https://laravel.com">laravel.com</a></li>
              <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
              <li><a class="dropdown-item" href="https://laracasts.com">Laracasts</a></li>
              <li><a class="dropdown-item" href="https://larajons.com">Larajobs.com</a></li>
              <li><a class="dropdown-item" href="https://laravel-news.com">Laravel News</a></li>
              <li><a class="dropdown-item" href="https://larachat.com">Larachat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
    </ul>
    </div>
  </nav>