<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">BPTP Jatim</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pesan">Daftar & Pesan Pengujian tanah</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="menu-has-children"><a>Admin</a>
            <ul>
            @if (Route::has('login'))
                    @auth
                        <li><a href="/admin">Masuk</a></li>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endauth
            @endif
              
            </ul>
          </li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->