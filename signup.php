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
  <link rel="stylesheet" href="css/signup.css">

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
                                    <a href=".."><img src="images/logo.jpg" style="width:100%; height:auto;"></a>
                                </div>
                                <h2 class="mt-4 fw-weight-medium text-danger about px-3">We provide the most accurate, transparent & detailed property management services.
                                </h2>
                                <p class="op-5 fs-4 mt-4 achieve px-2" style="color:#000!important;">
                                    HOMEAMBIT.COM® is a property management and maintenance company, powered by an entrepreneurial spirit and designed to serve house owners and help them to manage their property with no hassle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8 d-flex align-items-center justify-content-center" style="background-color: #2d2d2e;">
                    <div class="row justify-content-center w-100 mt-4 mt-lg-0">
                        <div class="col-lg-6 col-xl-5 col-md-7 col-sm-8">
                            <div class="card" id="loginform" style="background-color: #2d2d2e;">
                                <div class="card-body">
                                    <h1 class='sign mb-0 mt-3'>Sign Up to HomeAmbit</h1>
                                          <form action="/action_page.php" class="form-horizontal needs-validation more-pad">
                                            <h4 class="text-light mt-4 mb-0 pb-0">Registration as Guest</h4>
                                              <div class="form-group mt-2">
                                                  <input type="text" class="form-control" id="nametext" aria-describedby="name" required placeholder="Name">
                                              </div>
                                            <div class="form-group mt-4">
                                                <input type="email" class="form-control" id="nametext" aria-describedby="name" required placeholder="Enter E-mail">
                                            </div>
                                            <div class="form-group mt-4">
                                              <input type="tel" class="form-control" id="nametext" aria-describedby="name" required placeholder="Mobile Number">
                                          </div>
                                          <div class="form-group my-4">
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect" required>
                                                <option selected>City</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-start">
                                        <div class="form-check ps-0 form-check-inline">
                                          <div class="custom-control custom-checkbox">
                                            <label class="custom-control-label text-danger me-2" for="customCheck1">Buy</label>
                                              <input type="checkbox" class="custom-control-input" required id="customCheck1">
                                          </div>
                                      </div>
                                      <div class="form-check ps-0 form-check-inline ms-2">
                                          <div class="custom-control custom-checkbox">
                                            <label class="custom-control-label text-danger me-2" for="customCheck2">Sell</label>
                                              <input type="checkbox" class="custom-control-input" required id="customCheck2">
                                          </div>
                                      </div>
                                      <div class="form-check ps-0 form-check-inline ms-2">
                                        <div class="custom-control custom-checkbox">
                                          <label class="custom-control-label text-danger me-2" for="customCheck2">Rent</label>
                                            <input type="checkbox" class="custom-control-input" required id="customCheck2">
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 form-check-inline ms-2">
                                      <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label text-danger me-2" for="customCheck2">Services</label>
                                          <input type="checkbox" class="custom-control-input" required id="customCheck2">
                                      </div>
                                  </div>
                                      </div>
                                        <div class="form-group mt-4">
                                            <input type="Password" class="form-control" id="passtext" required placeholder="Password">
                                        </div>
                                        <div class="form-group mt-3">
                                          <input type="Password" class="form-control" id="passtext" required placeholder="Re-Confirm Password">
                                      </div>
                                    <div class="form-check ps-0 form-check-inline mt-3">
                                      <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input me-2" required id="customCheck1">
                                          <label class="custom-control-label text-light me-2" for="customCheck1">I Agree to the <a href="#" class="ms-1">Terms & Conditions</a></label>
                                      </div>
                                  </div>
                                                <div class="d-flex align-items-stretch mt-3 pb-3">
                                                    <button  class="btn btn-danger d-block w-100">Sign Up</button>
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