<img src="../assets/images/algomintt_s.png" alt="">

<div class="mainBox mx-auto">
  <div class="content-wrapper">
    <!-- Heading Section -->
    <div class="page-header">
      <h3 class="page-title animate__animated animate__bounce">
        <span
          class="page-title-icon bgPurpal text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i
              class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Information Section -->

    <div class="row align-items-stretch">
      <div class="col-12 col-md-8 d-flex flex-column">
        <div class="row g-4 ">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="dashboard-card card1 position-relative overflow-hidden">
              <div class="top-circle"></div>
              <div class="card-icon">
                <i class="fas fa-globe"></i>
              </div>
              <div class="card-content">
                <h6 class="text-end">Site</h6>
                <h2 class="text-end">18</h2>
              </div>

            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="dashboard-card card2 position-relative overflow-hidden">
              <div class="top-circle"></div>
              <div class="card-icon">
                <i class="fas fa-truck"></i>
              </div>
              <div class="card-content">
                <h6 class="text-end">Supplier</h6>
                <h2 class="text-end">6</h2>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="dashboard-card card3 position-relative overflow-hidden">
              <div class="top-circle"></div>
              <div class="card-icon">
                <i class="fas fa-sms"></i>
              </div>
              <div class="card-content">
                <h6 class="text-end">SMS</h6>
                <h2 class="text-end">0</h2>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="dashboard-card card4 position-relative overflow-hidden">
              <div class="top-circle"></div>
              <div class="card-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="card-content">
                <h6 class="text-end">Dues</h6>
                <h2 class="text-end">73,400</h2>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="dashboard-card card5 position-relative overflow-hidden">
              <div class="top-circle"></div>
              <div class="card-icon">
                <i class="fas fa-wallet"></i>
              </div>
              <div class="card-content">
                <h6 class="text-end">Payable</h6>
                <h2 class="text-end">662,600</h2>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="dashboard-card card6 position-relative overflow-hidden">
              <div class="top-circle"></div>
              <div class="card-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="card-content">
                <h6 class="text-end">Expense</h6>
                <h2 class="text-end">370</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 mb-4">
        <div class="company-box mt-4 mt-lg-0">
          <div class="decoration-circle"></div>
          <div class="logo-wrapper">
            <img src="assets/images/algomintt_s.png" alt="Company Logo" class="w-50">
          </div>
          <h4 class="company-name textBlue">Algomintt Pvt. Ltd.</h4>

          <div class="contact-info">
            <div class="info-item">
              <i class="fas fa-map-marker-alt icon"></i>
              <span class="textBlue fw-semibold">Office No. 12, Business Park, Nashik, Maharashtra, India</span>
            </div>
            <div class="info-item mt-10">
              <i class="fas fa-phone icon"></i>
              <span class="textBlue fw-semibold">+91 98765 43210</span>
            </div>
          </div>

          <hr class="divider">

          <div class="date-section">
            <div class="date-card m-0">
              <span class="label textBlue fw-semibold">Onboard Date</span>
              <span class="date textBlue fw-semibold">12 Jan 2024</span>
            </div>
            <div class="date-card m-0">
              <span class="label textBlue fw-semibold">Renewal Date</span>
              <span class="date textBlue fw-semibold">12 Jan 2026</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- E Charts -->

    <div class="row mt-5">
      <div class="col-12 col-md-6 overflow-auto">
        <div id="pie-nest" class="chartStyle w-100"></div>
      </div>
      <div class="col-12 col-md-6 overflow-auto">
        <div id="pie-legend" class="chartStyle w-100"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      </div>
      <div id="matrix-grid-layout" class="chartStyle w-100"></div>
    </div>
  </div>

  <!-- Barchart and Pi-Chart -->

  <div class="row mt-5">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-start textPurpal">Visit And Sales Statistics</h4>
            <div id="visit-sale-chart-legend"
              class="rounded-legend legend-horizontal legend-top-right float-end"></div>
          </div>
          <canvas id="visit-sale-chart" class="mt-4"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title textPurpal">Traffic Sources</h4>
          <div
            class="doughnutjs-wrapper d-flex justify-content-center">
            <canvas id="traffic-chart"></canvas>
          </div>
          <div id="traffic-chart-legend"
            class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>