@extends('layouts.app')

@section('content')

    <div id="carouselExampleAutoplaying" class="carousel slide" style="scroll-behavior: auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#1" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#4" data-bs-slide-to="3" aria-label="Slide 4"></button>

        </div>
        <div class="carousel-inner">
            <div id="1" class="carousel-item active">
                <img src="im.jpg" class="d-block w-100 " style="height:600px" alt="1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 id="t1" class=" fs-4"> لعالم أفضل ...</h5>
                    <p id="t2" class="fs-2 text-dark fw-bold"> تبرع الآن وساهم في بناء عالم أفضل للأطفال وتمكينهم في
                        المجتمع</p>
                </div>
            </div>
            <div id="2" class="carousel-item ">
                <img src="j.jpg" class="d-block w-100 " style="height:600px" alt="2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 id="t3" class=" fs-4 text-warning fw-semibold"> ساهم معنا </h5>
                    <p id="t4" class=" fs-3 fw-bold">... لمساعدة متضرري الزلازل ...</p>
                </div>
            </div>
            <div id="3" class="carousel-item ">
                <img src="food.jpg" class="d-block w-100 " style="height:600px" alt="3">
                <div class="carousel-caption d-none d-md-block">
                    <h4 id="t5" class=" fs-2 text-warning fw-bold"> معا </h4>
                    <p id="t6" class=" fs-3 text-white fw-bold " style="margin-bottom: 30%"> لتأمين أساسيات الحياة
                        للمحتاجين ومساندتهم </p>
                </div>
            </div>
            <div id="4" class="carousel-item ">
                <img src="nn.jpg" class="d-block w-100 " style="height:600px" alt="4">
                <div class="carousel-caption d-none d-md-block">
                    <h5 id="t55" class=" fs-2 text-dark fw-bold " style="margin-right: 900px "> نمد يد العون </h5>
                    <p id="t66" class=" fs-3 text-warning fw-bold" style="margin-right: 800px ;margin-bottom: 70px">
                        لرعاية المسنين و تأمين مستلزماتهم </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
            <span class="carousel-control-next-icon  " aria-hidden="true"></span>
            <span class="visually-hidden text">Next</span>
        </button>
    </div>
    </div>

    <div class="bg-light">
        <!-------------projects------------->

        <div id="projects" class="container-fluid">

            <div class=" d-flex  justify-content-between m-1"
                 style="align-items: center;padding-top:3%; padding-bottom:3%">

                <div class=" text-dark fs-6  fw-semibold" style="padding-top:1% ;padding-right:4%  "><h2>من فرص <span
                            id="con">   التبرع و العمل الخيري:</span></h2></div>

            </div>
        </div>

        <div class="d-flex m-2  justify-content-center" style="padding-right:3%">
            <div class="fs-4  fw-semibold" style="margin-left: 1%">&mdash; ساهم معنا لبناء مجتمع أفضل ... مهما كان تبرعك
                بسيطاً ستغير حياة إنسان للأفضل &mdash;
            </div>


        </div>
        <!--------------تصنيف-->


        <div class="ms-auto me-auto rounded-top bg-success-subtle" style="width:400px ;margin-top:3%">
            <nav class="  ms-auto me-auto">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @foreach(\App\Models\Category::get() as $key=>$category)
                        <button class="nav-link {{$key==0?'active':''}} fs-4 " id="nav-general-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-general{{$category->id}}" type="button"
                                role="tab"
                                aria-controls="nav-general"
                                aria-selected="{{$key==0?'true':'false'}}"> {{$category->name}}
                        </button>
                    @endforeach
                </div>
            </nav>
        </div>

        <div class="tab-content bg-success-subtle" id="nav-tabContent">

            @foreach(\App\Models\Category::get() as $key1=>$category)
                <!-------------------------general--------------------------------------->
                <div class="tab-pane fade {{$key1==0?'show active':''}}"
                     id="nav-general{{$category->id}}" role="tabpanel"
                     aria-labelledby="nav-general-tab"
                     tabindex="0">

                    <div class="row container-fluid  ">
                        <!---------------عمود اول-->
                        @foreach(\App\Models\Project::where('category_id',$category->id)->get() as $key2=>$project)
                            <div class=" nav-item col bg-white rounded-4 border border-success-subtle m-4 shadow"
                                 style="width:550px ;height:500px ; padding:1%">


                                <div style="text-align-last: center" class="fs-5  fw-bold text-success  ">
                                    {{$project->title}}
                                </div>

                                <div class="d-flex justify-content-center m-3"><img src="{{asset($project->image)}}"
                                                                                    style="width: 410px; height: 200px ">
                                </div>

                                    <?php
                                    $amount_collected = \App\Models\donation::where('project_id', $project->id)->sum('amount');
                                    $total_amount = $project->total_amount;
                                    ?>
                                <div class="progress" role="progressbar" aria-label="Example with label"
                                     aria-valuenow="{{$amount_collected}}"
                                     aria-valuemin="0" aria-valuemax="{{$total_amount}}">
                                    <div class="progress-bar bg-primary "
                                         style="width: {{round($amount_collected*100/$total_amount,2)}}% ">{{round($amount_collected*100/$total_amount,2)}}
                                        %
                                    </div>
                                </div>


                                <div class=" d-flex flex-row justify-content-between m-4" style="align-items: center">
                                    <div>
                                        <div class="text-primary">تم جمع</div>
                                        <div class="text-danger">{{round($amount_collected*100/$total_amount,2)}}%</div>
                                    </div>
                                    <div>
                                        <div class="text-primary">المبلغ الكلي</div>
                                        <div class="text-danger">{{$total_amount}} ل .س</div>
                                    </div>
                                    <div>
                                        <div class="text-primary">المبلغ المتبقي</div>
                                        <div class="text-danger">{{$total_amount-$amount_collected}} ل .س</div>
                                    </div>
                                </div>
                                <div class="d-flex container-fluid m-2">

                                    @if(round($amount_collected*100/$total_amount,2)<100)
                                    <div class=" rounded-5 m-2">
                                        <button type="button" id="bu"
                                                class="btn   text-white btn-outline-success  rounded-5 "
                                                style="width: 300px; height: 40px;margin-right:22% "
                                                data-bs-toggle="modal"
                                                onclick="document.getElementById('project_id').value={{$project->id}}"
                                                data-bs-target="#done">تبرع الآن
                                        </button>
                                    </div>
                                        @endif
                                </div>

                            </div>

                        @endforeach
                    </div>

                </div>

            @endforeach

        </div>


        <!------------------------المزيد------->
        <div class="d-flex justify-content-center  m-2" style="padding-top:2%;padding-bottom:2% ">
            {{--            <button id="bu" type="submit" class="btn  fs-6  text-white   rounded-5 "--}}
            {{--                    style="width: 210px; height: 50px ">عرض المزيد من المشاريع--}}
            {{--            </button>--}}
        </div>


        <!------------------------- مشارع صغيرة  -------->
        <div class="container">
            <hr>
        </div>


        <div id="small" class="container " style="margin-bottom: 2% ">

            <h2> دعم<span id="con">  المشاريع الصغيرة </span></h2>

            <div style="margin-right: 35% ;margin-top:1% ">
                <img src="sp1.png" class="rounded-circle" style="width:300px; height:300px ">
            </div>


            <div class="d-flex">
                <div style="margin-right: 25%">
                    <p style="margin-top:7%;margin-right: 5% " class="fs-5"> نقدم الدعم للمشاريع الصغيرة لمساعدتك في
                        دراسة فكرة </p>
                    <p class="fs-5"> مشروعك وتحديد أهدافه وتقديم التمويل المناسب لتحقيق مشروعك .</p>
                </div>
                <img class="rounded-circle" src="de2.png"
                     style="width: 100px;height: 100px;margin-right: 10% ;margin-top: 3%">
            </div>

            <a href="{{url('/small')}}" style="margin-right: 76%"> للمزيد من التفاصيل </a>

        </div>


        <!-------------------------------->
        <!-------------------------عن المنصة-------->

        <div id="about" class="container">
            <hr>
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div class="section-title">
                        <h2 style="padding-bottom: 2%">أهلا بكم <span id="con"> في منصة التبرع و العمل الخيري</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row fadeInUp">
                <!-- About Main -->
                <div class="col-md-7 col-sm-6 col-xs-12 wow  ">
                    <div class="about-main" style="padding-right: 10%">

                        <div class="single-about fa-align-start ">
                            <p class="fs-5">منصتنا تتيح لكم التبرع و المساعدة في أي عمل خيري متاح بأسهل </p>
                            <p class="fs-5">طريقة ممكنة حيث يمكنك التبرع الفوري بمبلغ مالي لأي برنامج خيري </p>
                            <p class="fs-5">متاح أو المشاركة في البرامج التطوعية الخيرية المتاحة على المنصة</p>
                            <p class="fs-5">من خلال التواصل معنا على البريد الإلكتروني و تزويدنا بمعلوماتك </p>
                            <p class="fs-5">الشخصية.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div style="margin-right: 10%">
                <h2 id="con"> الجهات الإشرافية </h2>
                <div class="d-flex">
                    <div class="m-4">
                        <img src="per3.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right: 14%;margin-top:10%"> جهة إشرافية x </h5>
                    </div>
                    <div class="m-4">
                        <img src="per3.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right: 14%;margin-top:10%"> جهة إشرافية y </h5>
                    </div>
                    <div class="m-4">
                        <img src="per3.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-top:10%"> جهة إشرافية z</h5>
                    </div>
                    <div class="m-4">
                        <img src="per3.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right: 14%;margin-top:10%"> جهة إشرافية m </h5>
                    </div>
                    <div class="m-4">
                        <img src="per3.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right:0%;margin-top:10%"> جهة إشرافية n </h5>
                    </div>

                </div>
                {{-- <div class="d-flex">
                    <div class="m-4">
                        <img src="logo\m7.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right:7%;margin-top:10%" > وزارة التعليم </h5>
                        <h5 id="con" style="margin-right:20%"> العالي </h5>
                    </div>
                    <div class="m-4">
                        <img src="logo\m8.png"  class="rounded-4"style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right:0%;margin-top:10%"> الموارد البشرية و   </h5>
                        <h5 id="con" style="margin-right:0%;margin-top:0%" >التنمية الاجتماعية</h5>
                    </div>
                    <div class="m-4">
                        <img src="logo\m9.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right:9%;margin-top:10%"> المؤسسة العامة  </h5>
                        <h5 id="con" style="margin-right:24%"> للإسكان  </h5>
                    </div>
                    <div class="m-4">
                        <img src="logo\m10.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right:12%;margin-top:10%"> مصرف سوريا   </h5>
                        <h5 id="con" style="margin-right:24%"> المركزي </h5>
                    </div>
                    <div class="m-4">
                        <img src="logo\m11.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5 id="con" style="margin-right:12%;margin-top:10%"> هيئة الاستثمار     </h5>
                        <h5 id="con" style="margin-right:24%"> السورية </h5>
                    </div>
                    <div class="m-4">
                        <img src="logo\m12.png" class="rounded-4" style="width: 150px;height:150px">
                        <h5  id="con" style="margin-right:12%;margin-top:10%">  وزارة الشؤون    </h5>
                        <h5 id="con" style="margin-right:2%"> الاجتماعية والعمل </h5>
                    </div>
                </div> --}}
            </div>


        </div>

        <!------------------------تواصل معنا -------->
        <div id="contact" class="container " style="margin-bottom: 2%">
            <hr>
            <div id="col" class=" container justify-content-end "
                 style="padding-bottom:2%; padding-top:2%;margin-bottom: 5% margin-top:2%">

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <h2 style="margin-right: 5%" class="text-white ">تواصل<span class="text-success"> معنا</span></h2>
                    <div style="margin-right: 8%;margin-top:6%">

                        <div class="text-white fs-5">
                            <i style="margin-right: 8%" class="bi bi-map-fill text-success"></i> العنوان:حمص-جامعة البعث
                        </div>

                        <div class="text-white fs-5">
                            <i style="margin-right: 8%" class="bi bi-envelope-at-fill text-success"></i> الإيميل: <a
                                href="mailto:info@youremail.com">Info@youremail.com</a>
                        </div>

                        <div class=" ">
                            <button type="submit" style="width:180px" id="butoo" class="btn fs-5 text-white"><i
                                    class="bi bi-send-fill text-success" style="margin-right: 9%"></i> تيليغرام بوت
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-------------------------تبرع سريع -------->

        <!--------------------- 1قائمة منبثقة-->
        <!-- Modal -->
        <div class="modal fade " style="margin-left:500px " id="exampleModal" tabindex="-1"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:700px ">


                    <div class="modal-body">


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <div class="container-fluid">

                            <p class="fw-bold fs-3" style="margin-right: 38% ;margin-bottom:3%"> تبرع سريع </p>
                            <p class="fw-semibold text-success fs-5" style="margin-right: 25% ;">
                                سيذهب تبرعك للحالات الأشد احتياجا
                            </p>
                            <hr>
                        </div>
                        <!--------------------->

                        <form action="{{route('donate-quick')}}" method="POST">
                            @csrf
                            <div class="d-flex " style="margin-right: 15%">
                                <div style="margin-top: 2%"> مبلغ التبرع</div>
                                <div class="form-group">
                                    <input type="number" name="money"
                                           class="form-control rounded-3  border-primary input-group m-2 "
                                           style="height: 38px ;width:300px" aria-label="Username"

                                           aria-describedby="basic-addon1">
                                </div>

                                <div class="m-3"> ل.س</div>

                            </div>

                            <div class="container-fluid">
                                <hr>
                                <p class="fw-semibold fs-6" style="margin-right: 28% ;">
                                    رجاء قم بإدخال التفاصيل المطلوبة
                                </p>

                            </div>
                            <div style="margin-right: 6%">

                                <div class="d-flex ">
                                    <div style="margin-top: 2%"> الاسم المسجل على البطاقة:</div>
                                    <div><input type="text" name="name"
                                                class="form-control rounded-3  border-primary input-group m-2 "
                                                style="height: 35px" aria-label="Username"
                                                aria-describedby="basic-addon1"></div>
                                </div>

                                <div class="d-flex " style="margin-right: 16% ;margin-top: 2%">
                                    <div style="margin-top: 2%"> رقم البطاقة:</div>
                                    <div><input type="text" name="number"
                                                class="form-control rounded-3  border-primary input-group m-2 "
                                                style="height: 35px" aria-label="Username"
                                                aria-describedby="basic-addon1"></div>
                                </div>

                                <div class="d-flex  " style="margin-right: 16% ;margin-top: 2%">
                                    <div style="margin-top: 2%"> تارخ الانتهاء :</div>
                                    <div class="m-1"><input type="text" name="Mtime"
                                                            class="form-control rounded-3  border-primary input-group "
                                                            style="height: 35px ;width:55px" placeholder="MM"
                                                            aria-label="Username" aria-describedby="basic-addon1"></div>
                                    <div class="m-1"><input type="text" name="Ytime"
                                                            class="form-control rounded-3  border-primary input-group  "
                                                            style="height: 35px ;width:55px" placeholder=" YY"
                                                            aria-label="Username" aria-describedby="basic-addon1"></div>


                                    <div style="margin-right: 5% ;margin-top: 2%">رمز الأمان - cvv :</div>
                                    <div><input type="text" name="lock"
                                                class="form-control rounded-3  border-primary input-group m-2 "
                                                style="height: 35px ;width:130px" aria-label="Username"
                                                aria-describedby="basic-addon1"></div>
                                </div>

                            </div>
                            <!-----------finish----------------->


                            <div class="d-flex justify-content-center  m-3" style="padding-top:5%;padding-bottom:2% ">
                                <button type="submit" class="btn m-1"><img src="paypal.png"
                                                                           style="width:100px;height:60px"></button>

                                <button type="submit" class="btn  m-1"><img src="master.png"
                                                                            style="width:100px;height:60px"></button>

                                <button type="submit" class="btn  m-1"><img src="visa.png"
                                                                            style="width:100px;height:60px"></button>
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!--1نهاية القائمة المنبثقة-->


        <!-------------------------تبرع الان ---------->

        <!------------------2 القائمة منبثقة---->

        <!-- Modal -->
        <div class="modal fade " style="margin-left:500px" id="done" tabinex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true" style="width:1020px ">
            <div class="modal-dialog">
                <div class="modal-content" style="width:700px ">

                    <div class="modal-body">


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                        <div class="container-fluid">

                            <p class="fw-semibold fs-6" style="margin-right: 30% ;margin-bottom:4%;margin-top:1%">
                                رجاء قم بإدخال التفاصيل المطلوبة
                            </p>
                            <hr>
                        </div>
                        <form action="{{route('donate')}}" method="POST">

                            @csrf
                            <div class="d-flex " style="margin-right: 15%">
                                <div style="margin-top: 2%"> مبلغ التبرع</div>
                                <div class="form-group">
                                    <input type="number" name="money"
                                           class="form-control rounded-3  border-primary input-group m-2 "
                                           style="height: 38px ;width:300px" aria-label="Username"
                                           aria-describedby="basic-addon1">
                                </div>

                                <div class="m-3"> ل.س</div>


                            </div>
                            <div class="container-fluid">
                                <hr>
                            </div>
                            <input type="hidden" name="project_id" id="project_id" value="">
                            <div class="container-fluid" style="margin-right: 6%">

                                <div class="d-flex ">
                                    <div style="margin-top: 2%"> الاسم المسجل على البطاقة:</div>
                                    <div><input type="text" name="name"
                                                class="form-control rounded-3  border-primary input-group m-2 "
                                                style="height: 35px" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="d-flex " style="margin-right: 16% ;margin-top: 2%">
                                    <div style="margin-top: 2%"> رقم البطاقة:</div>
                                    <div><input type="text" name="number"
                                                class="form-control rounded-3  border-primary input-group m-2 "
                                                style="height: 35px" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="d-flex  " style="margin-right: 16% ;margin-top: 2%">
                                    <div style="margin-top: 2%"> تارخ الانتهاء :</div>
                                    <div class="m-1"><input type="text" name="Mtime"
                                                            class="form-control rounded-3  border-primary input-group "
                                                            style="height: 35px ;width:55px" placeholder="MM"
                                                            aria-label="Username" aria-describedby="basic-addon1"></div>
                                    <div class="m-1"><input type="text" name="Ytime"
                                                            class="form-control rounded-3  border-primary input-group  "
                                                            style="height: 35px ;width:55px" placeholder=" YY"
                                                            aria-label="Username" aria-describedby="basic-addon1"></div>


                                    <div style="margin-right: 5% ;margin-top: 2%">رمز الأمان - cvv :</div>
                                    <div><input type="text" name="lock"
                                                class="form-control rounded-3  border-primary input-group m-2 "
                                                style="height: 35px ;width:130px" aria-label="Username"
                                                aria-describedby="basic-addon1"></div>
                                </div>

                            </div>
                            <!-----------finish----------------->
                            <div class="d-flex justify-content-center  m-3" style="padding-top:5%;padding-bottom:2% ">
                                <button type="submit" class="btn m-1"><img src="paypal.png"
                                                                           style="width:100px;height:60px">
                                </button>

                                <button type="submit" class="btn  m-1"><img src="master.png"
                                                                            style="width:100px;height:60px"></button>

                                <button type="submit" class="btn  m-1"><img src="visa.png"
                                                                            style="width:100px;height:60px">
                                </button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>
        <!--2 القائمة المنبثقة-->


        <!--end page-->
    </div>

@endsection

@push('js')
    <script>

    </script>
@endpush

