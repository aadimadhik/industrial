<!-- START header -->
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="index.html">Industrial</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('services') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ route('services') }}">Architectural Design</a>
                  <a class="dropdown-item" href="{{ route('services') }}">Interior</a>
                  <a class="dropdown-item" href="{{ route('services') }}">Building</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>
            </ul>

            <div class="navbar-nav ml-auto">
              <form method="post" class="search-form">
                <span class="icon ion ion-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </form>
            </div>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->