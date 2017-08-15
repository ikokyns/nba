<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Timovi</a>
          <a class="nav-link" href="#">Igraci</a>
          
          @if (Auth::check())
              <a class="nav-link ml-auto" href="#"> {{ Auth::user()->name }} </a>
              <a class="nav-link" href="/logout">Logout</a>
          @else
            <a class="nav-link ml-auto" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
          @endif

        </nav>
    </div>
</div>