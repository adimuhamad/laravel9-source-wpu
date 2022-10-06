<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky sidebar-sticky">

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>USER</span>
    </h6>
    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
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

    @can('admin')   
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>ADMINISTRATOR</span>
    </h6>
    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link {{ request ()->segment(2) == 'categories' ? 'active' : '' }}" href="/dashboard/categories">
          <span data-feather="grid"></span>
          Post Categories
        </a>
      </li>
    </ul>
    @endcan

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>EXIT</span>
    </h6>
    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">
          <span data-feather="chevron-left"></span>
          Back to Home
        </a>
      </li>
    </ul>

  </div>
</nav>