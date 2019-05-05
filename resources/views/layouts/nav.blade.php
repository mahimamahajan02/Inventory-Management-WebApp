<!-- Navbar start here====================== -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <div class="container">

    <a class="navbar-brand" href="#"><b>Inventory Management System</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>

      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link {{($pagename=='items') ? 'active' : null}}" href="/items">Items</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link {{($pagename=='checkin') ? 'active' : null}}" href="/checkin">Check-in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($pagename=='checkout') ? 'active' : null}}" href="/checkout">Check-out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($pagename=='customers') ? 'active' : null}}" href="/customers">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($pagename=='suppliers') ? 'active' : null}}" href="/suppliers">Suppliers</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/settings/locations">Locations</a>
            <a class="dropdown-item" href="/settings/units">Units</a>
            <a class="dropdown-item" href="/settings/currency">Currency</a>
            <a class="dropdown-item" href="/settings/category">Category</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
            </a>

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

      </ul>


    </div>

  </div>
  <!-- Container ends here -->
</nav>
