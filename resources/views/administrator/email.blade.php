@extends('sidebar.sidebar6')
@Section('cont6')

<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>منصة التبرع و العمل الخيري</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">

    <link rel="stylesheet" href="fonts/css/fontawesome.min.css">
    <link rel="stylesheet" href="fonts/webfonts">
<!-- General CSS Files -->
        <!-- Template CSS -->
         {{-- <link rel="stylesheet" href="css/style3.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" /> --}}


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>

<body class="container-fluid d-flex">



    <nav style="margin-top: 5%">
        <div class="nav nav-tabs " id="nav-tab" role="tablist">
            <button class="nav-link fs-4 active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">البريد الوارد <span class="fas fa-envelope-open "></span></button>
            <button class="nav-link fs-4" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">البريد المرسًل <span class="fas fa-paper-plane"></span></button>
            <button class="nav-link fs-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">إنشاء<span class="fas fa-pencil-alt"></span>
            </button>
        </div>

    </nav>

<div class="tab-content ms-auto" id="nav-tabContent ">
    <!-- inbox-->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <!--maincontsenr-->
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                                        <div>
                                            <div class="row p-4 no-gutters align-items-center ">
                                                <div class="col-sm-12 col-md-6">
                                                    <h3 class="font-light mb-0"><i class="ti-email "></i>350  رسالة غير مقروءة</h3>
                                                </div>
                                                <div class="col-sm-12 col-md-6 d-flex justify-content-end">
                                                    <ul class="list-inline dl mb-0 float-right text-end float-md-right">
                                                        <li class="list-inline-item text-info mr-5">
                                                            <a>
                                                                <button class="btn btn-circle btn-success text-white mr-5 " data-bs-target="#nav-contact" type="button"  aria-controls="nav-contact">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                                <span class="  text-dark">إنشاء</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item text-danger">
                                                            <a>
                                                                <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                                <span class=" text-dark">حذف</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Mail list-->
                                            <div class="table-responsive">
                                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                                    <tbody>
                                                        <!-- row -->
                                                        <tr>
                                                            <!-- label -->
                                                            <td class="pl-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="cst1" />
                                                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <!-- star -->
                                                            <td><i class="fa fa-star text-warning"></i></td>
                                                            <td>
                                                                <span class="badge fs-6 rounded-pill bg-danger text-white font-normal  mr-2">ZZ</span>

                                                            </td>
                                                            <!-- Message -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">
                                                                    <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                                                </a>
                                                            </td>
                                                            <!-- Attachment -->
                                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                                            <!-- Time -->
                                                            <td class="text-muted">May 13</td>
                                                        </tr>
                                                        <!-- row -->
                                                        <tr>
                                                            <!-- label -->
                                                            <td class="pl-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="cst2" />
                                                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <!-- star -->
                                                            <td><i class="fa fa-star"></i></td>
                                                            <!-- User -->
                                                            <td>
                                                                <span class="badge fs-6 rounded-pill bg-info text-white font-medium  mr-2">YY</span>

                                                            </td>
                                                            <!-- Message -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">
                                                                    <span class="text-dark">Inquiry about license for Admin </span>
                                                                </a>
                                                            </td>
                                                            <!-- Attachment -->
                                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                                            <!-- Time -->
                                                            <td class="text-muted">May 13</td>
                                                        </tr>
                                                        <!-- row -->
                                                        <tr>
                                                            <!-- label -->
                                                            <td class="pl-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="cst3" />
                                                                    <label class="custom-control-label" for="cst3">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <!-- star -->
                                                            <td><i class="fa fa-star text-warning"></i></td>
                                                            <!-- User -->
                                                            <td class="user-name max-texts">
                                                                <span class="badge fs-6 rounded-pill text-white font-medium bg-warning mr-2">XX</span>

                                                            </td>
                                                            <!-- Message -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">
                                                                    <span class="font-light text-dark">Bitbucket (commit Pushed) by Ritesh</span>
                                                                </a>
                                                            </td>

                                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                                            <!-- Time -->
                                                            <td class="text-muted font-light">Mar 09</td>
                                                        {{-- </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- outbox-->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <!-- Main Content -->

                {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" /> --}}

                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="card ">

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                                        <div>
                                            <div class="row p-4 no-gutters align-items-center ">
                                                <div class="col-sm-12 col-md-6">
                                                    <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>3  رسالة غير مقروءة</h3>
                                                </div>
                                                <div class="col-sm-12 col-md-6 d-flex justify-content-end">
                                                    <ul class="list-inline dl mb-0 float-right text-end float-md-right">
                                                        <li class="list-inline-item text-info mr-5">
                                                            <a>
                                                                <button class="btn btn-circle btn-success text-white mr-5 " data-bs-target="#nav-contact" type="button"  aria-controls="nav-contact">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                                <span class="  text-dark">إنشاء</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item text-danger">
                                                            <a>
                                                                <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                                <span class=" text-dark">حذف</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Mail list-->
                                            <div class="table-responsive">
                                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                                    <tbody>
                                                        <!-- row -->
                                                        <tr>
                                                            <!-- label -->
                                                            <td class="pl-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="cst1" />
                                                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <!-- star -->
                                                            <td><i class="fa fa-star text-warning"></i></td>
                                                            <td>
                                                                <span class="badge fs-6 rounded-pill text-white font-medium bg-warning mr-2">ZZ</span>
                                                            </td>
                                                            <!-- Message -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">
                                                                    <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                                                </a>
                                                            </td>
                                                            <!-- Attachment -->
                                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                                            <!-- Time -->
                                                            <td class="text-muted">May 13</td>
                                                        </tr>
                                                        <!-- row -->
                                                        <tr>
                                                            <!-- label -->
                                                            <td class="pl-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="cst2" />
                                                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <!-- star -->
                                                            <td><i class="fa fa-star"></i></td>
                                                            <!-- User -->
                                                            <td>
                                                                <span class="badge fs-6 rounded-pill text-white font-medium bg-info mr-2">YY</span>
                                                            </td>
                                                            <!-- Message -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">
                                                                    <span class="text-dark">Inquiry about license for Admin </span>
                                                                </a>
                                                            </td>
                                                            <!-- Attachment -->
                                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                                            <!-- Time -->
                                                            <td class="text-muted">May 13</td>
                                                        </tr>
                                                        <!-- row -->
                                                        <tr>
                                                            <!-- label -->
                                                            <td class="pl-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="cst3" />
                                                                    <label class="custom-control-label" for="cst3">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <!-- star -->
                                                            <td><i class="fa fa-star text-warning"></i></td>
                                                            <!-- User -->
                                                            <td class="user-name max-texts">
                                                                <span class="badge fs-6 rounded-pill text-white font-medium bg-danger mr-2"> XX</span>
                                                            </td>
                                                            <!-- Message -->
                                                            <td>
                                                                <a class="link" href="javascript: void(0)">
                                                                    <span class="font-light text-dark">Bitbucket (commit Pushed) by Ritesh</span>
                                                                </a>
                                                            </td>
                                                            <!-- Attachment -->
                                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                                            <!-- Time -->
                                                            <td class="text-muted font-light">May 13</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                                        <div class="row p-3 text-dark">
                                            <div class="col-md-6">
                                                <h3 class="font-light">Lets check profile</h3>
                                                <h4 class="font-light">you can use it with the small code</h4>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                                        <div class="row p-3 text-dark">
                                            <div class="col-md-6">
                                                <h3 class="font-light">Come on you have a lot message</h3>
                                                <h4 class="font-light">you can use it with the small code</h4>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                                        <div class="row p-3 text-dark">
                                            <div class="col-md-6">
                                                <h3 class="font-light">Just do Settings</h3>
                                                <h4 class="font-light">you can use it with the small code</h4>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!--compose-->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

                <div class="main-content align-top sticky-top ">
                    <section class="section" >
                        <div class="section-body mt-n1" >
                            <div class="row">
                                <div class="container  "style="width:1000px">
                                    <div class="col-md-8 mr-3" >

                                    <div class="email-app">
                                    <nav>
                                        <a href="#" class="btn btn-danger btn-block">New Email</a>
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge text-bg-danger">4</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-star"></i> Stared</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-rocket"></i> Sent</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-trash"></i> Trash</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-bookmark"></i> Important</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge text-bg-danger">4</span></a>
                                        </li>
                                        </ul>
                                    </nav>
                                    <main>
                                        <p><a class="link-opacity-75" href="https://gmail.google.com">gmail</a></p>
                                        <form>
                                        <div class="form-row mb-3">
                                            <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
                                            <div class="col-10 col-sm-11">
                                            <input type="email" class="form-control" id="to" placeholder="Type email">
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <label for="cc" class="col-2 col-sm-1 col-form-label">CC:</label>
                                            <div class="col-10 col-sm-11">
                                                <input type="email" class="form-control" id="cc" placeholder="Type email">
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <label for="bcc" class="col-2 col-sm-1 col-form-label">BCC:</label>
                                            <div class="col-10 col-sm-11">
                                                <input type="email" class="form-control" id="bcc" placeholder="Type email">
                                            </div>
                                                        </div>
                                    </form>
                                <div class="row">
                                    <div class="col-sm-11 ml-auto">
                                <div class="toolbar" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-bold"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-italic"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-underline"></span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-align-left"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-align-right"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-align-center"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-align-justify"></span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-indent"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-outdent"></span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-list-ul"></span>
                                        </button>
                                        <button type="button" class="btn btn-light">
                                            <span class="fa fa-list-ol"></span>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-paperclip"></span>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                            <span class="fa fa-tags"></span>
                                            <span class="caret"></span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
                                            <a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
                                            <a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
                                            <a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Send</button>
                                    <button type="submit" class="btn btn-light">Draft</button>
                                    <button type="submit" class="btn btn-danger">Discard</button>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                </div>
            </div>
            </div>




</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4 " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js " integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin=" anonymous "></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js " crossorigin="anonymous "></script>
    <script src="js/bootstrap.min.js ">
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/app2.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="js/scripts2.js"></script>
    <!-- Custom JS File -->
    <script src="js/custom2.js"></script>

</body>

</html>
@endsection
