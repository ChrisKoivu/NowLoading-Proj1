<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a class="navbar-brand mr-auto mr-lg-0" href="#">
      
      <!-- Branding Image -->
      <img src="{{url('images/ms4a-sta-logo.png')}}">

    
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">              
          <li class="nav-item">  
             <a class="nav-link" href="/home" >Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/pages/edit">Profile</a>
           </li>
        <!-- Authentication Links -->
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
          <!-- if admin role, generate dashboard link -->
          <?php
            if(auth()->user()->isAdmin()){
            echo '
            <li class="nav-item">  
              <a class="nav-link" href="/admin" >Dashboard</a>
            </li>
            ';
            }
          ?>
      
         <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
              </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 Logout  
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
             </form>
            </div>
          </li>        

        @endguest
      </ul>   
    </div>
</nav>
