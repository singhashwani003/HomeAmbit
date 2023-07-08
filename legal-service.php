 <?php include('header.php'); ?>

  <!-- section service area start -->

 <section class="p50 bg-dark bg-cover bg-fixed servicebg height-full" data-aos="fade-up" data-aos-delay="200" style="height:500px"> 
                <div class="container">
                        <div class="row no-mx fullwidth pt-5"> 
                    <!-- <div class="bg-parallax skrollr" data-anchor-target="#home" data-0="transform:translate3d(0, 0px, 0px);" data-900="transform:translate3d(0px, 150px, 0px);" data-background="https://www.estartindia.com/cms-estart/images/product_image/service-img.jpeg"></div> --> <!-- <div class="container" data-0="opacity:1; transform:translateY(0px);" data-700="opacity:0; transform:translateY(230px);"> --> 
                            <div class="col-lg-12 pull-left"> 
                                <div class="col-lg-7 pull-left">
                                    <div class="t-center white">
                                            <ol class="breadcrumb">
                                            <li class="breadcrumb-item white-hover gray2 slow">
                                                <a href="#">Home</a>
                                            </li> 
                                            <li class="breadcrumb-item white-hover gray2 c-default">Property Registration <!-- <a onclick="newCheck();">Testing</a> --> </li> 
                                            </ol> 
                                            <br> 
                                            <h1 class="service-heading cinzel">Property Registration</h1> 
                                            <br> 
                                            <h4 class="price">@ <i class="fa fa-inr"></i> 19,999/-</h4> 
                                            <br>
                                            <h3 class="white mini-mt"><!-- Get your company registered easily with us! --></h3>
                                        <!-- <br> --> <div class="title-strips-over"></div> 
                                        <div> <a href="#" onclick="return addToCart('179');" class="stay lg-btn bg-colored white qdr-hover radius-lg">
                                            <span class="qdr-details">
                                                <span class="qdr-details">Buy Now</span></span></a> 
                                                <a href="#sticky" class="stay sm-btn border-btn border-gray1 white-hover qdr-hover radius-lg border-dashed border-colored-hover knowmore">
                                                    <span class="qdr-details"><span class="qdr-details text-light">Know More</span></span></a>
                                            </div> 
                                    </div> 
                                </div> 
                                <div class="col-md-5 col-12 pull-left mt3 px1"> <!-- <form class="search-form-experts" action="https://www.estartindia.com/Insert_con/insertLead" method="post"> -->
                                        <form class="search-form-experts" name="insertLead" method="post">
                                            <input type="hidden" name="service_id" value="83"> 
                                            <input type="hidden" name="type" value="1"> 
                                            <div class="form-group col-lg-6 pull-left pe-3"> 
                                                <input class="form-control" type="text" placeholder="Name" name="name" id="name"> 
                                                <span class="error" id="name_msg"></span> 
                                            </div>
                                            <div class="form-group col-lg-6 pull-left pe-3"> 
                                                <input class="form-control" type="text" placeholder="Email ID" name="email" id="email">
                                                <span class="error" id="email_msg"></span>
                                            </div>
                                            <div class="form-group col-lg-6 pull-left pe-3"> 
                                                <input class="form-control" type="text" placeholder="Phone No." name="phone" id="phone">
                                                <span class="error" id="phone_msg"></span> <br> <p>Or <b>Talk To Our Experts</b><br> <u>Free Consultaion</u></p> 
                                            </div>
                                            <div class="form-group col-lg-6 pull-left pe-3"> 
                                                <textarea placeholder="How can we help you" rows="4" class="form-control" name="cmnt" id="cmnt"></textarea> 
                                                <span class="error" id="cmnt_msg"></span>
                                            </div>
                                            <div class="form-group col-lg-12 pull-left t-center"> <!-- <input type="submit" value="Start Now" onclick="return hell();"> --> 
                                                <button class="btn btn-primary" type="submit" onclick="return serviceLeadValidation();">Start Now <i class="fa fa-angle-right"></i></button>
                                            </div> 
                                                 <script type="text/javascript"> </script> 
                                        </form>
                                         <div class="col-lg-12 pull-left featureform"> 
                                                    <div class="col-lg-4 col-4 pull-left" style="font-size: 22px;"> 
                                                        <i class="fa fa-briefcase"></i>15000+ <br>Business Served 
                                                    </div>
                                                    <div class="col-lg-4 col-4 pull-left" style="font-size: 22px;">
                                                        <i class="fa fa-star" style="color: gold;"></i> 4.9/5 <br>Google Rating
                                                    </div> 
                                                    <div class="col-lg-4 col-4 pull-left" style="font-size: 22px;">
                                                         <i class="fa fa-smile-o "></i> 10,000+<br> Happy Clients
                                                    </div>
                                         </div> 
                                    </div>
                                </div> 
                            </div>
                        </div> 
                                                     <!-- End Container --> 
                </section>
                <div id="main-content" class="site-main clearfix">
                    <div id="content-wrap" class="container">
                            <div class="site-content clearfix">
                                <div id="inner-content" class="inner-content-wrap">
                                    <div class="row">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40" style="height:80px"></div>
                                        <div id="sidebar" class="col-xl-4 col-lg-4 col-sm-12 col-md-12">
                                            <div class="wprt-spacer" data-mobi="40" data-smobi="40" style="height:undefinedpx"></div>
                                            <div id="inner-sidebar" class="inner-content-wrap">
                                                <div class="widget widget_nav_menu">
                                                    <div class="menu-service-menu-container">
                                                        <ul id="menu-service-menu" class="menu mt-2">
                                                            <li class="menu-item "><a href="property-sourcing.html">Property Sourcing</a></li>
                                                            <li class="menu-item "><a href="property-verification.html">Property Verification</a></li>
                                                            <li class="menu-item "><a href="property-valuation.html">Property Valuation</a></li>
                                                            <li class="menu-item current_page_item"><a href="property-documentation.html">Property Documentation</a></li>
                                                            <li class="menu-item"><a href="property-registration-services.html">Property Registration</a></li>
                                                            <li class="menu-item"><a href="rental-management.html">Rental Management</a></li>
                                                            <li class="menu-item"><a href="property-maintenance.html">Property Maintenance </a></li>
                                                            <li class="menu-item"><a href="property-sales.html">Property Sales </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-sm-12 col-md-12 ms-3 mt3 m px1">
                                            <h3 class="line-height-normal margin-bottom-10 Document">Property Documentation</h3>
                                            <div class="wprt-lines style-1 custom-3">
                                                <div class="line-1"></div>
                                                <div class="line-2"></div>
                                            </div>
                                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25" style="height:25px"></div>
                                            <p style="margin: 0 0 20px;text-align: justify;"> Ashia Estates legal team prepares various kinds of deeds for the conveyance of title or confirmation of title to the property or for lease/ rent/mortgage of property like Sale Deed, Sale Agreement, Partition Deed, Gift Deed, Release Deed, Relinquishment Deed, Mortgage Deed, Lease Deed, Will, etc. Apart from the documents relating to conveyance, we also undertake drafting of agreements as per the client's requirements and in accordance with the existing laws. Our clients experience prompt, quality and accurate end-to-end documentation and drafting services for registering of property from initial consultation, analysis, to final report. We handle complex property issues that involve legal statutes and parties from different jurisdictions.</p>
                                            <p style="margin: 0 0 20px;text-align: justify;"> Ashia Estates is Bangalore’s leading property consultant firm with vast knowledge of the real estate industry for a hassle-free documentation service. You can leverage from our industry know-how and technicalities involved in property registration, home loans, property taxation, property litigation, and asset management. </p>
                                            <p style="margin: 0 0 20px;text-align: justify;"> The tailor-made solution with strict quality standards makes our services a delightful experience to our clients. </p>
                                            <p style="margin: 0 0 20px;text-align: justify;">Create property documents such as sale agreement, sale deed, gift deeds, wills, rental and lease agreement with utmost ease. No more hassles of managing your property. </p>
                                            <p style="margin: 0 0 20px;text-align: justify;"> Our team of property lawyers has in-depth knowledge of real estate legislation such as Transfer of Property Act, Code of Civil Procedure, Indian Contract Act, Limitation Act, Stamp Act, and Specific Relief Act.</p>
                                            <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                                        </div>
                                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- request cote area start -->
                    <div class="container-fluid py-5" style="background-color: #db0707;">
                        <div class="row d-flex justify-content-around align-items-center">
                            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <h3 class="text-light fw-bold text-center" style="font-family: Montserrat, sans-serif;font-size: 20px;text-transform: uppercase;">Need help your new House Construction requirement</h3>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center align-items-center">
                                <button type="button" class="request">Request Quote</button>
                            </div>
                        </div>
                    </div>
                    <!-- requestcote area end -->
    <!-- section service area start -->
    <!-- <section class="simplest-pref pb-5">
        <div class="container-fluid px-3 mt-5 pt-3">
            <div class="row">
                <div class="col-sm-12">
                    <enfold-animate name="fadeRight" effect="log">
                        <div id="examples">
                            <div class="example">
                                <h3 class="hover hover-1" data-aos="fade-right"  data-aos-easing="ease-in-out">What Makes Us The Preferred Choice</h3>
                            </div>
                        </div>
                    </enfold-animate>

                    <p class="container px-5 text-center mt-3" style="font-size: 20px;font-family: 'Verdana', sans-serif;">Preparation of pleadings, memo of appeal, paper book including printing and translation of documents in legal proceedings; Drafting of legal documents, special leave petition etc.</p>
                </div>
            </div>
            <div class="container-fluid py-5 px-5">
                <div class="row d-flex justify-content-center align-items-center">
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/id-card.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Owner details for rental agreement</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/key.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Key received acknowledgment</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/document.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Tenant Info for FMS</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/web-analysis.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bold">Interior Quotation</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/hand.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Cash box expense</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/digital-identity.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Channel partner lead registration</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/apartment.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Flat inspection in use</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/home.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Rental renwal application form</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/database.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Homeambit rental services offer</h5>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6 col-xl-3 col-lg-3 mt-4">
                        <div class="card card-pref p-3" style="height:300px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="img-pref">
                                    <img class="p-4" src="images/invoice.png" style="width:100%; height:auto; border: 4px solid #3E4041; border-radius: 10px;">
                                </div>
                                <h5 class="prefrence1 mt-3 text-danger fw-bolder">Rental application form</h5>
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- section service end -->

    <?php include('footer.php'); ?>

    <!-- our js data -->
       <script type="text/javascript">
        function modify(){
         document.getElementById("click").style.backgroundColor="red"; 
        }
       </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    AOS.init({
        offset: 200,
        duration: 1000,
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