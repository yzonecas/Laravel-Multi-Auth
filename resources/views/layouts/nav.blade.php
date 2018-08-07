@guest
  <div class="inner">
    <h3 class="masthead-brand">
      <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
    </h3>
    <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link" href="/login">{{ __('Login') }}</a>
          @else
              <div class="inner">
                  <h3 class="masthead-brand">
                    <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
                  </h3>
                  <nav class="nav nav-masthead justify-content-center">
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span></a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
    </nav>
  </div>
@endguest
