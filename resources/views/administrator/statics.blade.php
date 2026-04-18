@extends('sidebar.sidebar1')
@Section('cont1')


    <!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>منصة التبرع والعمل الخيري</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fonts/css/fontawesome.min.css">
    <link rel="stylesheet" href="fonts/webfonts">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>


</head>
<style>
    .chart-container {
        width: 75%;
        height: 75%;
        margin: auto;


    }
</style>
<body class="bg-success " style="--bs-bg-opacity: .1;">
<div>


    <!--end navbar-->
    <section>
        {{-- <!---بداية عر ض البطاقات --}}
        <div class="row row-cols-1 row-cols-md-2    d-flex" style="margin-top:3%">
            <div class="card mb-3  col-6 shadow p-3  mb-5 bg-body-tertiary rounded "
                 style="height:250px; width:300px ;margin-right:3.5% ;margin-left:1%">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="1.png " class="img-fluid rounded-start ms-4  " style="width:170px ; height:170px">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ms-2 " style="width: 180px ;margin-top:10%">
                            <h5 class="card-title " style="margin-right:1%">برامج التبرع الجديدة</h5>
                            <p class="card-text fw-bold text-danger fs-3 " style="margin-right:30% ;margin-top:10%">
                                25</p>
                            <p class="mb-0 text-success fs-5" style="margin-right:25% ;margin-top:3%"> هذا الشهر</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3  col-6 shadow p-3  mb-5 bg-body-tertiary rounded "
                 style="height:250px; width:300px ;margin-right:1% ;margin-left:1%">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="3.png " class="img-fluid rounded-start ms-4  " style="width:170px ; height:170px">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ms-2 " style="width: 180px ;margin-top:10%">
                            <h5 class="card-title " style="margin-right:1%">برامج التبرع المكتملة</h5>
                            <p class="card-text fw-bold text-danger fs-3 " style="margin-right:30% ;margin-top:10%">
                                40</p>
                            <p class="mb-0 text-success fs-5" style="margin-right:25% ;margin-top:3%"> هذا الشهر</p>


                        </div>
                    </div>
                </div>


            </div>
            <div class="card mb-3  col-6 shadow p-3  mb-5 bg-body-tertiary rounded "
                 style="height:250px; width:300px ;margin-right:1% ;margin-left:1%">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="4.png " class="img-fluid rounded-start   " style="width:160px ; height:170px">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ms-2 " style="width: 200px ;margin-top:10%">
                            <h5 class="card-title fs-5">برامج التبرع الغير مكتملة</h5>
                            <p class="card-text fw-bold text-danger fs-3 " style="margin-right:30% ;margin-top:10%">
                                20</p>
                            <p class="mb-0 text-success fs-5" style="margin-right:25% ;margin-top:3%"> هذا الشهر</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3  col-6 shadow p-3  mb-5 bg-body-tertiary rounded "
                 style="height:250px; width:300px ;margin-right:1% ;margin-left:1%">
                <div class="row g-0 ">
                    <div class="col-md-4 ">
                        <img src="invest.jpg" class="img-fluid rounded-start ms-4  " style="width:170px ; height:170px">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ms-2 " style="width: 180px ;margin-top:10%">
                            <h5 class="card-title " style="margin-right:6%"> مشاريع الاستثمار</h5>
                            <p class="card-text fw-bold text-danger fs-3 " style="margin-right:30% ;margin-top:10%">
                                10</p>
                            <p class="mb-0 text-success fs-5" style="margin-right:25% ;margin-top:3%"> هذا الشهر</p>

                        </div>
                    </div>
                </div>
            </div>


        </div>


    </section>
    <section>
        <div class="card chart-container shadow ">
            <canvas id="chart"></canvas>
        </div>
    </section>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4 "
        crossorigin="anonymous "></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js "
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin=" anonymous "></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js " crossorigin="anonymous "></script>
<script src="donate/resources/js/bootstrap.min.js ">
</script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script>
    const ctx = document.getElementById("chart").getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["التبرعات الأسبوعية", "التبرعات الشهرية", "التبرعات السنوية"],
            datasets: [{
                label: 'مخطط التبرعات',

                backgroundColor: 'rgba(161, 198, 247, 1)',
                borderColor: 'rgb(47, 128, 237)',
                data: [300, 400, 200, 500],

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                    }
                }]
            }
        },
    });
</script>

</html>
@endsection
