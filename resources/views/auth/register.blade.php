<!DOCTYPE html>
<!-- saved from url=(0035)https://egov-initiatives.ict.go.ke/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="https://egov-initiatives.ict.go.ke/adminbackend/assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="{{asset('User Login ICTA_files/simplebar.css')}}" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href= "{{asset('User Login ICTA_files/metisMenu.min.css')}} " rel="stylesheet">
    <!-- loader-->
    <link href="{{asset('User Login ICTA_files/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('User Login ICTA_files/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('User Login ICTA_files/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/app.css')}}" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/icons.css')}}" rel="stylesheet">
    <title>User Login ICTA </title>
</head>

<body class="bg-login  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        {{-- <img src="./User Login ICTA_files/logo-img.png" width="100%" alt=""> --}}
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Event Registration System</h3>



                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @elseif(session('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{{ session('success') }}</li>
                                    </ul>
                                </div>
                            @endif
                            


                                <div class="form-body">
                                 <form class="row g-3" method="POST" action="{{route ('authregister')}}">
                                    @csrf
                                        {{-- <input type="hidden" name="_token" value="49aDmddPQo5Nci2cCsx3YVRMkAvzUEkNtax14yfE"> --}}
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" >
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="confirm_password" class="form-control border-end-0" id="password" placeholder="Confirm Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                            </div>
                                        </div> 
                                     
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn  btn-primary" ><i class="bx bxs-lock-open"></i>Sign up</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="./User Login ICTA_files/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="./User Login ICTA_files/jquery.min.js"></script>
<script src="./User Login ICTA_files/simplebar.min.js"></script>
<script src="./User Login ICTA_files/metisMenu.min.js"></script>
<script src="./User Login ICTA_files/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="./User Login ICTA_files/app.js"></script>


</body></html>