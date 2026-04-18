@extends('sidebar.sidebar3')

@section('cont3')

    <body class="bg-success " style="--bs-bg-opacity: .1;">


    <div class="d-flex  justify-content-between" style="margin-right: 3% ;margin-top:5%">
        <div class="dropdown">
            <button id="dd" class="btn  dropdown-toggle text-white fw-semibold fs-5 " type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                تصنيف حسب
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">رقم الحساب</a></li>
                <li><a class="dropdown-item" href="#"> المبلغ</a></li>
                <li><a class="dropdown-item" href="#"> التاريخ</a></li>
            </ul>
        </div>

        <div class="d-flex " style="margin-left:4% ">

            <input type="text" name="name" class="form-control rounded-2  border-dark input-group  "
                   style="height: 40px ; width:180px" aria-label="Username" aria-describedby="basic-addon1">
            <i class="bi bi-search text-success fw-bold fs-5" style="margin-top: 4% ;margin-right:3%"></i>
        </div>
    </div>


    <div class="m-5 " style="margin-top: 30px">

        <table class="table table-striped table-hover shadow">

            <thead>
            <tr id="tr" style="margin-bottom: 1%">
                <th scope="col"><p class="m-1 fs-4 fw-bold text-primary"> اسم المتبرع </p></th>
                <th scope="col"><p class="m-1 fs-4 fw-bold text-primary"> مبلغ التبرع </p></th>
                <th scope="col"><p class="m-1 fs-4 fw-bold text-primary">تاريخ التبرع</p></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach(\App\Models\donateQuick::get() as $q)

            <tr>
                <th scope="row" class="fs-5 ">
                    {{\App\Models\User::where('id',$q->user_id)->first()?\App\Models\User::where('id',$q->user_id)->first()->name:''}}
                </th><!-- مبلغ-->
                <td class="fs-5">{{$q->total_amount}} ل.س</td>
                <td class="fs-5"> {{\Carbon\Carbon::parse($q->created_at)->toDateString()}}</td>
                <td>
                    <button type="submit"
                            class="btn border border-2  border-success  text-success  fs-5 fw-bold rounded-2 "
                            style="width: 150px; height: 42px " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        تخصيص المبلغ
                    </button>
                </td>

            </tr>
            @endforeach
            </tbody>

        </table>
        {{-- {!! $donations->links() !!} --}}
    </div>

    <!--------------------- 1قائمة منبثقة-->
    <!-- Modal -->
    <div class="modal fade   ms-auto me-auto  " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:800px">

                <div class="modal-body">
                    <!--start body-->


                    <div class="d-flex">
                        <div>
                            <a href="{{url('/qd')}}">
                                <button type="button " class="btn-close m-1 text-dark border border-dark fs-6"></button>
                            </a>
                        </div>
                        <div class="fw-bold fs-4 text-success  " style="margin-right: 36%;margin-top:20px"> اختر مشروع
                        </div>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between ">
                        <select class="form-select border-dark" aria-label="Default select example"
                                style="width:160px ; height: 40px ">
                            <option selected>المبلغ الادنى</option>
                            <option value="1">المبلغ الاعلى</option>

                        </select>

                        <div class="d-flex">

                            <input type="text" name="name" class="form-control rounded-2  border-dark input-group  "
                                   style="height: 40px ; width:180px" aria-label="Username"
                                   aria-describedby="basic-addon1">
                            <i class="bi bi-search text-success fw-bold fs-5"
                               style="margin-top: 4% ;margin-right:3%"></i>
                        </div>

                    </div>


                    <table class="table table-light table-striped table-hover " style="margin-top:3% ; width:770px">

                        <thead>
                        <tr id="tr" style="margin-bottom: 1%">
                            <th scope="col"><p class="m-1 fs-5 fw-bold text-danger"> المشروع </p></th>
                            <th scope="col"><p class="m-1 fs-5 fw-bold text-danger"> المبلغ المكتمل</p></th>
                            <th scope="col"><p class="m-1 fs-5 fw-bold text-danger"> المبلغ المتبقي </p></th>
                        </tr>
                        </thead>

                        <tbody>
                        <a>
                            <tr>
                                <td class="fs-5"> اعادة بناء مدرسة عكرمة</td>
                                <td class="fs-5"> 1000000</td>
                                <td class="fs-5">800000</td>
                            </tr>
                        </a>

                        <a>
                            <tr>
                                <td class="fs-5"> اعادة بناء مدرسة عكرمة</td>
                                <td class="fs-5"> 1000000</td>
                                <td class="fs-5">800000</td>
                            </tr>
                        </a>
                        <a>
                            <tr>
                                <td class="fs-5"> اعادة بناء مدرسة عكرمة</td>
                                <td class="fs-5"> 1000000</td>
                                <td class="fs-5">800000</td>
                            </tr>
                        </a>
                        <a>
                            <tr>
                                <td class="fs-5"> اعادة بناء مدرسة عكرمة</td>
                                <td class="fs-5"> 1000000</td>
                                <td class="fs-5">800000</td>
                            </tr>
                        </a>


                        </tbody>

                    </table>


                    <!--end body-->
                </div>

            </div>
        </div>
    </div>
    <!--1نهاية القائمة المنبثقة-->


    <!-- end div-->
    </div>


    </body>
@endsection
