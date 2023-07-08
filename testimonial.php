 <?php include('header.php'); ?>

 <!-- partner section start -->
    <section class="partners testimonials mt-0 pt-3" style="background-color: #FCE5E5;">
        <!-- <enfold-animate name="slideUp"> -->
        <div class="container-fluid sider mt-0 pt-5">
            <div class="row">
                <div class="col-sm-12">
                    <enfold-animate name="fadeRight" effect="log">
                        <div id="examples">
                            <div class="example text-start">
                                <h3 class="hover hover-1 text-start" data-aos="fade-right"  data-aos-easing="ease-in-out">Testimonials</h3>
                            </div>
                        </div>
                    </enfold-animate>

                    <p class="text-start testimons"> A testimonial statement is one that looks like the kind of testimony that would be offered at trial in aid of prosecution: it identifies the defendant, accuses him of wrongdoing, describes the circumstances of the crime, establishes elements of the offense, and is made with some degree of formality after the event is ...</p>
                </div>
            </div>
            <div class="container-fluid py-5">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12 col-md-6 col-xl-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item aos-init aos-animate pt-0" data-aos="fade-up" data-aos-delay="100">
                            <p class="pt-0">
                                <i class="fa fa-quote-left me-2 " aria-hidden="true" style="color: #f54646!important; font-size: 24px!important;"></i>
                              My wife and I were looking for an efficient and creative team to design the interiors of our home. Since we lacked knowledge in this domain, we wanted someone who would guide us every step of the way. While browsing through options on the internet,...
                              <i class="fa fa-quote-right ms-2" aria-hidden="true" style="color: #f54646!important; font-size: 24px!important;"></i>
                            </p>
                            <img src="images/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Rahul Gupta</h3>
                            <h4>Interior Design Bangalore</h4>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-4 mb-less" data-aos="fade-up" data-aos-delay="300">
                            <div class="testimonial-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <p>
                                    <i class="fa fa-quote-left me-2" aria-hidden="true" style="color: #f54646!important; font-size: 24px!important;"></i>
                                  After deciding to move to abroad, I was faced with a daunting task of finding a suitable tenant for my property in North Bangalore. I was not too sure how to go about the whole process because at that time I had too much on...
                                  <i class="fa fa-quote-right ms-2" aria-hidden="true" style="color: #f54646!important; font-size: 24px!important;"></i>
                                </p>
                                <img src="images/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Vinod Pandey</h3>
                                <h4>Home Renting and Tenant Management <br> Chicago</h4>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-4 mb-less" data-aos="fade-up" data-aos-delay="500">
                                <div class="testimonial-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                    <p>
                                        <i class="fa fa-quote-left me-2" aria-hidden="true" style="color: #f54646!important; font-size: 24px!important;"></i>
                                      Buying a house in Bangalore is definitely no mean feat. With too many choices on the internet, I did begin to feel a bit lost. Luckily, a friend of mine mentioned to me about Home Ambit, and I’m so glad I found them. Niraj and...
                                      <i class="fa fa-quote-right ms-2" aria-hidden="true" style="color: #f54646!important; font-size: 24px!important;"></i>
                                    </p>
                                    <img src="images/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Pushapa Devi</h3>
                                    <h4>End-to-End Home Solutions <br> Bangalore</h4>
                                  </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </enfold-animate> -->
    </section>
    <!-- partner section end -->


<?php include('footer.php'); ?>

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