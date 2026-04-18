@extends('sidebar.sidebar5')

@section('cont5')

<body class="bg-success " style="--bs-bg-opacity: .1"  >





<div class="d-flex  justify-content-end" style="margin-right: 3% ;margin-top:5%">

    <div class="d-flex " style="margin-left:4% ">

        <input type="text" name="name" class="form-control rounded-2  border-dark input-group  " style="height: 40px ; width:180px"  aria-label="Username" aria-describedby="basic-addon1">
        <i class="bi bi-search text-success fw-bold fs-5" style="margin-top: 4% ;margin-right:3%"></i>
    </div>
</div>


<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active fs-3 " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">المشاريع المعروضة</button>
        <button class="nav-link fs-3 " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">المشاريع المقبولة </button>
    </div>
</nav>
<br>
<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">




      <div class="m-5 " style="margin-top: 30px">


            <table class="table table-striped table-hover shadow ">

                    <thead>
                    <tr id="tr"   style="margin-bottom: 1%">
                        <th scope="col" > <p class="m-1 fs-4 fw-bold text-primary">الاسم</p></th>
                        <th scope="col"  > <p class="m-1 fs-4 fw-bold text-primary">البريد</p> </th>
                        <th scope="col" ><p class="m-1 fs-4 fw-bold text-primary">رقم الهاتف</p></th>
                        <th scope="col" ><p class="m-1 fs-4 fw-bold text-primary">تفاصيل المشروع </p></th>



                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row" class="fs-5 "> احمد ابراهيم الكامل </td><!-- مبلغ-->
                            <td class="fs-5">user@email.com</td>
                            <td class="fs-5">093685444</td>
                            <td>
                                <a href="{{url('/smallpro')}}"><button type="submit"  class="btn border border-success text-success fs-5  rounded-2 " style="width: 150px; height: 42px "  href="{{url('/smallpro')}}" >  المزيد من التفاصيل </button></a>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row" class="fs-5 "> مازن الراشد </td><!-- مبلغ-->
                            <td class="fs-5">user22@email.com </td>
                            <td class="fs-5">0911228444</td>
                            <td>
                                <a href="{{url('/smallpro')}}"><button type="submit"  class="btn border border-success text-success fs-5  rounded-2 " style="width: 150px; height: 42px "  >  المزيد من التفاصيل </button></a>
                            </td>

                        </tr>



                    </tbody>

            </table>
            {{-- {!! $donations->links() !!} --}}
      </div>
    </div>


    <div class="tab-pane fade show " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

        <div class="m-5 " style="margin-top: 30px">


              <table class="table table-striped table-hover shadow ">

                      <thead>
                      <tr id="tr"   style="margin-bottom: 1%">
                          <th scope="col" > <p class="m-1 fs-4 fw-bold text-primary">اسم المشروع</p></th>

                          <th scope="col" > <p class="m-1 fs-4 fw-bold text-primary">الاسم الكامل</p></th>

                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                              <td scope="row" class="fs-5 " style="height: 50px;">  افتتاح مطعم مأكولات شرقية</td>
                              <td class="fs-5" style="height: 50px;"> أحمد ابراهيم الكامل</td>


                          </tr>


                      </tbody>

              </table>
              {{-- {!! $donations->links() !!} --}}
        </div>
    </div>

</div>
</body>
@endsection
