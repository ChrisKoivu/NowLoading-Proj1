 <!-- begin sidenav -->
 <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('links')}}">
                <span data-feather="file"></span>
                Links
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/links/create')}}">
                  <span data-feather="file"></span>
                    Create Links
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/links/visited')}}">
                  <span data-feather="file"></span>
                    Visited Links
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/files')}}">
                <span data-feather="shopping-cart"></span>
                View Files
              </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{url('/files/upload')}}">
                  <span data-feather="shopping-cart"></span>
                  Upload Files
                </a>
              </li>
              
            <li class="nav-item">
              <a class="nav-link" href="{{url('/survey/show')}}">
                <span data-feather="bar-chart-2"></span>
                Review Surveys
              </a>
            </li>
            
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last month
              </a>
            </li>
            
          </ul>
        </div>
      </nav>
      <!-- end sidenav -->
