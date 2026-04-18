@extends('sidebar.sidebar4')

@section('cont4')

    <body class="bg-success " style="--bs-bg-opacity: .1;">
    <div class="container-fluid" style="margin-top:5%">


        <div class="d-flex  justify-content-between " style="margin-right: 3% ">
            <div class="dropdown">
                <button id="dd" class="btn  dropdown-toggle text-white fw-bold  fs-5" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    تصنيف حسب
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"> الاسم </a></li>
                    <li><a class="dropdown-item" href="#"> المبلغ الاعلى</a></li>
                    <li><a class="dropdown-item" href="#"> المبلغ الادنى </a></li>
                    <li><a class="dropdown-item" href="#"> التاريخ الاقدم</a></li>
                    <li><a class="dropdown-item" href="#"> التاريخ الاحدث</a></li>

                </ul>
            </div>


            <div class="d-flex " style="margin-left:4% ">

                <input type="text" name="name" class="form-control rounded-2  border-dark input-group  "
                       style="height: 40px ; width:180px" aria-label="Username" aria-describedby="basic-addon1">
                <i class="bi bi-search text-success fw-bold fs-5" style="margin-top: 4% ;margin-right:3%"></i>
            </div>
        </div>


        <div class="m-5 " style="margin-top: 30px">

            <table class="table table-striped  table-hover shadow">

                <thead id="tr" class="fw-bold fs-4">
                <tr style="margin-bottom: 1%">
                    <th scope="col"><p class="m-1  fw-bold text-primary"> اسم المتبرع </p></th>
                    <th scope="col"><p class="m-1 fw-bold  text-primary"> الإيميل</p></th>
                    <th scope="col"><p class="m-1 fw-bold  text-primary"> نوع التبرع</p></th>
                    <th scope="col"><p class="m-1  fw-bold  text-primary"> المشروع </p></th>

                    <th scope="col"><p class="m-1 fs-5 fw-bold  text-primary"> المبلغ </p></th>
                    <th scope="col"><p class="m-1 fs-5 fw-bold  text-primary"> تاريخ التبرع </p></th>

                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\donation::get() as $q)
                    <tr style="margin-bottom: 1%">
                        <th scope="col"><p class="m-1 fs-5 fw-bold">
                                {{\App\Models\User::where('id',$q->user_id)->first()?\App\Models\User::where('id',$q->user_id)->first()->name:''}}</p></th>
                        <th scope="col"><p class="m-1 fs-5 fw-bold">
                                {{\App\Models\User::where('id',$q->user_id)->first()?\App\Models\User::where('id',$q->user_id)->first()->email:''}}</p></th>

                        <th scope="col"><p class="m-1 fs-5 fw-bold"> عادي </p></th>
                        <th scope="col"><p class="m-1 fs-5 fw-bold">
                                {{\App\Models\Project::where('id',$q->project_id)->first()?\App\Models\Project::where('id',$q->project_id)->first()->title:''}}</p></th>

                        <th scope="col"><p class="m-1 fs-5 fw-bold"> {{$q->total_amount}} </p></th>
                        <th scope="col"><p class="m-1 fs-5 fw-bold">{{\Carbon\Carbon::parse($q->created_at)->toDateString()}}</p></th>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>


        <!-- end div-->
    </div>
    </body>
@endsection



