<header style="background-color: #3a5a40;" class="navbar navbar-dark sticky-top bg flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Pendakian Bawakareng</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav ">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
                @csrf
                <button style="background-color: #3a5a40;" type="submit" class="nav-link px-4 bg border-0">
                  Logout  <span  data-feather="log-out"></span>
                </button>
              </form>
    </div>
  </div>
</header>