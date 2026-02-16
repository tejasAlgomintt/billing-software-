<!-- <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"> -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo" href="index.html"><img
        src="assets/images/algomintt_s.png" alt="logo" /></a>
    <a class="navbar-brand p-0 miniLogo d-none" href="index.html">
      <img src="assets/images/algomintt_s.png" class="ms-5" alt="logo" />
    </a>

    <a class="navbar-brand p-2 mobileMiniLogo" href="index.html">
      <img src="assets/images/algomintt_s.png" class="" alt="logo" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center navbarToggleButton textPurpal"
      type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    <ul class="navbar-nav navbar-nav-right">

      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen textPurpal" id="fullscreen-button"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle textPurpal"
          id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count-symbol bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
          aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Notifications</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-calendar"></i>
              </div>
            </div>
            <div
              class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Event
                today</h6>
              <p class="text-gray ellipsis mb-0"> Just a reminder that you
                have an event today </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="mdi mdi-cog"></i>
              </div>
            </div>
            <div
              class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6
                class="preview-subject font-weight-normal mb-1">Settings</h6>
              <p class="text-gray ellipsis mb-0"> Update dashboard </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="mdi mdi-link-variant"></i>
              </div>
            </div>
            <div
              class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Launch
                Admin</h6>
              <p class="text-gray ellipsis mb-0"> New admin wow! </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <h6 class="p-3 mb-0 text-center">See all notifications</h6>
        </div>
      </li>

      <li class="nav-item nav-profile dropdown">
        <a class="nav-link textPurpal" id="profileDropdown" href="#"
          data-bs-toggle="dropdown" aria-expanded="false">
          <div class="navProfileText">
            <p class="mb-1 textPurpal">David Greymaax</p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown"
          aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#">
            <i class="fa-regular fa-address-card textPurpal me-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <i class="fa-regular fa-money-bill-1 textPurpal me-2"></i> Billing </a>
          <a class="dropdown-item" href="#">
            <i class="fa-solid fa-arrows-rotate textPurpal me-2"></i> Renewal </a>
          <a class="dropdown-item" href="#">
            <i class="fa-solid fa-right-from-bracket textPurpal me-2"></i> Log-out </a>
        </div>
      </li>

      <li class="nav-item dropdown dropstart">
        <a
          class="nav-link textPurpal fw-bold dropdown-toggle"
          href="#"
          id="themeDropdown"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa-solid fa-brush fs-5 themeIcon"></i>
        </a>

        <div
          class="dropdown-menu navbar-dropdown p-3"
          aria-labelledby="themeDropdown"
          onclick="event.stopPropagation()">
          <input
            type="text"
            id="picker"
            class="jscolor form-control"
            value="000000"
            style="cursor: pointer;">
        </div>
      </li>


    </ul>
    <button
      class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
      type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>