@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <nav>
        <i class='bx bx-menu'></i>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
            </div>
        </form>

    </nav>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Dashboard</h1>
                <!-- <ul class="breadcrumb">
                    <li><a href="#">
                            Analytics
                        </a></li>
                    /
                    <li><a href="#" class="active">Shop</a></li>
                </ul> -->
            </div>
            <!-- <a href="#" class="report">
                <i class='bx bx-cloud-download'></i>
                <span>Download CSV</span>
            </a> -->
        </div>
        <!-- Analyses -->
        <div class="analyse">
            <div class="sales">
                <div class="status">
                    <div class="info">
                        <h3>Products</h3>
                        <h1>$65,024</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>+81%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3>Avg Order</h3>
                        <h1>$31,652</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>-48%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Recs">
                <div class="status">
                    <div class="info">
                        <h3>Sale</h3>
                        <h1>$24,981</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>-48%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Customer</h3>
                        <h1>$14,147</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>+21%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Insights -->
        <div class="charts">

            <div class="charts-card">
              <h2 class="chart-title">Top 5 Products</h2>
              <div id="bar-chart"></div>
            </div>
  
            <div class="charts-card">
              <h2 class="chart-title">Customer per Country</h2>
              <div id="area-chart"></div>
            </div>

            <div class="charts-card">
              <h2 class="chart-title">Number of transaction per daytime</h2>
              <div id="pie-chart"></div>
          </div>
      
          <!-- New donut chart card -->
          <div class="charts-card">
              <h2 class="chart-title">Sales per country</h2>
              <div id="donut-chart"></div>
          </div>
          </div>
        
        <div class="bottom-data">
            <div class="orders">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3>Recent Orders</h3>
                    <i class='bx bx-filter'></i>
                    <i class='bx bx-search'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Tracking Id</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Razer Mouse</td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Royal Kludge</td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>11-02-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Ryzen 5</td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>23-25-2023</td>
                            <td><span class="status process">Delivered</span></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>

            <!-- Reminders -->
            <!-- <div class="reminders">
                <div class="header">
                    <i class='bx bx-note'></i>
                    <h3>Remiders</h3>
                    <i class='bx bx-filter'></i>
                    <i class='bx bx-plus'></i>
                </div>
                <ul class="task-list">
                    <li class="completed">
                        <div class="task-title">
                            <i class='bx bx-check-circle'></i>
                            <p>Start Our Meeting</p>
                        </div>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="completed">
                        <div class="task-title">
                            <i class='bx bx-check-circle'></i>
                            <p>Analyse Our Site</p>
                        </div>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="not-completed">
                        <div class="task-title">
                            <i class='bx bx-x-circle'></i>
                            <p>Play Footbal</p>
                        </div>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                </ul>
            </div> -->

            <!-- End of Reminders-->

        </div>
        

    </main>

</div>
@endsection
