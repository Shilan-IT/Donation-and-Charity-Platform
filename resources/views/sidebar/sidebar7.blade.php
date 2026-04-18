<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <link href="css-circular-prog-bar.css" media="all" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/app1.css">
    <link rel="stylesheet" type="text/css" href="css/app3.css">
    <title>منصة التبرع والعمل الخيري</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="bg-success" style="--bs-bg-opacity: .1;" >



<div class="row container">
    <div id="side" class="col-2 nav-hover " style=" height:870px; width:280px">

        <div class="d-flex " style="margin-right: 2% " >
            <div> <img src="p12.jpg"  class="rounded-circle " style="width: 80px; height: 80px ;margin-top:20%" ></div>
            <div style="margin-top: 12%;padding-right:6%">
                <p class="fs-5 fw-bold">منصة التبرع والعمل </p>
                <p class="fs-5 fw-bold" style="margin-right: 20%"> الخيري</p>



            </div>

        </div>
        <hr>
        <ul class=" nav flex-column " >
            <li class="nav-item d-flex  ">
                <i class="bi bi-bar-chart-line-fill fs-2" style="margin-top:4%"></i>
                <a class="nav-link active fs-4 m-2" href="{{url('/statics')}}">الإحصائيات</a>

            </li>



            <li class="nav-item d-flex   ">
                <i class="bi bi-box2-heart-fill fs-2 " style="margin-top:4%"></i>
              <a class="nav-link active fs-4  m-2" href="{{url('/projects')}}">برامج المنصة</a>
            </li>



            <li class="nav-item d-flex ">
                <i class="bi bi-cash-coin fs-2 text-white" style="margin-top:4%"></i>
              <a class="nav-link fs-4 m-2" href="{{url('/quiqdonation')}}">التبرعات الفورية</a>
            </li>


            <li class="nav-item d-flex">
                <i class="bi bi-person-heart fs-2" style="margin-top:4%"></i>
                <a class="nav-link active fs-4  m-2" href="{{url('/donators')}}">  المتبرعين</a>
              </li>
              <li class="nav-item d-flex ">
                <i class="bi bi-building-check fs-2" style="margin-top:4%"></i>
                <a class="nav-link active fs-4  m-2" href="{{url('/investpro')}}">   المشاريع الصغيرة</a>

            </li>

              <li class="nav-item d-flex">
                <i class="bi bi-envelope-paper fs-2" style="margin-top:4%"></i>
                <a class="nav-link active fs-4  m-2" href="{{url('/email')}}"> البريد</a>

            </li>

              <li class="nav-item d-flex active">
                <i class="bi bi-send-fill fs-2" style="margin-top:4%"></i>
                <a class="nav-link active fs-5  m-2" href="{{url('/telegram')}}"> تيليغرام بوت</a>
            </li>


        </ul>

    </div>


    <div class="col" >

    @yield('cont7')

    </div>

</div>









<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>
