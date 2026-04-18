<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css1/app.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<title>
    منصة التبرع والعمل الخيري
</title>

</head>
<body>

<div class="container">
    <div class="d-flex  bg-light shadow" style="height: 124px; margin-top: 1%">

            <img src="star.jpg"    style="width: 100px; height: 100px ;margin-right:2% ;margin-top: 1%" >
            <div id="txt" class="fs-3 fw-bold text-success" style=" margin-top:3% ; margin-right: 2%">    منصة التبرع والعمل الخيري </div>


    </div>

<section class="">
    <div class="d-flex justify-content-between ">
            <div><h5 style="margin-bottom: 3%;margin-top: 4%">   يسر منصتنا أن ترحب بكافة الأفكار الإبداعية وأن تقدم الدعم والمساعدة في دراسة فكرة مشروعك وتحقيقها  </h5></div>
            <div  style="margin-top: 1% ;margin-left: 1%">
                <a  href="{{url('/#small')}}"><i class="bi bi-arrow-left-circle fs-2"   ></i></a>
            </div>
    </div>

    <p class="fs-5 text-warning ">  رجاء قم بتعبئة البيانات المطلوبة </p>

    <!---------------------------------------------------------------------------------->

        <div class="row shadow " style="margin-bottom: 4%">
            <div class="col-12 ">

                    <div class="mt-2 mx-auto text-success fs-2 text-decoration-dashed fw-normal"> </div>


                    <div class="fs-4 text-success" >    البيانات الشخصية : </div>
                    <hr style="width: 13% ; margin-right: 0%">
                    <!----->
                    <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">الاسم الكامل:</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control border-success">
                            </div>
                        </div>
                        <!----->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">العمر التقريبي  :</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control border-success">
                            </div>
                        </div>
                        <!----->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4"> المهنة/العمل  :</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control border-success">
                            </div>
                        </div>
                        <!----->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">البريد الالكتروني:</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control border-success">
                            </div>
                        </div>
                        <!----->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">رقم الهاتف :</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control border-success">
                            </div>
                        </div>
                        <!----->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">العنوان  :</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control border-success">
                            </div>
                        </div>

                        <!------>

                        <div class="form-group row mb-4 shadow-textarea  ">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">خبرات او معارف:</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control z-depth-1  border-success" rows="3" placeholder=" اكتب بعض التفاصيل حولك ..خبرات\هوايات.. "></textarea>
                            </div>
                        </div>
                        <!--image-->
                        <div class="form-group row mb-4  shadow-textarea">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">   صورة شخصية : </label>
                            <p placeholder="اختياري"> (حقل اختياري )</p>

                            <form id="upload-image-form" class=" "style="margin-right:25%" action="" method="post" enctype="multipart/form-data">

                                <div id="image-preview-div" style="display: none">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="file" id="file" required>
                                </div>
                            </form>

                            <br>
                            <div class="alert alert-info" id="loading" style="display: none;" role="alert">
                                    صورة شخصية :
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div id="message">

                            </div>
                        </div>
                        <!--end image-->
                        <!--end personal-->
    <hr>


                        <div class="mt-2 mx-auto text-success fs-2 text-decoration-dashed fw-normal"> </div>


                        <div class="fs-4 text-success" >    بيانات المشروع  : </div>
                        <hr style="width: 11% ; margin-right: 0%">
                        <!---->
                        <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">اسم المشروع  :</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control border-success">
                                </div>
                            </div>
                            <!---->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4"> مكان المشروع  :</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control border-success">
                                </div>
                            </div>
                            <!---->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4"> الشريحة المستهدفة  :</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric border-success">
                                        <option>15-->25</option>
                                        <option>25-->45</option>
                                        <option>45-->65</option>
                                        <option>أكبر من65</option>
                                        <option> عامة </option>
                                    </select>
                                </div>
                            </div>
                            <!----------->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4"> رأس المال   :</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control border-success">
                                </div>
                            </div>
                        <!---->
                            <div class="form-group row mb-4 shadow-textarea  ">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 fs-4">ملخص المشروع :</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="form-control z-depth-1  border-success" rows="3" placeholder="  اكتب محتوى المشروع والهدف منه "></textarea>
                                </div>
                            </div>

                        <!---->
                            <div class="form-group row mb-4 mt-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7" style="margin-right: 84%;margin-bottom: 2%">
                                    <button type="button" class="btn btn-outline-success fs-4">إرسال</button>

                                </div>
                            </div>

            </div>
        </div>

</section>



</body>
</html>
