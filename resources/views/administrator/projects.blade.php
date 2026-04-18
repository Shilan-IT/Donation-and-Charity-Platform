@extends('sidebar.sidebar2')
@Section('cont2')

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
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>

<body class="bg-success " style="--bs-bg-opacity: .1;"  >


    <div class="col py-3">

        <!-- Page Content -->
        <div class="container">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active fs-3 " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">المشاريع المكتملة</button>
                    <button class="nav-link fs-3 " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">المشاريع غير مكتملة</button>
                    <button class="nav-link fs-3 " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">إضافة مشروع جديد</button>
                </div>
            </nav>
            <br>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">


                <!--first row-->
                <div class="row">
                    <!--first card-->

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="card h-90  shadow">
                                    <a href="#"><img class="card-img-top" src="chair.jpg" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">تأمين  كراسي متحركة للمحتاجين</a>
                                        </h4><br>
                                        <div class="d-flex">
                                        <p class="card-text " style="margin-left: 50%;">تاريخ الإضافة:<br> 1/3/2022
                                            <br> <br></p>
                                            <p class="card-text">تاريخ الاكتمال:<br> 1/3/2023
                                                <br> <br>
                                            </p>
                                    </div>

                                        <p class="card-text ">المبلغ الكامل<br> 2000000 ل.س <br> <br></p>

                                    </div>
                                </div>
                            </div>



                            <!--second card-->
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="card h-90 shadow">
                                    <a href="#"><img class="card-img-top" src="mosque.jpg" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">إعادة بناء مسجد عثمان بن عفان في حماة</a>
                                        </h4><br>
                                        <div class="d-flex">
                                            <p class="card-text " style="margin-left: 50%;">تاريخ الإضافة:<br> 1/3/2022
                                                <br> <br></p>
                                                <p class="card-text">تاريخ الاكتمال:<br> 1/3/2023
                                                    <br> <br>
                                                </p>
                                        </div>

                                            <p class="card-text">المبلغ الكامل<br> 2000000 ل.س <br> <br></p>
                                    </div>
                                </div>
                            </div>


                            <!--third card-->
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="card h-60 shadow">
                                    <a href="#"><img class="card-img-top" src="kidney.jpg" alt=""  style="height: 200px"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">كفالة مرضى الفشل الكلوي </a>
                                        </h4>
                                        <br>
                                        <div class="d-flex">
                                            <p class="card-text " style="margin-left: 50%;">تاريخ الإضافة:<br> 1/3/2022
                                                <br> <br></p>
                                                <p class="card-text">تاريخ الاكتمال:<br> 1/3/2023
                                                    <br> <br>
                                                </p>
                                        </div>

                                            <p class="card-text">المبلغ الكامل<br> 2000000 ل.س <br> <br></p>


                                    </div>
                                </div>
                            </div>
                </div>


                    <!--scond row-->
                    <div class="row">


                        <!--third card-->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="card h-90 shadow">
                                <a href="#"><img class="card-img-top" src="food.jpg" alt=""style="height: 250px"></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#"> تأمين سلال غذائية للمحتاجين</a>
                                    </h4><br>
                                    <div class="d-flex">
                                        <p class="card-text " style="margin-left: 50%;">تاريخ الإضافة:<br> 1/3/2022
                                            <br> <br></p>
                                            <p class="card-text">تاريخ الاكتمال:<br> 1/3/2023
                                                <br> <br>
                                            </p>
                                    </div>

                                        <p class="card-text">المبلغ الكامل<br> 2000000 ل.س<br> <br></p>

                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- /.row -->

                    <!-- Pagination -->
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{url('/secondpage')}}">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only"></span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                        <div class="row d-flex">

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="card h-90 shadow">
                                    <a href="#"><img class="card-img-top" src="z1.jpg" alt="" style="height: 250px"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"> إعادة إعمار منازل المتضررين من الزلازل  </a>
                                        </h4><br>
                                        <div class="d-flex">
                                            <p class="card-text " style="margin-left: 50%;">تاريخ الإضافة:<br> 1/3/2022
                                                <br> <br></p>
                                                <p class="card-text">تاريخ الاكتمال:<br> 1/3/2023
                                                    <br> <br>
                                                </p>
                                        </div>

                                            <p class="card-text">المبلغ الكامل<br> 2000000 ل.س <br> <br></p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="card h-90  shadow">
                                    <a href="#"><img class="card-img-top" src="nn.jpg" alt="" style="height: 250px"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">تأمين   أدوية لأصحاب الأمراض المزمنة </a>
                                        </h4><br>
                                        <div class="d-flex">
                                        <p class="card-text " style="margin-left: 50%;">تاريخ الإضافة:<br> 1/3/2022
                                            <br> <br></p>
                                            <p class="card-text">تاريخ الاكتمال:<br> 1/3/2023
                                                <br> <br>
                                            </p>
                                    </div>

                                        <p class="card-text ">المبلغ الكامل<br> 2000000 ل.س <br> <br></p>

                                    </div>
                                </div>
                            </div>


                            <!---->


                        </div>

                </div>
                    <!--create project-->
                <div class="tab-pane fade show " id="nav-contact" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="row shadow  ">
                        <div class="col-12 ">
                            <div class="card ">
                                <div class="mt-2 mx-auto text-success fs-2 text-decoration-dashed fw-normal">

                                </div>

                                <div class="card-body">
                                   <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-3">العنوان:</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control border-success">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-3">التصنيف:</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric border-success">
                                                <option>عامة</option>
                                                <option>طبية</option>
                                                <option>إسكان</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4 shadow-textarea  ">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-3">المحتوى:</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="form-control z-depth-1  border-success" rows="3" placeholder="...اكتب محتوى المشروع"></textarea>
                                        </div>
                                    </div>
                                            <!--image-->
                                    <div class="form-group row mb-4  shadow-textarea">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-3">تحميل صورة:</label>

                                        <form id="upload-image-form" class=" "style="margin-right:25%" action="" method="post" enctype="multipart/form-data">

                                            <div id="image-preview-div" style="display: none">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="file" id="file" required>
                                            </div>
                                        </form>

                                        <br>
                                        <div class="alert alert-info" id="loading" style="display: none;" role="alert">
                                                    تحميل صورة...
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="message">

                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-3">الحالة:</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control border-success selectric ">
                                                <option>نشر</option>
                                                <option>مسودة</option>
                                                <option>إنتظار</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mt-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="button" class="btn btn-outline-success fs-4">إنشاء</button>

                                        </div>
                                    </div>

                                </div>
                            </div>

                                    <!--end image-->


                        </div>
                    </div>

                </div>
            </div>




            <!-- /.container -->






            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4 " crossorigin="anonymous "></script>
            <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js " integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin=" anonymous "></script>
            <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js " crossorigin="anonymous "></script>
            <script src="js/bootstrap.min.js ">
            </script>
            {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
            <script src="js/app.js"></script>


        </body>

</html>
@endsection
