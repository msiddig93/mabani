<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>تسجيل الدخول</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}" >
  <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}" >
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" >
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" >
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h3 class="mb-3 text-center alert alert-primary">تسجيل الدخول</h3>
              
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf

                <div class="form-group">
                  <input type="email" name="email" dir="auto" class="form-control  @error('email') is-invalid @enderror form-control-lg" id="exampleInputEmail1" placeholder="البريد الالكتروني" autocomplete="current-password">
                   @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                  <input type="password" placeholder="كلمة المرور" dir="auto" class="form-control form-control-lg" id="exampleInputPassword1" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>

                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"type="submit" >دخول</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      تذكر بياناتي
                    </label>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
