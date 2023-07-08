<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.cdnfonts.com/css/century-gothic" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/verdana" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- external css -->
  <link rel="stylesheet" href="css//signup.css">

  <title>HomeAmbit - My Property Manager</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
    </head>
    <body>
      <!-- Navbar Area Started -->
      <div class="main-wrapper">
        <div class="row auth-wrapper gx-0">
                <div class="col-lg-4 col-xl-4 auth-box-2 on-sidebar fixed" style="background-color: #fcf4f4;">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-7 col-lg-12 col-xl-11">
                                <div>
                                    <a href="index.php"><img src="images/logo.jpg" style="width:100%; height:auto;"></a>
                                </div>
                                <h2 class="mt-4 fw-weight-medium about px-3">We provide the most accurate, transparent & detailed property management services.
                                </h2>
                                <h2 class="mt-4 about px-2" style="font-size: 18px!important;">
                                    HOMEAMBIT.COM® is a property management and maintenance company, powered by an entrepreneurial spirit and designed to serve house owners and help them to manage their property with no hassle.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8 d-flex align-items-center justify-content-center" style="background-color: #f54646;">
                    <div class="row justify-content-center w-100 mt-4 mt-lg-0">
                        <div class="col-lg-6 col-xl-5 col-md-7 col-sm-8">
                            <div class="card" id="loginform">
                                <div class="card-body">
                                    <h2 class='text-center sign mb-0 mt-3'>Login to HomeAmbit</h2>
                                    <form action="/action_page.php" class="form-horizontal px-3 needs-validation more-pad">
                                        <div class="input-group mb-4 mt-5">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" required placeholder="Username"  aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-4">
                                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                          <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                      </div>
                                          <div class="d-flex align-items-center mb-3 mt-5">
                                              <div class="form-check">
                                                  <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value=""
                                                    id="r-me1"
                                                    required
                                                  />
                                                  <label class="form-check-label" for="r-me1">Remember me</label>
                                                  <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                  </div>
                                              </div>
                                              <div class="ms-auto">
                                                <a href="#" id="to-recover" class="fw-bold me-2">Reset?</a>
                                              </div>
                                          </div>
                                          <div class="d-flex align-items-stretch mt-2 pb-3">
                                              <button  class="btn btn-danger d-block w-100">login</button>
                                            </div>
                                        </form>
                                </div>
                        </div>   
                      </div>
            </div>    
                </div>
        </div>
  </div>
       
    
    <!-- our js data -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    AOS.init({
        offset: 200,
        duration: 2000,
    });
  </script>
  <script type="text/javascript">
    $('.slider').slick({
  dots: true,
  infinite:true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
    </body>
</html>