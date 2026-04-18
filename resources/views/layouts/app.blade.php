<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css1/app.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    {{--    <script src="{{}}"></script>--}}
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>
        منصة التبرع والعمل الخيري
    </title>

    <style>
        .btn-primary {
            background: #16a085;
            width: 100px;
            border-radius: 20px;
            border: none;
        }

        .user_name {
            margin: 6px 5px 0 0;
            color: #ea7c32;
            font-weight: bold;
        }
    </style>

    @stack('css')

</head>

<div class="" style="">
    <div class="d-flex bg-white ms-auto me-auto ">

        <div id="txt" style="margin-right: 640px ; margin-top:3%" class="fs-3 fw-bold text-success"> منصة التبرع</div>
        <div style="margin-right: 3%; margin-left:3%; margin-bottom:1% "><img src="star.jpg"
                                                                              style="width: 100px; height: 100px ">
        </div>
        <div id="txt" class="fs-3 fw-bold text-success" style=" margin-top:3%"> والعمل الخيري</div>
    </div>
    <div class="d-flex justify-content-end m-2">
        @if(auth('web')->check())
            <div class="d-flex  rounded-4  border border-3 border-dark-subtle"
                 style="width: 300px ;height:50px;margin-right:2% ">
                <div style="margin-right: 7% ;margin-top:2px"><i class="bi bi-person-circle text-success  fs-3 "></i>
                </div>
                <span class="user_name">{{auth('web')->user()->name}}</span>
                <div>
                    {{--                <a href="{{url('/logout')}}">--}}
                    {{--                    <button type="submit" id="log" class="btn  fs-6 fw-semibold text-success "--}}
                    {{--                            style="width: 130px; height: 45px ">--}}
                    {{--                    </button>--}}

                    <a id="log" class="btn  fs-6 fw-semibold text-success " href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        تسجيل خروج
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    {{--                </a>--}}
                </div>
            </div>
        @else
            <div class="d-flex  rounded-4  border border-3 border-dark-subtle"
                 style="width: 190px ;height:50px;margin-right:2% ">
                <div style="margin-right: 7% ;margin-top:2px"><i class="bi bi-person-circle text-success  fs-3 "></i>
                </div>
                <div><a href="{{url('/register')}}">
                        <button type="submit" id="log" class="btn  fs-6 fw-semibold text-success "
                                style="width: 130px; height: 45px "> إنشاء حساب
                        </button>
                    </a></div>
            </div>
            <div class="d-flex  rounded-4  border border-3 border-dark-subtle"
                 style="width: 190px ;height:50px;margin-right:5px ">
                <div style="margin-right: 6% ;margin-top:2px"><i class="bi bi-box-arrow-left  text-success fs-3 "></i>
                </div>
                <div><a href="{{url('/login')}}">
                        <button type="submit" id="log" class="btn  fs-6 fw-semibold text-success "
                                style="width: 130px; height: 45px ">تسجيل الدخول
                        </button>
                    </a></div>
            </div>
        @endif
    </div>


    <!--tools-->
    <div id="bh" style=" height:100px ">


        <div class="container-fluid d-flex  justify-content-between  ">


            <div>
                <ul class="nav nav-pills ">
                    <li class="nav-item" style="width: 170px ; padding-top:20px">
                        <div class="rounded-5 m-2 d-flex border border-success-subtle ">
                            <div><a id="ff" class="nav-link  fs-5 fw-semibold text-white " style="margin-right: 12%"
                                    aria-current="page" href="#home"> الرئيسية</a></div>
                            <div style="padding-top: 7%"><i class="bi bi-house-door fs-5 fw-bold text-success"></i>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item" style="width: 180px ;padding-top:20px">
                        <div class="rounded-5 m-2  d-flex  border border-success-subtle">

                            <div><a id="ff" class="nav-link fs-5 fw-semibold text-white " href="#projects">فرص
                                    التبرع</a></div>
                            <div style="padding-top: 7%"><i class="bi bi-box2-heart fs-5 fw-bold text-success"></i>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item" style="width: 235px ;padding-top:20px">
                        <div class="rounded-5 m-2  d-flex  border border-success-subtle">

                            <div><a id="ff" class="nav-link fs-5 fw-semibold text-white " href="#small">المشاريع
                                    الصغيرة </a></div>
                            <div style="padding-top: 4%"><i class="bi bi-lightbulb fs-5 fw-bold text-success"></i></div>
                        </div>
                    </li>

                    <li class="nav-item" style="width: 180px ; padding-top:20px">
                        <div class="rounded-5  m-2 d-flex border border-success-subtle">

                            <div><a id="ff" class="nav-link fs-5 fw-semibold text-white " href="#about">عن المنصة</a>
                            </div>
                            <div style="padding-top: 7%"><i class="bi bi-briefcase fs-5 fw-bold text-success"></i></div>
                        </div>
                    </li>

                    <li class="nav-item" style="width: 180px ;padding-top:20px">
                        <div class="rounded-5 m-2 d-flex  border border-success-subtle">

                            <div><a id="ff" class="nav-link text-white fs-5 fw-semibold" href="#contact">تواصل معنا</a>
                            </div>
                            <div style="padding-top: 7%"><i class="bi bi-telephone fs-5 fw-bold text-success"></i></div>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="d-flex justify-content-end" style=" padding-top:19px  ">

                <div class="rounded-5 m-2 border border-success" style="padding-left:8% ;width: 180px ;height:48px  ">
                    <button type="submit" id="bu" class="btn  rounded-5 text-white fw-bold fs-6 "
                            style="width: 180px ;height:48px " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        تبرع سريع
                    </button>
                </div>

            </div>
        </div>

    </div>
</div>
<!--end tools-->

<!----------start slider---------------------->

<body class="bg-light">

@yield('content')

<section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
            crossorigin="anonymous"></script>
</section>

@stack('js')
</body>
</html>
