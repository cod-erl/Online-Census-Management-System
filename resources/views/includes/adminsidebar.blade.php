<div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
        -->
      <div class="logo">
        <a href="{{route('admin') }}" class="simple-text logo-normal">
          Census Act Kenya
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('adminReports') }}">
              <i class="material-icons">content_paste</i>
              <p>Data Reports</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="{{route('adminCharts') }}">
              <i class="material-icons">location_ons</i>
              <p>Charts</p>
            </a>
          </li>
        </ul>
      </div>
    </div>