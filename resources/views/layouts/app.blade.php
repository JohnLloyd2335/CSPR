<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <title>CSPR</title>

    @livewireStyles
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <div class="logo-name"><span>Admin</span>Dashboard</div>
        </a>
        <ul class="side-menu">
            <li><a href="{{ route('home') }}"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="{{ route('com_seg') }}"><i class='bx bx-store-alt'></i>Costumer Seg</a></li>
            <li><a href="{{ route('prod_rec') }}"><i class='bx bx-like'></i>Product Recomm</a></li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Help</a></li>
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <livewire:auth/>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->


    @yield('content')

    <script src="{{ asset('asset/index.js') }}"></script>
    <script>
        const barChartOptions = {
            series: [{
                data: [10, 8, 6, 4, 2],
                name: 'Products',
            }, ],
            chart: {
                type: 'bar',
                background: 'transparent',
                height: 350,
                toolbar: {
                    show: false,
                },
            },
            colors: ['#FFC100', '#3CC5FF', '#FF5733', '#FF9D1E',
            '#9660A0'], // Adjusted colors to complement the glassy gradient
            plotOptions: {
                bar: {
                    distributed: true,
                    borderRadius: 4,
                    horizontal: false,
                    columnWidth: '40%',
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            grid: {
                borderColor: '#55596e',
                yaxis: {
                    lines: {
                        show: true,
                    },
                },
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
            },
            legend: {
                labels: {
                    colors: '#f5f7ff',
                },
                show: true,
                position: 'top',
            },
            stroke: {
                colors: ['transparent'],
                show: true,
                width: 2,
            },
            tooltip: {
                shared: true,
                intersect: false,
                theme: 'dark',
            },
            xaxis: {
                categories: ['Laptop', 'Phone', 'Monitor', 'Headphones', 'Camera'],
                title: {
                    style: {
                        color: '#f5f7ff',
                    },
                },
                axisBorder: {
                    show: true,
                    color: '#55596e',
                },
                axisTicks: {
                    show: true,
                    color: '#55596e',
                },
                labels: {
                    style: {
                        colors: '#f5f7ff',
                    },
                },
            },
            yaxis: {
                title: {
                    text: 'Count',
                    style: {
                        color: '#f5f7ff',
                    },
                },
                axisBorder: {
                    color: '#55596e',
                    show: true,
                },
                axisTicks: {
                    color: '#55596e',
                    show: true,
                },
                labels: {
                    style: {
                        colors: '#f5f7ff',
                    },
                },
            },
        };

        const barChart = new ApexCharts(
            document.querySelector('#bar-chart'),
            barChartOptions
        );
        barChart.render();

        // AREA CHART
        const areaChartOptions = {
            series: [{
                    name: 'Purchase Orders',
                    data: [31, 40, 28, 51, 42, 109, 100],
                },
                {
                    name: 'Sales Orders',
                    data: [11, 32, 45, 32, 34, 52, 41],
                },
            ],
            chart: {
                type: 'area',
                background: 'transparent',
                height: 350,
                stacked: false,
                toolbar: {
                    show: false,
                },
            },
            colors: ['#3CC5FF', '#FFC100'],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            dataLabels: {
                enabled: false,
            },
            fill: {
                gradient: {
                    opacityFrom: 0.4,
                    opacityTo: 0.1,
                    shadeIntensity: 1,
                    stops: [0, 100],
                    type: 'vertical',
                },
                type: 'gradient',
            },
            grid: {
                borderColor: '#55596e',
                yaxis: {
                    lines: {
                        show: true,
                    },
                },
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
            },
            legend: {
                labels: {
                    colors: '#f5f7ff',
                },
                show: true,
                position: 'top',
            },
            markers: {
                size: 6,
                strokeColors: '#1b2635',
                strokeWidth: 3,
            },
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                axisBorder: {
                    color: '#55596e',
                    show: true,
                },
                axisTicks: {
                    color: '#55596e',
                    show: true,
                },
                labels: {
                    offsetY: 5,
                    style: {
                        colors: '#f5f7ff',
                    },
                },
            },
            yaxis: [{
                    title: {
                        text: 'Purchase Orders',
                        style: {
                            color: '#f5f7ff',
                        },
                    },
                    labels: {
                        style: {
                            colors: ['#f5f7ff'],
                        },
                    },
                },
                {
                    opposite: true,
                    title: {
                        text: 'Sales Orders',
                        style: {
                            color: '#f5f7ff',
                        },
                    },
                    labels: {
                        style: {
                            colors: ['#f5f7ff'],
                        },
                    },
                },
            ],
            tooltip: {
                shared: true,
                intersect: false,
                theme: 'dark',
            },
        };

        const areaChart = new ApexCharts(
            document.querySelector('#area-chart'),
            areaChartOptions
        );
        areaChart.render();
        const pieChartOptions = {
            series: [20, 30, 25, 15, 10],
            chart: {
                type: 'pie',
                background: 'transparent',
                height: 350,
            },
            labels: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'],
            colors: ['#FFC100', '#3CC5FF', '#FF5733', '#FF9D1E', '#9660A0'],
            legend: {
                labels: {
                    colors: '#f5f7ff',
                },
                show: true,
                position: 'top',
            },
            tooltip: {
                shared: true,
                intersect: false,
                theme: 'dark',
            },
        };

        const pieChart = new ApexCharts(
            document.querySelector('#pie-chart'),
            pieChartOptions
        );
        pieChart.render();

        // DONUT CHART
        const donutChartOptions = {
            series: [40, 30, 20, 10],
            chart: {
                type: 'donut',
                background: 'transparent',
                height: 350,
            },
            labels: ['Category A', 'Category B', 'Category C', 'Category D'],
            colors: ['#FFC100', '#3CC5FF', '#FF5733', '#FF9D1E'],
            legend: {
                labels: {
                    colors: '#f5f7ff',
                },
                show: true,
                position: 'top',
            },
            tooltip: {
                shared: true,
                intersect: false,
                theme: 'dark',
            },
        };

        const donutChart = new ApexCharts(
            document.querySelector('#donut-chart'),
            donutChartOptions
        );
        donutChart.render();

        document.addEventListener('DOMContentLoaded', function() {
            var dropdown = document.getElementById('customerDropdown');
            var dropdownMenu = dropdown.querySelector('.dropdown-menu');

            dropdown.addEventListener('click', function(event) {
                event
            .stopPropagation(); // Prevent the window click event from immediately closing the dropdown

                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                } else {
                    dropdownMenu.style.display = 'block';
                }
            });

            // Close the dropdown if the user clicks outside of it
            window.addEventListener('click', function() {
                dropdownMenu.style.display = 'none';
            });
        });
    </script>

    @livewireScripts
</body>

</html>
