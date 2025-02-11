<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <div>
        <ul  class="nav flex-column mb-2">
        <li  class="nav-item">
            <a style="color:#137c13 !important;" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a  style="color:#137c13 !important;" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="users"></span>
              Atur Portal Berita
            </a>
          </li>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3  mb-1 text-muted">
          <span class="mt-2">Administrator</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span ></span>
          </a>
        </h6>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a  class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span  data-feather="grid"></span>
              Post Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/booking*') ? 'active' : '' }}" href="/dashboard/booking">
              <span data-feather="file-text"></span>
              Data Booking
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/datapendaki*') ? 'active' : '' }}" href="/dashboard/datapendaki">
              <span data-feather="users"></span>
              Data Pendaki
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kreator*') ? 'active' : '' }}" href="/dashboard/kreator">
              <span data-feather="users"></span>
              Tambah Kreator
            </a>
          </li>
        </ul>
        @endcan

      </div>
    </nav>

    