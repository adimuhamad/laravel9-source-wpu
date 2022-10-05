<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request ()->segment(2) == 'posts' ? 'active' : '' }}" href="/dashboard/posts">
          <span data-feather="file-text"></span>
          My Posts
        </a>
      </li>
    </ul>
    <hr>
    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/">
          <span data-feather="chevron-left"></span>
          Back to Home
        </a>
      </li>
    </ul>    
  </div>
</nav>