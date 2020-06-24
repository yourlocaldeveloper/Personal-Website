<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Aaron Yates - Logo">
            </a>
            <div class="navbar-item">
                <p id="small-desc">WEB DEVELOPER - SKI INSTRUCTOR</p>
            </div>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbar" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="navbar-item">
                        <a href="/">
                          <span class="icon">
                            <i class="fas fa-home"></i>
                          </span>
                          <span>Homepage</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="navbar-item">
                        <a href="/about">
                          <span class="icon">
                            <i class="fas fa-user"></i>
                          </span>
                          <span>About Me</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="navbar-item">
                        <a href="/skills">
                          <span class="icon">
                            <i class="fas fa-briefcase"></i>
                          </span>
                          <span>Skills</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="navbar-item">
                        <a href="/projects">
                          <span class="icon">
                            <i class="fas fa-code"></i>
                          </span>
                          <span>Projects</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="navbar-item">
                        <a href="/blog">
                          <span class="icon">
                            <i class="fas fa-rss"></i>
                          </span>
                          <span>Blog</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @yield('scripts')
    <footer>

    </footer>
    </body>
</html>
