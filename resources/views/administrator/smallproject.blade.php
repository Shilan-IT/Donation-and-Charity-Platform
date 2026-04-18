@extends('sidebar.sidebar5')


@section('cont55')
<!DOCTYPE html>
<html lang="en">
<body class="bg-success " style="--bs-bg-opacity: .1" >

    <!-- card-->
    <div  class="container-fluid " style="margin-right:6% ; margin-top: 3%">
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card  shadow" style="width: 1200px">

                <div class="d-flex" >
                        <a  href="{{url('/investpro')}}"  style="margin-top: 2% ;margin-right: 2%" ><i class="bi bi-arrow-right-circle fs-2"  ></i></a>
                        <div   style="margin-right: 920px ;margin-top: 3%">
                           <img class=" m-2 " src="per3.png" style="height: 200px ;width: 200px ;margin-right: 10%" >

                        </div>
                </div>
                            <div class="card-body">
                                    <h3 class="card-title  text-success fw-bold fs-2 " style="margin-right: 29% ;margin-bottom: 2%">   افتتاح مطعم مأكولات شرقية </h3>
                                    <br>

                                    <div class="d-flex " style="margin-bottom: 2%">
                                                <div class="d-flex" style="margin-left: 30% ;width: 300px ;">

                                                        <p class="card-text m-1 fs-3 fw-semibold text-warning"> الاسم : </p>
                                                        <p class=" fs-3 m-1" > احمد الكامل </p>
                                                </div>

                                                <div class="d-flex" >
                                                        <p class="card-text m-1 fs-3 fw-semibold text-warning"> العمر : </p>
                                                        <p class=" fs-3 m-1" >  32 </p>
                                                </div>
                                    </div>



                                    <div class="d-flex " style="margin-bottom: 2%">
                                                <div class="d-flex "  style="margin-left: 30% ;width: 300px">
                                                        <p class="card-text m-1 fs-3 fw-semibold text-warning"> العمل : </p>
                                                        <p class=" fs-3 m-1" >  مهندس معماري </p>

                                                </div>

                                                <div class="d-flex"  >
                                                        <p class="card-text fs-3 m-1  fw-semibold text-warning" > البريد الالكتروني : </p>
                                                        <p class=" fs-3 m-1" >ahmed2@gmail.com <ahmed2@gmail class="com"></ahmed2@gmail>   </p>

                                                </div>
                                    </div>


                                    <div class="d-flex "style="margin-bottom: 2%">
                                            <div class="d-flex "  style="margin-left: 30% ;width: 300px">
                                                <p class="card-text m-1 fs-3 fw-semibold text-warning"> الهاتف : </p>
                                                <p class=" fs-3 m-1" >  0945102307  </p>

                                            </div>
                                            <div class="d-flex">
                                                <p class="card-text m-1 fs-3 fw-semibold text-warning"> العنوان : </p>
                                                <p class=" fs-3 m-1" >  حماه\ريف حماه الغربي  </p>

                                            </div>
                                    </div>

                                    <div class="d-flex " style="margin-bottom: 2%">
                                        <div class="d-flex "  >
                                            <p class="card-text m-1 fs-3 fw-semibold text-warning"> خبرات سابقة : </p>
                                            <p class=" fs-3 m-1" >   المشاركة في إدارة وتنفيذ خطط البناء لمجمعة مدارس ودوائر حكومية </p>

                                        </div>
                                    </div>

                                {{-- <hr style="width: 500px"> --}}


                                    <div class="d-flex " style="margin-bottom: 2%">
                                        <div class="d-flex "  style="margin-left: 35% ;width: 1000px">
                                            <p class="card-text m-1 fs-3 fw-semibold text-warning"> مكان المشروع   : </p>
                                            <p class=" fs-3 m-1" >  حماه\ريف حماه الغربي  </p>

                                        </div>

                                    </div>


                                    <div class="d-flex " style="margin-bottom: 2%">
                                        <div class="d-flex "  style="margin-left: 35% ;width: 300px">
                                            <p class="card-text m-1 fs-3 fw-semibold text-warning"> الشريحة المستهدفة    : </p>
                                            <p class=" fs-3 m-1" >  عامة </p>

                                        </div>

                                    </div>

                                    <div class="d-flex " style="margin-bottom: 2%">
                                        <div class="d-flex "  style="margin-left: 35% ;width: 300px">
                                            <p class="card-text m-1 fs-3 fw-semibold text-warning">  رأس المال    : </p>
                                            <p class=" fs-3 m-1" > 10 مليون ل.س </p>

                                        </div>

                                    </div>

                                    <div class="d-flex " style="margin-bottom: 7%">
                                        <div class="d-flex "  >
                                            <p class="card-text m-1 fs-3 fw-semibold text-warning">  ملخص المشروع    : </p>
                                            <p class=" fs-3 m-1" >    تلبية طلبات المأكولات الشرقية لقاطني المدينة والزوار والسياح </p>

                                        </div>

                                    </div>

                                    <div>

                                        <button type="submit"  class="btn border border-success text-success fs-3  rounded-2 " style="width: 150px; height: 42px ;margin-right: 80% ;margin-bottom: 5%">   قبول  </button>

                                    </div>





                            </div>

            </div>
         </div>
    </div>

</body>
</html>
@endsection
