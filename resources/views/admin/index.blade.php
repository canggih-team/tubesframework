<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('/admincss/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('/admincss/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('/admincss/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/admincss/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/admincss/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/admincss/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>

    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                                </div>
                                <div class="number dashtext-1">27</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-contract"></i></div><strong>New Projects</strong>
                                </div>
                                <div class="number dashtext-2">375</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New
                                        Invoices</strong>
                                </div>
                                <div class="number dashtext-3">140</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All
                                        Projects</strong>
                                </div>
                                <div class="number dashtext-4">41</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bar-chart block no-margin-bottom">
                            <canvas id="barChartExample1"></canvas>
                        </div>
                        <div class="bar-chart block">
                            <canvas id="barChartExample2"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="line-cahrt block">
                            <canvas id="lineCahrt"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="stats-2-block block d-flex">
                            <div class="stats-2 d-flex">
                                <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                                <div class="stats-2-content"><strong class="d-block">5.657</strong><span
                                        class="d-block">Standard Scans</span>
                                    <div class="progress progress-template progress-small">
                                        <div role="progressbar" style="width: 60%;" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100"
                                            class="progress-bar progress-bar-template progress-bar-small dashbg-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stats-2 d-flex">
                                <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                                <div class="stats-2-content"><strong class="d-block">3.1459</strong><span
                                        class="d-block">Team Scans</span>
                                    <div class="progress progress-template progress-small">
                                        <div role="progressbar" style="width: 35%;" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100"
                                            class="progress-bar progress-bar-template progress-bar-small dashbg-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stats-3-block block d-flex">
                            <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total
                                    requests</span>
                                <div class="progress progress-template progress-small">
                                    <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100"
                                        class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                                </div>
                            </div>
                            <div class="stats-3 d-flex justify-content-between text-center">
                                <div class="item"><strong class="d-block strong-sm">4.124</strong><span
                                        class="d-block span-sm">Threats</span>
                                    <div class="line"></div><small>+246</small>
                                </div>
                                <div class="item"><strong class="d-block strong-sm">2.147</strong><span
                                        class="d-block span-sm">Neutral</span>
                                    <div class="line"></div><small>+416</small>
                                </div>
                                <div class="item"><strong class="d-block strong-sm">541</strong><span
                                        class="d-block span-sm">Rejected</span>
                                    <div class="line"></div><small>-25</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="drills-chart block">
                            <canvas id="lineChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>

    <!-- Chart.js Initialization -->
    <script>
        var ctx = document.getElementById('barChartExample1').getContext('2d');
        var barChartExample1 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [10, 20, 30, 40, 50, 60, 70]
                }]
            },
            options: {}
        });

        var ctx2 = document.getElementById('barChartExample2').getContext('2d');
        var barChartExample2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 2',
                    backgroundColor: 'rgb(75, 192, 192)',
                    borderColor: 'rgb(75, 192, 192)',
                    data: [10, 30, 20, 40, 50, 60, 70]
                }]
            },
            options: {}
        });

        var ctx3 = document.getElementById('lineCahrt').getContext('2d');
        var lineCahrt = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 3',
                    backgroundColor: 'rgb(153, 102, 255)',
                    borderColor: 'rgb(153, 102, 255)',
                    data: [30, 20, 40, 50, 60, 70, 80]
                }]
            },
            options: {}
        });

        var ctx4 = document.getElementById('lineChart1').getContext('2d');
        var lineChart1 = new Chart(ctx4, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 4',
                    backgroundColor: 'rgb(255, 206, 86)',
                    borderColor: 'rgb(255, 206, 86)',
                    data: [10, 30, 40, 50, 60, 70, 90]
                }]
            },
            options: {}
        });
    </script>
</body>

</html>
