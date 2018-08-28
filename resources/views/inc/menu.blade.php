<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            OSDB
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Movie
              <span class="sr-only">(current)</span>
            </a>
          </li>
    <!-- Authentication Links -->
    @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
    @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   
                  @if(Auth::user()->is_admin)
                    <span class="dropdown-item text-danger">:: ADMIN USER ::</span>
                    <a class="dropdown-item" href="{{ url('movie/create') }}">Add Movie</a>
                    <a class="dropdown-item" href="{{ url('user/allUsers') }}">Manage users</a>
                  @else
                    <a class="dropdown-item" href="/user/{{Auth::user()->id}}/edit">Modify account</a>
                  @endif

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
      @endguest
        </ul>
      </div>
    </div>
  </nav>