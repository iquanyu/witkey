<!DOCTYPE html>
<!-- saved from url=(0052)http://v.bootstrapmb.com/2020/7/c6d6w8350/login.html -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <title>Miver - LMS &amp; Freelance Services Marketplace for Businesses HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('images/fav.svg')}}">
    <!-- ÑùÊ½ -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Login -->
    <div class="bg-white" id="app">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-lg-4 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <a href="{{route('index')}}"><img src="{{asset('images/fav.svg')}}" alt=""></a>
                            <h5 class="font-weight-bold mt-3">Welcome Back</h5>
                            <p class="text-muted">Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
                        </div>
                        <form action="{{route('index')}}">
                            <div class="form-group"><label class="mb-1">Email or Phone</label>
                                <div class="position-relative icon-form-control"><i class="mdi mdi-account position-absolute"></i><input type="email" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="mb-1">Password</label>
                                <div class="position-relative icon-form-control"><i class="mdi mdi-key-variant position-absolute"></i><input type="password" class="form-control"></div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3"><input type="checkbox" class="custom-control-input" id="customCheck1"><label class="custom-control-label" for="customCheck1">Remember password</label></div><button class="btn btn-success btn-block text-uppercase" type="submit">Sign in </button>
                            <div
                                class="text-center mt-3 border-bottom pb-3">
                                <p class="small text-muted">Or login with</p>
                                <div class="row">
                                    <div class="col-6"><button type="button" class="btn btn-outline-instagram btn-block"><i class="mdi mdi-instagram"></i>Instagram</button></div>
                                    <div class="col-6"><button type="button" class="btn btn-outline-facebook btn-block"><i class="mdi mdi-facebook"></i>Facebook</button></div>
                                </div>
                    </div>
                    <div class="py-3 d-flex align-item-center"><a href="http://v.bootstrapmb.com/2020/7/c6d6w8350/forgot-password.html">Forgot password?</a><span class="ml-auto">New to Miver? <a href="http://v.bootstrapmb.com/2020/7/c6d6w8350/register.html">Join now</a></span></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Login -->
	<!-- JS ½Å±¾ -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>